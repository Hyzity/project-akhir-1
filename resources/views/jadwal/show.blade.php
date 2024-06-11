@extends('layouts.frontend.app', [
    'title' => 'List Jadwal',
])

@section('content')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dist/css/dropify.min.css') }}">
<style>
    .card-border {
        border: 1px solid #33333345;
        box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.2);
    }
</style>
@endpush

<div class="container">
    <div style="padding-top: 200px;">
        <h1 style="text-align: center; padding: 25px 0; box-shadow: #33333323 3px 5px 2px; border: #33333345 1px solid; background-color: white;">
            Jadwal Kelas
        </h1>
    </div>
    <div class="row mt-5">
        @foreach($hari as $index => $jadwal)
            <div class="col-md-6">
                <div class="card card-border">
                    <div class="card-body table-responsive" style="margin-top: 20px;">
                        <h2 style="margin: 0; text-transform: capitalize;">{{ $jadwal->nama_hari }}</h2>
                        <table id="dataTable{{ $index }}" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu</th>
                                    <th>Pelajaran</th>
                                    <th>Guru</th>
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
                                        <td>{{ isset($namaguru[$mp->id]) ? $namaguru[$mp->id]->nama : 'Tidak ada guru' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if ($index % 2 == 1)
                </div><div class="row mt-5">
            @endif
        @endforeach
    </div>
</div>

@endsection

@push('js')
<script src="{{ asset('plugins/dropify/dist/js/dropify.min.js') }}"></script>
@endpush
