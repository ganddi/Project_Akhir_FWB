<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rentals_notes', function (Blueprint $table) {
            $table->unsignedBigInteger('rental_id')->primary();
            $table->text('notes')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('rental_id')->references('id')->on('rentals')->onDelete('cascade');
        });

        DB::unprepared('
            CREATE TRIGGER before_insert_rentals_notes
            BEFORE INSERT ON rentals_notes
            FOR EACH ROW
            BEGIN
                DECLARE rental_status ENUM("belum_dibayar", "dipinjam", "dikembalikan");

                SELECT rental_status INTO rental_status FROM rentals WHERE id = NEW.rental_id;
                IF rental_status != "dikembalikan" THEN
                    SIGNAL SQLSTATE "45000"
                    SET MESSAGE_TEXT = "Catatan hanya dapat dibuat untuk peminjaman dengan status dikembalikan";
                END IF;
            END
        ');
    }

    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_rentals_notes');
        Schema::dropIfExists('rentals_notes');
    }
};