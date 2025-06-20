@extends('admin.layout')

@section('konten')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Item</title>
</head>

<body>
    <div class="content-wrapper">
        <div class="container card shadow p-4">
            <h2 class="text-titlecase mb-4 mx-4">Edit Item</h2>
            <hr>

            <form method="post">
                @csrf

                <div class="mb-3 mx-4">
                    <label for="name" class="form-label">Nama Item</label>
                    <input type="text" name="name" class="form-control form-control-user"
                        value="{{ $data->name }}" placeholder="Nama">
                </div>

                <div class="mb-3 mx-4">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" name="description" class="form-control form-control-user"
                        value="{{ $data->description }}" placeholder="Deskripsi">
                </div>

                <div class="mb-3 mx-4">
                    <label for="price_per_day" class="form-label">Harga</label>
                    <input type="text" name="price_per_day" class="form-control form-control-user"
                        value="{{ $data->price_per_day }}" placeholder="0000">
                </div>

                <div class="mb-3 mx-4">
                    <label for="image_url" class="form-label">Image URL</label>
                    <input type="text" name="image_url" class="form-control form-control-user"
                        value="{{ $data->image_url }}" placeholder="https://">
                </div>

                <div class="mb-3 mx-4">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/lihatItem" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection
