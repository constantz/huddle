<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>CodeGorilla</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Architects+Daughter|Marck+Script|Nothing+You+Could+Do" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body, footer {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }

            .full-height {
                height: 100%;
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

            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                height:10%;
                background-color: #ffc107;
                color: white;
                text-align: center;
                
                padding: 25px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
}

            .pic{
                position:absolute;
                top:0%;
                width:100%;
                margin-bottom:0vw;
                
           }

           .navbar{
            z-index: 1;
            width:100%;
            height:10%;
           }
          
          .quote{
                position:absolute;
                margin-top:20%;
                
                height:100%;
                color:#ffc107;
                font-family: 'Nothing You Could Do', cursive;
                font-weight: 200;
                font-size:4vw;
               
                


          }
          
          .call-to-action {
                position: relative;
                background-color: #343a40;
                margin-top:0%;
                background-size: 50vw;
                padding-top: 7rem;
                padding-bottom: 7rem;
                height: 100%;
                width: 100%;
}
          
        </style>
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
           
            <img class="pic" src="/img/pexels-photo-1068523.jpeg" >   
        
        
                
            
    
    <div class="footer">
            © 2019
          </div>     
   
          
</html>
