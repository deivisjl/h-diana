<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    
</head>
<body>   

<div id="app" class="d-flex flex-column h-screen justify-content-between  ">
    <header>
                    @include('partials.nav-home')
                   @include('partials.session-status')
               
    </header>
    
    <main>
            @yield('content')
    </main>
    
    <footer class=" bg-white text-center text-black-50 py-3 shadow">
        Hierbalife| @Copyright  {{date('Y')}}
    </footer>
</div>

</body>
</html>