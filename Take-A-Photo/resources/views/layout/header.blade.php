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
    
    <header class="header">
        <h2 class="header__title">
            Take A Photo
        </h2>
        <form action="" class="header__form">
            <input type="text" class="header__search">
            <button type="submit" class="header__form-btn">
                Buscar
            </button>
        </form>
        <div class="header__user">
            <h2 class="header__user-name">
                Usuario
            </h2>
            <i class="fas fa-angle-down header__user-btn"></i>
        </div>
        <ul class="header__user-list">
            <li class="header__user-item"><a href="#" class="header__user-link">Cuenta</a></li>
            <li class="header__user-item"><a href="#" class="header__user-link">Asistencia</a></li></li>
            <li class="header__user-item"><a href="#" class="header__user-link">Cerrar Sesion</a></li>
        </ul>
    </header>