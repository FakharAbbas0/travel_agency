<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        @if (Auth::guard('admin')->check())

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            @if (Auth::guard('admin')->user()->role_id == 2)
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#quotes" data-bs-toggle="collapse" href="#"
                        aria-expanded="false">
                        <i class="bi bi-layout-text-window-reverse"></i><span>Quotes & Purposals</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="quotes" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
                        <li>
                            <a href="{{ route('admin.proposals.create') }}">
                                <i class="bi bi-circle"></i><span>Create new proposal</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.proposals.index') }}">
                                <i class="bi bi-circle"></i><span>View History</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        @else
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

        @endif



        <!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
