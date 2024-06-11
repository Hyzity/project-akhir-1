@extends('layouts.backend.app', [
    'title' => 'jadwal',
    'contentTitle' => 'Jadwal Kelas',
])

@section('content')
<div class="">
    <div class="card">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.jadwal.updatePelajaran', $pelajaran->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="mata_pelajaran">Nama Pelajaran</label>
                    <select name="mata_pelajaran" class="form-control">
                        <option value="">-- Pilih Mata Pelajaran --</option>
                        @foreach ($gurus as $guru)
                            <option value="{{ $guru->bidang_keahlian }}" {{ $guru->bidang_keahlian == $pelajaran->mata_pelajaran ? 'selected' : '' }}>
                                {{ $guru->bidang_keahlian }} - {{ $guru->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('mata_pelajaran')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <input type="text" name="id_guru" value="{{ old('id_guru', $pelajaran->id_guru) }}" class="form-control" hidden>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">UPLOAD</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
