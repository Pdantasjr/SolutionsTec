@extends('front.master.master')
@section('content')
    {{--Content Topo home--}}
    <div class="section full-screen background-image-side hero">
        <div class="wrapper">
            <div class="row">
                <div class="col">
                    <div class="hero-content">
                        <h1 class="hero-title">Fazemos sua ideia<br>se tornar <br> realidade.<br></h1>
                        <p class="hero-description">Construímos produtos digitais, da ideia ao design, do
                            desenvolvimento ao marketing.</p>
                        <div class="value-proposition-buttons">
                            <a href="{{ route('contato') }}" class="button margin-right w-button">Contato sem
                                compromisso</a><br><br>
                            <a href="{{ route('sobre-nos') }}" class="button ghost w-button">Saiba mais</a>
                        </div>
                    </div>
                    <img src="{{ asset('front/assets/images/hero-p-800.png') }}" alt="Imagem topo" class="hero-image">
                </div>
            </div>
        </div>
    </div>
    {{--/Content Topo home--}}

    {{--Content forma de trabalho--}}
    <div class="section no-bottom-padding">
        <div class="wrapper">
            <div class="row centre-align">
                <div class="col-2 lg-8 md-4 centre-align">
                    <div class="centre-align margin-bottom">
                        <h3 class="section-title">Amamos a criatividade, design e desenvolvimento de soluções. Motivados
                            por um objetivo em comum: inspirar, criar e lançar ideias inovadoras.</h3>
                        <p class="sub-title margin-bottom margin-top">Adoramos levar sua visão para a realidade.
                            Acompanhe o processo:</p>
                    </div>
                    <div class="row centre-align">
                        <div class="col-2 lg-8"></div>
                    </div>
                </div>
            </div>
            <div class="step-container">
                <div class="row margin-bottom sm-reverse-layout">
                    <div class="col-2 lg-1 hidden-lg-down"></div>
                    <div class="col-2 lg-4 sm-2 lg-vertical-align">
                        <div class="sm-align-centre">
                            <h3 class="h3">Nós encontramos as pessoas certas para você.</h3>
                            <p class="paragraph-small">
                                Nosso time determina os contatos certos a serem segmentados com base no fluxo de
                                trabalho da sua empresa.
                                <br> <br>Isso é necessário para sermos mais assertivos fazendo sua empresa crescer.
                                Estaremos trabalhando juntos para projetar e executar estratégias inovadoras de canais
                                cruzados, orientadas por dados, que obtêm resultados reais.</p>
                        </div>
                    </div>
                    <div class="col-2 lg-1 hidden-lg-down"></div>
                    <div class="col-2 lg-5">
                        <img src="{{ asset('front/assets/images/funnels-p-800.png') }}" alt="Imagem Segmentação"
                             class="value-proposition-hero-image"></div>
                    <div class="col-2 lg-1 hidden-lg-down"></div>
                </div>
            </div>
            <div class="step-container">
                <div class="row">
                    <div class="col-2 lg-1 hidden-lg-down"></div>
                    <div class="col-2 lg-5">
                        <img src="{{ asset('front/assets/images/adv-p-800.png') }}" alt="Imagem Publicidade"
                             class="image-4"></div>
                    <div class="col-2 lg-1 hidden-lg-down"></div>
                    <div class="col-2 lg-4 sm-2 lg-vertical-align">
                        <div class="sm-align-centre">
                            <h3 class="h3">Iniciamos as campanhas publicitária.</h3>
                            <p class="paragraph-small">Trabalhamos com você para determinar a melhor verborragia que
                                causará maior impacto.<br>‍<br>
                                Usando textos, e-mail, mídias sociais, robôs e voz, atrairemos vários clientes. Se você
                                não cuidar de seus clientes, alguém o fará. Sabendo disso vamos ajudá-lo analisando,
                                prevenindo e engajando mais e mais clientes.</p>
                        </div>
                    </div>
                    <div class="col-2 lg-1 hidden-lg-down"></div>
                </div>
            </div>
            <div class="step-container low-z-index">
                <div class="row margin-bottom sm-reverse-layout">
                    <div class="col-2 lg-1 hidden-lg-down"></div>
                    <div class="col-2 lg-4 sm-2 lg-vertical-align">
                        <div class="sm-align-centre">
                            <h3 class="h3">Finalmente... você acerta a cesta!</h3>
                            <p class="paragraph-small">É aqui que vemos os resultados de todo um grande
                                planejamento.<br><br>
                                Sua presença na web é uma das ferramentas mais importantes para comunicar sua marca e
                                conseguir novos clientes. Continuando com mais campanhas, sempre com intuito de levar
                                ótimas experiência para clientes fazendo que tudo se converta em receita.</p>
                        </div>
                    </div>
                    <div class="col-2 lg-1 hidden-lg-down"></div>
                    <div class="col-2 lg-5">
                        <img src="{{ asset('front/assets/images/basket0.5x.png') }}" width="571"
                             alt="Imagem Bola na cesta"
                             class="value-proposition-hero-image">
                    </div>
                    <div class="col-2 lg-1 hidden-lg-down"></div>
                </div>
            </div>
        </div>
        <img src="images/dashed-path.png" width="900"
             srcset="images/dashed-path-p-500.png 500w, images/dashed-path-p-800.png 800w, images/dashed-path-p-1080.png 1080w, images/dashed-path-p-1600.png 1600w, images/dashed-path.png 1714w"
             sizes="(max-width: 991px) 100vw, 900px" alt="" class="dashed-line">
    </div>
    {{--/Content forma de trabalho--}}

    {{--Content portfólio--}}
    <div class="section no-top-padding">
        <div class="wrapper">
            <div class="row">
                <div class="col">
                    <div class="centre-align">
                        <p class="micro-heading left-aligned">Portfólio</p>
                        <h3 class="section-heading left-aligned no-margin-top">Alguns trabalhos que fizemos
                            <img src="{{ asset('front/assets/images/heart.svg') }}" width="25" alt="Coração portfólio">
                        </h3>
                    </div>
                    <div class="row centre-align">
                        <div class="col-2 lg-8">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-bottom-margins">
                @foreach($jobs as $job)
                    <div class="col-2 lg-6">
                        <div class="big-blog-thumbnail-container"><a href="{{ route('job', $job->uri) }}"
                                                                     class="works-link w-inline-block">
                                <img
                                    src="{{ \Illuminate\Support\Facades\Storage::url(\solutionstec\Support\Cropper::thumJobs($job->cover, 1080)) }}"
                                    class="column-image">
                                <div class="centre-align">
                                    <h4 class="no-bottom-margins">{{ $job->company }}</h4>
                                    <p class="low-opacity">{{ $job->title }}</p>
                                </div>
                            </a>
                        </div>
                        @if(($loop->index + 1) % 3 === 0)
                            <div style="width: 100%; float: left; height: 1px;"></div>
                        @endif
                    </div>
                @endforeach
            </div>
            <div>
                <div class="value-proposition-buttons">
                    <a href="{{ route('portfolio') }}" class="button ghost w-button">Clique Aqui Para Ver Outros
                        Projetos</a>
                </div>
            </div>
        </div>
    </div>
    {{--/Content portfólio--}}

    {{--Content serviços--}}
    <div class="section services bgaccent-color">
        <div class="w-layout-grid grid">
            <div id="w-node-a90a4bea48e4-1508a948" class="div-block-10 margin-bottom">
                <p class="micro-heading">CONDUZIDO POR DADOS. ALIMENTADO PELA PAIXÃO.</p>
                <h3 class="section-heading left-aligned no-margin-top">Serviços Personalizados</h3>
                <h3 class="section-title fullwidth-grid margin-bottom">Como parceiro principal do Google e Facebook (que
                    inclui o Instagram também), trabalhamos com grandes em todo o território brasileiro*, atuando como
                    seu fornecedor de marketing digital e soluções.</h3>
                <a href="#" class="button margin-left w-button">Vamos Conversar</a>
            </div>
            <div id="w-node-6ad91524b8c2-1508a948" class="margin-bottom"><img
                    src="{{ asset('front/assets/images/poster.svg') }}" width="64" alt="Branding"
                    class="small-margin-bottom">
                <h4>Branding</h4>
                <p class="paragraph-small short-paragraph">Uma marca é muito mais que um logotipo ou uma cor. É como as
                    pessoas sentem e percebem sua empresa, seus produtos e serviços. Nosso objetivo é criar marcas que
                    deixem boas impressões, criem memoria afetiva e que durem por toda a vida.</p>
            </div>
            <div id="w-node-f3c27ee0b5e0-1508a948" class="margin-bottom"><img
                    src="{{ asset('front/assets/images/idea.svg') }}" width="64" alt="Estratégia de Marketing Digital"
                    class="small-margin-bottom">
                <h4>Estratégia de Marketing Digital</h4>
                <p class="paragraph-small short-paragraph">Quando se trata de comercializar sua marca ou empresa, antes
                    de qualquer sucesso, sempre procuramos uma estratégia. Estamos trabalhando juntos para projetar e
                    executar estratégias inovadoras, baseando-se sempre por dados, que obtêm resultados reais.</p>
            </div>
            <div class="margin-bottom"><img src="{{ asset('front/assets/images/web-page.svg') }}" width="64"
                                            alt="Desenvolvimento Web" class="small-margin-bottom">
                <h4>Desenvolvimento Web</h4>
                <p class="paragraph-small short-paragraph">Sua presença na web é uma das ferramentas mais importantes
                    para comunicar sua marca e conseguir novos clientes. Seu site deve ser capaz de envolver os
                    visitantes e fazê-los executar ações que se convertem em receita.<br><br></p>
            </div>
            <div class="margin-bottom"><img src="{{ asset('front/assets/images/social-media.svg') }}" width="64"
                                            alt="Campanha Para Mídias Sociais" class="small-margin-bottom">
                <h4>Campanha Para Mídias Sociais</h4>
                <p class="paragraph-small short-paragraph">As mídias sociais nos dar o poder de conversar, compartilhar
                    e se conectar ainda mais com seus clientes. Saber sobre tendências nas redes é essencial por que nos
                    permitir alcançar ideias e estratégicas para obter novos leads.</p>
            </div>
            <div id="w-node-1baae99ab2f1-1508a948" class="margin-bottom">
                <img src="{{ asset('front/assets/images/megaphone.svg') }}" width="64" alt="Marketing de Conteúdo"
                     class="small-margin-bottom">
                <h4>Marketing de Conteúdo</h4>
                <p class="paragraph-small short-paragraph">O marketing de conteúdo tornou-se uma parte fundamental da
                    conexão com seu público-alvo, sempre mantendo-os engajados sobre suas ofertas e promoções. Manter
                    contato com seu público nunca foi tão importante.</p>
            </div>
            <div id="w-node-ab1a4db733ac-1508a948" class="margin-bottom"><img
                    src="{{ asset('front/assets/images/salesman.svg') }}" width="64"
                    alt="Relacionamentos"
                    class="small-margin-bottom">
                <h4>Relacionamentos</h4>
                <p class="paragraph-small short-paragraph">Se você não cuidar de seus clientes, alguém o fará. Sabendo
                    disso, sempre analisar todos os dados de relacionamento para prevenir que seu cliente acabe indo
                    embora. <br><br><br></p>
            </div>
        </div>
    </div>
    {{--/Content serviços--}}

    {{--Content Blog--}}
    <div class="section">
        <div class="wrapper">
            <div class="row">
                <div class="col">
                    <div class="centre-align">
                        <p class="micro-heading left-aligned">Acompanha as últimas notícias</p>
                        <h3 class="section-heading left-aligned no-margin-top">Veja no que estamos falando</h3>
                    </div>
                </div>
            </div>
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
                        <a href="{{ route('blog') }}" class="button ghost w-button">Ler todos os artigos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--/Content Blog--}}

    {{--Content Clientes e parceiros--}}
    <div id="clients" class="section bgaccent">
        <div class="wrapper">
            <div>
                <p class="micro-heading centre-align">Alguns de nossos Parceiros e Clientes</p>
                {{--                <h3 class="section-heading align-centre short-paragraph no-margin-top">Marcas Que Passram Nossa Tragetória</h3>--}}
            </div>
        </div>
        <div class="wrapper-2 space-around">
            <div class="partner-logo-container"><img src="{{ asset('front/assets/images/lojas-cantinho.svg') }}"
                                                     alt="Lojas Cantinho"
                                                     class="partner-logo logo1"></div>
            <div class="partner-logo-container"><img src="{{ asset('front/assets/images/buddy-shop.svg') }}"
                                                     alt="Buddy Shop"
                                                     class="partner-logo logo2"></div>
            <div class="partner-logo-container"><img src="{{ asset('front/assets/images/vitoria-park-shopping.svg') }}"
                                                     width="97"
                                                     alt="Vitória Park Shopping" class="partner-logo logo3"></div>
            <div class="partner-logo-container"><img src="{{ asset('front/assets/images/imag-diagnosticos.svg') }}"
                                                     alt="Imag Diagnósticos" class="partner-logo logo4"></div>
            <div class="partner-logo-container"><img src="{{ asset('front/assets/images/lorenas-arquitetura.svg') }}"
                                                     alt="Lorenas Arquitetura" class="partner-logo logo5"></div>
            <div class="partner-logo-container"><img src="{{ asset('front/assets/images/unisaude.svg') }}"
                                                     alt="UniSaúde"
                                                     class="partner-logo"></div>
        </div>
    </div>
    {{--/Content Clientes e parceiros--}}

    {{--Content Divider--}}
    <div class="section-divider">
        <img src="{{ asset('front/assets/images/triangle-topright.png') }}" class="bg-divider">
    </div>
    {{--/Content Divider--}}

    {{--Content contato--}}
    <div class="section bgaccent-color section-triangle">
        <div class="wrapper">
            <div class="row left-aligned">
                <div class="col-2 lg-6 md-3 xs-2 left-aligned">
                    <div class="contact-container">
                        <div class="margin-bottom left-aligned">
                            <p class="micro-heading left-aligned">Do que sua empresa precisa?</p>
                            <h2 class="section-header left-aligned short-paragraph">Não basta ter a ideia, você deve
                                gerar oportunidades para seu negócio!<br></h2>
                        </div>
                        <a href="{{ route('contato') }}" class="button w-button">Vamos Conversar?</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="letters-container">
                <div class="col-2 lg-6 md-3 xs-2" style="float: right">
                    <img src="{{'front/assets/images/contato.svg'}}" width="900" style="margin-right: 200px;"
                         alt="Contato">
                </div>
            </div>
        </div>
    </div>
    {{--/Content contato--}}
@endsection('content')
