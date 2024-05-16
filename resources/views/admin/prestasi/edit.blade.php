@extends('layouts.backend.app',[
    'title' => 'Edit Fasilitas',
    'contentTitle' => 'Edit Fasilitas'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Box Fasilitas</h4>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.fasilitas.update', $fasilitas->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input value="{{ $fasilitas->deskripsi }}" required type="text" name="deskripsi" placeholder="Masukkan Deskripsi" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama_fasilitas">Nama Fasilitas</label>
                    <input value="{{ $fasilitas->nama_fasilitas }}" required type="text" name="nama_fasilitas" placeholder="Masukkan Nama Fasilitas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="foto_fasilitas">Foto Fasilitas</label>
                    <input type="file" name="foto_fasilitas" class="dropify" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif">
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
