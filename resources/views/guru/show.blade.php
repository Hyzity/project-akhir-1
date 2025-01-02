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
        .blog-details-content {
            padding: 20px; /* Ubah padding menjadi lebih kecil */
        }

        .container {
            display: flex;
            justify-content: center;
        }

        .card {
            position: relative;
            width: 100%;
            max-width: 800px; /* Mengurangi lebar maksimum kartu */
            background-color: white;
            border-radius: 20px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        }

        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px; /* Ubah padding konten kartu */
            background-color: #860000;
            border-radius: 20px;
            color: white;
        }

        .image-container {
            width: 200px; /* Mengurangi lebar kontainer gambar */
            height: 200px; /* Mengurangi tinggi kontainer gambar */
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
            font-size: 16px; /* Mengurangi ukuran font untuk tampilan yang lebih kecil */
        }

        @media (min-width: 768px) {
            .card-content {
                flex-direction: row;
                align-items: flex-start;
                padding: 40px; /* Sesuaikan padding untuk tampilan desktop */
            }

            .image-container {
                margin-right: 30px; /* Mengurangi margin untuk tampilan desktop */
                margin-bottom: 0;
                width: 200px; /* Mengurangi lebar kontainer gambar untuk tampilan desktop */
                height: 200px; /* Mengurangi tinggi kontainer gambar untuk tampilan desktop */
            }

            .details {
                margin-left: 50px; /* Mengurangi margin untuk tampilan desktop */
            }

            .details li {
                font-size: 18px; /* Mengurangi ukuran font untuk tampilan desktop */
                margin-bottom: 20px; /* Sesuaikan margin untuk tampilan desktop */
            }
        }
    </style>
@stop
