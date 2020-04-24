@extends('layouts.app')

@section('content')
    <div class="loader-bg"></div>
    <div class="loader">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mn-content valign-wrapper">
        <main class="mn-inner container">
            <div class="valign">
                <div class="row">
                    <div class="col s12 m6 l4 offset-l4 offset-m3">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">{{ __('Login') }}</span>
                                <div class="row">
                                    <form class="col s12" action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="input-field col s12">
                                            <input id="email" type="email" name="email"
                                                   class="validate @error('email') is-invalid @enderror"
                                                   value="{{ old('email') }}" autofocus required>
                                            <label for="email">{{ __('E-mail') }}</label>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="password" type="password"
                                                   class="validate @error('password') is-invalid @enderror"
                                                   name="password" required>
                                            <label for="password">{{ __('Senha') }}</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-field col s12">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Lembrar') }}
                                            </label>
                                        </div>
                                        <div class="input-field col s12">
                                        </div>
                                        <div class="col s12 right-align m-t-sm">
                                            <a href="{{ route('register') }}" class="waves-effect waves-grey btn-flat">
                                                {{ __('Cadastrar') }}
                                            </a>
                                            <button type="submit" class="waves-effect waves-light btn teal mb-2">
                                                {{ __('Login') }}
                                            </button>
                                            <br><br>
                                            @if (Route::has('password.request'))
                                                <a class="secondary-link" href="{{ route('password.request') }}">
                                                    {{ __('Esqueceu a senha?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
