@include('layouts.top-includes')

<body>


    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- ======= Sidebar ======= -->
    @include('layouts.side-bar')
    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->
    @include('layouts.footer')
