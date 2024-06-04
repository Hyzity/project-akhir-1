@extends('layouts.frontend.app', [
'title' => 'List Guru',
])

@section('content')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
@section('content')




@foreach($hari as $jadwal)

<div class="row mt-5" style="padding-top: 100px;" >
    <div class="col">
        <div class="card">
            <div class="card-header row">

            </div>
            <div class="card-body table-responsive">
                <h1>{{ $jadwal->nama_hari }}</h1>

                <table id="dataTable1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Waktu</th>
                            <th>Pelajaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach($pelajaran[$jadwal->id] as $index => $mp)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $waktu[$index] }}</td>
                            <td>{{ $mp->mata_pelajaran }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


@endforeach
@endsection