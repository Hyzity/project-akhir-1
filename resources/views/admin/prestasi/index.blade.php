@extends('layouts.backend.app', [
    'title' => 'Manage Prestasi',
    'contentTitle' => 'Manage Prestasi',
])
@push('css')
    <link rel="stylesheet"
        href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
    <x-alert></x-alert>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
                <div class="card-body table-responsive">
                    <table id="dataTable1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 40%">Deskripsi</th>
                                <th style="width: 20%">Judul</th>
                                <th style="width: 20%">Gambar</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($prestasi as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td><img src="{{ asset('img/prestasi/' . $data->gambar) }}" alt="Gambar Prestasi"
                                            style="max-width: 100px;"></td>

                                    <td>
                                        <div class="row sm-2 text-center">
                                            <div class="col">
                                                <a href="{{ route('admin.prestasi.edit', $data->id) }}"
                                                    class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                            </div>
                                            <div class="col">
                                                <form action="{{ route('admin.prestasi.destroy', $data->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                                        class="btn btn-danger btn-sm "><i
                                                            class="fas fa-trash fa-fw"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <!-- DataTables -->
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js">
    </script>
    <script>
        $(function() {
            $("#dataTable1").DataTable();
        });
    </script>
@endpush
