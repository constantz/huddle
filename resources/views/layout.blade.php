<!doctype html>
<html>
    <head>
        <title>CodeGorilla</title>
        <link rel=" stylesheet" href="css/welcome.css">
    </head>
    
    <body>
            @include('includes.navbar') 
       
        <div class="container">
            @yield('content')
        </div>
            @include("includes.footer")  
    </body>
    
    
    </html>