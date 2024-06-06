@extends('layouts.backend.app',[
    'title' => 'jadwal',
    'contentTitle' => 'Jadwal Kelas',
])

@section('content')
<div class="">
    <div class="card">
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.jadwal.storePelajaran') }}">
            @csrf
            <div class="form-group">
                <label for="">Nama Pelajaran</label>
                <input  type="text" name="mata_pelajaran" placeholder="" class="form-control">
                @error('mata_pelajaran')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <input  type="text" name="id_hari" value="{{$id }}" class="form-control" hidden>
            <input  type="text" name="id_kelas" value="{{$idkelas}}" class="form-control" hidden>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">UPLOAD</button>
            </div>
        </form>
    </div>
</div>
@endsection
