<!doctype html>
<html>
    <head>
        <title>Huddle</title>
        <link rel=" stylesheet" href="css/welcome.css">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    </head>
    
    <body>
            @include('includes.navbar') 
       
        <div class="container">
            @yield('content')
        </div>

            @include('includes.footer')
    

           
    </body>
    
    
    </html>