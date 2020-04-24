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
                            <div class="card-content">
                                <span class="card-title">{{ __('Recuperar senha') }}</span>
                                <small>Enviaremos um link de recuperação de senha para o seu e-mail.</small>
                                <br><br>
                                @if (session('status'))
                                    <div class="alert alert-Success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <form class="col s12" method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="input-field col s12">
                                            <input id="email" type="email"
                                                   class="validate @error('email') is-invalid @enderror" name="email"
                                                   value="{{ old('email') }}" required autofocus>
                                            <label for="name">{{ __('Digite seu e-mail') }}</label>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col s12 right-align m-t-sm">
                                            <a href="javascript:history.back()" class="waves-effect waves-grey btn-flat">
                                                {{ __('Voltar') }}
                                            </a>
                                            <button type="submit" class="waves-effect waves-light btn teal">
                                                {{ __('Enviar link') }}
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
