@extends('layouts.backend.app',[
    'title' => 'jadwal',
    'contentTitle' => 'Jadwal Kelas',
])

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Box Artikel</h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.jadwal.updatePelajaran', $pelajaran->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="mata_pelajaran">Mata Pelajaran</label>
                <input  type="text" name="mata_pelajaran" placeholder="" Value = "{{ old('mata_pelajaran', $pelajaran->mata_pelajaran) }}"class="form-control">
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </div>
        </form>
    </div>
</div>
@endsection