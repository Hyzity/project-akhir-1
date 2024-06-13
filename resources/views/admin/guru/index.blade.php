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
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Pendidikan</th>
                                <th>Status</th>
                                <th>Aksi</th>
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
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        <div class="row ml-2">
                                            <a href="{{ route('admin.guru.edit', $data->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit fa-fw"></i>
                                            </a>
                                            @if($data->status == 'non_aktif')
                                                <a href="{{ route('admin.guru.activate', $data->id) }}" class="btn btn-success btn-sm">
                                                    <i class="fas fa-check fa-fw"></i>
                                                </a>
                                            @else
                                            <a href="{{ route('admin.guru.deactivate', $data->id) }}" class="btn btn-danger btn-sm"
                                                onclick="return confirmStatusChange('deactivate');">
                                                 <i class="fas fa-ban fa-fw"></i>
                                             </a>
                                            @endif
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
        function confirmStatusChange(action) {
        var message = "Apakah Anda yakin ingin ";
        message += (action === 'activate') ? "mengaktifkan" : "menonaktifkan";
        message += " status guru ini?";
        return confirm(message);
    }
</script>
    </script>
@endpush
