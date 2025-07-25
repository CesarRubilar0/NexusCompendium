@extends('layouts.app')

@section('title', 'Iniciar Sesión - ConectaVCM')

@section('description', 'Inicia sesión en ConectaVCM para acceder a tu cuenta y gestionar proyectos de vinculación con el medio.')

@section('content')
<div style="max-width: 400px; margin: 3rem auto; padding: 0 1rem;">
    <!-- Logo y título -->
    <div style="text-align: center; margin-bottom: 2rem;">
        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 1rem;">
            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-primario), var(--color-secundario)); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">
                C
            </div>
        </div>
        <h1 style="font-size: 2rem; font-weight: 700; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
            Iniciar Sesión
        </h1>
        <p style="color: var(--color-texto-secundario);">
            Accede a tu cuenta en ConectaVCM
        </p>
    </div>

    <!-- Formulario de login -->
    <div class="card">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-input" 
                       placeholder="tu.email@instituto.cl" required>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-input" 
                       placeholder="••••••••" required>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                <label style="display: flex; align-items: center; color: var(--color-texto-secundario); font-size: 0.875rem;">
                    <input type="checkbox" name="remember" 
                           style="margin-right: 0.5rem; accent-color: var(--color-primario);">
                    Recordarme
                </label>
                <a href="#" style="color: var(--color-primario); text-decoration: none; font-size: 0.875rem;">
                    ¿Olvidaste tu contraseña?
                </a>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom: 1rem;">
                Iniciar Sesión
            </button>
        </form>

        <!-- Separador -->
        <div style="text-align: center; margin: 1.5rem 0; position: relative;">
            <span style="background-color: var(--color-fondo-principal); padding: 0 1rem; color: var(--color-texto-secundario); font-size: 0.875rem; position: relative; z-index: 1;">
                o
            </span>
            <div style="position: absolute; top: 50%; left: 0; right: 0; height: 1px; background-color: #E5E7EB; z-index: 0;"></div>
        </div>

        <!-- Botón de registro -->
        <div style="text-align: center;">
            <p style="color: var(--color-texto-secundario); font-size: 0.875rem; margin-bottom: 1rem;">
                ¿No tienes una cuenta?
            </p>
            <a href="#" class="btn btn-outline" style="width: 100%;">
                Crear Cuenta Nueva
            </a>
        </div>
    </div>

    <!-- Información adicional -->
    <div style="background-color: var(--color-fondo-alternativo); padding: 1.5rem; border-radius: 8px; margin-top: 2rem;">
        <h3 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.75rem; font-size: 1rem;">
            🎓 ¿Eres estudiante?
        </h3>
        <p style="color: var(--color-texto-secundario); font-size: 0.875rem; margin-bottom: 1rem;">
            Utiliza tu correo institucional (@instituto.cl) para acceder a todas las funcionalidades 
            de la plataforma y participar en proyectos de vinculación.
        </p>
        <ul style="color: var(--color-texto-secundario); font-size: 0.875rem; margin-left: 1.5rem;">
            <li>Explora proyectos disponibles</li>
            <li>Postula a proyectos de tu interés</li>
            <li>Gestiona tu participación</li>
            <li>Accede a recursos y materiales</li>
        </ul>
    </div>

    <!-- Enlaces de ayuda -->
    <div style="text-align: center; margin-top: 2rem;">
        <div style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
            <a href="#" style="color: var(--color-texto-secundario); text-decoration: none; font-size: 0.875rem;">
                Centro de Ayuda
            </a>
            <a href="#" style="color: var(--color-texto-secundario); text-decoration: none; font-size: 0.875rem;">
                Contacto Técnico
            </a>
            <a href="#" style="color: var(--color-texto-secundario); text-decoration: none; font-size: 0.875rem;">
                Términos de Uso
            </a>
        </div>
    </div>
</div>

@section('additional_css')
<style>
    /* Estilos específicos para la página de login */
    .main-content {
        background: linear-gradient(135deg, var(--color-fondo-alternativo) 0%, var(--color-fondo-principal) 100%);
        min-height: calc(100vh - 160px);
    }
    
    /* Animación sutil para el logo */
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    
    .logo-animation {
        animation: pulse 3s ease-in-out infinite;
    }
</style>
@endsection

@section('additional_js')
<script>
    // Agregar clase de animación al logo
    document.addEventListener('DOMContentLoaded', function() {
        const logo = document.querySelector('.card').previousElementSibling.querySelector('div div');
        if (logo) {
            logo.classList.add('logo-animation');
        }
    });
</script>
@endsection
@endsection
