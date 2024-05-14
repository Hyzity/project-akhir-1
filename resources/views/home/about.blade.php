@extends('layouts.frontend.app',[
'title' => 'About',
])
@section('content')
<div class="container" style="padding-top: 200px;box-shadow: #33333323 3px 5px 2px;border: #33333345 1px solid;">
    <div class="container text-center judul">
        <h1>SD Negeri 173100 Tarutung</h1>
    </div>
    <div class="container"><br>
        <div class="row">
            <div class="col capt">
                <p>
                    SD Negeri 173100 Tarutung adalah sebuah sekolah SD negeri yang berlokasi di Jl. Pemuda Tarutung,
                    Kab. Tapanuli Utara.
                </p>
                <p>
                    SD negeri ini pertama kali berdiri pada tahun 1956. Sekarang SD Negeri 173100 Tarutung memakai
                    panduan kurikulum belajar pemerintah yaitu SD 2013. SD Negeri 173100 Tarutung berada di bawah
                    naungan kepala sekolah dengan nama Sukaratny Nainggolan dan operator sekolah Mincen Saragih.
                </p>
            </div>
            <div class="col text-center">
                <img src="img/bg/bg1.jpg" class="img-responsive" style="margin-left: auto;margin-right: auto; margin-top: auto;margin-bottom: auto;width:75%;" alt="Sekolah diwaktu istirahat">
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Akreditasi SD Negeri 173100 Tarutung</h2>
    </div>
    <div class="container"><br>
        <div class="row">
            <div class="col capt">
                SD Negeri 173100 Tarutung memiliki akreditasi grade A dengan nilai 91 (akreditasi tahun 2019) dari
                BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah.
            </div>
            <div class="col" style="border: 1px #333 solid;padding: 20px;font-size: 20px;font-size: 20px;">
                <div class="row">
                    <div class="col">
                        <h2 class="nilai-akreditas" style=" height: 45px;width: 45px;background-color: green;border-radius: 50%;display: inline-block;color: white;font-size: 24px;text-align: center;line-height: 45px;margin-left: 20px">A</h2>
                    </div>
                    <div class="col">
                        <p><b>91/100</b> Nilai Akreditas</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <p class="capt"  style="font-weight: bold;">Nilai Standar Isi:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 98%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">98/100</div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Proses:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 93%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">93/100</div>
                        </div>
                    </div>
                </div>

                <div class="row space-dikit">
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Kelulusan:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 96%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">96/100</div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Pendidik:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 74%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">74/100</div>
                        </div>
                    </div>
                </div>

                <div class="row space-dikit">
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Sarana Prasarana:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">83/100</div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Pengelolaan:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95/100</div>
                        </div>
                    </div>
                </div>

                <div class="row space-dikit">
                    <div class="col">
                        <p class="capt" style="font-weight: bold;">Nilai Standar Sarana Pembiayaan:</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">83/100</div>
                        </div>
                    </div>
                    <div class="col">
                        <small>Dari: BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop