<!DOCTYPE html>
<html lang="en">
    @props(['title'])
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "Default" }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        .container{
            width: 86%;
            margin: auto;
        }
    </style>
</head>
<body>
    @include('sweetalert::alert')

    <header>
        <x-frontend-navbar/>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer></footer>
</body>
</html>
