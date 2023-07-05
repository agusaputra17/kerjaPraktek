    <!-- Sidebar Start -->
    <aside class="left-sidebar bg-success">
        <!-- Sidebar scroll-->
        <div>
            <div class="mt-3 brand-logo d-flex align-items-center justify-content-between">
                <a href="{{ asset('/index.html') }}" class="text-nowrap logo-img">
                    <img src="{{ asset('assets/images/logo-kejari.png') }}" width="120" alt="" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/" aria-expanded="false">
                            <span>
                                <i class="ti ti-layout-dashboard"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Data</span>
                    </li>
                    <li class="sidebar-item dropdown">
                        <a class="sidebar-link" href="javascript:void(1)" id="drop3" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span>
                                <i class="ti ti-book"></i>
                            </span>
                            <span class="hide-menu">Buku Register</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-start dropdown-menu-animate-up" aria-labelledby="drop3">
                            <div class="message-body">
                                <a href="/books" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-book-2 fs-6"></i>
                                    <p class="mb-0 fs-3">Penegakkan Hukum</p>
                                </a>
                                <a href="javascript:void(1)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-book-2 fs-6"></i>
                                    <p class="mb-0 fs-3">Bantuan Hukum</p>
                                </a>
                                <a href="javascript:void(1)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-book-2 fs-6"></i>
                                    <p class="mb-0 fs-3">Bantuan Hukum Perkara Khusus</p>
                                </a>
                                <a href="javascript:void(1)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-book-2 fs-6"></i>
                                    <p class="mb-0 fs-3">Pelayanan Hukum</p>
                                </a>
                                <a href="javascript:void(1)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-book-2 fs-6"></i>
                                    <p class="mb-0 fs-3">Pertimbangan Hukum</p>
                                </a>
                                <a href="javascript:void(1)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-book-2 fs-6"></i>
                                    <p class="mb-0 fs-3">Tindakan Hukum Lain</p>
                                </a>
                                <a href="javascript:void(1)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-book-2 fs-6"></i>
                                    <p class="mb-0 fs-3">Pemulihan Keuangan/Kekayaan Negara</p>
                                </a>
                                <a href="javascript:void(1)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-book-2 fs-6"></i>
                                    <p class="mb-0 fs-3">Penyelamatan Keuanga/Kekayaan Negara</p>
                                </a>
                            
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/laporan" aria-expanded="false">
                            <span>
                                <i class="ti ti-file-description"></i>
                            </span>
                            <span class="hide-menu">Laporan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/instansi" aria-expanded="false">
                            <span>
                                <i class="ti ti-building"></i>
                            </span>
                            <span class="hide-menu">Instansi</span>
                        </a>
                    </li>

         
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">AUTH</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/admin" aria-expanded="false">
                            <span>
                                <i class="ti ti-user"></i>
                            </span>
                            <span class="hide-menu">Admin</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/login" aria-expanded="false">
                            <span>
                                <i class="ti ti-logout"></i>
                            </span>
                            <span class="hide-menu">Logout</span>
                        </a>
                    </li>


            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
