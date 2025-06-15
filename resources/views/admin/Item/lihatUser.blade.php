@extends('admin.layout')
@section('konten')    
        <head>        
        </head>   
        <body>
        <div class="content-wrapper">
            <div class="container card shadow p-4">
                <h2 class="mx-10 mb-2 text-titlecase mb-4">List Item</h2>
                <hr>
            <div class="row mx-10">
                <div class="col-md-12 mx-10">
                    <div class="card">
                        <div class="table-responsive pt-3">
                            <table class="table table-striped project-orders-table">
                                <thead>
                                    <tr>
                                        <th>Nama Item</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $us)
                                    <tr>
                                        <td>{{ $us->name }}</td>
                                        <td>{{ $us->email }}</td>
                                        {{-- <td>
                                            <form action="{{ route('editItem', $us->id) }}">
                                                    <button type="submit" class="btn btn-warning">Edit</button>
                                                </form>
                                            </td>
                                        <td>
                                            <form action="{{ route('hapus', $us->id) }}" method="post">
                                                @csrf
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
