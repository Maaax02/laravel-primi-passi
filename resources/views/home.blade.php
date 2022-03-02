<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('style.css') }}">
</head>
<body>
    <header>
        <ul>
            <li><a href="contacts">About Us</a></li>
            <li><a href="">Contacts</a></li>
            <li><a href="">News</a></li>
        </ul>
    </header>
    <h1>Hello World</h1>

    <h2>{{$marca}} {{$modello}}</h2>

    <ul>
        @foreach($engine as $value)
            <li>{{$value}}</li>
        @endforeach
    </ul>
</body></html>