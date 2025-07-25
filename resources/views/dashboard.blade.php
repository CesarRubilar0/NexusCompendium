@extends('layouts.app')

@section('title', 'Panel de Control - ConectaVCM')

@section('description', 'Panel de control principal de ConectaVCM para la gestión de proyectos de vinculación con el medio.')

@section('content')
<div style="text-align: center; padding: 4rem 2rem;">
    <!-- Icono del dashboard -->
    <div style="margin-bottom: 2rem;">
        <div style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--color-primario), var(--color-secundario)); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 8px 32px rgba(37, 99, 235, 0.3);">
            <span style="color: white; font-size: 3rem; font-weight: bold;">📊</span>
        </div>
    </div>

    <!-- Título principal -->
    <h1 style="font-size: 3rem; font-weight: 700; color: var(--color-texto-principal); margin-bottom: 1rem;">
        Panel de Control
    </h1>
    
    <!-- Descripción -->
    <p style="color: var(--color-texto-secundario); font-size: 1.25rem; max-width: 600px; margin: 0 auto 3rem;">
        Bienvenido al centro de administración de ConectaVCM. Desde aquí podrás gestionar todos los aspectos 
        de la plataforma de vinculación con el medio.
    </p>

    <!-- Mensaje de desarrollo -->
    <div class="card" style="max-width: 800px; margin: 0 auto;">
        <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1.5rem;">
            <div style="width: 60px; height: 60px; background-color: #FEF3C7; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <span style="font-size: 1.5rem;">🚧</span>
            </div>
            <h2 style="font-size: 1.5rem; font-weight: 600; color: var(--color-texto-principal); margin: 0;">
                Funcionalidad en Desarrollo
            </h2>
        </div>
        
        <p style="color: var(--color-texto-secundario); margin-bottom: 2rem;">
            El dashboard completo estará disponible en la próxima fase del proyecto. 
            Por ahora, puedes explorar las siguientes funcionalidades:
        </p>

        <!-- Enlaces rápidos -->
        <div class="grid grid-2" style="gap: 1rem; margin-bottom: 2rem;">
            <a href="{{ url('/proyectos') }}" class="btn btn-primary" style="text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                <span>📋</span>
                Ver Proyectos
            </a>
            <a href="{{ url('/proyectos/crear') }}" class="btn btn-secondary" style="text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                <span>➕</span>
                Crear Proyecto
            </a>
        </div>

        <!-- Funcionalidades futuras -->
        <div style="background-color: var(--color-fondo-alternativo); padding: 1.5rem; border-radius: 8px;">
            <h3 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 1rem;">
                🔮 Próximamente en el Dashboard:
            </h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; text-align: left;">
                <div>
                    <h4 style="font-weight: 500; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
                        📈 Estadísticas en Tiempo Real
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Métricas de participación, progreso de proyectos y impacto en la comunidad
                    </p>
                </div>
                <div>
                    <h4 style="font-weight: 500; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
                        🔔 Centro de Notificaciones
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Alertas sobre proyectos, deadlines y actualizaciones importantes
                    </p>
                </div>
                <div>
                    <h4 style="font-weight: 500; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
                        👥 Gestión de Usuarios
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Administración de estudiantes, coordinadores y contactos comunitarios
                    </p>
                </div>
                <div>
                    <h4 style="font-weight: 500; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
                        📊 Reportes Detallados
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Informes de impacto, seguimiento de objetivos y evaluaciones
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón de regreso -->
    <div style="margin-top: 3rem;">
        <a href="{{ url('/') }}" style="color: var(--color-primario); text-decoration: none; font-weight: 500;">
            ← Volver al Inicio
        </a>
    </div>
</div>
@endsection
