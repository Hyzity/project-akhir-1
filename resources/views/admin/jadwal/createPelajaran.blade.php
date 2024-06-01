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
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.jadwal.storePelajaran') }}">
            @csrf
            <div class="form-group">
                <label for="">Nama Pelajaran</label>
                <input  type="text" name="mata_pelajaran" placeholder="" class="form-control">
            </div>
            <input  type="text" name="id_hari" value="{{$id }}" class="form-control">
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </div>
        </form>
    </div>
</div>
@endsection