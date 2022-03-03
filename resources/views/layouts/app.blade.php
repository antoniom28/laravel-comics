<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title', 'valore default')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div id="app">
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>
</html>

<style>
#app{
    min-width: 1200px;
}

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body{
    font-family: sans-serif, fantasy; 
    /*il secondo è se nel caso non caricasse il primo*/
}

a{
    text-decoration: none;
    color: black;
}

ul{
    list-style: none;
}

.main-button a{
    font-size: 2em;
    padding: 10px 30px;
}

.standard-button a{
    font-size: 1em;
    padding: 10px 50px;
}
</style>