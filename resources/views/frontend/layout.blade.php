@include('frontend.inc.header')
    <body>
        <div id="app">
            <the-nav></the-nav>
            @yield('content')
        </div>
    </body>
@include('frontend.inc.footer')
