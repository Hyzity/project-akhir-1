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

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #860000; position: fixed; top: 100px; width: 100%; z-index: 999;">
    <a class="navbar" href="/" style="color: white;">SDN 173100 Tarutung</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/" style="color: white;">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}" style="color: white;">Tentang Sekolah</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                    Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a>
                    <a class="dropdown-item" href="{{ route('contact') }}">Kritik dan Saran</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('fasilitas') }}" style="color: white;">Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('artikel') }}" style="color: white;">Artikel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pengumuman') }}" style="color: white;">Pengumuman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guru') }}" style="color: white;">Guru</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" style="color: white;">Agenda</a>
            </li>
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userName" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
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
@media (max-width: 768px) {
    .header-content {
        flex-direction: column;
    }
    .header-content > div {
        margin-bottom: 10px;
    }
    .navbar-toggler {
        margin-right: 15px;
    }
    .navbar-nav {
        text-align: center;
    }
    .navbar-nav .nav-item {
        margin: 5px 0;
    }
}
</style>
