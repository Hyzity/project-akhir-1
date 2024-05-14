@extends('layouts.frontend.app', [
    'title' => 'Detail Guru',
])

@section('content')
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{ asset('img/bg/guru.png') }});">
        <div class="blog-details-headline">
            <h3>{{ $guru->nama }}</h3>
        </div>
    </div>

    <div class="blog-details-content section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="blog-details-text">
                        <p><strong>Bidang Keahlian:</strong> {{ $guru->bidang_keahlian }}</p>
                        <p><strong>Pengalaman:</strong> {{ $guru->pengalaman }}</p>
                        <p><strong>Pendidikan:</strong> {{ $guru->pendidikan }}</p>
                        <p><strong>Nomor Telepon:</strong> {{ $guru->no_telephon }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
