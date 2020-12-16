<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('backEnd1/style.css')}}">
        <link rel="stylesheet" href="{{asset('backEnd1/bootstrap-4.1.3-dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link href="{{asset('backEnd1/css/animate.css')}}" rel="stylesheet"/>
        <link href="{{asset('backEnd1/css/waypoints.css')}}" rel="stylesheet"/>
        <script src="{{asset('backEnd1/js/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('backEnd1/js/waypoints.js')}}" type="text/javascript"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
    </head>
    <body>
        <section>
        <div class="intro1">
            <div class="inner1">
                <div class="content1">
                    <div class="col-12 text-center">
                        <section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay="0s">
                            <h1>SMA GANESA SATRIA</h1>
                        </section>
                        <section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay=".1s">
                            <a href="{{route('frontEnd.home')}}" class="btn btn-outline-light btn-lg">Halaman Utama</a>
                        </section>
                        <section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay=".2s">
                            <a href="{{ route('login') }}" class="btn btn-outline-light btn-primary btn-lg">Login</a>
                        </section>
                    </div>
                    <div class="col-12 text-center">
                        <section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay=".3s">
                            <a href="{{route('register')}}" class="btn btn-outline-light btn-lg">Register</a>
                        </section>
                    </div>  
                </div>
            </div>
        </div>
    </section>
        <script src="{{asset('backEnd1/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('backEnd1/bootstrap-4.1.3-dist/js/bootstrap.min.js')}}"></script>
        <script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
    </body>
</html>
