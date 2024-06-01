@extends('layouts.frontend.app',[
'title' => 'List Pengumuman',
])
@section('content')

@if($pengumuman->count() > 0)
<section class="upcoming-events section-padding-100-0 mb-5" >
    <div class="container" style="padding-top: 100px; background-color:#F8F4EC;">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid " style="padding: 0 0 40px 0;">
                    <h1 style="text-align: center; padding: 25px 0 25px 0;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid;  background-color: #860000; color:white;">Pengumuman</h1>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($pengumuman as $pn)
            <div class="col-12 col-md-6 col-lg-6">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('img/bg') }}/pengumuman.png" alt="">
                        <h6 class="event-date">{{ $pn->tgl }} | BY : {{ $pn->user->name }}</h6>
                        <h4 class="event-title">{{ $pn->judul }}</h4>
                    </div>
                    <div>
                        <a href="{{ route('pengumuman.show',$pn->slug) }}" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="pagination justify-content-center">
                {{ $pengumuman->links() }}
            </div>
        </div>
    </div>
</section>
@endif

@stop