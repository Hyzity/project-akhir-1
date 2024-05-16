<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('img/icons') }}/sd1.png" alt="laravel Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">SD Negeri 173100</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MANAGE DATA</li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}"
                        class="nav-link {{ Request::segment(2) == 'users' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.artikel.index') }}"
                        class="nav-link {{ Request::segment(2) == 'artikel' ? 'active' : '' }}">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Artikel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.kategori-artikel.index') }}"
                        class="nav-link {{ Request::segment(2) == 'kategori-artikel' ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>
                            Kategori Artikel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pengumuman.index') }}"
                        class="nav-link {{ Request::segment(2) == 'pengumuman' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            Pengumuman
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.agenda.index') }}"
                        class="nav-link {{ Request::segment(2) == 'agenda' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>
                            Jadwal
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.guru.index') }}"
                        class="nav-link {{ Request::segment(2) == 'guru' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Guru
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.fasilitas.index') }}"
                        class="nav-link {{ Request::segment(2) == 'fasilitas' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Fasilitas
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.prestasi.index') }}"
                        class="nav-link {{ Request::segment(2) == 'prestasi' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-trophy"></i>
                        <p>
                            Prestasi
                        </p>
                    </a>
                </li>

                <li class="nav-header">PENGATURAN</li>
                <li class="nav-item">
                    <a href="{{ route('admin.profile.index') }}"
                        class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.change-password.index') }}"
                        class="nav-link {{ Request::is('admin/change-password') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-unlock"></i>
                        <p>
                            Ubah Password
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
