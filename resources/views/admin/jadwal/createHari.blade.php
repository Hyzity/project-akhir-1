@extends('layouts.backend.app',[
    'title' => 'jadwal',
    'contentTitle' => 'Jadwal Kelas',
])

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Box Artikel</h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.jadwal.storeHari') }}">
            @csrf
            <div class="form-group">
                <label for="nama_hari">Nama Hari</label>
                <input  type="text" name="nama_hari" placeholder="" class="form-control">
                @error('nama_hari')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <input  type="hidden" name="id_kelas" value="{{ $id }}" class="form-control">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">UPLOAD</button>
            </div>
        </form>
    </div>
</div>
@endsection
