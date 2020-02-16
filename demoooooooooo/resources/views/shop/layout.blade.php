<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('shop/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('shop/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('shop/css/agency.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->

@include('shop.core.navbar')

<!-- Header -->

@include('shop.core.header')

<!-- Services -->

@include('shop.core.service')

<!-- Portfolio Grid -->

@yield('content')

<!-- About -->
@include('shop.core.about')
<!-- Team -->

@include('shop.core.team')

<!-- Clients -->

@include('shop.core.client')

<!-- Contact -->

@include('shop.core.contact')

<!-- Footer -->

@include('shop.core.footer')

<!-- Modal 1 -->

@include('shop.core.devTeam')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('shop/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('shop/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('shop/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Contact form JavaScript -->
<script src="{{asset('shop/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('shop/js/contact_me.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('shop/js/agency.min.js')}}"></script>

</body>

</html>
