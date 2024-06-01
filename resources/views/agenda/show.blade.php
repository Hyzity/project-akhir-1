@extends('layouts.backend.app', [
    'title' => 'Detail Agenda',
    'contentTitle' => 'Detail Agenda'
])

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.agenda.index') }}" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" value="{{ $agenda->judul }}" disabled>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="tgl_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tgl_mulai" value="{{ $agenda->tgl_mulai }}" disabled>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="tgl_selesai">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tgl_selesai" value="{{ $agenda->tgl_selesai }}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="jam_mulai">Jam Mulai</label>
                    <input type="time" class="form-control" id="jam_mulai" value="{{ $agenda->jam_mulai }}" disabled>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="jam_selesai">Jam Selesai</label>
                    <input type="time" class="form-control" id="jam_selesai" value="{{ $agenda->jam_selesai }}" disabled>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" disabled>{{ $agenda->deskripsi }}</textarea>
        </div>
    </div>
</div>
@stop
