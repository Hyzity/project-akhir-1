@extends('layouts.backend.app',[
	'title' => 'Dashboard',
	'contentTitle' => 'Dashboard',
])
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>@count('users')</h3>

        <p>Admin</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-tie"></i>
      </div>
      <a href="{{ route('admin.users.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>@count('pengumuman')</h3>

        <p>Pengumuman</p>
      </div>
      <div class="icon">
        <i class="fas fa-info"></i>
      </div>
      <a href="{{ route('admin.pengumuman.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>@count('agenda')</h3>

        <p>Jadwal</p>
      </div>
      <div class="icon">
        <i class="fas fa-list"></i>
      </div>
      <a href="{{ route('admin.jadwal.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  
  <div class="col-lg-4 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>@count('guru')</h3>
        <p>Guru</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-graduate"></i>
      </div>
      <a href="{{ route('admin.guru.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>@count('fasilitas')</h3>
        <p>Fasilitas</p>
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-building"></i>
      </div>
      <a href="{{ route('admin.fasilitas.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>@count('prestasi')</h3>
        <p>Prestasi</p>
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-trophy"></i>
      </div>
      <a href="{{ route('admin.prestasi.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

</div>
<!-- /.row -->
@stop