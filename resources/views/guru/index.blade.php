@extends('layouts.frontend.app', [
    'title' => 'Guru - SDN 173100 Tarutung',
])

@section('content')
    <section class="section-padding-100-0 mb-5">
        <div class="container" style="padding-top: 100px; background-color:#F8F4EC;">
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid" style="padding-bottom: 50px;">
                        <h1 style="text-align: center; padding: 25px 0; box-shadow: #33333323 3px 5px 2px; border: #33333345 1px solid; background-color: white;">
                            Data Guru</h1>
                    </div>
                </div>
            </div>

            <div class="row container">
                @forelse ($guru as $g)
                <div class="col-12 col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 hover-effect" style="transition: transform 0.3s, box-shadow 0.3s; border: 1px solid #ddd; padding: 20px; margin: 10px;">
                        <a href="{{ route('guru.show', $g->id) }}">
                            <div class="card-img-container" style="position: relative; width: 100%; padding-top: 75%; /* 4:3 aspect ratio */ overflow: hidden;">
                                @if ($g->foto)
                                    <img src="{{ asset('uploads/img/guru/' . $g->foto) }}" class="card-img-top" alt="Guru Thumbnail" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                @else
                                    <img src="{{ asset('img/guru/default.jpg') }}" class="card-img-top" alt="Guru Thumbnail" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                @endif
                            </div>
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

    .card-img-container {
        position: relative;
        width: 100%;
        padding-bottom: 75%;
        /* 4:3 aspect ratio */
        overflow: hidden;
    }

    .card-img-top {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Maintain aspect ratio, crop if necessary */
    }

    .card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-body {
        flex-grow: 1;
        padding: 16px;
        /* Adjust padding as needed */
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
