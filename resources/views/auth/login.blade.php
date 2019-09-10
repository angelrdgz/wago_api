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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="login">
<div class="content">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-12">
                    <a href="/"><img src="{{ asset('imgs/logos/LOGOWAGOBLANCO.png') }}" class="logo" alt=""></a>
                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4 listContainer">
                    <ul>
                        <li><a href="/register">Registro</a></li>
                        <li><a href="/login" class="text-red">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <h5 class="card-title text-center"><span class="text-red">¡Bienvenido</span> nuevamente!</h5>
                <div class="input-container">
                    <i class="fas fa-envelope"></i>
                    <input name="email" id="login-email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"" placeholder="Email" required ngModel>
                </div>
                <div class="input-container" >
                    <i class="fas fa-lock-open"></i>
                    <input name="password" id="login-password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"" placeholder="Contraseña" required>
                </div>
                <div class="form-field text-center">
                        <a href="#" class="btn btn-link text-uppercase text-white" href="/forgot-password">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="form-field text-center">
                    <button class="btn btn-login text-uppercase rounded-pill"  type="submit">
                        Entrar
                        <i class="fas fa-circle-notch fa-spin"></i>
                    </button>                    
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>