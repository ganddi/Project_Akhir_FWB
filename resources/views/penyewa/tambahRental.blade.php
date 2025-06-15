<div class="content-wrapper">
    <h2 class="mx-10 mb-10 text-titlecase text-center">SEWA ALAT</h2>
    <div class="container card shadow p-4">
        <form action="{{ route('submitRental') }}" method="post">
            @csrf
            <div class="mb-3 mx-5">
                <label for="name" class="form-label">Pilih item</label>
                    @foreach ($lihat as $item)
                        <div class="form-check">
                            <input name="item_id[]" class="form-check-input" type="checkbox" value="{{ $item->id }}" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{ $item->name }}
                            </label>
                        </div>
                    @endforeach
            </div>

            <button class="mb-3 mx-5 btn btn-success" type="submit">Simpan</button>
        </form>
        <button class="btn btn-danger mb-3 mx-5" onclick="window.location.href='/penyewa'">Kembali</button>
    </div>

</div>
