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

<body id="register">
<div class="content">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-6">
                    <img src="assets/imgs/logoship2go.png" class="logo" alt="">
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title"><span class="text-red">¡crea tu cuenta</span> fácil!</h5>
            <div class="row">
                <div class="col-sm-12">
                        <!--<div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" checked value="0" name="business"id="inlineRadio1">
                            <label class="form-check-label" for="inlineRadio1">Independiente</label>
                        </div>
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" value="1" name="business" id="inlineRadio2">
                            <label class="form-check-label" for="inlineRadio2">Empresarial</label>
                        </div>-->
                        <div class="input-container">
                            <i class="far fa-user"></i>
                            <input class="input-field" type="text" placeholder="Nombre completo" placement="right">
                        </div>
                        <div class="input-container">
                            <i class="fas fa-mobile-alt"></i>
                            <input class="input-field" type="text" placeholder="Teléfono" name="phone" >
                        </div>
                        <div class="input-container">
                            <i class="fas fa-envelope"></i>
                            <input class="input-field" type="text" placeholder="Email"
                                name="email">
                        </div>
                        <div class="input-container">
                            <i class="fas fa-lock-open"></i>
                            <input class="input-field" type="password" 
                                placeholder="Contraseña" name="password">
                        </div>
                        <div class="input-container" >
                            <i class="fas fa-check"></i>
                            <input class="input-field" type="password" 
                                placeholder="Confirmar contraseña" name="password_confirm">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"
                                id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Estoy de acuerdo con los <a
                                    href="">Terminos
                                    y condiciones</a> de uso de <a href="ship2go.com">ship2go.com</a></label>
                        </div>
                </div>
            </div>
            <button class="btn btn-login text-uppercase rounded-pill" type="submit">
                    Registrar
                    <i class="fas fa-circle-notch fa-spin"></i>
            </button> 
        </div>
    </div>
</div>
</body>

</html>