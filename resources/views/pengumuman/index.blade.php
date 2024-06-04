@extends('layouts.frontend.app',[
'title' => 'List Pengumuman',
])
@section('content')


<section class="upcoming-events section-padding-100-0 mb-5" >
    <div class="container" style="padding-top: 100px; background-color:#F8F4EC;">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid " style="padding: 0 0 40px 0;">
                    <h1 style="text-align: center; padding: 25px 0 25px 0;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid;  background-color: white;">Pengumuman</h1>
                </div>
            </div>
        </div>
        @if($pengumuman->count() > 0)
        <div class="row container">
            <div class="container">
                @php
                    $sortedPengumuman = $pengumuman->sortByDesc('tgl');
                @endphp
            
                @foreach($sortedPengumuman->values() as $index => $pn)
                    @if($index % 4 == 0)
                        <div class="row mb-4">
                    @endif
            
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card wow fadeInUp" style="width: 100%;" data-wow-delay="250ms">
                            <div class="card-body">
                                <h5 class="card-title">{{ $pn->judul }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $pn->tgl }}</h6>
                                <p class="card-text">{{ $pn->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
            
                    @if(($index + 1) % 4 == 0)
                        </div>
                    @endif
                @endforeach
                @if($index % 4 != 3)
                    </div>
                @endif
            </div>
        </div>
        @endif
    </div>
</section>

@stop