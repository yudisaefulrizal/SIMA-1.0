<aside class="main-sidebar sidebar-dark-primary  elevation-3">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link" style="opacity: 1; background-color: #007bff !important;">
        <img src="../../dist/img/limen-mini.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: 1; background-color: #007bff !important;">
        <span class="brand-text text-light">SIMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard">
                        <span data-feather="home" class="align-text-bottom"></span>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        <p>
                            Tulisan Saya
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                        href="/dashboard/categories">
                        <span data-feather="grid" class="align-text-bottom"></span>
                        <p>
                            Kategori Tulisan
                        </p>
                    </a>
                </li>
                <li class="nav-header">MUDARRIS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-person-video2"></i>
                        <p>
                            Siswa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard/absen" class="nav-link">
                                <i class="bi bi-calendar-event"></i>
                                <p>Absensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="bi bi-clipboard-data"></i>
                                <p>Nilai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="bi bi-person-lines-fill"></i>
                                <p>Data Siswa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-book"></i>
                        <p>
                            Pelajaran
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="bi bi-calendar-event"></i>
                                <p>Jadwal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="bi bi-clipboard-data"></i>
                                <p>Nilai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="bi bi-calendar2-minus"></i>
                                <p>Rencana Pembelajaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MUHAFFIDZ</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-person-video2"></i>
                        <p>
                            Siswa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="bi bi-calendar-event"></i>
                                <p>Absensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="bi bi-clipboard-data"></i>
                                <p>Nilai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/siswa" class="nav-link">
                                <i class="bi bi-person-lines-fill"></i>
                                <p>Data Siswa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-book"></i>
                        <p>
                            Pelajaran
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="bi bi-calendar-event"></i>
                                <p>Jadwal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="bi bi-clipboard-data"></i>
                                <p>Nilai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="bi bi-calendar2-minus"></i>
                                <p>Rencana Pembelajaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">TIM MEDIA</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-basket3"></i>
                        <p>
                            Pesanan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="bi bi-basket2"></i>
                                <p>Daftar Pesanan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-calendar-week"></i>
                        <p>
                            Kegiatan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="bi bi-calendar-range-fill"></i>
                                <p>Rutin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="bi bi-calendar-range"></i>
                                <p>Non Rutin</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-clipboard"></i>
                        <p>
                            Template
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="bi bi-camera-video"></i>
                                <p>Vidio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="bi bi-camera"></i>
                                <p>Gambar</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">TIM IT</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-basket3"></i>
                        <p>
                            Pesanan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="bi bi-basket2"></i>
                                <p>Daftar Pesanan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-calendar-week"></i>
                        <p>
                            Kegiatan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="bi bi-calendar-range-fill"></i>
                                <p>Rutin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="bi bi-calendar-range"></i>
                                <p>Non Rutin</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
