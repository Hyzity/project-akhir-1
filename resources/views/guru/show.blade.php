@extends('layouts.frontend.app', [
'title' => 'Detail Guru',
])

@section('content')



<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" " >
        <h3 style="padding-top: 150px;">{{ $guru->nama }}</h3>
    </div>
</div>

<div class="blog-details-content section-padding-100">
    <div class="container">
        <div style="position: relative; width: 1131px; height: 505.4px; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); background-color: white; border-radius: 20px;">
            <div style="display: flex; height: 100%; align-items: center; background-color: #860000; border-radius: 20px;">
                <div style="display: flex; justify-content: center; align-items: center; padding: 5px;">
                    @if ($guru->foto)
                    <img src="{{ asset('uploads/img/guru/') }}/{{ $guru->foto }}" alt="Foto Guru" style="width: 485px; height: 503px; border-radius: 20px; border: 4px solid #860000; margin: auto;">
                    @else
                    <img src="{{ asset('img/guru') }}/default.jpg" alt="Foto Guru" style="width: 485px; height: 503px; border-radius: 20px; border: 4px solid #860000; margin: auto;">
                    @endif

                </div>
                <div style="margin-left: 100px;">
                    <ul style="list-style-type: none; padding: 0;">
                        <li style="margin-bottom: 30px; color: white; font-size: 25px;"><strong>Bidang Keahlian:</strong> {{ $guru->bidang_keahlian }}</li>
                        <li style="margin-bottom: 30px; color: white; font-size: 25px;"><strong>Pendidikan:</strong> {{ $guru->pendidikan }}</li>
                        <li style="margin-bottom: 30px; color: white; font-size: 25px;"><strong>Tempat Lahir:</strong> {{ $guru->tempat_lahir }}</li>
                        <li style="margin-bottom: 30px; color: white; font-size: 25px;"><strong>Tanggal Lahir:</strong> {{ $guru->tgl_lahir }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop