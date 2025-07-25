@extends('layouts.app')

@section('title', 'Proyectos - ConectaVCM')

@section('description', 'Explora todos los proyectos de vinculación con el medio disponibles en ConectaVCM.')

@section('content')
<!-- Header de la sección -->
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;">
    <div>
        <h1 style="font-size: 2.5rem; font-weight: 700; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
            Proyectos de Vinculación
        </h1>
        <p style="color: var(--color-texto-secundario); font-size: 1.125rem;">
            Descubre y participa en proyectos que conectan la academia con la comunidad
        </p>
    </div>
    <a href="{{ url('/proyectos/crear') }}" class="btn btn-primary">
        + Crear Nuevo Proyecto
    </a>
</div>

<!-- Filtros y búsqueda -->
<div class="card" style="margin-bottom: 2rem;">
    <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
        <div style="flex: 1; min-width: 250px;">
            <input type="text" class="form-input" placeholder="Buscar proyectos..." style="margin-bottom: 0;">
        </div>
        <select class="form-input" style="width: auto; margin-bottom: 0;">
            <option value="">Todas las categorías</option>
            <option value="educacion">Educación</option>
            <option value="salud">Salud</option>
            <option value="tecnologia">Tecnología</option>
            <option value="medio-ambiente">Medio Ambiente</option>
            <option value="desarrollo-social">Desarrollo Social</option>
        </select>
        <select class="form-input" style="width: auto; margin-bottom: 0;">
            <option value="">Todos los estados</option>
            <option value="planificacion">En Planificación</option>
            <option value="activo">Activo</option>
            <option value="completado">Completado</option>
            <option value="pausado">Pausado</option>
        </select>
    </div>
</div>

<!-- Lista de proyectos -->
<div class="grid grid-2">
    <!-- Proyecto 1 -->
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: start;">
                <h3 class="card-title">Alfabetización Digital para Adultos Mayores</h3>
                <span style="background-color: var(--color-secundario); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; font-weight: 500;">
                    Activo
                </span>
            </div>
        </div>
        <p style="color: var(--color-texto-secundario); margin-bottom: 1rem;">
            Programa de capacitación en tecnologías digitales básicas para adultos mayores de la comuna, 
            enfocado en mejorar su calidad de vida y conexión con familiares.
        </p>
        <div style="margin-bottom: 1rem;">
            <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem;">
                    Tecnología
                </span>
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem;">
                    Educación
                </span>
            </div>
            <p style="font-size: 0.875rem; color: var(--color-texto-secundario);">
                👥 15 estudiantes participando • 📅 Inicio: Marzo 2024
            </p>
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <a href="{{ url('/proyectos/1') }}" class="btn btn-primary" style="font-size: 0.875rem;">Ver Detalles</a>
            <button class="btn btn-outline" style="font-size: 0.875rem;">Participar</button>
        </div>
    </div>

    <!-- Proyecto 2 -->
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: start;">
                <h3 class="card-title">Huerto Comunitario Sustentable</h3>
                <span style="background-color: var(--color-primario); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; font-weight: 500;">
                    En Planificación
                </span>
            </div>
        </div>
        <p style="color: var(--color-texto-secundario); margin-bottom: 1rem;">
            Creación de un espacio de cultivo comunitario que promueva la seguridad alimentaria 
            y eduque sobre prácticas agrícolas sostenibles.
        </p>
        <div style="margin-bottom: 1rem;">
            <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem;">
                    Medio Ambiente
                </span>
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem;">
                    Agricultura
                </span>
            </div>
            <p style="font-size: 0.875rem; color: var(--color-texto-secundario);">
                👥 8 estudiantes interesados • 📅 Inicio planificado: Mayo 2024
            </p>
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <a href="{{ url('/proyectos/2') }}" class="btn btn-primary" style="font-size: 0.875rem;">Ver Detalles</a>
            <button class="btn btn-outline" style="font-size: 0.875rem;">Unirse</button>
        </div>
    </div>

    <!-- Proyecto 3 -->
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: start;">
                <h3 class="card-title">Apoyo Escolar para Niños Vulnerables</h3>
                <span style="background-color: #059669; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; font-weight: 500;">
                    Completado
                </span>
            </div>
        </div>
        <p style="color: var(--color-texto-secundario); margin-bottom: 1rem;">
            Programa de reforzamiento académico y apoyo psicosocial para niños de familias 
            en situación de vulnerabilidad social.
        </p>
        <div style="margin-bottom: 1rem;">
            <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem;">
                    Educación
                </span>
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem;">
                    Desarrollo Social
                </span>
            </div>
            <p style="font-size: 0.875rem; color: var(--color-texto-secundario);">
                👥 22 estudiantes participaron • 📅 Completado: Diciembre 2023
            </p>
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <a href="{{ url('/proyectos/3') }}" class="btn btn-primary" style="font-size: 0.875rem;">Ver Resultados</a>
            <button class="btn btn-outline" style="font-size: 0.875rem;">Ver Informe</button>
        </div>
    </div>

    <!-- Proyecto 4 -->
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: start;">
                <h3 class="card-title">Taller de Emprendimiento Juvenil</h3>
                <span style="background-color: var(--color-secundario); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; font-weight: 500;">
                    Activo
                </span>
            </div>
        </div>
        <p style="color: var(--color-texto-secundario); margin-bottom: 1rem;">
            Capacitación en habilidades empresariales y desarrollo de planes de negocio 
            para jóvenes de 18 a 25 años de la comunidad.
        </p>
        <div style="margin-bottom: 1rem;">
            <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem;">
                    Emprendimiento
                </span>
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem;">
                    Desarrollo Social
                </span>
            </div>
            <p style="font-size: 0.875rem; color: var(--color-texto-secundario);">
                👥 12 estudiantes participando • 📅 Inicio: Febrero 2024
            </p>
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <a href="{{ url('/proyectos/4') }}" class="btn btn-primary" style="font-size: 0.875rem;">Ver Detalles</a>
            <button class="btn btn-outline" style="font-size: 0.875rem;">Participar</button>
        </div>
    </div>
</div>

<!-- Paginación -->
<div style="display: flex; justify-content: center; margin-top: 3rem;">
    <div style="display: flex; gap: 0.5rem; align-items: center;">
        <button class="btn btn-outline" style="padding: 0.5rem 1rem;">← Anterior</button>
        <span style="padding: 0.5rem 1rem; color: var(--color-texto-secundario);">Página 1 de 3</span>
        <button class="btn btn-outline" style="padding: 0.5rem 1rem;">Siguiente →</button>
    </div>
</div>
@endsection
