@extends('layouts.app')

@section('title', 'Crear Proyecto - ConectaVCM')

@section('description', 'Crea un nuevo proyecto de vinculación con el medio en ConectaVCM.')

@section('content')
<!-- Header de la sección -->
<div style="margin-bottom: 2rem;">
    <h1 style="font-size: 2.5rem; font-weight: 700; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
        Crear Nuevo Proyecto
    </h1>
    <p style="color: var(--color-texto-secundario); font-size: 1.125rem;">
        Completa la información para registrar tu proyecto de vinculación con el medio
    </p>
</div>

<!-- Formulario de creación -->
<div class="grid grid-2" style="gap: 2rem;">
    <!-- Columna izquierda - Formulario principal -->
    <div>
        <form action="#" method="POST">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Información General</h2>
                </div>

                <div class="form-group">
                    <label for="titulo" class="form-label">Título del Proyecto *</label>
                    <input type="text" id="titulo" name="titulo" class="form-input" 
                           placeholder="Ej: Alfabetización Digital para Adultos Mayores" required>
                </div>

                <div class="form-group">
                    <label for="descripcion" class="form-label">Descripción *</label>
                    <textarea id="descripcion" name="descripcion" class="form-input" rows="4" 
                              placeholder="Describe el objetivo y alcance del proyecto..." required></textarea>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label for="categoria" class="form-label">Categoría *</label>
                        <select id="categoria" name="categoria" class="form-input" required>
                            <option value="">Seleccionar categoría</option>
                            <option value="educacion">Educación</option>
                            <option value="salud">Salud</option>
                            <option value="tecnologia">Tecnología</option>
                            <option value="medio-ambiente">Medio Ambiente</option>
                            <option value="desarrollo-social">Desarrollo Social</option>
                            <option value="emprendimiento">Emprendimiento</option>
                            <option value="cultura">Cultura y Arte</option>
                            <option value="deportes">Deportes y Recreación</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="modalidad" class="form-label">Modalidad *</label>
                        <select id="modalidad" name="modalidad" class="form-input" required>
                            <option value="">Seleccionar modalidad</option>
                            <option value="presencial">Presencial</option>
                            <option value="virtual">Virtual</option>
                            <option value="hibrida">Híbrida</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Detalles del Proyecto</h2>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label for="fecha_inicio" class="form-label">Fecha de Inicio *</label>
                        <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="fecha_fin" class="form-label">Fecha de Finalización</label>
                        <input type="date" id="fecha_fin" name="fecha_fin" class="form-input">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label for="participantes_requeridos" class="form-label">Participantes Requeridos</label>
                        <input type="number" id="participantes_requeridos" name="participantes_requeridos" 
                               class="form-input" placeholder="Ej: 10" min="1">
                    </div>

                    <div class="form-group">
                        <label for="horas_semanales" class="form-label">Horas Semanales Estimadas</label>
                        <input type="number" id="horas_semanales" name="horas_semanales" 
                               class="form-input" placeholder="Ej: 8" min="1">
                    </div>
                </div>

                <div class="form-group">
                    <label for="ubicacion" class="form-label">Ubicación / Dirección</label>
                    <input type="text" id="ubicacion" name="ubicacion" class="form-input" 
                           placeholder="Ej: Centro Comunitario La Esperanza, Av. Principal 123">
                </div>

                <div class="form-group">
                    <label for="contacto_comunidad" class="form-label">Contacto en la Comunidad</label>
                    <input type="text" id="contacto_comunidad" name="contacto_comunidad" class="form-input" 
                           placeholder="Nombre y teléfono del contacto principal">
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Recursos y Requisitos</h2>
                </div>

                <div class="form-group">
                    <label for="recursos_necesarios" class="form-label">Recursos Necesarios</label>
                    <textarea id="recursos_necesarios" name="recursos_necesarios" class="form-input" rows="3" 
                              placeholder="Describe los materiales, equipos o recursos requeridos..."></textarea>
                </div>

                <div class="form-group">
                    <label for="requisitos_participantes" class="form-label">Requisitos para Participantes</label>
                    <textarea id="requisitos_participantes" name="requisitos_participantes" class="form-input" rows="3" 
                              placeholder="Conocimientos previos, disponibilidad horaria, etc."></textarea>
                </div>
            </div>

            <!-- Botones de acción -->
            <div style="display: flex; gap: 1rem; justify-content: flex-end; margin-top: 2rem;">
                <a href="{{ url('/proyectos') }}" class="btn btn-outline">Cancelar</a>
                <button type="submit" class="btn btn-primary">Crear Proyecto</button>
            </div>
        </form>
    </div>

    <!-- Columna derecha - Información de ayuda -->
    <div>
        <div class="card" style="position: sticky; top: 2rem;">
            <div class="card-header">
                <h3 class="card-title">💡 Tips para un Proyecto Exitoso</h3>
            </div>

            <div style="space-y: 1rem;">
                <div style="margin-bottom: 1.5rem;">
                    <h4 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
                        📝 Título Claro
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Utiliza un título descriptivo que comunique claramente el propósito del proyecto.
                    </p>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
                        🎯 Objetivos Específicos
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Define metas concretas y medibles para facilitar el seguimiento del progreso.
                    </p>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
                        👥 Comunidad Beneficiaria
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Identifica claramente a quién va dirigido el proyecto y cómo se beneficiarán.
                    </p>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
                        📅 Planificación Realista
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Establece fechas y recursos considerando las limitaciones y disponibilidad real.
                    </p>
                </div>
            </div>

            <div style="background-color: var(--color-fondo-alternativo); padding: 1rem; border-radius: 8px; margin-top: 1.5rem;">
                <p style="color: var(--color-texto-secundario); font-size: 0.875rem; margin-bottom: 0.5rem;">
                    <strong>¿Necesitas ayuda?</strong>
                </p>
                <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                    Contacta al equipo de coordinación de proyectos VcM para recibir asesoría en la planificación.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
