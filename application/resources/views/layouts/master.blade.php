<html>
    <head>
        <title>LaRose - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
           
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('scripts')
            <script src="{{ asset('js/app.js') }}"> </script>
        @show

    </body>
</html>