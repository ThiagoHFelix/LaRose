<!DOCTYPE html>
<html>
    <head>
        <title>LaRose - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        @section('head')
        
        @show

    </head>
    <body class="sidebar-toggled">
        @section('sidebar')
           
        @show

        <div id="app" >
   
                @yield('content')
   
        </div>

        @section('scripts')
            <script src="{{ asset('js/app.js') }}"> </script>
          <!-- <script src="{{ asset('js/bootstrap.js') }}"> </script> -->
            <script src="{{ asset('js/sb-admin-2.js') }}"> </script> 
          <!--  <script src="{{ asset('js/jquery_easing.js') }}"> </script> -->
          <!-- <script src="{{ asset('js/jquery.js') }}"> </script> -->
            
            
           
        @show

    </body>
</html>