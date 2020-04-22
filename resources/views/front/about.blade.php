@extends('front.master.master')
@section('content')
<div class="navbg"></div>
<div class="section-2 page-header image">
    <div class="banner-overlay"></div>
    <div class="wrapper left-aligned">
        <div>
            <div class="col-2">
                <h1 class="no-margins page-title">Sobre a SolutionsTec</h1>
            </div>
        </div>
    </div>
</div>
<div class="section no-padding">

    <div class="wrapper">
        <div class="row">
            <div class="col">
                <div class="w-layout-grid grid2x1">
                    <div id="w-node-9176933f05c3-0fac79c2" class="container">
                        <h2>Quem somos</h2>
                        <p class="section-title">A SolutionsTec foi fundada em 2014 como uma empresa de desenvolvimento
                            de sites em Pernambuco, Brasil. </p>
                        <p style="text-align: justify">Sabemos que nosso valor é medido pelo sucesso de
                            nossos clientes, por esse motivo, lá no início em 2014, iniciamos nossa jornada com foco em
                            desenvolver soluções através da internet que desde então vive em enorme expansão gerando
                            várias oportunidades principalmente para quem está iniciando um empreendimento. Daí o nome
                            “SOLUTIONS” = Soluções e “TEC” = Tecnologia (que tanto amamos).</p>
                        <p style="text-align: justify">Por consequência do amor a tecnologia nos
                            especializamos em dados – o que há de mais valioso no mundo hoje – implementamos mais
                            serviços para atender a toda uma demanda que naturalmente vem à tona, e hoje focamos no
                            resultado através de serviços que incluem Desenvolvimento de Sites, Design Gráfico,
                            Marketing Digital e Suporte a Sites. Desenvolvemos e suportamos mais de 100 projetos e
                            inúmeras campanhas para nossos clientes em todos os setores, desde alimentação, medicina,
                            moda, arquitetura e TI.</p>
                        <a target="_blank" href="https://www.facebook.com/solutionstec"
                           class="media-link w-inline-block">
                            <div class="fa-icon"></div>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/solutionstec"
                           class="media-link w-inline-block">
                            <div class="fa-icon"></div>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/channel/UC3YAl1v8WhWY_CpdYvLE11w"
                           class="media-link w-inline-block">
                            <div class="fa-icon"></div>
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/company/solutionstec/?viewAsMember=true"
                           class="media-link w-inline-block">
                            <div class="fa-icon"></div>
                        </a>
                    </div>
                    <div id="w-node-f3bc66ccbd90-0fac79c2" class="clients">
                        <style>.embed-container {
                                position: relative;
                                padding-bottom: 56.25%;
                                height: 0;
                                overflow: hidden;
                                max-width: 100%;
                            }

                            .embed-container iframe, .embed-container object, .embed-container embed {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                            }</style>
                        <div class='embed-container'>
                            <iframe src='https://www.youtube.com/embed//4-1d71WvUjw' frameborder='0'
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section bgaccent">
        <div class="flexbox">
            <div class="brand-text margin-bottom">
                <h2 class="hero-title margin-bottom" style="margin-right: 50px">Nós <br>Construimos <br> Marcas <br>Que
                    <br>Importam</h2>
            </div>
            <div class="brand-col">
                <div class="w-layout-grid grid-wedo">
                    <div id="w-node-40f2f5616994-0fac79c2" class="margin-bottom"><img
                            src="{{ asset('front/assets/images/poster.svg') }}" width="64"
                            alt="Branding"
                            class="small-margin-bottom">
                        <h4>Branding</h4>
                        <p class="paragraph-small short-paragraph">Uma marca é muito mais que um logotipo ou uma cor. É
                            como as pessoas sentem e percebem sua empresa, seus produtos e serviços. Nosso objetivo é
                            criar marcas que deixem boas impressões, criem memoria afetiva e que durem por toda a
                            vida.</p>
                    </div>
                    <div><img src="{{ asset('front/assets/images/social-media.svg') }}" width="64"
                              alt="Campanha Para Mídias Sociais" class="small-margin-bottom">
                        <h4>Campanha Para Mídias Sociais</h4>
                        <p class="paragraph-small short-paragraph">As mídias sociais nos dar o poder de conversar,
                            compartilhar e se conectar ainda mais com seus clientes. Saber sobre tendências nas redes é
                            essencial por que nos permitir alcançar ideias e estratégicas para obter novos leads.</p>
                    </div>
                    <div id="w-node-dffb643a2535-0fac79c2" class="margin-bottom"><img
                            src="{{ asset('front/assets/images/salesman.svg') }}"
                            width="64" alt="Relacionamentos"
                            class="small-margin-bottom">
                        <h4>Relacionamentos</h4>
                        <p class="paragraph-small short-paragraph">Se você não cuidar de seus clientes, alguém o fará.
                            Sabendo disso, sempre analisar todos os dados de relacionamento para prevenir que seu
                            cliente acabe indo embora.</p>
                    </div>
                    <div class="margin-bottom"><img src="{{ asset('front/assets/images/web-page.svg') }}" width="64"
                                                    alt="Desenvolvimento Web"
                                                    class="small-margin-bottom">
                        <h4>Desenvolvimento Web</h4>
                        <p class="paragraph-small short-paragraph">Sua presença na web é uma das ferramentas mais
                            importantes para comunicar sua marca e conseguir novos clientes. Seu site deve ser capaz de
                            envolver os visitantes e fazê-los executar ações que se convertem em receita.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
