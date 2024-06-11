@extends('layouts.backend.app', [
    'title' => 'Tambah Guru',
    'contentTitle' => 'Tambah Guru'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dist/css/dropify.min.css') }}">
@endpush

@section('content')

<div class="">
    <div class="card">

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.guru.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Guru"
                           class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bidang_keahlian">Bidang Keahlian</label>
                    <input type="text" name="bidang_keahlian" placeholder="Masukkan Bidang Keahlian"
                           class="form-control @error('bidang_keahlian') is-invalid @enderror" value="{{ old('bidang_keahlian') }}">
                    @error('bidang_keahlian')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir"
                           class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}">
                    @error('tempat_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir"
                           class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir') }}">
                    @error('tgl_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>
                    <input type="text" name="pendidikan" placeholder="Masukkan Pendidikan"
                           class="form-control @error('pendidikan') is-invalid @enderror" value="{{ old('pendidikan') }}">
                    @error('pendidikan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto">Foto Guru</label>
                    <input type="file" name="foto" class="dropify @error('foto') is-invalid @enderror" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif">
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="">Pilih Status</option>
                        <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="non_aktif" {{ old('status') == 'non_aktif' ? 'selected' : '' }}>Non Aktif</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
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
<script type="text/javascript" src="{{ asset('plugins/dropify/dist/js/dropify.min.js') }}"></script>
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
