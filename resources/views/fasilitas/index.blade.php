@extends('layouts.frontend.app', [
    'title' => 'List Fasilitas',
])

@section('content')
<section class="section-padding-100-0 mb-5">
    <div class="container" style="padding-top: 100px; background-color:#F8F4EC;">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid" style="padding-bottom: 40px;">
                    <h1 style="text-align: center; padding: 25px 0 25px 0;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid; background-color: white;">Fasilitas</h1>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse ($fasilitas as $fas)
            <div class="col-12 col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                <div class="card w-100 shadow-sm hover-effect" style="overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; border: 1px solid #ddd;">
                    <a href="{{ route('fasilitas.show', $fas->id) }}" style="text-decoration: none; color: inherit;">
                        <div style="border-bottom: 1px solid #ddd;">
                            @if ($fas->foto_fasilitas)
                            <img src="{{ asset('uploads/img/fasilitas/' . $fas->foto_fasilitas) }}" class="img-fluid" alt="Fasilitas Thumbnail">
                            @else
                            <img src="{{ asset('img/fasilitas/default.jpg') }}" class="img-fluid" style="border-radius: 15px 15px 0 0;" alt="Fasilitas Thumbnail">
                            @endif
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $fas->nama_fasilitas }}</h3>
                        </div>
                    </a>
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

<style>
    .hover-effect:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>
