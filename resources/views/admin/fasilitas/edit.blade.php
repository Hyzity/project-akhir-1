@extends('layouts.backend.app', [
    'title' => 'Edit Fasilitas',
    'contentTitle' => 'Edit Fasilitas',
])

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')

    <div class="">
        <div class="card">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data"
                    action="{{ route('admin.fasilitas.update', $fasilitas->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_fasilitas">Nama Fasilitas</label>
                        <input value="{{ old('nama_fasilitas', $fasilitas->nama_fasilitas) }}" required type="text"
                            name="nama_fasilitas" placeholder="Masukkan Nama Fasilitas"
                            class="form-control @error('nama_fasilitas') is-invalid @enderror">
                        @error('nama_fasilitas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input value="{{ old('deskripsi', $fasilitas->deskripsi) }}" required type="text"
                            name="deskripsi" placeholder="Masukkan Deskripsi"
                            class="form-control @error('deskripsi') is-invalid @enderror">
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="foto_fasilitas">Foto Fasilitas</label>
                        <input type="file" name="foto_fasilitas"
                            class="dropify @error('foto_fasilitas') is-invalid @enderror"
                            data-allowed-file-extensions="png jpg gif jpeg svg webp jfif">
                        @error('foto_fasilitas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}

                    <div class="form-group">
                        <label for="gambar">Foto Fasilitas</label>
                        <div class="row">
                            <div class="col">
                                @if ($fasilitas->foto_fasilitas)
                                    <div class="mb-3">
                                        <img src="{{ asset('uploads/img/fasilitas/' . $fasilitas->foto_fasilitas) }}" alt="Gambar Prestasi"
                                            class="img-thumbnail" style="max-height: 200px;">
                                    </div>
                                    <b>*Foto lama</b>
                                    <p>**Anda bisa mengganti gambar (jika diperlukan). Namun jika tidak, boleh di biarkan
                                        begitu saja.</p>
                                    <input type="hidden" name="old_foto" value="{{ $fasilitas->foto_fasilitas }}">
                                @endif
                            </div>
                            <div class="col">
                                <input type="file" name="foto_fasilitas" class="dropify"
                                    data-allowed-file-extensions="png jpg gif jpeg svg webp jfif">
                                @if ($errors->has('foto_fasilitas'))
                                    <span class="text-danger">{{ $errors->first('foto_fasilitas') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
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
