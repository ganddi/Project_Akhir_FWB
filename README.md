<div align="center">
    <h1> MudahBerkemah(Sistem Penyewaan Peralatan Berkemah) </h1>


  <img src="https://github.com/user-attachments/assets/c6e0944d-fa74-44c4-b1b8-459465e75638" alt="Logo Unsulbar" width="200"/>


  <p><strong>Muh.Sugandi</strong><br/>D0223315</p> <br>

  <h1> FRAMEWORK WEB BASED </h1>
  <h1> 2025 </h1>

</div>
---
# MudahBerkemah - Sistem Penyewaan Peralatan Berkemah

## Deskripsi Singkat

**MudahBerkemah** adalah platform web untuk melacak penyewaan peralatan berkemah untuk satu toko. Sistem ini hanya mendukung pembayaran tunai (**cash only**), dan pembayaran dianggap bersamaan dengan pengambilan barang. Sistem ini berfungsi sebagai alat pelacakan peminjaman dan analisis bisnis untuk toko, dengan tampilan web khusus untuk pemilik toko guna melihat laporan performa barang.

## Role Pengguna

### 1. Admin

- Mengelola barang (tambah, edit, hapus).
- Mengelola data peminjaman (mengubah status, mencatat verifikasi pembayaran/pengambilan, menambahkan catatan).

### 2. Pelanggan/Penyewa

- Melihat daftar barang yang tersedia.
- Melakukan pemesanan barang.
- Melihat status peminjaman.

### 3. Owner

- Melihat laporan performa barang melalui tampilan web khusus (misalnya, jumlah penyewaan, hari sewa, dan pendapatan per periode).
- Tidak mengelola barang atau peminjaman langsung; hanya untuk monitoring dan analisis.

## Struktur Tabel Database

### 1. `users`

| Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| id | INT (PK) | ID unik pengguna |
| name | VARCHAR | Nama lengkap pengguna |
| email | VARCHAR | Email pengguna |
| password | VARCHAR | Password yang sudah di-hash |
| role | ENUM | \['admin', 'penyewa', 'owner'\] |
| created_at | TIMESTAMP | Tanggal registrasi pengguna |

### 2. `items`

| Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| id | INT (PK) | ID unik barang |
| name | VARCHAR | Nama barang |
| description | TEXT | Deskripsi barang |
| stock | INT | Jumlah stok barang |
| price_per_day | DECIMAL | Estimasi harga sewa per hari |
| image_url | VARCHAR | URL gambar barang (opsional) |
| created_at | TIMESTAMP | Tanggal barang ditambahkan |

### 3. `rentals`

| Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| id | INT (PK) | ID unik peminjaman |
| user_id | INT (FK) | ID penyewa (`users.id`) |
| total_price | DECIMAL | Estimasi total biaya sewa |
| rental_status | ENUM | \['belum_dibayar', 'dipinjam', 'dikembalikan'\] |
| start_date | DATE | Tanggal mulai sewa |
| end_date | DATE | Tanggal selesai sewa |
| created_at | TIMESTAMP | Tanggal pemesanan |

### 4. `rental_items`

| Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| id | INT (PK) | ID unik baris |
| rental_id | INT (FK) | ID peminjaman (`rentals.id`) |
| item_id | INT (FK) | ID barang (`items.id`) |
| quantity | INT | Jumlah unit barang disewa |
| price | DECIMAL | Estimasi harga sewa per barang |

### 5. `reports`

| Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| id | INT (PK) | ID unik laporan |
| item_id | INT (FK) | ID barang yang dianalisis (`items.id`) |
| period | VARCHAR | Periode pelaporan, contoh: '2025-05' |
| total_rentals | INT | Jumlah penyewaan terhadap barang tersebut |
| total_days | INT | Akumulasi hari barang disewa pada periode tersebut |
| total_income | DECIMAL | Estimasi pendapatan berdasarkan penyewaan |
| created_at | TIMESTAMP | Waktu sistem membuat laporan |

### 6. `rental_verifications`

| Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| rental_id | INT (PK, FK) | ID peminjaman (`rentals.id`) |
| verified_by | INT (FK) | ID admin yang memverifikasi (`users.id`) |
| verified_at | TIMESTAMP | Waktu verifikasi pembayaran/pengambilan |
| notes | TEXT | Catatan khusus (opsional) |

## Relasi Antar Tabel

1. **users ↔ rentals**:
   - **Jenis**: One-to-Many.
   - **Penjelasan**: Satu penyewa dapat melakukan banyak peminjaman.
   - **Kunci Relasi**: `users.id` → `rentals.user_id`.

2. **rentals ↔ rental_items**:
   - **Jenis**: One-to-Many.
   - **Penjelasan**: Satu peminjaman dapat mencakup banyak barang.
   - **Kunci Relasi**: `rentals.id` → `rental_items.rental_id`.

3. **items ↔ rental_items**:
   - **Jenis**: One-to-Many.
   - **Penjelasan**: Satu barang dapat disewa dalam banyak transaksi.
   - **Kunci Relasi**: `items.id` → `rental_items.item_id`.

4. **rentals ↔ items** (via `rental_items`):
   - **Jenis**: Many-to-Many.
   - **Penjelasan**: Satu peminjaman dapat mencakup banyak barang, dan satu barang dapat disewa dalam banyak peminjaman, dihubungkan melalui tabel `rental_items`.
   - **Kunci Relasi**: `rental_items.rental_id` dan `rental_items.item_id`.

5. **items ↔ reports**:
   - **Jenis**: One-to-Many.
   - **Penjelasan**: Satu barang dapat muncul di banyak laporan.
   - **Kunci Relasi**: `items.id` → `reports.item_id`.

6. **rentals ↔ rental_verifications**:
   - **Jenis**: One-to-One.
   - **Penjelasan**: Satu peminjaman memiliki satu entri verifikasi (mencatat admin yang memverifikasi, waktu verifikasi, dan catatan).
   - **Kunci Relasi**: `rentals.id` → `rental_verifications.rental_id`.

7. **users ↔ rental_verifications**:
   - **Jenis**: One-to-Many.
   - **Penjelasan**: Satu admin dapat memverifikasi banyak peminjaman.
   - **Kunci Relasi**: `users.id` → `rental_verifications.verified_by`.