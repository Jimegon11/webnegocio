@extends('layouts.app')

@section('title', 'Nosotros')
@section('meta_description', 'La historia de Café Raíces: dos apasionados del café que decidieron transformar la cultura cafetera de Madrid desde el barrio de Lavapiés.')

@section('content')

    {{-- ===== PAGE HEADER ===== --}}
    <section class="page-header page-header--about" aria-label="Encabezado de la página nosotros">
        <div class="page-header__content">
            <span class="section-label section-label--light">Nuestra historia</span>
            <h1 class="page-header__title">Quiénes somos</h1>
            <p class="page-header__subtitle">
                Somos Ana y Marco, dos enamorados del café que en 2015 decidieron que Madrid merecía
                un lugar donde la calidad, la honestidad y la comunidad fueran los ingredientes principales.
            </p>
        </div>
    </section>

    {{-- ===== TEAM SECTION ===== --}}
    <section class="team section" aria-label="Nuestro equipo">
        <div class="container team__inner">
            <div class="team__image">
                <img src="{{ asset('images/cafe_team.png') }}"
                     alt="Ana y Marco, fundadores de Café Raíces, sonriendo detrás de la barra"
                     loading="lazy">
            </div>
            <div class="team__text">
                <span class="section-label">Los fundadores</span>
                <h2 class="section-title">Ana Morales &amp; Marco Vidal</h2>
                <p>
                    Ana estudió gastronomía en el Basque Culinary Center de San Sebastián y se especializó
                    en la cadena de valor del café durante un año en Colombia. Marco, por su parte, es
                    Q Grader certificado por el Coffee Quality Institute y viaja dos veces al año a visitar
                    personalmente a los productores con quienes trabajamos.
                </p>
                <p>
                    Juntos han creado un espacio donde el café es el protagonista, pero nunca el único.
                    Café Raíces es también un lugar de encuentro, de conversación y de cultura.
                </p>
                <div class="team__badges">
                    <span class="badge">Q Grader Certificado</span>
                    <span class="badge">Comercio Justo Verificado</span>
                    <span class="badge">100% Orgánico</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== TIMELINE ===== --}}
    <section class="timeline-section section section--warm" aria-label="Historia y hitos de Café Raíces">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Una década de sabor</span>
                <h2 class="section-title">Nuestra trayectoria</h2>
            </div>
            <ol class="timeline" aria-label="Hitos de Café Raíces en orden cronológico">
                @foreach($milestones as $milestone)
                    <li class="timeline__item">
                        <div class="timeline__year" aria-label="Año {{ $milestone['year'] }}">{{ $milestone['year'] }}</div>
                        <div class="timeline__content">
                            <h3 class="timeline__title">{{ $milestone['title'] }}</h3>
                            <p class="timeline__desc">{{ $milestone['description'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- ===== VALUES ===== --}}
    <section class="values section" aria-label="Nuestros valores">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Lo que nos guía</span>
                <h2 class="section-title">Nuestros valores</h2>
                <p class="section-subtitle">
                    No son palabras en una pared. Son decisiones que tomamos cada día.
                </p>
            </div>
            <div class="values__grid">
                @foreach($values as $value)
                    <article class="value-card">
                        <h3 class="value-card__title">{{ $value['title'] }}</h3>
                        <p class="value-card__desc">{{ $value['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== PRESS ===== --}}
    <section class="press section section--dark" aria-label="Prensa y reconocimientos">
        <div class="container">
            <div class="section-header">
                <span class="section-label section-label--light">Lo que dicen de nosotros</span>
                <h2 class="section-title section-title--light">Prensa y reconocimientos</h2>
            </div>
            <div class="press__grid">
                <blockquote class="press-quote">
                    <p>«El mejor espresso de Madrid fuera del barrio de Malasaña. Una experiencia que te transforma.»</p>
                    <cite>— El País Semanal, marzo 2023</cite>
                </blockquote>
                <blockquote class="press-quote">
                    <p>«Café Raíces demuestra que el café de especialidad no tiene que ser intimidante. Todo lo contrario: es acogedor y delicioso.»</p>
                    <cite>— Time Out Madrid, enero 2024</cite>
                </blockquote>
                <blockquote class="press-quote">
                    <p>«Un referente absoluto del comercio justo y la sostenibilidad en la hostelería madrileña.»</p>
                    <cite>— Gastroactitud.com, septiembre 2024</cite>
                </blockquote>
            </div>
            <div class="press__links">
                <p class="press__links-intro">Más información sobre café de especialidad:</p>
                <ul>
                    <li><a href="https://www.scaa.org/" target="_blank" rel="noopener noreferrer">Specialty Coffee Association ↗</a></li>
                    <li><a href="https://www.coffeereview.com/" target="_blank" rel="noopener noreferrer">Coffee Review ↗</a></li>
                    <li><a href="https://perfectdailygrind.com/" target="_blank" rel="noopener noreferrer">Perfect Daily Grind ↗</a></li>
                </ul>
            </div>
        </div>
    </section>

@endsection
