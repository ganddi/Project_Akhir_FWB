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
                
                <button class="btn btn-danger mb-3 mx-5" onclick="window.location.href='/lihatItem'">Kembali</button>
            </div>

        </div>

    </body>
@endsection
