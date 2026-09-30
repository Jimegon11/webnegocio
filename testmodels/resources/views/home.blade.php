@extends('layouts.app')

@section('title', 'Inicio')
@section('meta_description', 'Café Raíces es un café de especialidad en Madrid. Granos de origen único, comercio justo y repostería artesanal horneada cada mañana.')

@section('content')

    {{-- ===== HERO ===== --}}
    <section class="hero" aria-label="Sección principal de bienvenida">
        <div class="hero__image-wrapper">
            <img src="{{ asset('images/cafe_hero.png') }}"
                 alt="Interior acogedor de Café Raíces con luz cálida y mesas de madera"
                 class="hero__image">
            <div class="hero__overlay"></div>
        </div>
        <div class="hero__content">
            <span class="hero__badge">☕ Café de Especialidad · Madrid</span>
            <h1 class="hero__title">Donde cada taza<br>cuenta una historia</h1>
            <p class="hero__subtitle">
                Seleccionamos granos de origen único cosechados a mano en Colombia, Etiopía y Guatemala.
                Cada taza que preparamos refleja el trabajo honesto de los productores y la dedicación de nuestros baristas.
            </p>
            <div class="hero__actions">
                <a href="{{ route('menu') }}" class="btn btn--primary">Ver nuestra carta</a>
                <a href="{{ route('about') }}" class="btn btn--ghost">Conoce nuestra historia</a>
            </div>
        </div>
    </section>

    {{-- ===== FEATURES ===== --}}
    <section class="features section" aria-label="Nuestros valores">
        <div class="container">
            <div class="section-header">
                <span class="section-label">¿Por qué elegirnos?</span>
                <h2 class="section-title">Más que café, una filosofía</h2>
                <p class="section-subtitle">
                    Creemos que un buen café empieza mucho antes de llegar a tu taza.
                </p>
            </div>
            <div class="features__grid">
                @foreach($features as $feature)
                    <article class="feature-card">
                        <div class="feature-card__icon" aria-hidden="true">{{ $feature['icon'] }}</div>
                        <h3 class="feature-card__title">{{ $feature['title'] }}</h3>
                        <p class="feature-card__desc">{{ $feature['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== FEATURED ITEM ===== --}}
    <section class="featured-item section section--dark" aria-label="Bebida destacada de la temporada">
        <div class="container featured-item__inner">
            <div class="featured-item__text">
                <span class="section-label section-label--light">Novedad de temporada</span>
                <h2 class="section-title section-title--light">Nitro Cold Brew con Naranja de Temporada</h2>
                <p>
                    Nuestra última creación combina el aterciopelado nitro cold brew de 24 horas con
                    una esencia natural de naranja de Valencianos de temporada. El resultado es una bebida
                    refrescante, sin azúcar añadida y con una espuma cremosa inconfundible.
                </p>
                <ul class="featured-item__details">
                    <li>🌿 Sin azúcar añadida</li>
                    <li>🧊 Servida a 4 °C sobre hielo</li>
                    <li>💛 Naranja de temporada local</li>
                    <li>⚡ Alto contenido en cafeína natural</li>
                </ul>
                <a href="{{ route('menu') }}" class="btn btn--primary">Ver toda la carta</a>
            </div>
            <div class="featured-item__image-col">
                <img src="{{ asset('images/cafe_menu.png') }}"
                     alt="Selección de bebidas artesanales de Café Raíces sobre mesa de madera oscura"
                     class="featured-item__img">
            </div>
        </div>
    </section>

    {{-- ===== VISIT BANNER ===== --}}
    <section class="visit-banner section" aria-label="Información de visita">
        <div class="container visit-banner__inner">
            <h2 class="visit-banner__title">Visítanos en Madrid</h2>
            <p class="visit-banner__text">
                Estamos en el corazón de Lavapiés, uno de los barrios más vibrantes y culturalmente ricos de Madrid.
                Fácil acceso en metro (línea 3, estación Lavapiés) y autobús.
            </p>
            <div class="visit-banner__info">
                <div class="visit-info-item">
                    <strong>📍 Dirección</strong>
                    <span>C/ Mesón de Paredes, 14 · 28012 Madrid</span>
                </div>
                <div class="visit-info-item">
                    <strong>🕐 Horario</strong>
                    <span>Lun–Vie: 7:30–21:00 · Sáb–Dom: 8:30–22:00</span>
                </div>
                <div class="visit-info-item">
                    <strong>📞 Teléfono</strong>
                    <span><a href="tel:+34912345678">+34 912 345 678</a></span>
                </div>
            </div>
            <a href="https://maps.google.com/?q=Meson+de+Paredes+14+Madrid" target="_blank" rel="noopener noreferrer" class="btn btn--primary">
                Cómo llegar ↗
            </a>
        </div>
    </section>

@endsection
