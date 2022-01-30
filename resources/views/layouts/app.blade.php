<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{config('app.me','Paulyech')}} </title>

        <script src="https://kit.fontawesome.com/cb35b84be5.js" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="css/app.css">
        <style>
            #menu-toggle:checked + #menu{
                display: block;
            }
        </style>

    </head>
    <body class="antialiased text-gray-600 bg-gray-900 ">
       <div>
        @include('inc.navbar')
            <main>    
                @yield('content')
            </main>  
         @include('inc.footer')

      </div>
    </body>
</html>
