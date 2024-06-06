<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div style="background-color: white; position: fixed; top: 0; left: 0; right: 0; padding: 0 15px; z-index: 1000;">
    <header class="header-container" style="text-align: center;">
        <div class="header-content" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
            <div class="container tut" style="flex: 1; text-align: center;">
                <img src="{{asset('img/bg/tut.png')}}" alt="Left Image" style="height: 100px; object-fit: contain; width: 150px;">
            </div>
            <div style="margin: 0 10px; font-weight: 500; font-size: 20px; text-align: center;">
                <h1 style="margin: 0;">SD Negeri 173100</h1>
                <h1 style="margin: 0;">TARUTUNG</h1>
            </div>
            <div class="container sd" style="flex: 1; text-align: center;">
                <img src="{{asset('img/bg/sd1.png')}}" alt="Right Image" style="height: 100px; object-fit: contain;">
            </div>
        </div>
    </header>
</div>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom" style="background-color: #860000; position: fixed;  width: 100%; z-index: 999; padding: 0.5rem 2rem; ">
    <a class="navbar-brand" href="/" style="color: white; font-size: 1.5rem;">SDN 173100 Tarutung</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/" style="color: white; font-size: 1.0rem;">Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 1.0rem; cursor: pointer;">
                    Profil
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item dropdown-toggle" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
                        Tentang Sekolah
                    </a>
                    <ul class="dropdown-menu nested-dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ route('visimisi') }}">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('akreditas') }}">Akreditas</a></li>
                    </ul>
                    <a class="dropdown-item" href="{{ route('guru') }}" style="cursor: pointer;">Guru</a>
                    <a class="dropdown-item" href="{{ route('prestasi') }}" style="cursor: pointer;">Prestasi</a>
                    <a class="dropdown-item" href="{{ route('fasilitas') }}" style="cursor: pointer;">Fasilitas</a>
                    <a class="dropdown-item" href="{{ route('ekstrakurikuler') }}" style="cursor: pointer;">Ekstrakurikuler</a>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="{{ route('pengumuman') }}" style="color: white; font-size: 1.0rem;">Pengumuman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('jadwal') }}" style="color: white; font-size: 1.0rem;">Jadwal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kritiksaran') }}" style="color: white; font-size: 1.0rem;">Kritik dan Saran</a>
            </li>
            @auth
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}" style="color: white; font-size: 1.0rem;"><i class="bi bi-key"></i></a>
            </li>
            @endauth
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userName" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 1.0rem;">
                    {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                    <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </li>
            @endauth
        </ul>
    </div>
</nav>

<style>
    .navbar-custom .navbar-nav .dropdown-menu {
        background-color: #860000;
    }

    .navbar-custom .navbar-nav .dropdown-menu .dropdown-item {
        color: white;
    }

    .navbar-custom .navbar-nav .dropdown-menu .dropdown-item:hover {
        background-color: #6e0000;
    }

    .nested-dropdown-menu {
        position: absolute;
        top: 0;
        left: 100%;
        margin-top: -1px;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
</style>