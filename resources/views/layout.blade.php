<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>ワイン整理ツール</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
 
            .full-height {
                height: 100vh;
            }
 
            .flex-center {
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
 
            .m-b-md {
                margin-bottom: 30px;
            }
            .header_bar {
                margin-top: 10px;
                position: relative;
                top: 0;
                left: 5vh;
            }
        </style>
    </head>
    <body>
        <div class="header_bar">
            <a href="{{ route('wines.index') }}">WineList |</a>
            <a href="{{ route('categorys.create') }}">CategoryList |</a>
            <a href="{{ route('users.index') }}">UserList |</a>
            </h1>
        </div>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>