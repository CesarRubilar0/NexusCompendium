@extends('layouts.app')

@section('title', 'Alfabetización Digital para Adultos Mayores - ConectaVCM')

@section('description', 'Detalles del proyecto de alfabetización digital para adultos mayores en ConectaVCM.')

@section('content')
<!-- Breadcrumb -->
<nav style="margin-bottom: 1.5rem;">
    <a href="{{ url('/proyectos') }}" style="color: var(--color-primario); text-decoration: none;">← Volver a Proyectos</a>
</nav>

<!-- Header del proyecto -->
<div class="card" style="margin-bottom: 2rem;">
    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem; flex-wrap: wrap; gap: 1rem;">
        <div style="flex: 1;">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 0.5rem;">
                <h1 style="font-size: 2rem; font-weight: 700; color: var(--color-texto-principal); margin: 0;">
                    Alfabetización Digital para Adultos Mayores
                </h1>
                <span style="background-color: var(--color-secundario); color: white; padding: 0.375rem 1rem; border-radius: 20px; font-size: 0.875rem; font-weight: 500;">
                    Activo
                </span>
            </div>
            <p style="color: var(--color-texto-secundario); font-size: 1.125rem; margin-bottom: 1rem;">
                Programa de capacitación en tecnologías digitales básicas para adultos mayores de la comuna, 
                enfocado en mejorar su calidad de vida y conexión con familiares.
            </p>
            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.75rem; border-radius: 16px; font-size: 0.875rem;">
                    Tecnología
                </span>
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.75rem; border-radius: 16px; font-size: 0.875rem;">
                    Educación
                </span>
                <span style="background-color: var(--color-fondo-alternativo); color: var(--color-texto-secundario); padding: 0.25rem 0.75rem; border-radius: 16px; font-size: 0.875rem;">
                    Presencial
                </span>
            </div>
        </div>
        <div style="display: flex; gap: 0.75rem;">
            <button class="btn btn-primary">Participar en el Proyecto</button>
            <button class="btn btn-outline">Compartir</button>
        </div>
    </div>
</div>

