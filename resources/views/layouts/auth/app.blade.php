<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>SSH | @yield('title')</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/favicons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/favicons/apple-touch-icon-180x180.png') }}">
        <link rel="stylesheet" id="css-main" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/css/codebase.min.css') }}">
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">
            {{-- <!-- Main Container --> --}}
            <main id="main-container">
                {{-- <!-- Page Content --> --}}
                @yield('content')                
                {{-- <!-- END Page Content --> --}}
            </main>
            {{-- <!-- END Main Container --> --}}
        </div>
        {{-- <!-- END Page Container --> --}}
        
        {{-- <!-- Codebase Core JS --> --}}
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.min.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/bootstrap.bundle.min.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.slimscroll.min.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.scrollLock.min.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.appear.min.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.countTo.min.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/js.cookie.min.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/codebase.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/pages/op_auth_signup.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/pages/op_auth_signin.js') }}"></script>
    </body>
</html>
