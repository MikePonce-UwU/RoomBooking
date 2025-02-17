<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Holiday Crown | Best hotel in Dubai</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />

    <!-- uniform -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/uniform/css/uniform.default.min.css') }}" />

    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/wow/animate.css') }}" />


    <!-- gallery -->
    <link rel="stylesheet" href="{{ asset('assets/gallery/blueimp-gallery.min.css') }}">


    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    @livewireStyles
</head>

<body id="home">


    <!-- top
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

    <!-- header -->
    <nav class="navbar  navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('public.inicio') }}"><img src="{{ asset('images/logo.png') }}"
                        alt="holiday crown"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">
                    <li><a href="{{ route('public.inicio') }}">Home </a></li>
                    <li><a href="{{ route('public.rooms-tariff') }}">Rooms & Tariff</a></li>
                    <li><a href="{{ route('public.introduction') }}">Introduction</a></li>
                    <li><a href="{{ route('public.gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('public.contact') }}">Contact</a></li>
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                            <li><a>Or</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @else
                        @if (auth()->user()->roles->contains(1))
                            <li><a href="{{ route('admin.home') }}">Home</a></li>
                        @else
                            <li>
                                Logged

                            </li>
                        @endif
                    @endguest
                </ul>
            </div><!-- Wnavbar-collapse -->
        </div><!-- container-fluid -->
    </nav>
    @yield('contenido')
    <footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>Holiday Crown</h4>
                    <p>Holiday Crown was these three and songs arose whose. Of in vicinity contempt together in possible
                        branched. Assured company hastily looking garrets in oh. Most have love my gone to this so.
                        Discovered interested prosperous the our affronting insipidity day. Missed lovers way one vanity
                        wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened
                        mrs any sensible. </p>
                </div>

                <div class="col-sm-3">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('public.rooms-tariff') }}">Rooms & Tariff</a></li>
                        <li><a href="{{ route('public.introduction') }}">Introduction</a></li>
                        <li><a href="{{ route('public.gallery') }}">Gallery</a></li>
                        {{-- <li><a href="{{ route('public.tour', ['room' => Str::slug('Hola mundo')]) }}">Tour Packages</a></li> --}}
                        <li><a href="{{ route('public.contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 subscribe">
                    <h4>Subscription</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter email id here">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Get Notify</button>
                        </span>
                    </div>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top"
                                data-original-title="facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram" data-toggle="tooltip" data-placement="top"
                                data-original-title="instragram"></i></a>
                        <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top"
                                data-original-title="twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip"
                                data-placement="top" data-original-title="pinterest"></i></a>
                        <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top"
                                data-original-title="tumblr"></i></a>
                        <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top"
                                data-original-title="youtube"></i></a>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->

        <!--/.footer-bottom-->
    </footer>

    <div class="text-center copyright">Powered by <a href="http://thebootstrapthemes.com">thebootstrapthemes.com</a>
    </div>

    <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>




    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title">title</h3>
        <a class="prev">&larr;</a>
        <a class="next">&rarr;</a>
        <a class="close">&times;</a>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
    </div>

    @livewireScripts
    <script src="{{ asset('assets/jquery.js') }}"></script>

    <!-- wow script -->
    <script src="{{ asset('assets/wow/wow.min.js') }}"></script>

    <!-- uniform -->
    <script src="{{ asset('assets/uniform/js/jquery.uniform.js') }}"></script>


    <!-- boostrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>

    <!-- jquery mobile -->
    <script src="{{ asset('assets/mobile/touchSwipe.min.js') }}"></script>

    <!-- jquery mobile -->
    <script src="{{ asset('assets/respond/respond.js') }}"></script>

    <!-- gallery -->
    <script src="{{ asset('assets/gallery/jquery.blueimp-gallery.min.js') }}"></script>


    <!-- custom script -->
    <script src="{{ asset('assets/script.js') }}"></script>

</body>

</html>
