@extends('layouts.frontend.app', [
    'title' => 'Detail Guru',
])

@section('content')



    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3 height-400">
        <h3 style="padding-top: 150px;">{{ $guru->nama }}</h3>
    </div>

    <div class="blog-details-content" style="padding: 50px;">
        <div class="container">
            <div
                style="position: relative; width: 1131px; height: 505.4px; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); background-color: white; border-radius: 20px;">
                <div
                    style="display: flex; height: 100%; align-items: center; background-color: #860000; border-radius: 20px;">
                    <div style="display: flex; justify-content: center; align-items: center; padding: 5px;">
                        @if ($guru->foto)
                            <div class="image-container">
                                <img src="{{ asset('uploads/img/guru/' . $guru->foto) }}" alt="Foto Guru"
                                    class="square-image">
                            </div>
                        @else
                            <div class="image-container">
                                <img src="{{ asset('img/guru/default.jpg') }}" alt="Foto Guru" class="square-image">
                            </div>
                        @endif
                    </div>

                    <div style="margin-left: 100px;">
                        <ul style="list-style-type: none; padding: 0;">
                            <li style="margin-bottom: 30px; color: white; font-size: 25px;"><strong>Nama: </strong>
                                {{ $guru->nama }}</li>
                            <li style="margin-bottom: 30px; color: white; font-size: 25px;"><strong>Bidang
                                    Keahlian:</strong> {{ $guru->bidang_keahlian }}</li>
                            <li style="margin-bottom: 30px; color: white; font-size: 25px;"><strong>Pendidikan:</strong>
                                {{ $guru->pendidikan }}</li>
                            <li style="margin-bottom: 30px; color: white; font-size: 25px;"><strong>Tempat Lahir:</strong>
                                {{ $guru->tempat_lahir }}</li>
                            <li style="margin-bottom: 30px; color: white; font-size: 25px;"><strong>Tanggal Lahir:</strong>
                                {{ $guru->tgl_lahir }} </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .image-container {
            position: relative;
            width: 485px;
            /* Desired width */
            padding-bottom: 100%;
            /* 1:1 aspect ratio */
            overflow: hidden;
            border-radius: 20px;
            border: 4px solid #860000;
            margin: auto;
        }

        .square-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Maintain aspect ratio, crop if necessary */
        }
    </style>
@stop
