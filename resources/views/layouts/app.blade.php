<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Welcome</title>

        {{-- <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content=""> --}}

        @include('layouts._partials.css')
    </head>
    <body>

        <div id="page-container" class="sidebar-o {{-- sidebar-mini --}} sidebar-inverse side-scroll page-header-inverse {{-- main-content-narrow --}}">
            
            @include('layouts._partials.sidebar')

            @include('layouts._partials.header')

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">

                    @yield('content')
                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            @include('layouts._partials.footer')
        </div>
        <!-- END Page Container -->
        @include('layouts._partials.js')
    </body>
</html>