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
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="single-guru mb-50 wow fadeInUp" data-wow-delay="250ms">
                            <div class="guru-thumbnail">
                                @if ($g->foto)
                                    <img src="{{ asset('storage/guru') }}/{{ $g->foto }}" alt="Guru Thumbnail">
                                @else
                                    <img src="{{ asset('img/guru') }}/default.jpg" alt="Guru Thumbnail">
                                @endif
                            </div>
                            <div class="guru-content">
                                <h6 class="guru-name">{{ $g->user->name }}</h6>
                                <p class="guru_nama">{{ $g->nama }}</p>
                                <p class="guru-bidang">{{ $g->bidang_keahlian }}</p>
                                <p class="guru-pendidikan">{{ $g->pendidikan }}</p>
                                <p class="guru-pengalaman">{{ $g->pengalaman }}</p>
                                <p class="guru-no-telepon">{{ $g->no_telephon }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>Tidak ada data guru saat ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@stop
