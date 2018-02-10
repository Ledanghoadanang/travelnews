<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechNews - HTML and CSS Template</title>

    <!-- favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{ asset('fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="{{ asset('css/mobile-menu.css') }}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">

<!--Header Session-->
@include('layouts.frontend.header_session')
@yield('feature_news_session')
<!--Features New Session-->

@yield('breadcrumb')

<section id="category_section" class="category_section">
<div class="container">
<div class="row">
<div class="col-md-8">
  @yield('index')
</div>
<!-- Left Section -->

<div class="col-md-4">
    @include('layouts.frontend.category_rightside_section')
</div>
<!-- Right Section -->

</div>
<!-- Row -->

</div>
<!-- Container -->

</section>
<!-- Category News Section -->

<section id="video_section" class="video_section">
    @yield('video')
</section>
<!-- Video News Section -->

<section id="subscribe_section" class="subscribe_section">
    @include('layouts.frontend.subcribles_session')
</section>
<!-- Subscriber Section -->

<section id="footer_section" class="footer_section">
    @include('layouts.frontend.footer_section')
</section>
</div>
<!-- #content-wrapper -->

</div>
<!-- .offcanvas-pusher -->

<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<div class="uc-mobile-menu uc-mobile-menu-effect">
    @include('layouts.frontend.uc_mobile')
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->

<!-- jquery Core-->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- Theme Menu -->
<script src="{{ asset('js/mobile-menu.js') }}"></script>

<!-- Owl carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<!-- Theme Script -->
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
