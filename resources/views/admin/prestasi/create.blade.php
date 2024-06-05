@extends('layouts.backend.app', [
    'title' => 'Tambah Prestasi',
    'contentTitle' => 'Tambah Prestasi',
])

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.prestasi.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Nama Prestasi</label>
                        <input type="text" name="judul" placeholder="Masukkan Nama Prestasi" class="form-control">
                        @error('judul')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi *(Jelaskan prestasi yang telah didapatkan murid)</label>
                        <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi" class="form-control">
                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar">Foto Prestasi</label>
                        <input type="file" name="gambar" class="dropify" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif">
                        @error('gambar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
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
