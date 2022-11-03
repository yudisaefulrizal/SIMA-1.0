<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    My Post
                </a>
            </li>

        </ul>
        {{-- @can('admin') --}}
        <ul class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <h6>Asatidz</h6>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="grid" class="align-text-bottom"></span>
                    Pelajaran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="clipboard" class="align-text-bottom"></span>
                    Kelas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="bar-chart" class="align-text-bottom"></span>
                    Statistik
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-mail-bulk"></i>
                    <p>
                        Transaksi Surat
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview bg-secondary">
                    <li class="nav-item">
                        <a href="/suratmasuk/index" class="nav-link text-white">
                            <i class="far fa-envelope nav-icon"></i>
                            <p>Surat Masuk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/suratkeluar/index" class="nav-link text-white">
                            <i class="far fa-envelope-open nav-icon"></i>
                            <p>Surat Keluar</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="book-open" class="align-text-bottom"></span>
                    Pelajaran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="bookmark" class="align-text-bottom"></span>
                    Absensi
                </a>
            </li>
            <ul class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <h6>Staff Media</h6>
            </ul>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="bookmark" class="align-text-bottom"></span>
                    Order
                </a>
            </li>
            <ul class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <h6>Staff IT</h6>
            </ul>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="bookmark" class="align-text-bottom"></span>
                    Order
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="battery-charging" class="align-text-bottom"></span>
                    Maintenance
                </a>
            </li>
        </ul>

        {{-- @endcan --}}
        {{-- @can('admin') --}}
        <ul class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <h6>Wali Santri</h6>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="grid" class="align-text-bottom"></span>
                    Pembayaran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="clipboard" class="align-text-bottom"></span>
                    Perkembangan Santri
                </a>
            </li>

        </ul>
        {{-- @endcan --}}
        @can('admin')
            <ul class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <h6>Administrator</h6>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                        href="/dashboard/categories">
                        <span data-feather="grid" class="align-text-bottom"></span>
                        Post Categoris
                    </a>
                </li>

            </ul>
        @endcan
    </div>

</nav>
