<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
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
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: absolute;
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
                color: #61636f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                font-size: 80px;
            }
            .button {
                width: 260px;
                height: 40px;
                border-width: 0px;
                border-radius: 4px;
                background: #1E90FF;
                cursor: pointer;
                outline: none;
                font-family: Microsoft YaHei;
                color: white;
                font-size: 17px;
            }
            textarea{
                margin-bottom:-40px;
                font-size: 17px;
            }
            div input{
                width:270px;
                height:25px;
                font-size:17px;
                border-width: 2px;
            }
            .errors{
                text-align: center;
                font-size:18px;
            }
            .messages{
                text-align: center;
            }
            .username{
                font-weight: 800;
                font-size: 25px;
                margin-bottom:10px;
                margin-right: 500px;
            }
            .message{
                font-weight: 800;
                font-size: 18px;
                margin-bottom:10px;
            }
            .time{
                font-weight: 800;
                font-size: 15px;
                margin-bottom:20px;
                margin-left: 500px;
            }
            .paginate{
                font-size:20px;
            }
            .navbar{
                font-size: 25px;
            }
            .index{
                position: absolute;
                margin-left: 450px;
                margin-top: -80px;
            }
            .profile{
                position: absolute;
                margin-left: 550px;
                margin-top: -80px;
            }
            .login{
                position: absolute;
                margin-left: 550px;
                margin-top: -80px;
            }
            .logout{
                position: absolute;
                margin-left: 650px;
                margin-top: -80px;
            }
            .register{
                position: absolute;
                margin-left: 650px;
                margin-top: -80px;
            }
            .id{
                display: none;
            }
            .delete{
                font-weight: 800;
                font-size: 20px;
                margin-left: 500px;
            }
        </style>
    </head>
    <body>
    @yield('content')
    </body>
</html>
