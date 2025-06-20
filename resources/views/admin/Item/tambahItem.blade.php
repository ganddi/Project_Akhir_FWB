@extends('admin.layout')
@section('konten')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Item</title>
</head>

<body>
    <div class="content-wrapper">
        <div class="container card shadow p-4 mt-4">
            <h2 class="text-center mb-4">Tambah Item</h2>
            <hr>

            {{-- Tampilkan semua error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('simpanItem') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Item</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nama">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Deskripsi">
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price_per_day" class="form-label">Harga per Hari</label>
                    <input type="text" class="form-control" name="price_per_day" value="{{ old('price_per_day') }}" placeholder="Harga">
                    @error('price_per_day')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="image_url" class="form-label">Image URL</label>
                    <input type="text" class="form-control" name="image_url" value="{{ old('image_url') }}" placeholder="https://">
                    @error('image_url')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/lihatItem" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection
