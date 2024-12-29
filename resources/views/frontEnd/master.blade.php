<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Syed Salman Hayat - Portfolio</title>
    <meta name="description" content="Syed Salman Hayat - Portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEndAsset/assets')}}/images/salmanhayat-fi.png" height="32px" width="32px">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{asset('frontEndAsset/assets')}}/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('frontEndAsset/assets')}}/css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('frontEndAsset/assets')}}/css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('frontEndAsset/assets')}}/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('frontEndAsset/assets')}}/css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('frontEndAsset/assets')}}/css/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('frontEndAsset/assets')}}/css/style.css" type="text/css" media="all">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
@include('frontEnd.include.header')

<!-- main layout -->
<main class="content-3">

@yield('content')

    @include('frontEnd.include.footer')

</main>

<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

<!-- SCRIPTS -->
<script src="{{asset('frontEndAsset/assets')}}/js/jquery-1.12.3.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/jquery.easing.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/popper.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/infinite-scroll.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/slick.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/contact.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/validator.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/wow.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/morphext.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/parallax.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('frontEndAsset/assets')}}/js/custom.js"></script>

</body>
</html>
<?php
