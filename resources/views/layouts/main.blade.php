@include('partials.meta')

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        @include('partials.side')

        @include('partials.nav')

        @yield('content')

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    @include('partials.footer')