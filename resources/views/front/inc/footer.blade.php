<div class="section section-footer">
    <div class="wrapper">
        <div class="row-2">
            <div class="col-2 lg-4 md-4"><a href="#" data-ix="logo" class="footer-logo-2 w-nav-brand"><img
                        src="{{ asset('front/assets/images/solutionstec-branco.svg') }}" width="104" alt="Logotipo Solutions Tec Rodapé"></a>
                <p class="ondark">Desde capacitar marcas desafiadoras até pensar grande e ajudar as marcas globais a
                    se sentirem mais próximas de casa. Aproveitamos a tecnologia para aproximar pessoas de produtos,
                    com conteúdo e experiências que eles amam.</p>
            </div>
            <div class="col-2 lg-3 sm-4">
                <div class="footer-links-container">
                    <h5 class="footer-heading"><a href="{{ route('portfolio') }}" class="no-underline">Nosso Trabalho</a></h5>
                    <a href="{{ route('portfolio') }}" class="footer-link ondark">Portfolio</a>
                    <a href="{{ route('contato') }}" class="footer-link ondark">Contato</a>
                    <a href="{{ route('blog') }}" class="footer-link ondark">Blog</a>
                </div>
            </div>
            <div class="col-2 lg-2 sm-6">
                <div class="footer-links-container">
                    <h5 class="footer-heading"><a href="{{ route('sobre-nos') }}" class="no-underline">Sobre</a></h5>
                    <a href="{{ route('sobre-nos') }}" class="footer-link ondark">Sobre</a>
                    <a href="{{ route('idealizador') }}" class="footer-link ondark">Idealizador</a>
                </div>
            </div>
            <div class="col-2 lg-3 sm-6 xs-12">
                <div class="footer-links-container">
                    <h5 class="footer-heading no-underline">Endereço</h5>
                    <address>
                        <p class="footer-paragraph">R. Indrustrial Renovato José Duarte, n. 65 - Vitória de St.
                            Antão/PE. </p>
                    </address>
                    <p class="footer-paragraph">{{ env('PHONE_NUMBER') }} (WhatsApp)</p>
                    <p class="footer-paragraph">{{ env('MAIL_FROM_ADDRESS') }}</p>

                </div>
                <div class="negative-margin">
                    <a target="_blank" href="https://www.facebook.com/solutionstec"
                       class="social-media-link w-inline-block">
                        <div class="fa-icon ondark"></div>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/solutionstec"
                       class="social-media-link w-inline-block">
                        <div class="fa-icon ondark"></div>
                    </a>
                    <a target="_blank" href="https://www.youtube.com/channel/UC3YAl1v8WhWY_CpdYvLE11w"
                       class="social-media-link w-inline-block">
                        <div class="fa-icon ondark"></div>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/solutionstec/?viewAsMember=true"
                       class="social-media-link w-inline-block">
                        <div class="fa-icon ondark"></div>
                    </a>
                </div>
            </div>
            <div class="col-2 lg-2 md-4"></div>
        </div>
    </div>
</div>

