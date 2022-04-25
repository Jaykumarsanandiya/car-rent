<!DOCTYPE html>
<html lang="en">

<head>

    <title>Car Rental Website </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('car-rental/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('car-rental/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('car-rental/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('car-rental/css/owl.theme.default.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('car-rental/css/style.css') }}">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="/fleet" class="navbar-brand">Car Rental Website</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li class="active"><a href="/fleet">Home</a></li>
                    <li><a href="/fleet">Fleet</a></li>
       
                    <li><a href="/about">About</a></li>
                    
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>

        </div>
    </section>
