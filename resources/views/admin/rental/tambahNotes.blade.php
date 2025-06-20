@extends('admin.layout')

@section('konten')
<body>
    <div class="content-wrapper">
        <div class="container card shadow p-4">

            <form action="{{route('simpanNotes',$id)}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="notes" class="form-label">Note</label>
                    <input type="text" name="notes" id="notes" class="form-control form-control-user" placeholder="Masukkan catatan">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="/diKembalikan" class="btn btn-danger">Kembali</a>
                </div>
            </form>
            
        </div>
    </div>
</body>
@endsection
