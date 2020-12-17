<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Principal</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/59a9a8209a.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>

    @include('layout.header')

    <div class="main">
        @if (Auth::check())
            <div class="main__content" style="width: 85%;margin:0px auto">
                @yield('content')
            </div>
        @else
            <div class="main__content">
                @yield('content')
            </div>
        @endif
        
        @include('layout.aside')
    </div>

</body>
</html>