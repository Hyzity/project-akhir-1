@extends('layouts.frontend.app', [
    'title' => 'Fasilitas - SDN 173100 Tarutung',
])

@section('content')
    <section class="section-padding-100-0 mb-5">
        <div class="container" style="padding-top: 100px; background-color:#F8F4EC;">
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid" style="padding-bottom: 40px;">
                        <h1
                            style="text-align: center; padding: 25px 0 25px 0;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid; background-color: white;">
                            Fasilitas</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse ($fasilitas as $fas)
                    <div class="col-md-3">
                        <a href="{{ route('fasilitas.show', $fas->id) }}">
                            <div class="card mb-3">
                                <div class="card-img-container">
                                    <img class="card-img-top" src="{{ asset('uploads/img/fasilitas/' . $fas->foto_fasilitas) }}"
                                        alt="Gambar Fasilitas">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $fas->nama_fasilitas }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12">
                        <p>Tidak ada data fasilitas saat ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <style>
        .card-img-container {
            overflow: hidden;
            height: 0;
            padding-top: 100%;
            position: relative;
        }

        .card-img-top {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll('.card');
            let maxCardHeight = 0;

            cards.forEach(card => {
                const cardHeight = card.getBoundingClientRect().height;
                if (cardHeight > maxCardHeight) {
                    maxCardHeight = cardHeight;
                }
            });

            cards.forEach(card => {
                card.style.height = maxCardHeight + 'px';
            });
        });
    </script>

@stop
