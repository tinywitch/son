@extends('layouts.frame')
@section('insidesection')
    <div class="banner">

    </div>
    <div class="header">
        <div class="container">
            <div class="header-menu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand logo">
                                <h1><a href="index.html"><span>Valkyria  </span> Hotel</a></h1>
                            </div>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="index.html" data-hover="Home">Home </a></li>
                                <li><a href="about.html" data-hover="About">About</a></li>
                                <li class="active"><a data-hover="Restaurant" href="restaurant.html">Restaurant</a></li>
                                <li><a data-hover="Gallery" href="gallery.html">Gallery</a></li>
                                <li><a data-hover="Rooms" href="rooms.html">Rooms</a></li>
                                <li><a  href="codes.html" data-hover="codes">Codes</a></li>
                                <li><a data-hover="Contact" href="contact.html">Contact</a></li>

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---header--->
    <div class="content">
        @yield('content')
    </div>
@endsection