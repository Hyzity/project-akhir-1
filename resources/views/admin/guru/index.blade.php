@extends('layouts.backend.app', [
    'title' => 'Manage Guru',
    'contentTitle' => 'Manage Guru',
])
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
    <x-alert></x-alert>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.guru.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
                <div class="card-body table-responsive">
                    <table id="dataTable1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Bidang Keahlian</th>
                                <th>tempat_lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Pendidikan</th>
                                <th>Admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($guru as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset('uploads/img/guru/' . $data->foto) }}" alt="Foto Guru"
                                            style="max-width: 100px;"></td> <!-- Menampilkan foto guru -->
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->bidang_keahlian }}</td>
                                    <td>{{ $data->tempat_lahir }}</td>
                                    <td>{{ $data->tgl_lahir }}</td>
                                    <td>{{ $data->pendidikan }}</td>
                                    <td>
                                        <div class="row ml-2">
                                            <a href="{{ route('admin.guru.edit', $data->id) }}"
                                                class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                            <form method="POST" action="{{ route('admin.guru.destroy', $data->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                                    class="btn btn-danger btn-sm ml-2"><i
                                                        class="fas fa-trash fa-fw"></i></button>
                                            </form>
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
