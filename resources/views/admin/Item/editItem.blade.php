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
                <h2 class="mx-10 mb-2 text-titlecase mb-4">List Item</h2>
                <hr>
                <form method="post">
                    @csrf

                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Nama Item</label>
                        <input type="text" class="form-control form-control-user" name="name"
                            value="{{ $data->name }}" placeholder="Nama">
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control form-control-user" name="description"
                            value="{{ $data->description }}" placeholder="Deskripsi">
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Harga</label>
                        <input type="text" class="form-control form-control-user" name="price_per_day"
                            value="{{ $data->price_per_day }}" placeholder="0000">
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Image Url</label>
                        <input type="text" class="form-control form-control-user" name="image_url"
                            value="{{ $data->image_url }}" placeholder="https://">
                    </div>

                    <button class="mb-3 mx-5 btn btn-success" type="submit">Simpan</button>
                </form>
                <button class="btn btn-danger mb-3 mx-5" onclick="window.location.href='/lihatItem'">Kembali</button>
            </div>

        </div>

    </body>
@endsection
