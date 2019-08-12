<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TooGood App</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Top Navigation -->

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="img/logo-icon.svg">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{url('chef')}}">DASHBOARD <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{url('User_profile')}}">MY PROFILE</a>
            {{--<a class="nav-item nav-link" href="{{url('recipe')}}">RECIPE</a>--}}
            {{--<a class="nav-item nav-link" href="#">SCHEDULE</a>--}}
            <a class="nav-item nav-link" href="#">ACCOUNT</a>
            <!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
        </div>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="logout">Logout</button>
    </form>
</nav>


<!-- Side Navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#">About TooGood</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#">How Do I ...?</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#">Help & Self-service</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#">Contact</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#">Logout</a>
        </li>
    </ul>
</nav>


@yield('content')

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/stylish-portfolio.min.js"></script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>

</body>

</html>
