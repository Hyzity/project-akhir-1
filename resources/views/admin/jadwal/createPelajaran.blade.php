@extends('layouts.backend.app', [
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
                        <select name="id_guru" class="form-control">
                            <option value="">-- Pilih Mata Pelajaran --</option>
                            @foreach ($gurus as $guru)
                                <option value="{{ $guru->id}}">{{ $guru->bidang_keahlian }} -
                                    {{ $guru->nama }}</option>
                               
                            @endforeach
                        </select>
                        @error('mata_pelajaran')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="text" name="id_hari" value="{{ $id }}" class="form-control" hidden>
                    <input type="text" name="id_kelas" value="{{ $idkelas }}" class="form-control" hidden>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">UPLOAD</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
