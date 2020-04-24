<div data-collapse="medium" data-animation="default" data-duration="400" class="nav-bar w-nav">
    <div class="wrapper navbar-2 w-container">
        <div class="logo-area">
            <a href="{{ route('/') }}" class="nav-logo w-inline-block">
                <img src="{{ asset('front/assets/images/solutionstec.svg') }}" width="120" alt="Logotipo Solutions Tec">
            </a>
        </div>
        <nav role="navigation" class="nav-menu-2 w-nav-menu">
            <a href="{{ route('home') }}" class="nav-link w-nav-link {{ request()->is('/') ? 'w--current' : '' }}">Home</a>
            <a href="{{ route('sobre-nos') }}" class="nav-link w-nav-link {{ request()->is('sobre-nos') ? 'w--current' : '' }}">Sobre Nós</a>
            <a href="{{ route('blog') }}" class="nav-link w-nav-link {{ request()->is('blog') || request()->is('blog/*') ? 'w--current' : '' }}">Blog</a>
            <a href="{{ route('portfolio') }}" class="nav-link w-nav-link {{ request()->is('portfolio') || request()->is('jobs/*') ? 'w--current' : '' }}">Portfólio</a>
            <div class="nav-cta-button-container">
                <a href="{{ route('contato') }}" class="nav-link-2 border cta w-nav-link">Contato</a>
            </div>
        </nav>
        <div class="menu-button-2 w-nav-button">
            <div class="burger-icon w-icon-nav-menu"></div>
        </div>
    </div>
</div>
