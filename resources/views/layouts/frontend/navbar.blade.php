<div class="classy-navbar justify-content-between align-items-center" id="cleverNav" style="background-color: white; position: fixed; top: 0; left: 0; right: 0; padding: 85px;">
    <header class="header-container" style="text-align: center;">
        <div class="header-content" style="display: flex; margin: 0 200px 55px 200px; padding: 0 0 5px 0;">
            <div class="container tut" style="flex: 1;">
                <img src="img/bg/tut.png" alt="Left Image" style="height: 100px; object-fit: contain; width: 150px;">
            </div>
            <div class="" style="margin: 0 50px 0 50px ; font-weight: 500; font-size: 39px; ">
                <h1 class="">SD Negeri 173100</h1>
                <h1 class="">TARUTUNG</h1>
            </div>
            <div class="container sd" style="flex: 1;">
                <img src="img/bg/sd1.png" alt="Right Image" style="height: 110px; object-fit: contain;">
            </div>
        </div>
    </header>
</div>

<div class="classy-navbar justify-content-between align-items-center" id="cleverNav" style="background-color: #860000; position: fixed; top: 100px; width: 100%;">
    <!-- Logo -->

    <a class="nav-brand" href="/" style="color: white;"><img src="" width="50" alt=""> SDN 173100 Tarutung</a>

    <!-- Navbar Toggler -->
    <div class="classy-navbar-toggler">
        <span class="navbarToggler"><span></span><span></span><span></span></span>
    </div>

    <!-- Menu -->
    <div class="classy-menu" style="margin: 0 auto;">

        <!-- Close Button -->
        <div class="classycloseIcon">
            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
        </div>

        <!-- Nav Start -->
        <div class="classynav">
            <ul style="display: flex; justify-content: center;">
                <li><a style="color: white;" href="/" class="{{ Request::is('/') || Request::is('home') ? 'text-primary' : '' }}">Home</a></li>
                <li><a style="color: white;" href="{{ route('about') }}" class="{{ Request::is('about') ? 'text-primary' : '' }}">Tentang Sekolah</a></li>
                <li class="dropdown">
                    <a style="color: white;" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                        <a class="dropdown-item" href="{{ route('ekstrakurikuler') }}" >ekstrakurikuler</a>
                        <a class="dropdown-item" href="{{ route('fasilitas') }} " class="{{ Request::is('fasilitas') ? 'text-primary' : '' }}">Fasilitas</a>
                        <a class="dropdown-item" href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'text-primary' : '' }}">Kritik dan Saran</a>
                    </div>
                </li>
                <li><a style="color: white;" href="{{ route('artikel') }}" class="{{ Request::segment(1) == 'artikel' ? 'text-primary' : '' }}">Artikel</a></li>
                <li><a style="color: white;" href="{{ route('pengumuman') }}" class="{{ Request::segment(1) == 'pengumuman' ? 'text-primary' : '' }}">Pengumuman</a></li>
                <li><a style="color: white;" href="{{ route('guru') }}" class="{{ Request::segment(1) == 'guru' ? 'text-primary' : '' }}">Guru</a></li>
                <li><a style="color: white;" href="" class="{{ Request::is('agenda') ? 'text-primary' : '' }}">Agenda</a></li>
                @auth
                <div class="login-state d-flex align-items-center">
                    <div class="user-name mr-30">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endauth
            </ul>
            
        </div>
        

    </div>
    <!-- Nav End -->
</div>
</div>