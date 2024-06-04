@extends('layouts.frontend.app', [
'title' => 'Prestasi - SDN 173100 Tarutung',
])
@section('content')
<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-100-0 mb-50" >
    <div id="prestasi-container hover-effect" class="container" style="background-color:#F8F4EC;">
        <div class="container-fluid " style="padding: 100px 0 50px 0;">
            <h1 style="text-align: center; padding: 25px 0 25px 0;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid; background-color: white;">List Prestasi</h1>
        </div>
        <div class="row">
            @foreach ($prestasi as $index => $pres)
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-img-container">
                        <img class="card-img-top" src="{{ asset('img/prestasi/' . $pres->gambar) }}" alt="Gambar Prestasi">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $pres->judul }}</h5>
                        <hr>
                        <p class="card-text">
                            {{-- {!! Str::limit($pres->deskripsi) !!} --}}
                            {{ $pres->deskripsi }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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