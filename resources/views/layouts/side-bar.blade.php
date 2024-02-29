<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#books-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Books</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="books-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('books.index') }}">
                        <i class="bi bi-circle"></i><span>All Books</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('books.create') }}">
                        <i class="bi bi-circle"></i><span>New Book</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Books Nav -->
        <li class="nav-item">
            <a class="nav-link " data-bs-target="#questions-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Questions</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="questions-nav" class="nav-content  " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('questions.index') }}" class="active">
                        <i class="bi bi-circle"></i><span>All Questions</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('questions.create') }}">
                        <i class="bi bi-circle"></i><span>New Question</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Questions Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('blank_page')}}">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
