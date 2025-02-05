<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ !empty($siteTitle) ? $siteTitle . ' | ' : '' }}Centro de entrenamiento SBD
    </title>

    @if (empty($meta_description))
        <meta name="description" content="Centro de entrenamiento SBD">
    @else
        <meta name="description" content="{{ $meta_description }}">
    @endif
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ !empty($siteTitle) ? $siteTitle . ' | ' : '' }}Centro de entrenamiento SBD">
    <meta property="og:description" content="{{ $meta_description ?? 'Centro de entrenamiento SBD' }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slideDown {
            animation: slideDown 0.3s ease-out forwards;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');

            function toggleMobileMenu() {
                const mobileMenu = document.getElementById('mobile-menu');
                const menuIcon = document.getElementById('menu-icon');
                const closeIcon = document.getElementById('close-icon');

                if (mobileMenu.classList.contains('hidden')) {
                    // Abrir menú
                    mobileMenu.classList.remove('hidden');
                    mobileMenu.classList.add('animate-slideDown');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    // Cerrar menú
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            }

            // Asignar el evento click al botón
            mobileMenuButton.addEventListener('click', toggleMobileMenu);

            // Cerrar menú al cambiar el tamaño de la ventana
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    const mobileMenu = document.getElementById('mobile-menu');
                    const menuIcon = document.getElementById('menu-icon');
                    const closeIcon = document.getElementById('close-icon');

                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        });
    </script>

    {{-- Sección para CSS específico de cada página --}}
    @yield('styles')

    {{-- Sección para JS en el head --}}
    @yield('head-scripts')
</head>

<body class="font-sans">
    <header class="shadow-md fixed top-0 w-full z-50" style="background: #febd18;">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <a href="/">
                    <img alt="Centro de entrenamiento SBD Logo" class="h-14"
                        src="/images/logoSBD.svg"
                        width="150" />
                </a>
            </div>
            @php
            $menuItems = [
                ['label' => 'Inicio', 'route' => '/', 'isRoute' => false],
                ['label' => 'Eventos', 'route' => 'forms.events', 'isRoute' => true],
                ['label' => 'Capacitaciones', 'route' => 'forms.trainings', 'isRoute' => true],
                ['label' => 'Promociones', 'route' => 'forms.promotions', 'isRoute' => true],
                ['label' => 'Premios', 'route' => '/premios', 'isRoute' => false],
                ['label' => 'Contacto', 'route' => '/contacto', 'isRoute' => false],
            ];

            $currentUrl = request()->url();
            $currentRoute = Route::currentRouteName();
            @endphp

            {{-- Menú Desktop --}}
            <nav class="hidden md:flex space-x-6">
                @foreach($menuItems as $item)
                    @php
                        $isActive = $item['isRoute']
                            ? $currentRoute === $item['route']
                            : $currentUrl === url($item['route']);
                    @endphp
                    <a class="text-black hover:text-gray-800 relative group py-2 {{ $isActive ? 'font-bold' : '' }}"
                       href="{{ $item['isRoute'] ? route($item['route']) : $item['route'] }}">
                        {{ $item['label'] }}
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform {{ $isActive ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                @endforeach
            </nav>

            {{-- Botón Menú Móvil --}}
            <button id="mobile-menu-button" class="md:hidden text-black focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-icon" class="block" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Menú Móvil --}}
        <nav id="mobile-menu" class="md:hidden hidden bg-white">
            @foreach($menuItems as $item)
                @php
                    $isActive = $item['isRoute']
                        ? $currentRoute === $item['route']
                        : $currentUrl === url($item['route']);
                @endphp
                <a class="block px-6 py-4 text-black hover:bg-yellow-100 {{ $isActive ? 'font-bold bg-yellow-50' : '' }}"
                   href="{{ $item['isRoute'] ? route($item['route']) : $item['route'] }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <div class="container mx-auto px-4 py-16">
        <footer class="flex flex-col items-center justify-between p-4 md:flex-row">
            <div class="text-center md:text-left">
                <p class="text-sm text-gray-600">
                    Copyright © 2024 Centro de Entrenamiento SBD. Todos los derechos reservados.
                </p>
                <div class="flex flex-wrap justify-center mt-2 space-x-2 text-sm text-gray-600 md:justify-start">
                    <a class="hover:underline" href="{{ route('privacy') }}">
                        Política de Privacidad
                    </a>
                    <span>|</span>
                    <a class="hover:underline" href="{{ route('contact') }}">
                        Contacto
                    </a>
                </div>
            </div>
            <div class="flex items-center mt-4 space-x-2 md:mt-0">
                <div class="flex items-center space-x-2">
                    <a href="https://www.facebook.com/centroentrenamientosbd" target="_blank"
                       class="flex items-center justify-center w-8 h-8 text-white bg-black rounded-full hover:bg-gray-800">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/centroentrenamientosbd" target="_blank"
                       class="flex items-center justify-center w-8 h-8 text-white bg-black rounded-full hover:bg-gray-800">
                        <i class="fab fa-instagram"></i>
                    </a>
                    {{-- tiktok --}}
                    <a href="https://www.tiktok.com/@centrodeentrenamientosbd" target="_blank"
                       class="flex items-center justify-center w-8 h-8 text-white bg-black rounded-full hover:bg-gray-800">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    {{-- whatsapp --}}
                    <a href="https://chat.whatsapp.com/C8838vbbWWlHrDbyJ7b75L" target="_blank"
                       class="flex items-center justify-center w-8 h-8 text-white bg-black rounded-full hover:bg-gray-800">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </footer>
    </div>

    {{-- Sección para JS al final del body --}}
    @yield('scripts')
</body>

</html>
