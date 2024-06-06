@extends('layouts.frontend.app', [
'title' => 'Guru - SDN 173100 Tarutung',
])

@section('content')
<section class="section-padding-100-0 mb-5">
    <div class="container" style="padding-top: 100px; background-color:#F8F4EC;">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid" style="padding-bottom: 50px;">
                    <h1 style="text-align: center; padding: 25px 0; box-shadow: #33333323 3px 5px 2px; border: #33333345 1px solid; background-color: white;">Data Guru</h1>
                </div>
                </div>
            </div>

            <div class="row">
                @forelse ($guru as $g)
                <div class="col-12 col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 hover-effect" style="transition: transform 0.3s, box-shadow 0.3s; border: 1px solid #ddd;">
                        <a href="{{ route('guru.show', $g->id)}}">
                            <div class="card-header p-0 position-relative">
                                @if ($g->foto)
                                <img src="{{ asset('uploads/img/guru/' . $g->foto) }}" class="card-img-top" alt="Guru Thumbnail">
                                @else
                                <img src="{{ asset('img/guru/default.jpg') }}" class="card-img-top" alt="Guru Thumbnail">
                                @endif
                            </div>
                            <!-- <div class="col-md-3">
                        <a href="{{ route('guru.show', $g->id) }}">
                            <div class="card mb-3 hover-effect" style="transition: transform 0.3s, box-shadow 0.3s; border: 1px solid #ddd;">
                                <div class="card-img-container">
                                    <img class="card-img-top" src="{{ asset('uploads/img/guru/' . $g->foto) }}"
                                        alt="Gambar Guru">
                                </div> -->
                            <div class="card-body">
                                <h6 class="card-title" style="text-align: center;">{{ $g->nama }}</h6>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p>Tidak ada data guru yang tersedia.</p>
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