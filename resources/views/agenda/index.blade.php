@extends('layouts.backend.app', [
    'title' => 'Daftar Agenda',
    'contentTitle' => 'Daftar Agenda'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatable') }}/dataTables.bootstrap4.min.css">
@endpush

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.agenda.create') }}" class="btn btn-primary btn-sm">Tambah Agenda</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped" id="agendaTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agendas as $agenda)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $agenda->judul }}</td>
                    <td>{{ $agenda->tgl_mulai }}</td>
                    <td>{{ $agenda->tgl_selesai }}</td>
                    <td>
                        <a href="{{ route('admin.agenda.show', $agenda->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('admin.agenda.edit', $agenda->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.agenda.destroy', $agenda->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/datatable') }}/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/datatable') }}/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#agendaTable').DataTable();
    });
</script>
@endpush
