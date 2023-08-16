@extends('template.structure')

@section('nombre')
    Iniciar sesión
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/session/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/button.css') }}">
@endpush

@section('contenido')

    <div class="containerForm">
        <form class="sessionForm" method="POST" action="{{ route('iniciarsesion.store') }}">
            @csrf

            <div class="unselectable logoContainer">
                <img src="{{ asset('img/icon/icon.png') }}" alt="Logo" class="iconSessionForm">
                <p>
                    <span>Mi</span>Portal
                </p>
            </div>

            <div class="inputContainer">
                <label class="titleInput">
                    Correo electrónico
                </label>
                <div class="inputBox">
                    <input type="text" class="noDefault inputArea">
                </div>
               {{-- <span class="errorMessage">
                    Los caracteres ingresados no coinciden con los indicados.
                </span>--}}
            </div>

            <div class="inputContainer">
                <label class="titleInput">
                    Contraseña
                </label>
                <div class="inputBox inputPassword">
                    <input type="password" class="noDefault inputArea" id="showPasswordInput">
                    <div class="showPasswordBtn">
                        <input type="button" value="Mostrar" id="showPasswordButton" class="noDefault cursorPointerEvent passwordButton btnFull">
                    </div>
                </div>
                {{--<span class="errorMessage">
                    La contraseña es incorrecta
                </span>--}}
            </div>

            <div class="inputContainer">
                <input type="submit" value="Iniciar sesión" class="noDefault cursorPointerEvent normalButton btnFull">
            </div>

            <div class="inputContainer">
                <a href="#" class="noDefault formOption">
                    ¿Olvidaste tú contraseña?
                </a>
            </div>

            <div class="inputContainer">
                <a href="#" class="noDefault formOption">
                    Crear cuenta
                </a>
            </div>

        </form>
    </div>

@endsection

@push('script')
    <script src="{{asset('js/function/showPassword.js')}}">
    </script>
@endpush