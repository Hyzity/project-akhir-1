<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('img/icons') }}/sd1.png" alt="laravel Logo" class="brand-image elevation-3">
        <span class="brand-text font-weight-light">SDN 173100 Tarutung</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                    <a href="{{ route('admin.users.index') }}" class="nav-link {{ Request::segment(2) == 'users' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pengumuman.index') }}" class="nav-link {{ Request::segment(2) == 'pengumuman' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            Pengumuman
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ Request::segment(2) == 'jadwal' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>
                            Jadwal
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <!-- resources/views/partials/navbar.blade.php -->
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.jadwal.index') }}" class="nav-link {{ Request::segment(3) === null ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Semua Kelas</p>
                            </a>
                        </li>
                        @foreach($kelas as $item)
                        <li class="nav-item">
                            <a href="{{ route('admin.jadwal.showhari', $item->id) }}" class="nav-link {{ Request::segment(3) == $item->id ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ 'Kelas ' . $item->nama_kelas }}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{ route('admin.guru.index') }}" class="nav-link {{ Request::segment(2) == 'guru' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Guru
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.fasilitas.index') }}" class="nav-link {{ Request::segment(2) == 'fasilitas' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Fasilitas
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.prestasi.index') }}" class="nav-link {{ Request::segment(2) == 'prestasi' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-trophy"></i>
                        <p>
                            Prestasi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.kritiksaran.index') }}" class="nav-link {{ Request::segment(2) == 'kritiksaran' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>
                            Kritik & Saran
                        </p>
                    </a>
                </li>

                <li class="nav-header">PENGATURAN</li>
                <li class="nav-item">
                    <a href="{{ route('admin.profile.index') }}" class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.change-password.index') }}" class="nav-link {{ Request::is('admin/change-password') ? 'active' : '' }}">
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