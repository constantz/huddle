<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Huddle</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Architects+Daughter|Marck+Script|Nothing+You+Could+Do" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        
        <link rel="stylesheet" href="css/welcome.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <nav class="navbar fixed-top navbar-dark bg-warning"> 
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a class="navbar-brand" href="{{ url('/home') }}">Home</a>
                            @else
                            <a class="navbar-brand" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                            <a class="navbar-brand" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
        </div>
          <img class="pic" src="img/huddle2.png">   
        <div class="footer">
            © 2019
        </div>     
    </body>
          
</html>
