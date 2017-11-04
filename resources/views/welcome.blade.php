<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MegaWeb.ir</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
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
        </style>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">

                    <div align="center">

                        <div class="row">
                            <a style="text-decoration: none;cursor: pointer !important;" href="{{url('table-1')}}">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-success">Example 1 <br/> (use yajra datatable generator for server request )</button>
                                </div>
                            </a>

                            <a style="text-decoration: none;cursor: pointer !important;" href="{{url('table-2')}}">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-success">Example 2 <br/> (add ajax crud to yajra datatable)</button>
                                </div>
                            </a>

                        </div>

                    </div>

                    <a style="text-decoration: none;cursor: pointer !important;" href="http://www.megaweb.ir" title="Visit Our Website" target="_blank">
                        <div class="title m-b-md">
                           MegaWeb.ir
                        </div>
                    </a>

                    <div class="btn-group">
                        <a class="btn btn-primary" href="https://datatables.net/reference/api/" target="_blank">Datatable Api</a>
                        <a class="btn btn-primary" href="http://yajrabox.com/docs/laravel-datatables/master" target="_blank">Yajra Datatable Documentation</a>
                        <a class="btn btn-primary" href="https://megaweb.ir" target="_blank">Megaweb.ir</a>
                        <a class="btn btn-primary" href="https://github.com/Mega-Web/laravel-yajra-example" target="_blank">GitHub</a>
                    </div>

            </div>
        </div>
    </body>
</html>
