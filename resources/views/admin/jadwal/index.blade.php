@extends('layouts.backend.app', [
'title' => 'Tambah Fasilitas',
'contentTitle' => 'jadwal',
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
<x-alert></x-alert>
<a href="{{ route('admin.jadwal.createKelas') }}" class="btn btn-primary btn-sm mb-5">Tambah Data</a>
<div class="row">
  @foreach($kelas as $p)
  <div class="col-lg-3 col-5">
    <div class="small-box bg-info">
      <div class="inner">

        <h3>Kelas{{ $p->nama_kelas }} </h3>
      </div>
      <div class="icon">
        <i class="fas fa-school"></i>
      </div>
      <a href="{{ route('admin.jadwal.showhari', $p->id) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  @endforeach
</div>
<!-- /.row -->
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