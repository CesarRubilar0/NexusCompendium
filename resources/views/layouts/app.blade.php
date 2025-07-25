<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Nexuscompendium - Plataforma de Gestión de Proyectos')</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Meta tags adicionales -->
    <meta name="description" content="@yield('description', 'Plataforma integral de gestión de conocimiento y proyectos de vinculación con el medio')">
    <meta name="keywords" content="vinculación, proyectos, gestión, educación, comunidad">
    
    <!-- Favicon (placeholder) -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    @yield('additional_css')
</head>
<body>
    <!-- Header y Navegación -->
    <header class="header">
        <nav class="navbar">
            <!-- Logo y nombre de la marca -->
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Nexuscompendium Logo" class="logo-image">
                <span class="logo-text">Nexuscompendium</span>
            </a>
            
            <!-- Enlaces de navegación -->
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/proyectos') }}">Proyectos</a></li>
                <li><a href="{{ url('/proyectos/crear') }}">Crear Proyecto</a></li>
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p class="footer-text">
                © {{ date('Y') }} Nexuscompendium - Plataforma Integral de Gestión de Conocimiento y Proyectos
            </p>
            <p class="footer-text mt-2">
                Conectando el saber académico con las necesidades de la comunidad
            </p>
        </div>
    </footer>

    <!-- JavaScript adicional -->
    @yield('additional_js')
</body>
</html>
