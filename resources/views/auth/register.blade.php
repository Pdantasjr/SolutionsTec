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
        <main class="mn-inner container ">
            <div class="valign">
                <div class="row">
                    <div class="col s12 m6 l4 offset-l4 offset-m3">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">{{ __('Resgistre-se') }}</span>
                                <div class="row">
                                    <form class="col s12" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="input-field col s12">
                                            <input id="name" type="text" class="validate"
                                                   @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autofocus>
                                            <label for="name">{{ __('Nome') }}</label>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="email" type="email"
                                                   class="validate @error('email') is-invalid @enderror" name="email"
                                                   value="{{ old('email') }}" required>
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
                                                   name="password">
                                            <label for="password">{{ __('Senha') }}</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="password-confirm" type="password" class="validate"
                                                   name="password_confirmation" required>
                                            <label for="password2">{{ __('Confirme sua senha') }}</label>
                                        </div>
                                        <div class="col s12 right-align m-t-sm">
                                            <a href="{{ route('login') }}" class="waves-effect waves-grey btn-flat">
                                                {{ __('Fazer Login') }}
                                            </a>
                                            <button type="submit" class="waves-effect waves-light btn teal">
                                                {{ __('Cadastrar') }}
                                            </button>
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
