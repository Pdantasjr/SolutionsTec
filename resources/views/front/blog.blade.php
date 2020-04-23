@extends('front.master.master')
@section('content')
    <div class="navbg"></div>
    <div class="section-2 page-header image bgcontact">
        <div class="banner-overlay"></div>
        <div class="wrapper left-aligned">
            <div class="row-2">
                <div class="col-2 lg-6 md-4">
                    <h1 class="no-margins page-title">Blog</h1>
                </div>
            </div>
        </div>
    </div>
    @if(empty($posts))
        <div class="row centre-align">
            <br><br>
            <h3 class="section-title">Desculpe, ainda não há posts por aqui. <h1 class="hero-title">:(</h1></h3>
            <br><br><br>
        </div>
    @else
        <div class="section-2">
            <div class="wrapper-3">
                <div class="row-2">
                    @foreach ($posts as $post)
                        <div class="col-2 lg-4 md-6 xs-12">
                            <a href="{{ route('article',$post->uri) }}"
                               class="blog-thumbnail-container no-border w-inline-block">
                                <img
                                    src="{{ \Illuminate\Support\Facades\Storage::url(\solutionstec\Support\Cropper::thumb($post->cover, 800, 450))  }}">
                                <div class="padding no-horizontal-padding">
                                    <div class="date-container">
                                        <p>Data: {{ date('d/m/Y', strtotime($post->created_at) ) }}</p>
                                        <p class="paragraph-small-2 divider-line w-hidden-medium"> | </p>
                                        <p>Por: {{ $post->name }}</p>
                                    </div>
                                    <h4>{{ $post->title }}</h4>
                                    <p class="blog-intro">{{ $post->subtitle }}</p>
                                </div>
                            </a>
                        </div>
                        @if(($loop->index + 1) % 3 === 0)
                            <div style="width: 100%; float: left; height: 1px;"></div>
                        @endif
                    @endforeach
                </div>
                <div class="value-proposition-buttons">
                    <a href="{{ route('/') }}" class="button ghost w-button">Voltar para home</a>
                </div>
            </div>
        </div>
    @endif
@endsection('content')
