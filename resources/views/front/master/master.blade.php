<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {!! $head ?? '' !!}

    <link href="{{ url(mix('front/assets/css/vendor.css')) }}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script
        type="text/javascript">WebFont.load({google: {families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Merriweather:300,300italic,400,400italic,700,700italic,900,900italic"]}});</script>
    <!-- [if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"
            type="text/javascript"></script><![endif] -->

    <link href="{{ asset('front/assets/images/Solutions-Tec.gif') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('images/Duduk-Thumb-big.gif') }}" rel="apple-touch-icon">
</head>
<body>

@component('front.inc.nav')
@endcomponent

@yield('content')

@component('front.inc.footer')
@endcomponent

<script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="{{ url(mix('front/assets/js/vendor.js')) }}" type="text/javascript"></script>
<!-- [if lte IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