<!-- Información principal -->
<div class="grid grid-2" style="gap: 2rem; margin-bottom: 2rem;">
    <!-- Columna izquierda -->
    <div>
        <!-- Descripción detallada -->
        <div class="card" style="margin-bottom: 1.5rem;">
            <div class="card-header">
                <h2 class="card-title">📋 Descripción del Proyecto</h2>
            </div>
            <p style="color: var(--color-texto-secundario); margin-bottom: 1rem;">
                El proyecto "Alfabetización Digital para Adultos Mayores" busca reducir la brecha digital 
                y mejorar la calidad de vida de los adultos mayores de nuestra comunidad, proporcionándoles 
                las herramientas necesarias para navegar en el mundo digital actual.
            </p>
            <p style="color: var(--color-texto-secundario); margin-bottom: 1rem;">
                A través de talleres prácticos y personalizados, los participantes aprenderán a utilizar 
                smartphones, tablets y computadores para tareas cotidianas como comunicarse con familiares, 
                acceder a servicios públicos digitales, y entretenerse de manera segura en internet.
            </p>
            <h3 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.5rem;">
                Objetivos Específicos:
            </h3>
            <ul style="color: var(--color-texto-secundario); margin-left: 1.5rem;">
                <li>Enseñar el uso básico de dispositivos móviles y computadores</li>
                <li>Facilitar la comunicación digital con familiares (WhatsApp, videollamadas)</li>
                <li>Capacitar en el uso seguro de internet y redes sociales</li>
                <li>Instruir sobre servicios digitales gubernamentales y bancarios</li>
                <li>Promover el entretenimiento digital seguro y educativo</li>
            </ul>
        </div>

        <!-- Cronograma -->
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">📅 Cronograma y Actividades</h2>
            </div>
            <div style="space-y: 1rem;">
                <div style="border-left: 3px solid var(--color-secundario); padding-left: 1rem; margin-bottom: 1.5rem;">
                    <h4 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.25rem;">
                        Semana 1-2: Introducción a la Tecnología
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Conceptos básicos, familiarización con dispositivos, configuración inicial
                    </p>
                </div>
                <div style="border-left: 3px solid var(--color-primario); padding-left: 1rem; margin-bottom: 1.5rem;">
                    <h4 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.25rem;">
                        Semana 3-4: Comunicación Digital
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        WhatsApp, correo electrónico, videollamadas, contactos
                    </p>
                </div>
                <div style="border-left: 3px solid var(--color-texto-secundario); padding-left: 1rem; margin-bottom: 1.5rem;">
                    <h4 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.25rem;">
                        Semana 5-6: Navegación Web Segura
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Búsquedas en internet, seguridad online, identificación de estafas
                    </p>
                </div>
                <div style="border-left: 3px solid var(--color-secundario); padding-left: 1rem;">
                    <h4 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.25rem;">
                        Semana 7-8: Servicios Digitales
                    </h4>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        Trámites online, banca digital, entretenimiento digital
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Columna derecha -->
    <div>
        <!-- Información clave -->
        <div class="card" style="margin-bottom: 1.5rem;">
            <div class="card-header">
                <h2 class="card-title">ℹ️ Información Clave</h2>
            </div>
            <div style="display: grid; gap: 1rem;">
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 0; border-bottom: 1px solid #E5E7EB;">
                    <span style="color: var(--color-texto-secundario);">Fecha de Inicio:</span>
                    <span style="font-weight: 500; color: var(--color-texto-principal);">15 de Marzo, 2024</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 0; border-bottom: 1px solid #E5E7EB;">
                    <span style="color: var(--color-texto-secundario);">Duración:</span>
                    <span style="font-weight: 500; color: var(--color-texto-principal);">8 semanas</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 0; border-bottom: 1px solid #E5E7EB;">
                    <span style="color: var(--color-texto-secundario);">Modalidad:</span>
                    <span style="font-weight: 500; color: var(--color-texto-principal);">Presencial</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 0; border-bottom: 1px solid #E5E7EB;">
                    <span style="color: var(--color-texto-secundario);">Horario:</span>
                    <span style="font-weight: 500; color: var(--color-texto-principal);">Martes y Jueves, 10:00-12:00</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 0; border-bottom: 1px solid #E5E7EB;">
                    <span style="color: var(--color-texto-secundario);">Participantes:</span>
                    <span style="font-weight: 500; color: var(--color-texto-principal);">15 / 20 cupos</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 0;">
                    <span style="color: var(--color-texto-secundario);">Ubicación:</span>
                    <span style="font-weight: 500; color: var(--color-texto-principal);">Centro Comunitario Local</span>
                </div>
            </div>
        </div>

        <!-- Coordinador del proyecto -->
        <div class="card" style="margin-bottom: 1.5rem;">
            <div class="card-header">
                <h2 class="card-title">👨‍🏫 Coordinador del Proyecto</h2>
            </div>
            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-primario), var(--color-secundario)); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">
                    MC
                </div>
                <div>
                    <h3 style="font-weight: 600; color: var(--color-texto-principal); margin-bottom: 0.25rem;">
                        María Carla González
                    </h3>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem; margin-bottom: 0.25rem;">
                        Ingeniera en Informática
                    </p>
                    <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                        📧 m.gonzalez@instituto.cl | 📞 +56 9 8765 4321
                    </p>
                </div>
            </div>
        </div>

        <!-- Requisitos para participar -->
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">✅ Requisitos para Participar</h2>
            </div>
            <ul style="color: var(--color-texto-secundario); margin-left: 1.5rem; space-y: 0.5rem;">
                <li style="margin-bottom: 0.5rem;">Ser mayor de 60 años</li>
                <li style="margin-bottom: 0.5rem;">Residir en la comuna</li>
                <li style="margin-bottom: 0.5rem;">Disponibilidad horaria martes y jueves mañana</li>
                <li style="margin-bottom: 0.5rem;">Motivación para aprender tecnología</li>
                <li style="margin-bottom: 0.5rem;">No se requiere experiencia previa</li>
            </ul>
            
            <div style="background-color: var(--color-fondo-alternativo); padding: 1rem; border-radius: 8px; margin-top: 1rem;">
                <p style="color: var(--color-texto-secundario); font-size: 0.875rem;">
                    <strong>Nota:</strong> Se proporcionarán todos los materiales y equipos necesarios. 
                    Solo es necesario traer ganas de aprender y cuaderno para tomar notas.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Estudiantes participantes -->
<div class="card">
    <div class="card-header">
        <h2 class="card-title">👥 Estudiantes Participantes (15)</h2>
    </div>
    <div class="grid grid-3">
        <div style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem; background-color: var(--color-fondo-alternativo); border-radius: 8px;">
            <div style="width: 40px; height: 40px; background: var(--color-primario); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 0.875rem;">
                JP
            </div>
            <div>
                <p style="font-weight: 500; color: var(--color-texto-principal); margin-bottom: 0.25rem;">Juan Pérez</p>
                <p style="color: var(--color-texto-secundario); font-size: 0.75rem;">Ing. en Sistemas</p>
            </div>
        </div>
        <div style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem; background-color: var(--color-fondo-alternativo); border-radius: 8px;">
            <div style="width: 40px; height: 40px; background: var(--color-secundario); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 0.875rem;">
                AR
            </div>
            <div>
                <p style="font-weight: 500; color: var(--color-texto-principal); margin-bottom: 0.25rem;">Ana Rodríguez</p>
                <p style="color: var(--color-texto-secundario); font-size: 0.75rem;">Psicología</p>
            </div>
        </div>
        <div style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem; background-color: var(--color-fondo-alternativo); border-radius: 8px;">
            <div style="width: 40px; height: 40px; background: var(--color-primario); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 0.875rem;">
                LM
            </div>
            <div>
                <p style="font-weight: 500; color: var(--color-texto-principal); margin-bottom: 0.25rem;">Luis Martínez</p>
                <p style="color: var(--color-texto-secundario); font-size: 0.75rem;">Trabajo Social</p>
            </div>
        </div>
    </div>
    <div style="text-align: center; margin-top: 1rem;">
        <a href="#" style="color: var(--color-primario); text-decoration: none; font-weight: 500;">
            Ver todos los participantes →
        </a>
    </div>
</div>
@endsection
