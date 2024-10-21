
@yield('scripts')
@include('includes.header')
    <div class="wrapper">

  @include('includes.sidebar')
        <div class="main">
            @include('includes.navbar')
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    @yield('content')
                </div> <!--/container-->
            </main>
@include('includes.footer')
