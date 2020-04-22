@extends('front.master.master')
@section('content')
    <div class="navbg"></div>
    <div class="section-2 page-header image header-team">
        <div class="banner-overlay"></div>
        <div class="wrapper left-aligned">
            <div class="row-2">
                <div class="col">
                    <h1 class="no-margins page-title">Fundador</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section margin-bottom">
        <div class="wrapper">
            <div class="row centre-align">
                <div class="col-2 lg-6 centre-align">
                    <h2 class="section-header-2">Acreditar que tudo é possível quando você tem fé no que você é
                        capaz.</h2>
                </div>
            </div>
            <div class="row-2">
                <div class="col-2 lg-4">
                    <img src="{{ asset('front/assets/images/Paulo-Dantas.jpg') }}" width="500" alt="">
                </div>
                <div class="col-2 lg-6">
                    <p class="paragraph-small" style="text-align: justify">Se você é empreendedor sabe que para ter boas
                        ideias é sempre bom contar também com a boa (e velha) inspiração. Quando essa inspiração vem de
                        pessoas que fizeram (ou fazem) a diferença nesse mundo, melhor ainda, pois sabemos que estamos
                        ouvindo palavras de quem sabe o que está falando. Em minha jornada sempre puder contar com
                        pessoas maravilhosas que me inspiram até hoje e me fazem acordar a cada dia com mais e mais
                        ideias na cabeça.</p>
                    <p class="paragraph-small" style="text-align: justify">Acredito que há muito potencial no mundo
                        digital e muitos empresários não enxergam isso. Minha missão é, através desse mundo tão
                        fascinante, fazer com pequenas e médias empresas cresçam e obtenha resultados. </p>
                    <h4>Paulo Dantas</h4>
                    <small>CEO - SolutionsTec</small>
                    <div class="social-media-icons-container">
                        <a target="_blank" href="https://www.facebook.com/paulodantass"
                           class="media-link w-inline-block">
                            <div class="fa-icon"></div>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/pdantasjr" class="media-link w-inline-block">
                            <div class="fa-icon"></div>
                        </a>
                        <a target="_blank"
                           href="https://www.youtube.com/channel/UCQ8LQnfRPr6GQPMSyrEro0A?view_as=subscriber"
                           class="media-link w-inline-block">
                            <div class="fa-icon"></div>
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/in/pdantasjr/"
                           class="media-link w-inline-block">
                            <div class="fa-icon"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
