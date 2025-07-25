@e@section('title', 'Nexuscompendium - Plataforma Integral de Gestión de Conocimiento')

@section('description', 'Plataforma integral para la gestión de conocimiento y proyectos de vinculación con el medio, organizando el saber académico con las necesidades de la comunidad.')nds('layouts.app')

@section('title', 'ConectaVCM - Conectando Instituciones con la Comunidad')

@section('description', 'Plataforma integral para la gestión y seguimiento de proyectos de vinculación con el medio, conectando instituciones educativas con las necesidades de la comunidad.')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Bienvenido a Nexuscompendium</h1>
        <p class="hero-subtitle">
            La plataforma integral para gestionar conocimiento y proyectos de vinculación con el medio, 
            organizando el saber académico con las necesidades reales de la comunidad.
        </p>
        <div class="hero-actions" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ url('/proyectos') }}" class="btn btn-primary">Explorar Proyectos</a>
            <a href="{{ url('/proyectos/crear') }}" class="btn btn-outline">Crear Proyecto</a>
        </div>
    </div>
</section>

<!-- Características principales -->
<section style="padding: 4rem 0;">
    <div style="text-align: center; margin-bottom: 3rem;">
        <h2 style="font-size: 2.5rem; font-weight: 600; color: var(--color-texto-principal); margin-bottom: 1rem;">
            ¿Por qué elegir Nexuscompendium?
        </h2>
        <p style="font-size: 1.125rem; color: var(--color-texto-secundario); max-width: 600px; margin: 0 auto;">
            Nuestra plataforma organiza y facilita la gestión integral del conocimiento académico y comunitario
        </p>
    </div>

    <div class="grid grid-3">
        <div class="card">
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-primario), var(--color-secundario)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 1.5rem; font-weight: bold;">
                    📋
                </div>
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--color-texto-principal);">
                    Gestión Integral
                </h3>
                <p style="color: var(--color-texto-secundario);">
                    Administra todos los aspectos de tus proyectos de vinculación desde una sola plataforma, 
                    desde la planificación hasta el seguimiento de resultados.
                </p>
            </div>
        </div>

        <div class="card">
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-primario), var(--color-secundario)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 1.5rem; font-weight: bold;">
                    🤝
                </div>
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--color-texto-principal);">
                    Conexión Efectiva
                </h3>
                <p style="color: var(--color-texto-secundario);">
                    Facilita la comunicación y colaboración entre estudiantes, docentes, 
                    instituciones y organizaciones comunitarias.
                </p>
            </div>
        </div>

        <div class="card">
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-primario), var(--color-secundario)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 1.5rem; font-weight: bold;">
                    📊
                </div>
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--color-texto-principal);">
                    Seguimiento Detallado
                </h3>
                <p style="color: var(--color-texto-secundario);">
                    Monitorea el progreso de cada proyecto con herramientas de seguimiento 
                    y reportes que facilitan la evaluación de impacto.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Estadísticas -->
<section style="background-color: var(--color-fondo-alternativo); padding: 3rem 0; margin: 2rem 0; border-radius: 12px;">
    <div style="text-align: center;">
        <h2 style="font-size: 2rem; font-weight: 600; color: var(--color-texto-principal); margin-bottom: 2rem;">
            Impacto en Números
        </h2>
        <div class="grid grid-3">
            <div>
                <div style="font-size: 3rem; font-weight: 700; color: var(--color-primario); margin-bottom: 0.5rem;">
                    250+
                </div>
                <p style="color: var(--color-texto-secundario); font-weight: 500;">
                    Proyectos Activos
                </p>
            </div>
            <div>
                <div style="font-size: 3rem; font-weight: 700; color: var(--color-secundario); margin-bottom: 0.5rem;">
                    15+
                </div>
                <p style="color: var(--color-texto-secundario); font-weight: 500;">
                    Instituciones Participantes
                </p>
            </div>
            <div>
                <div style="font-size: 3rem; font-weight: 700; color: var(--color-primario); margin-bottom: 0.5rem;">
                    1,500+
                </div>
                <p style="color: var(--color-texto-secundario); font-weight: 500;">
                    Estudiantes Involucrados
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section style="text-align: center; padding: 3rem 0;">
    <div class="card" style="max-width: 600px; margin: 0 auto;">
        <h2 style="font-size: 1.75rem; font-weight: 600; color: var(--color-texto-principal); margin-bottom: 1rem;">
            ¿Listo para comenzar?
        </h2>
        <p style="color: var(--color-texto-secundario); margin-bottom: 2rem;">
            Únete a nuestra comunidad y comienza a generar impacto real en tu entorno.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ url('/login') }}" class="btn btn-primary">Iniciar Sesión</a>
            <a href="{{ url('/proyectos') }}" class="btn btn-secondary">Ver Proyectos</a>
        </div>
    </div>
</section>
@endsection
