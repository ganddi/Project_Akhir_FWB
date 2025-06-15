@extends('admin.layout')
@section('konten')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Item</title>
</head>

<body>
    <div class="content-wrapper">
        <div class="container card shadow p-4">
            <h2 class="mx-10 text-titlecase">Tambah Item</h2>
            <hr>

            {{-- Tampilkan semua error di atas form --}}
            @if ($errors->any())
                <div class="alert alert-danger mx-5">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('simpanItem') }}" method="post">
                @csrf

                <div class="mb-3 mx-5">
                    <label for="name" class="form-label">Nama Item</label>
                    <input type="text" class="form-control form-control-user" name="name"
                        value="{{ old('name') }}" placeholder="Nama">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3 mx-5">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control form-control-user" name="description"
                        value="{{ old('description') }}" placeholder="Deskripsi">
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3 mx-5">
                    <label for="price_per_day" class="form-label">Harga per Hari</label>
                    <input type="text" class="form-control form-control-user" name="price_per_day"
                        value="{{ old('price_per_day') }}" placeholder="Harga">
                    @error('price_per_day')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3 mx-5">
                    <label for="image" class="form-label">Image URL</label>
                    <input type="text" class="form-control form-control-user" name="image_url"
                        value="{{ old('image_url') }}" placeholder="https://">
                    @error('image_url')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button class="mb-3 mx-5 btn btn-success" type="submit">Simpan</button>
            </form>
            <button class="btn btn-danger mb-3 mx-5" onclick="window.location.href='/lihatItem'">Kembali</button>
        </div>
    </div>
</body>
@endsection
