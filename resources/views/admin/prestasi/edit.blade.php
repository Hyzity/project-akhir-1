@extends('layouts.backend.app', [
    'title' => 'Edit Prestasi',
    'contentTitle' => 'Edit Prestasi',
])

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
                <!-- Display validation errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Display custom error message -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" enctype="multipart/form-data"
                    action="{{ route('admin.prestasi.update', $prestasi->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input value="{{ old('judul', $prestasi->judul) }}" required type="text" name="judul"
                            placeholder="Masukkan Judul" class="form-control">
                        @if ($errors->has('judul'))
                            <span class="text-danger">{{ $errors->first('judul') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input value="{{ old('deskripsi', $prestasi->deskripsi) }}" required type="text" name="deskripsi"
                            placeholder="Masukkan Deskripsi" class="form-control">
                        @if ($errors->has('deskripsi'))
                            <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="gambar">Foto Prestasi</label>
                        <div class="row">
                            <div class="col">
                                @if ($prestasi->gambar)
                                    <div class="mb-3">
                                        <img src="{{ asset('img/prestasi/' . $prestasi->gambar) }}" alt="Gambar Prestasi"
                                            class="img-thumbnail" style="max-height: 200px;">
                                    </div>
                                    <b>*Foto lama</b>
                                    <p>**Anda bisa mengganti gambar (jika diperlukan). Namun jika tidak, boleh di biarkan begitu saja.</p>
                                    <input type="hidden" name="old_foto" value="{{ $prestasi->gambar }}">
                                @endif
                            </div>
                            <div class="col">
                                <input type="file" name="gambar" class="dropify"
                                    data-allowed-file-extensions="png jpg gif jpeg svg webp jfif">
                                @if ($errors->has('gambar'))
                                    <span class="text-danger">{{ $errors->first('gambar') }}</span>
                                @endif
                            </div>
                        </div>
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
