    
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
        @if (!Auth::check())
            
        @else   
        <div class="header__user">
            <h2 class="header__user-name">
                {{ auth()->user()->name }}
            </h2>
            <i class="fas fa-angle-down header__user-btn"></i>
        </div>
        <ul class="header__user-list">
            <li class="header__user-item"><a href="#" class="header__user-link">Cuenta</a></li>
            <li class="header__user-item"><a href="#" class="header__user-link">Asistencia</a></li></li>
            <li class="header__user-item"><a href="{{ route('user.logout') }}" class="header__user-link">Cerrar Sesion</a></li>
        </ul>
        @endif
    </header>