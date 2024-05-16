@extends('layouts.backend.app', [
    'title' => 'Tambah Fasilitas',
    'contentTitle' => 'Tambah Fasilitas',
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
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.fasilitas.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama_fasilitas">Nama Fasilitas</label>
                        <input required type="text" name="nama_fasilitas" placeholder="Masukkan Nama Fasilitas"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea required="" name="deskripsi" id="deskripsi" class="text-dark form-control summernote"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto_fasilitas">Foto Fasilitas</label>
                        <input type="file" name="foto_fasilitas" class="dropify"
                            data-allowed-file-extensions="png jpg gif jpeg svg webp jfif">
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">UPLOAD</button>
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
