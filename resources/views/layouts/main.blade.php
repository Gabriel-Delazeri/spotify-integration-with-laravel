<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
            background-color: #1DB954 !important;
            border-color: #1DB954;
        }
        .text-primary{
            color: #191414 !important;
        }
        .subtext {
            font-size: 14px;
            opacity: 0.8;
        }
    </style>
</head>
@yield('content')
<div class="container">
    <footer class="" style="margin-top: 80px">
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2022, desenvolvido por Gabriel Delazeri Castro.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="https://github.com/Gabriel-Delazeri">Github</a></li>
                <li class="ms-3"><a class="link-dark" href="https://www.linkedin.com/in/gabriel--delazeri/">Linkedin</a></li>
            </ul>
        </div>
    </footer>
</div>
</footer>
