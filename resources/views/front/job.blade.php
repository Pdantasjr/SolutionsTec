@extends('front.master.master')
@section('content')
    <div class="navbg"></div>
    <div class="section-2 page-header image header-work">
        <div class="banner-overlay"></div>
        <div class="wrapper left-aligned">
            <div>
                <div class="col-2">
                    <h1 class="no-margins page-title">{{ $job->company }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="wrapper">
            <div class="row-2 centre-align">
                <div class="col-2 lg-6 md-3 sm-2">
                    <div class="rich-text-block w-richtext">
                        <h2>{{ $job->title }}</h2>
                    </div>
                </div>
                <img
                    src="{{ \Illuminate\Support\Facades\Storage::url(\solutionstec\Support\Cropper::thumJobs($job->cover, 1080)) }}"
                    class="full-width-image">
                <div class="col-2 lg-6 md-3 sm-2">
                    <div class="rich-text-block w-richtext">
                        <p>{!!  $job->content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
