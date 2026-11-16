
@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

<section class="hero">
    <div class="hero-content">
        <span class="eyebrow">Sistema de gestión institucional</span>

        <h1>Una gestión de salud más organizada y eficiente.</h1>

        <p>
            Bienvenido al sistema de gestión de la Posta de Salud San Jerónimo.
            Una plataforma diseñada para organizar la información de pacientes,
            personal médico, citas y atenciones en un solo lugar.
        </p>

        <div class="hero-actions">
            <a href="#modulos" class="button-primary">
                Explorar módulos &nbsp; →
            </a>

            <span class="hero-note">Posta de Salud · San Jerónimo, Cusco</span>
        </div>
    </div>
</section>

<section class="section" id="modulos">
    <div class="section-heading">
        <div>
            <p class="section-kicker">Administración del sistema</p>
            <h2>Módulos principales</h2>
            <p class="section-description">
                Accede a las áreas principales que conforman el sistema de gestión.
            </p>
        </div>
    </div>

    <div class="module-grid">

        <article class="module-card" id="pacientes">
            <div class="module-icon">01</div>
            <h3>Pacientes</h3>
            <p>
                Registro y administración de la información personal
                de los pacientes de la posta de salud.
            </p>
        </article>

        <article class="module-card" id="personal">
            <div class="module-icon">02</div>
            <h3>Personal médico</h3>
            <p>
                Organización y consulta de los datos del personal
                que trabaja en el establecimiento.
            </p>
        </article>

        <article class="module-card" id="citas">
            <div class="module-icon">03</div>
            <h3>Citas</h3>
            <p>
                Organización y seguimiento de las citas programadas
                para los pacientes.
            </p>
        </article>

        <article class="module-card" id="atenciones">
            <div class="module-icon">04</div>
            <h3>Atenciones</h3>
            <p>
                Registro y consulta de las atenciones realizadas
                en la posta de salud.
            </p>
        </article>

    </div>
</section>

<section class="section">
    <div class="section-heading">
        <div>
            <p class="section-kicker">Información técnica</p>
            <h2>Datos del proyecto</h2>
            <p class="section-description">
                Tecnologías y configuración utilizadas en el desarrollo.
            </p>
        </div>
    </div>

    <div class="info-panel">
        <div class="info-item">
            <span class="info-label">Framework</span>
            <span class="info-value">Laravel {{ app()->version() }}</span>
        </div>

        <div class="info-item">
            <span class="info-label">Base de datos</span>
            <span class="info-value">{{ DB::connection()->getDatabaseName() }}</span>
        </div>

        <div class="info-item">
            <span class="info-label">Motor de datos</span>
            <span class="info-value">PostgreSQL</span>
        </div>

        <div class="info-item">
            <span class="info-label">Zona horaria</span>
            <span class="info-value">{{ config('app.timezone') }}</span>
        </div>
    </div>
</section>

@endsection
