<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruit Store</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

        <!-- Libraries Stylesheet -->
        <link href="{{asset('bootstrap/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('lib/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        <style>


        </style>

    </head>

    <body>

        @include('front.layout.navbar')

        @yield('content')

        @include('front.layout.footer')

        
    <!-- JavaScript Libraries -->
    <script src="{{asset('jquery/jquery.js')}}"></script>
    <script src="{{asset('bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('lib/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/lightbox.min.js')}}"></script>
    <script src="{{asset('lib/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    </body>

</html>