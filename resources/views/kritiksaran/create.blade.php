@extends('layouts.frontend.app', ['title' => 'Kritik & Saran'])

@section('content')
<div class="container my-5" >
    <div class="container-fluid" style="padding: 150px 0 30px 0; ">
        <h1 style="text-align: center; padding: 25px 0 25px 0; box-shadow: #33333323 3px 5px 2px; border: #33333345 1px solid; background-color: white;">Kritik dan Saran</h1>
    </div>
    <section class="contact-area">
        <div class="container">
            <x-alert></x-alert>
            <div class="row">
                <!-- Contact Info -->
                <div class="col-12 col-lg-6">
                    <div class="contact--info mt-50">
                        <h4>Info Kontak</h4>
                        <ul class="contact-list">
                            <li>
                                <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> Jam Masuk</h6>
                                <h6>8:00 WIB - 13:00 WIB</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone fa-fw" aria-hidden="true"></i> No Telp</h6>
                                <h6>+1 123 321 456 654</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> Email</h6>
                                <h6>sd1trt@gmail.com</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-map-pin fa-fw" aria-hidden="true"></i> Alamat</h6>
                                <h6>Tarutung</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="contact--info mt-50 mb-50">
                        <h4>Tulis Pesan</h4>
                        <form method="POST" action="{{ route('kritiksaran.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="text" placeholder="Nama" value="{{ old('nama') }}">
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" id="message" cols="30" rows="5" placeholder="Pesan">{{ old('isi') }}</textarea>
                                        <small id="emailHelp" class="form-text text-muted">Maksimal kirim 5 kali dengan email yang sama</small>
                                        @error('isi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn clever-btn w-100" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
