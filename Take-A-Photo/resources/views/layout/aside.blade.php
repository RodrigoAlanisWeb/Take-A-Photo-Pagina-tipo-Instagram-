@if(!Auth::check())
<aside class="main__aside">
    
    <form action="{{ route('user.create') }}" class="main__aside-form" method="POST" enctype="multipart/form-data" id="register">
        @csrf
        <h2 class="main__aside-form-title">
            Crear Usuario
        </h2>

        @error('register')
            <div class="alert alert-error">
                Error Al Crear Usuario
            </div>
        @enderror

        <label class="main__aside-form-group main__aside-form-group--file">
            <input type="file" name="image" class="main__aside-input main__aside-input--file" id="file-input">
            <i class="fas fa-camera main__aside-form-icon"></i>
        </label>

        <label for="" class="main__aside-form-group">
            Nombre
            <input type="text" name="complete_name" class="main__aside-input" value="{{ old('complete_name') }}">
            @error('complete_name')
                <div class="alert alert-error">
                    El nombre es Obligatorio
                </div>
            @enderror
        </label>

        <label for="" class="main__aside-form-group">
            Nombre de Usuario
            <input type="text" name="nick_name" class="main__aside-input" value="{{ old('nick_name') }}">
            @error('nick_name')
                <div class="alert alert-error">
                    El nombre de usuario es Obligatorio
                </div>
            @enderror
        </label>

        <label for="" class="main__aside-form-group">
            Email
            <input type="email" name="email_reg" class="main__aside-input" value="{{ old('email') }}">
            @error('email_reg')
                <div class="alert alert-error">
                    El email es Obligatorio
                </div>
            @enderror
        </label>

        <label for="" class="main__aside-form-group">
            Contraseña
            <input type="password" name="password_reg" class="main__aside-input" value="{{ old('password') }}">
            @error('password_reg')
                <div class="alert alert-error">
                    La Contraseña es Obligatorio
                </div>
            @enderror
        </label>

        <button type="submit" class="main__aside-form-btn">
            Registrarse
        </button>

        <a class="main__aside-form-change" id="to-login">O ya tienes una cuenta ?</a>
    </form>

    <form class="main__aside-form" id="login" action="{{ route('user.login') }}" method="POST">
        @csrf
        <h2 class="main__aside-form-title">
            Iniciar Sesion
        </h2>

        <label for="" class="main__aside-form-group">
            Email
            <input type="text" name="email" class="main__aside-input">
            @error('email-log')
                <div class="alert alert-error">
                    Este Usuario No Existe
                </div>
            @enderror

            @error('email')
                <div class="alert alert-error">
                    El Email Es Obligatorio
                </div>
            @enderror
        </label>

        <label for="" class="main__aside-form-group">
            Contraseña
            <input type="password" name="password" class="main__aside-input">
            @error('password')
            <div class="alert alert-error">
                La Contraseña Es Obligatoria
            </div>
            @enderror
        </label>

        <button class="main__aside-form-btn">
            Continuar
        </button>

        <a class="main__aside-form-change" id="to-register">O no tienes una cuenta ?</a>
    </form>  
</aside>
@endif