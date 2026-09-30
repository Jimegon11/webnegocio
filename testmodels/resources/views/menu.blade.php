@extends('layouts.app')

@section('title', 'Carta')
@section('meta_description', 'Descubre la carta completa de Café Raíces: espressos, cold brews, cappuccinos y repostería artesanal horneada cada mañana en Madrid.')

@section('content')

    {{-- ===== PAGE HEADER ===== --}}
    <section class="page-header page-header--menu" aria-label="Encabezado de la carta">
        <div class="page-header__content">
            <span class="section-label section-label--light">Lo que preparamos</span>
            <h1 class="page-header__title">Nuestra Carta</h1>
            <p class="page-header__subtitle">
                Todos nuestros cafés se preparan al momento con granos tostados en la semana anterior.
                La repostería se hornea cada mañana desde las 6:00 h.
            </p>
        </div>
    </section>

    {{-- ===== MENU NOTICE ===== --}}
    <div class="container">
        <div class="menu-notice" role="note">
            <span>🌱</span>
            <p>
                Disponemos de opciones de leche vegetal (avena, almendra, soja y coco) sin coste adicional.
                Consulta a tu barista sobre alérgenos — trabajamos con gluten, lácteos y frutos secos en las mismas instalaciones.
            </p>
        </div>
    </div>

    {{-- ===== MENU CATEGORIES ===== --}}
    <div class="container menu-container">
        @foreach($menuCategories as $category)
            <section class="menu-category" aria-label="Categoría: {{ $category['name'] }}">
                <h2 class="menu-category__title">{{ $category['name'] }}</h2>
                <div class="menu-grid">
                    @foreach($category['items'] as $item)
                        <article class="menu-card">
                            <div class="menu-card__body">
                                <h3 class="menu-card__name">{{ $item['name'] }}</h3>
                                <p class="menu-card__desc">{{ $item['description'] }}</p>
                            </div>
                            <div class="menu-card__price" aria-label="Precio: {{ $item['price'] }} euros">
                                {{ $item['price'] }} €
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endforeach
    </div>

    {{-- ===== MENU EXTRA INFO ===== --}}
    <section class="menu-extra section section--warm" aria-label="Información adicional sobre la carta">
        <div class="container menu-extra__inner">
            <div class="menu-extra__text">
                <h2>Granos de Origen Único</h2>
                <p>
                    En Café Raíces nunca trabajamos con mezclas comerciales anónimas. Cada grano que usamos
                    tiene nombre, apellido, y una historia que te podemos contar. Estos son nuestros orígenes actuales:
                </p>
                <ul class="origin-list">
                    <li>
                        <strong>🇨🇴 Colombia · Finca La Esperanza, Huila</strong>
                        <span>Variedad Caturra. Notas de ciruela, caramelo y flores blancas. Proceso lavado.</span>
                    </li>
                    <li>
                        <strong>🇪🇹 Etiopía · Yirgacheffe, región Gedeo</strong>
                        <span>Variedad Heirloom. Notas de bergamota, té negro y jazmín. Proceso natural.</span>
                    </li>
                    <li>
                        <strong>🇬🇹 Guatemala · Antigua, finca El Injerto</strong>
                        <span>Variedad Bourbon. Notas de chocolate con leche, nuez y naranja. Honey process.</span>
                    </li>
                </ul>
            </div>
            <div class="menu-extra__image">
                <img src="{{ asset('images/cafe_menu.png') }}"
                     alt="Bebidas de especialidad de Café Raíces sobre mesa de madera"
                     loading="lazy">
            </div>
        </div>
    </section>

@endsection
