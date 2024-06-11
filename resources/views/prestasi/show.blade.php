@extends('layouts.frontend.app', [
    'title' => 'Detail Prestasi - SD Negeri 173100 Tarutung',
])

@section('content')
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3 height-100">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <div class="blog-details-content section-padding-100">
                            <div class="blog-details-text">
                                <h3>{{ $prestasi->judul }}</h3>
                                <br>
                                <div id="description">
                                    {{ $prestasi->deskripsi }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blog-details-content section-padding-100">
                            <div class="blog-details-text">
                                <div class="card-img-container">
                                    <img class="card-img-top" src="{{ asset('img/prestasi/' . $prestasi->gambar) }}"
                                        alt="Prestasi {{ $prestasi->judul }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
