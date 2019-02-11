<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">SandhiGa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    @if (Route::has('login'))
                    <div class="nav">
                        @auth
                            <li class="nav-item">
                                <a class="btn btn-primary tombol" href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                        <li class="nav-item">
                            <a class="btn btn-primary tombol" href="{{ route('login') }}">Login</a>
                        </li>
                            {{-- <a href="{{ route('register') }}">Register</a> --}}
                        @endauth
                    </div>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <!-- FIN NAVBAR -->

    <!-- JUMBOTROM -->
    <div class="jumbotron jumbotron-fluid">
        <!-- <div class="jumbotron jumbotron-fluid d-flex justify-content-center align-items-center -->
        <div class="container">
            <h1 class="display-4">Get work done <span>faster</span><br> and <span>better</span> with us</h1>
            <a href="#" class="btn btn-primary tombol">Our work</a>
        </div>
    </div>

    <!-- FIN JUMBOTROM -->

    <!-- CONTAINER -->
    <div class="container">
        <!-- INFO PANEL -->

        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="img/employee.png" alt="employee" class="float-left">
                        <h4>24 Hours</h4>
                        <P>Lorem ipsum dolor sit amet.</P>
                    </div>
                    <div class="col-lg">
                        <img src="img/hires.png" alt="hires" class="float-left">
                        <h4>High-Res</h4>
                        <P>Lorem ipsum dolor sit amet.</P>
                    </div>
                    <div class="col-lg">
                        <img src="img/security.png" alt="security" class="float-left">
                        <h4>Security</h4>
                        <P>Lorem ipsum dolor sit amet.</P>
                    </div>
                </div>
            </div>
        </div>

        <!-- FIN INFO PANEL -->

        <!-- WORKING SPACE -->

        <div class="row workingspace">
            <div class="col-lg-6">
                <img src="img/workingspace.png" alt="workingspace" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <h3>You <span>work</span> like at <span>home</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolore cum iure mollitia?</p>
                <a href="#" class="btn btn-primary tombol">Gallery</a>
            </div>
        </div>

        <!-- FIN WORKING SPACE -->

        <!-- TESTIMONIAL -->

        <section class="testimonial">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h5>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero ducimus itaque accusamus
                        debitis, sit mollitia"</h5>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 d-flex justify-content-center">
                    <figure class="figure">
                        <img src="img/img1.png" class="figure-img img-fluid rounded-circle"
                            alt="Test 1">
                    </figure>
                    <figure class="figure">
                        <img src="img/img2.png" class="figure-img img-fluid rounded-circle main"
                            alt="Test 2">
                        <figcaption class="figure-caption">
                            <h5>Sunny Ye</h5>
                            <p>Designer</p>
                        </figcaption>
                    </figure>
                    <figure class="figure">
                        <img src="img/img3.png" class="figure-img img-fluid rounded-circle"
                            alt="Test 3">
                    </figure>
                </div>
            </div>
        </section>

        <!-- FIN TESTIMONIAL -->

        <!-- FOOTER -->

        <div class="row footer">
            <div class="col text-center">
                <p>2019 All Rights Reserved By SandhiGa</p>
            </div>
        </div>

        <!-- FIN FOOTER -->


    </div>
    <!-- FIN CONTAINER -->



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    </body>
</html>
