<html>
    <head>
        <title>@yield('title')</title>
            @include('layouts.web.header')     
        <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>    
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.web.header')    
    </body>
</html>