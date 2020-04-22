@extends('front.master.master')
@section('content')
    <div class="navbg"></div>
    @if(empty($post))
        <div class="row centre-align">
            <br><br>
            <h3 class="section-title">Desculpe, ainda não há posts por aqui. <h1 class="hero-title">:(</h1></h3>
            <br><br><br>
        </div>
    @else
        <div class="section-2">
            <div class="wrapper-3">
                <div class="row-2">
                    <div class="col-2 lg-6 md-4">
                        <h1 class="no-margin">{{ $post->title }}</h1>
                    </div>
                    <img class="section" style="max-width: 100%;"
                         src="{{ \Illuminate\Support\Facades\Storage::url(\solutionstec\Support\Cropper::thumb($post->cover, 800, 450)) }}"
                         alt="">
                </div>
            </div>
            <div class="wrapper">
                <div class="row-2 centre-align">
                    <div class="col-2 lg-6 md-3 sm-2">
                        <h4>{{ $post->title }}</h4>
                        <p class="blog-intro">{{ $post->subtitle }}</p>
                        <div class="rich-text-block w-richtext">
                            <p>{{ $post->content }}</p>
                        </div>

                        <div class="date-container">
                            <p>Postado em: {{ date('d/m/Y H:i', strtotime($post->created_at) ) }}</p>
                            <p class="paragraph-small-2 divider-line w-hidden-medium"> | </p>
                            <p>Por: {{ $author->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="value-proposition-buttons">
                    <a href="{{ route('blog') }}" class="button ghost w-button">Voltar para blog</a>
                </div>

                <div class="hero-content">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0&appId=214429386553188&autoLogAppEvents=1"></script>
                    <div class="col-2 lg-12">
                        <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"
                             data-width="100%"></div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection('content')
