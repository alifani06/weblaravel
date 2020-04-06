@extends('layout/main')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
                font-size: 13px;
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
    @section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><i class="fa fa-info-circle"></i> Laravel 6.0 CRUD</h4>
            <hr>
            <p align="justify">
        	    Aplikasi ini merupakan demo CRUD (create, read, update, delete) dengan Laravel 5.2. selain perintah CRUD,
        	    juga memakai request validation untuk form inputnya. tambahan juga flash message untuk feedback ke user pada saat melakukan CRUD.
        	    untuk designnya sendiri memakai bootstrap.
            </p>
            <p align="right">
              	<a href="/materials/index"><button type="button" class="btn btn-primary btn-lg">START&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></button></a>
            </p>
        </div>
    </div>
@endsection
    </body>
</html>
