<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel ="stylesheet" href="{{asset('css/app.css/')}}" >
    </head>
    <body>
<header>
    @include('banner')
</header>
        <div>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
