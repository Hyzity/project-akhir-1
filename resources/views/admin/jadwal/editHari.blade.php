@extends('layouts.backend.app',[
    'title' => 'jadwal',
    'contentTitle' => 'Jadwal Kelas',
])

@section('content')
<div class="">
    <div class="card">
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.jadwal.updateHari', $hari->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input  type="text" name="nama_hari" placeholder="" Value = "{{ old('nama_hari', $hari->nama_hari) }}"class="form-control">
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </div>
        </form>
    </div>
</div>
@endsection