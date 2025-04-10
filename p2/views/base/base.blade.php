<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plane Ticket Information System</title>
</head>
<body>
    <div class="">
        @include('includes.topnav')
        <div class="pt-16 flex-1 p-4">
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
    
</body>
</html>