@extends('layouts.backend.app', [
    'title' => 'Tambah Guru',
    'contentTitle' => 'Tambah Guru'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Box Guru</h4>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.guru.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input required type="text" name="nama" placeholder="Masukkan Nama Guru" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bidang_keahlian">Bidang Keahlian</label>
                    <input required type="text" name="bidang_keahlian" placeholder="Masukkan Bidang Keahlian" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pengalaman">Pengalaman</label>
                    <input required type="text" name="pengalaman" placeholder="Masukkan Pengalaman" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>
                    <input required type="text" name="pendidikan" placeholder="Masukkan Pendidikan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no_telephon">Nomor Telepon</label>
                    <input required type="text" name="no_telephon" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>
                <div class="form-group">
                    <label for="foto">Foto Guru</label>
                    <input type="file" name="foto" class="dropify" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select required class="form-control" name="user_id">
                        <option selected disabled>- PILIH PENGGUNA -</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
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
