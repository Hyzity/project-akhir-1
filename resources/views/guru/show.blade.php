@extends('layouts.frontend.app', [
    'title' => 'Detail Guru',
])

@section('content')



    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3 height-400">
        <h3 style="padding-top: 150px;">{{ $guru->nama }}</h3>
    </div>

    <div class="blog-details-content">
        <div class="container">
            <div class="card">
                <div class="card-content">
                    <div class="image-container">
                        @if ($guru->foto)
                            <img src="{{ asset('uploads/img/guru/' . $guru->foto) }}" alt="Foto Guru" class="square-image">
                        @else
                            <img src="{{ asset('img/guru/default.jpg') }}" alt="Foto Guru" class="square-image">
                        @endif
                    </div>
                    <div class="details">
                        <ul>
                            <li><strong>Nama: </strong>{{ $guru->nama }}</li>
                            <li><strong>Bidang Keahlian:</strong> {{ $guru->bidang_keahlian }}</li>
                            <li><strong>Pendidikan:</strong> {{ $guru->pendidikan }}</li>
                            <li><strong>Tempat Lahir:</strong> {{ $guru->tempat_lahir }}</li>
                            <li><strong>Tanggal Lahir:</strong> {{ $guru->tgl_lahir }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* .image-container {
            position: relative;
            width: 485px;
            padding-bottom: 100%;
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
        } */
    </style>
    <style>
        .blog-details-content {
            padding: 50px;
        }

        .container {
            display: flex;
            justify-content: center;
        }

        .card {
            position: relative;
            width: 100%;
            max-width: 1131px;
            background-color: white;
            border-radius: 20px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        }

        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #860000;
            border-radius: 20px;
            color: white;
        }

        .image-container {
            width: 300px; /* Fixed width for cropping */
            height: 300px; /* Fixed height for cropping */
            overflow: hidden;
            border-radius: 20px;
        }

        .square-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .details {
            width: 100%;
        }

        .details ul {
            list-style-type: none;
            padding: 0;
        }

        .details li {
            margin-bottom: 20px;
            font-size: 20px;
        }

        @media (min-width: 768px) {
            .card-content {
                flex-direction: row;
                align-items: flex-start;
                padding: 40px;
            }

            .image-container {
                margin-right: 50px;
                margin-bottom: 0;
                width: 300px; /* Fixed width for cropping */
                height: 300px; /* Fixed height for cropping */
            }

            .details {
                margin-left: 100px;
            }

            .details li {
                font-size: 25px;
                margin-bottom: 30px;
            }
        }
    </style>
@stop
