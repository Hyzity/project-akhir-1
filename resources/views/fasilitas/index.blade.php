@extends('layouts.frontend.app', [
'title' => 'List Fasilitas',
])

@section('content')
<section class="section-padding-100-0 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>List Fasilitas</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse ($fasilitas as $fas)
            <div class="col-12 col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <a href="{{ route('fasilitas.show', $fas->id)}}">
                        <div class="card-header p-0 position-relative">
                        @if ($fas->foto_fasilitas)
                        <img src="{{ asset('uploads/img/fasilitas/' . $fas->foto_fasilitas) }}" alt="Fasilitas Thumbnail">
                        @else
                        <img src="{{ asset('img/fasilitas/default.jpg') }}" alt="Fasilitas Thumbnail">
                        @endif
                    </div>
                    <div class="fasilitas-content">
                        <h6 class="fasilitas-judul">{{ $fas->nama_fasilitas }}</h6>
                        <p class="fasilitas-deskripsi">{{ $fas->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p>Tidak ada data fasilitas saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@stop
