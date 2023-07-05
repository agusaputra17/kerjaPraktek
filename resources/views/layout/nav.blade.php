<!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment('1')=='' || request()->segment('1')==('home') ? 'active' : '' }}" aria-current="page" href="{{ url('home') }}">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->segment('1')=='' || request()->segment('1')==('books') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-book"></i> Register
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('books') }}">R.Datun 1</a></li>
                            <li><a class="dropdown-item" href="#">R.Datun 2</a></li>
                            <li><a class="dropdown-item" href="#">R.Datun 3</a></li>
                            <li><a class="dropdown-item" href="#">R.Datun 4</a></li>
                            <li><a class="dropdown-item" href="#">R.Datun 5</a></li>
                            <li><a class="dropdown-item" href="#">R.Datun 6</a></li>
                            <li><a class="dropdown-item" href="#">R.Datun 7</a></li>
                            <li><a class="dropdown-item" href="#">R.Datun 8</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">blablabla</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cog"></i> Setting
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">
                                    <i class="fas fa-building"></i> Profil</a></li>
                            <li><a class="dropdown-item" href="#">
                                    <i class="fas fa-user"></i> Admin</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#">
                                    <i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="#">SISTEM PENCATATAN BUKU REGISTER PERDATA DAN TATA USAHA NEGARA</a>
        </div>
    </nav>
    <!-- end of navbar -->
