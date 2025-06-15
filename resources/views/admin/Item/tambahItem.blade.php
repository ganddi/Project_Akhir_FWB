@extends('admin.layout')
@section('konten')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Buah</title>

    </head>

    <body>
        <div class="content-wrapper">
            <div class="container card shadow p-4">
                <h2 class="mx-10 text-titlecase ">Tambah Item</h2>
                <hr>
                <form action="{{ route('simpanItem') }}" method="post">
                    @csrf

                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Nama Item</label>
                        <input type="text" class="form-control form-control-user" name="name" placeholder="Nama">
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control form-control-user" name="description"
                            placeholder="Deskripsi">
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Nama Item</label>
                        <input type="text" class="form-control form-control-user" name="price_per_day"
                            placeholder="Harga">
                    </div>
                    <button class="mb-3 mx-5 btn btn-success" type="submit">Simpan</button>
                </form>
                <button class="btn btn-danger mb-3 mx-5" onclick="window.location.href='/lihatItem'">Kembali</button>
            </div>

        </div>

    </body>
@endsection
