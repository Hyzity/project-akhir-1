@extends('layouts.frontend.app', [
    'title' => 'Detail Pengumuman',
])
@section('content')
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3 height-100">
    </div>

    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="col-12 col-lg-8">
                <div class="blog-details-content section-padding-100">
                    <div class="blog-details-text">
                        <h3>{{ $pengumuman->judul }}</h3>
                        <br>
                        <div id="description">
                            {{ $pengumuman->deskripsi }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-lg-4">
                <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 100%;">
                    <a href="{{ route('pengumuman') }}"
                        class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                        <span class="fs-5 fw-semibold">List Pengumuman</span>
                    </a>
                    <div class="list-group list-group-flush border-bottom scrollarea">
                        @foreach($list_pengumuman as $item)
                        <a href="{{ route('pengumuman.show', $item->id) }}" class="list-group-item list-group-item-action py-3 lh-tight">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">{{ $item->judul }}</strong>
                                <small>{{ $item->tgl }}</small>
                            </div>
                            <div class="col-10 mb-1 small">{!! Str::limit($item->deskripsi) !!}</div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
