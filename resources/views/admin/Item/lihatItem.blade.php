@extends('admin.layout')
@section('konten')

    <head>
    </head>

    <body>
        <div class="content-wrapper">
            <div class="container card shadow p-4">
                <h2 class="mx-10 mb-2 text-titlecase mb-4">List Item</h2>
                <div class="row mx-10">
                    <div class="col-md-12 mx-10">
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th>Nama Item</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lihat as $lht)
                                            <tr>
                                                <td>{{ $lht->name }}</td>
                                                <td>{{ $lht->description }}</td>
                                                <td> Rp {{ number_format($lht->price_per_day, 0, ',', '.') }}</td>
                                                <td><img src="{{$lht->image_url}}" alt="..." height="300"></td>
                                                <td>
                                                    <form action="{{ route('editItem', $lht->id) }}">
                                                        <button type="submit" class="btn btn-warning">Edit</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{ route('hapus', $lht->id) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
@endsection
