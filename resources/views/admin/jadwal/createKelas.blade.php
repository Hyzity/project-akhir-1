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
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.jadwal.createKelas') }}">
            @csrf
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input  type="text" name="nama_kelas" placeholder="" class="form-control">
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </div>
        </form>
    </div>
</div>
@endsection