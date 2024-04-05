<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{route('admin.dashboard')}}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    @if(Auth::guard('admin')->check())
        @if(Auth::guard('admin')->user()->role_id == 2) 
        {{-- agent  --}}
            <div class="search-bar">
                <h2 style="color: #4154f1">Wellcome Back : {{ Auth::guard('admin')->user()->name }}</h2>
            </div><!-- End Search Bar -->
        @else 
        {{-- admin  --}}
            <div class="search-bar">
                <h2 style="color: #f13d25">Wellcome Back : {{ Auth::guard('admin')->user()->name }}</h2>
            </div><!-- End Search Bar -->
        @endif
    @endif

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/icon.png') }}" alt="Profile" class="rounded-circle">
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        @if(Auth::guard('admin')->check())
                        <span>{{ Auth::guard('admin')->user()->name }}</span>
                        @else
                        <span>Guest</span>
                        @endif
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    @if(Auth::guard('admin')->check())
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.invite_colleage') }}">
                                <i class="bi bi-person"></i>
                                <span>Invite Colleage</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                    @endif


                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('admin.logout')}}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>


                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
