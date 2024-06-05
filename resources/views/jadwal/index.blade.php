@extends('layouts.frontend.app', [
'title' => 'Jadwal - SDN 173100 Tarutung',
])

@section('content')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
<style>
  .small-box {
    position: relative;
    overflow: hidden;
    border-radius: 10px; /* Menentukan sudut melengkung */
  }

  .small-box-footer {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.4);
    color: #fff;
    padding: 10px;
    text-align: center;
    transition: background-color 0.3s; /* Transisi untuk efek hover */
    z-index: 10; /* Set a higher z-index */
  }

  .small-box-footer:hover {
    background: rgba(0, 0, 0, 0.7); /* Warna background saat hover */
  }

  .small-box-footer:hover i {
    transform: translateX(5px); /* Translasi ikon ke kanan saat hover */
  }

  .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    z-index: 1; /* Set a lower z-index */
  }

  .small-box:hover .overlay {
    opacity: 1;
  }

  /* Tambahkan CSS untuk memperbesar kotak yang menampung tulisan "Kelas" dan ikon */
  .inner {
    display: flex;
    align-items: center;
    justify-content: center; /* Menengahkan tulisan "Kelas" dan ikon */
    padding: 20px; /* Perbesar kotak dengan menambahkan padding */
  }

  .inner h3 {
    margin-right: 10px; /* Jarak antara tulisan "Kelas" dan ikon */
  }

  .inner .icon {
    font-size: 30px; /* Ukuran ikon */
    color: #fff; /* Warna ikon */
  }
</style>
<div class="container my-5">
<div class="container-fluid" style="padding: 150px 0 30px 0;">
    <h1 style="text-align: center; padding: 25px 0 25px 0;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid; background-color: white;">Jadwal Kelas</h1>
  <div class="row mt-5">
    @foreach($kelas as $p)
    <div class="col-lg-3 col-5">
      <div class="small-box bg-info">
        <div class="inner mb-3">
          <h3>Kelas {{ $p->nama_kelas }} <span class="icon"><i class="fas fa-school"></i></span></h3>
        </div>
        <a href="{{ route('jadwal.show', $p->id) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        <div class="overlay"></div> <!-- Penambahan div overlay -->
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>

<!-- /.row -->
@endsection
