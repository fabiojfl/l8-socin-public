<!doctype html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ (Session::get('layout')=='rtl' ? 'rtl' : 'ltr') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')"/>
    <title>Socinveste @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset( 'assets/css/plugin' . Helper::rlt_ext() . '.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style' . Helper::rlt_ext() . '.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/variables' . Helper::rlt_ext() . '.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app' . Helper::rlt_ext() . '.min.css') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.ico') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
    <!-- Styles -->
    @livewireStyles
</head>
          
  
<body class="layout-light side-menu">
    @livewire('standard-components.mobile-search')
    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <!-- partials._top_nav --> 
        @livewire('standard-components.nav-bar')
        <!-- end partials._top_nav --> 
    </header>
    <main class="main-content">
        @livewire('standard-components.sidebar')
        <div class="contents">
        <!-- yield(content) -->
        {{ $slot }}
        <!-- end yield(content) -->
        </div>
        @livewire('standard-components.footer')
    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>
    <div class="customizer-wrapper"> 
    <!-- partials._customizer -->
    <div class="customizer">
        <div class="customizer__head">
            <h4 class="customizer__title">Customizer</h4>
            <span class="customizer__sub-title">Customize your overview page layout</span>
            <a href="#" class="customizer-close">
                <img class="svg" src="{{ asset('assets/img/svg/close.svg') }}" alt="">
            </a>
        </div>
        <div class="customizer__body">
            
            <div class="customizer__single">
                
            </div>
            <div class="customizer__single">
                
            </div>
        </div>
    </div>
    <!-- end partials._customizer -->
    <!-- scripts -->
    @livewireScripts
    <script>
        var env = {
            iconLoaderUrl: "{{ asset('assets/js/json/icons.json') }}",
            googleMarkerUrl: "{{ asset('assets/img/markar-icon.png') }}",
            editorIconUrl: "{{ asset('assets/img/ui/icons.svg') }}",
            mapClockIcon: "{{ asset('assets/img/svg/clock-ticket1.sv') }}g"
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
</body>
</html>
