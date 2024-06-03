@extends('layouts.backend.app', [
'title' => 'Tambah Fasilitas',
'contentTitle' => $idkelas->nama_kelas,
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
<a href="{{route('admin.jadwal.createHari', $idkelas)}}" class="btn btn-primary btn-sm">Tambah Hari</a>
<a href="{{route('admin.jadwal.editKelas', $idkelas)}}" class="btn btn-primary btn-sm">Edit Nama Kelas</a>
<a href="{{route('admin.jadwal.destroyKelas', $idkelas)}}" onclick="return confirm('Apakah anda ingin menghapus ?')" class="btn btn-danger btn-sm">hapus</a>



@foreach($hari as $jadwal)
<x-alert></x-alert>
<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header row">
                <a href="{{ route('admin.jadwal.editHari',  $jadwal->id) }}" class="btn btn-primary btn-sm">Edit Nama Hari</a>
                <a href="{{ route('admin.jadwal.destroyHari',$jadwal->id) }}" onclick="return confirm('Apakah anda ingin menghapus ?')" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></a>
            </div>
            <div class="card-body table-responsive">
    <h1>{{ $jadwal->nama_hari }}</h1>
    <a href="{{ route('admin.jadwal.createPelajaran', $jadwal->id) }}" class="btn btn-primary mb-2 btn-sm">Tambah pelajaran</a>
    <table id="dataTable1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Waktu</th>
                <th>Pelajaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach($pelajaran[$jadwal->id] as $index => $mp)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $waktu[$index] }}</td>
                <td>{{ $mp->mata_pelajaran }}</td>
                <td> <a href="{{ route('admin.jadwal.editPelajaran', $mp->id) }}" class="btn btn-primary btn-sm">Edit Nama Hari</a><a href="{{ route('admin.jadwal.destroyPelajaran',$mp->id) }}" onclick="return confirm('Apakah anda ingin menghapus ?')" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</div>


@endforeach



@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
<script type="text/javascript">
    $('.dropify').dropify({
        messages: {
            default: 'Drag atau Drop untuk memilih gambar',
            replace: 'Ganti',
            remove: 'Hapus',
            error: 'error'
        }
    });
</script>
@endpush