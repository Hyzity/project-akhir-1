@extends('layouts.frontend.app', [
'title' => 'List Guru',
])

@section('content')
<section class="section-padding-100-0 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>List Guru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse ($guru as $g)
            <div class="col-12 col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                <div class="card w-100">
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
                        <h5 class="card-title">{{ $g->nama }}</h5>
                        <p class="card-text"><strong>Bidang Keahlian:</strong> {{ $g->bidang_keahlian }}</p>
                        <p class="card-text"><strong>Pendidikan:</strong> {{ $g->pendidikan }}</p>
                        <p class="card-text"><strong>Pengalaman:</strong> {{ $g->pengalaman }}</p>
                        <p class="card-text"><strong>No Telepon:</strong> {{ $g->no_telephon }}</p>
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
