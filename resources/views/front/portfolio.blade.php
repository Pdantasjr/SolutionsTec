@extends('front.master.master')
@section('content')
    <div class="navbg"></div>
    <div class="section-2 page-header image header-work">
        <div class="banner-overlay"></div>
        <div class="wrapper left-aligned">
            <div>
                <div class="col-2">
                    <h1 class="no-margins page-title">Alguns Trabalhos</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="wrapper">
            <div class="row">
                @foreach($jobs as $job)
                    <div class="col-2 lg-6">
                        <div class="big-blog-thumbnail-container">
                            <a href="{{ route('job', $job->uri) }}" class="works-link w-inline-block">
                                <img
                                    src="{{ \Illuminate\Support\Facades\Storage::url(\solutionstec\Support\Cropper::thumJobs($job->cover, 1000, 650)) }}"
                                    class="column-image">
                                <h3>{{ $job->company }}</h3>
                                <h5 class="no-bottom-margins">{{ $job->title }}</h5>
                                <p class="low-opacity">{{ $job->subtitle }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div style="width: 100%; float: left; height: 1px;"></div>
                <div class="value-proposition-buttons">
                    <a href="{{ route('/') }}" class="button ghost w-button">Voltar para home</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section no-padding"></div>
@endsection('content')
