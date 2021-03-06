<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CIDIC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Cairo:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                /* background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%); */
                color: #DDD;
                font-family: 'Cairo', sans-serif;
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
                color: #DDD;
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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">
                            <i class="fa fa-signing" aria-hidden="true"></i>
                            تسجيل الدخول
                        </a>
                        <a href="{{ route('register') }}">
                            تسجيل
                        </a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="">
                    <img class="img-fluid" src="/images/logocidic.png" alt="CIDIC Logo" height="150">
                </div>

                <div class="links">
                  <h3>مرحبا بك في موقع سدك</h3>
                        <a href="{{ route('login') }}">
                            <i class="fa fa-signing" aria-hidden="true"></i>
                            تسجيل الدخول
                        </a>
                        <a href="{{ route('register') }}">
                            تسجيل
                        </a>
                </div>
            </div>
        </div>
    </body>
</html>
