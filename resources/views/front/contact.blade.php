@extends('front.master.master')

@section('content')
    <div class="navbg"></div>
    <div class="section">
        <div class="wrapper">
            <div class="row-2">
                <div class="col-2 lg-5 align-vertically">
                    <div class="side-image map">
                        <img src="{{ asset('front/assets/images/map.png') }}" alt="Imagem ilustrativa de mapa">
                    </div>
                </div>
                <div class="col-2 lg-6">
                    <div class="contact-form-container card">
                        <div class="margin-bottom">
                            <h2 class="heading">Deixe uma mensagem</h2>
                            <p class="paragraph-small">Preencha o formulário a baixo para que possamos falar sobre sua
                                ideia, objetivo ou para tirar suas dúvidas.<br></p>
                        </div>
                        <div class="form w-form">
                            <form action="{{ route('send-mail') }}" id="email-form" method="post">
                                @csrf
                                <input type="text" class="form-field w-input" name="name"
                                       placeholder="Digite seu nome" value="{{ old('name') }}">
                                <input type="text" class="form-field w-input" name="email"
                                       placeholder="Digite seu e-mail" value="{{ old('email') }}">
                                <input type="text" class="form-field w-input" name="subject"
                                       placeholder="Assunto" value="{{ old('subject') }}">
                                <textarea name="field" placeholder="Digite sua menssagem"
                                          class="text-area w-input">{{ old('field') }}</textarea>
                                <input type="submit" value="Enviar" class="button w-button">
                            </form>
                            @foreach($errors->all() as $error)
                                <div class="w-form-error">
                                    <small>{{$error}}</small>
                                </div>
                            @endforeach
                            <small>{!! session()->get('success') !!}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
