@extends('layouts.frontend.app', [
    'title' => 'Detail Fasilitas',
])

@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="padding-top: 200px;">
    <div class="blog-details-headline text-center" style="padding-top: 150px;">
        <h3 class="text-white">{{ $fasilitas->nama_fasilitas }}</h3>
    </div>
</div>

<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="blog-details-text">
                    <div class="fasilitas-thumbnail text-center mb-4">
                        @if ($fasilitas->foto_fasilitas)
                            <img src="{{ asset('uploads/img/fasilitas/' . $fasilitas->foto_fasilitas) }}" alt="Foto Fasilitas" class="img-fluid rounded" style="max-width: 100%; height: auto; border-radius: 20px; border: 4px solid #860000;">
                        @else
                            <img src="{{ asset('img/fasilitas/default.jpg') }}" alt="Foto Fasilitas" class="img-fluid rounded" style="max-width: 100%; height: auto; border-radius: 20px; border: 4px solid #860000;">
                        @endif
                    </div>
                    <div class="fasilitas-info text-left mt-4">
                        <ul class="list-unstyled">
                            <li class="mb-3"><strong>Nama Fasilitas:</strong> <span>{{ $fasilitas->nama_fasilitas }}</span></li>
                            <li class="mb-3"><strong>Deskripsi:</strong> <span>{{ $fasilitas->deskripsi }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
