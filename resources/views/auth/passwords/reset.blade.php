<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body id="passwordReset">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="/"><img src="{{ asset('imgs/logos/LOGOWAGOBLANCO.png') }}" class="logo" alt=""></a>
                    </div>
                    <div class="col-sm-4">

                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <h5 class="card-title text-center">¡Bienvenido<span class="text-red"> nuevamente!</span></h5>
                    <div class="input-container">
                        <i class="fas fa-envelope"></i>
                        <input name="email" id="login-email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"" placeholder=" Email" required ngModel>
                    </div>
                    <div class="form-field text-center">
                        <a class="btn btn-link text-white" href="{{ url('password/reset') }}">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="form-field text-center">
                        <a class="btn btn-link text-red" href="{{ route('register') }}">¿No tienes cuenta? registrate aqui</a>
                    </div>
                    <div class="form-field text-center">
                        <button class="btn btn-login btn-block text-uppercase rounded-pill" type="submit">
                            Entrar
                            <i class="fas fa-circle-notch fa-spin"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-sm-12">
                    <a href="/"><img src="{{ asset('imgs/logos/esloganBLANCO.png') }}" class="logo-footer" alt=""></a>
                </div>
                <div class="col-sm-12">
                    <a href="/"><img src="{{ asset('imgs/redes.png') }}" class="logo-footer" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
