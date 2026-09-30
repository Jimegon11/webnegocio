<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Café Raíces — Café de especialidad, comercio justo y repostería artesanal en Madrid.')">
    <title>@yield('title', 'Café Raíces') | Café de Especialidad</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/cafe.css') }}">
</head>
<body class="bg-stone-50 text-stone-800">

    {{-- ======================== HEADER ======================== --}}
    <header class="cafe-header">
        <div class="cafe-header__inner">
            <a href="{{ route('home') }}" class="cafe-logo" aria-label="Ir al inicio de Café Raíces">
                <span class="cafe-logo__icon">☕</span>
                <span class="cafe-logo__text">Café Raíces</span>
            </a>

            <button class="cafe-nav-toggle" id="navToggle" aria-expanded="false" aria-controls="mainNav" aria-label="Abrir menú de navegación">
                <span></span><span></span><span></span>
            </button>

            <nav class="cafe-nav" id="mainNav" role="navigation" aria-label="Navegación principal">
                <ul class="cafe-nav__list">
                    <li>
                        <a href="{{ route('home') }}"
                           class="cafe-nav__link @if(request()->routeIs('home')) cafe-nav__link--active @endif">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('menu') }}"
                           class="cafe-nav__link @if(request()->routeIs('menu')) cafe-nav__link--active @endif">
                            Carta
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                           class="cafe-nav__link @if(request()->routeIs('about')) cafe-nav__link--active @endif">
                            Nosotros
                        </a>
                    </li>
                    <li>
                        <a href="https://maps.google.com/?q=Lavapies+Madrid" target="_blank" rel="noopener noreferrer" class="cafe-nav__cta">
                            Cómo llegar ↗
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- ======================== MAIN ======================== --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- ======================== FOOTER ======================== --}}
    <footer class="cafe-footer">
        <div class="cafe-footer__inner">
            <div class="cafe-footer__brand">
                <span class="cafe-logo__icon">☕</span>
                <span class="cafe-footer__brand-name">Café Raíces</span>
                <p class="cafe-footer__tagline">Donde cada taza cuenta una historia.</p>
            </div>

            <div class="cafe-footer__links">
                <h3 class="cafe-footer__heading">Páginas</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('menu') }}">Carta</a></li>
                    <li><a href="{{ route('about') }}">Nosotros</a></li>
                </ul>
            </div>

            <div class="cafe-footer__links">
                <h3 class="cafe-footer__heading">Recursos</h3>
                <ul>
                    <li><a href="https://www.scaa.org/" target="_blank" rel="noopener noreferrer">Specialty Coffee Assoc. ↗</a></li>
                    <li><a href="https://www.worldcoffeeresearch.org/" target="_blank" rel="noopener noreferrer">World Coffee Research ↗</a></li>
                    <li><a href="https://fairtrade.net/" target="_blank" rel="noopener noreferrer">Fairtrade International ↗</a></li>
                </ul>
            </div>

            <div class="cafe-footer__contact">
                <h3 class="cafe-footer__heading">Contacto</h3>
                <address>
                    <p>📍 Calle del Mesón de Paredes, 14<br>28012 Madrid, España</p>
                    <p>📞 <a href="tel:+34912345678">+34 912 345 678</a></p>
                    <p>✉️ <a href="mailto:hola@caferaices.es">hola@caferaices.es</a></p>
                </address>
                <div class="cafe-footer__hours">
                    <strong>Horario:</strong>
                    <ul>
                        <li>Lun – Vie: 7:30 – 21:00</li>
                        <li>Sáb – Dom: 8:30 – 22:00</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="cafe-footer__bottom">
            <p>&copy; {{ date('Y') }} Café Raíces. Todos los derechos reservados.</p>
            <p>Hecho con ❤️ y mucho espresso en Madrid.</p>
        </div>
    </footer>

    <script>
        // Mobile nav toggle
        const toggle = document.getElementById('navToggle');
        const nav = document.getElementById('mainNav');
        toggle.addEventListener('click', () => {
            const expanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', String(!expanded));
            nav.classList.toggle('cafe-nav--open');
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            document.querySelector('.cafe-header').classList.toggle('cafe-header--scrolled', window.scrollY > 50);
        });
    </script>
</body>
</html>
