@extends('layouts.frontend.app', [
'title' => 'List Guru',
])

@section('content')
<section class="section-padding-100-0 mb-5">
    <div class="container" style="padding-top: 100px; background-color:#F8F4EC;">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid " style="padding-bottom: 50px;">
                    <h1 style="text-align: center; padding: 25px 0 25px 0;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid; background-color: white;">Data Guru</h1>
                </div>
                <div class="row">
                </div>
            </div>

            <div class="row">
                @forelse ($guru as $g)
                <div class="col-12 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch" style="padding: 0 20px 0 20px;">
                    <div class="card w-100 hover-effect" style="transition: transform 0.3s, box-shadow 0.3s; border: 1px solid #ddd;">
                        <a href="{{ route('guru.show', $g->id)}}">
                            <div class="card-header p-0 position-relative">
                                @if ($g->foto)
                                <img src="{{ asset('uploads/img/guru/' . $g->foto) }}" class="card-img-top" alt="Guru Thumbnail">
                                @else
                                <img src="{{ asset('img/guru/default.jpg') }}" class="card-img-top" alt="Guru Thumbnail">
                                @endif
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">{{ $g->nama }}</h5>
                            <p class="card-text"><s trong>Bidang Keahlian:</strong> {{ $g->bidang_keahlian }}</p>
                            <p class="card-text"><strong>Pendidikan:</strong> {{ $g->pendidikan }}</p>
                            <p class="card-text"><strong>Tempat Lahir:</strong> {{ $g->tempat_lahir }}</p>
                            <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $g->tgl_lahir }}</p>
                        </div>
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