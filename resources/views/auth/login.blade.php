@extends('layouts.guest')

@section('content')

<span class="h1 mt-2">Inicio de sesión</span>
<div class="mt-4">

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="">
            <label for="email" class="mb-2">{{ __('Correo') }}</label>
    
            <div class="">
                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="">
            <label for="password" class="mt-3">{{ __('Contraseña') }}</label>
    
            <div class="">
                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="">
            <div class="d-flex justify-content-between">
                <a class="btn btn-link mt-3 start-0" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
                <br>
                <a class="btn btn-link mt-3 start-100" href="{{url('/register')}}">
                    {{__('Regístrate')}}
                </a>
            </div>
            
            <button type="submit" class="btn btn-success mt-3 w-100">
                {{ __('Acceder') }}
            </button>
        </div>
    </form>
</div>
@endsection
