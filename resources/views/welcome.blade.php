<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The QRCode Generator by iOTech</title>

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
                font-size: 64px;
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
            .code {
                background-color: #eee;
                width: 655px;
                margin: 50px auto 0;
                color: #000;
                border-radius: 5px;
                padding: 3px 8px;
            }
            .code strong {
                color: #4b719a;
            }
        </style>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
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
                <div class="title m-b-md">
                    The QRCode Generator
                </div>

                <div class="links">
                    <a href="https://iotech.co.th"><img src="https://iotech.co.th/wp-content/uploads/2018/01/cropped-Group-12-1.png"></a>
                </div>
                <br>
                <h2>Just pass the parameter to here.</h2>
                <p class="code">
                http://qrcode.iotech.co.th/api/generate?text=<strong>Your QRCode Data</strong>&title=<strong>Your QR Code Title</strong>
                </p>
                <p>
                <!-- Place this tag where you want the button to render. -->
                    <a class="github-button" href="https://github.com/iotech-thailand/qrcode-generator/fork" data-size="large" aria-label="Fork iotech-thailand/qrcode-generator on GitHub">Fork me</a>
                </p>
            </div>
        </div>
    </body>
</html>
