@extends('admin.layout')
@section('konten')

    <body>
        <div class="content-wrapper">
            <div class="container card shadow p-4">
                <h2 class="mx-10 mb-2 text-titlecase mb-4">Pesanan Yang Belum Dibayar</h2>
                <div class="row mx-10">
                    <div class="col-md-12 mx-10">
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th>Pemesan</th>
                                            <th>Rental ID</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rentals as $rental)
                                            <tr>
                                                <td>{{ $rental->user->name ?? 'User tidak ditemukan' }}</td>
                                                <td>{{ $rental->id }}</td>
                                                <td>{{ $rental->rental_status }}</td>
                                                <td>
                                                    @if ($rental->notes)
                                                        <a class="btn btn-info" href="#">Note</a>
                                                    @else
                                                        <a class="btn btn-success"
                                                            href="{{ route('tambahNotes', $rental->id) }}">Tambah Note</a>
                                                    @endif
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
