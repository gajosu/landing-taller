<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        {{ !empty($siteTitle) ? $siteTitle . ' | ' : '' }}Centro de entrenamiento SBD
    </title>

    @if (empty($meta_description))
        <meta name="description" content="Centro de entrenamiento SBD">
    @else
        <meta name="description" content="{{ $meta_description }}">
    @endif

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    {{-- Sección para CSS específico de cada página --}}
    @yield('styles')

    {{-- Sección para JS en el head --}}
    @yield('head-scripts')
</head>

<body class="font-sans">
    <header class="shadow-md fixed top-0 w-full z-50" style="background: #febd18;">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img alt="Centro de entrenamiento SBD Logo" class="h-14"
                    src="/images/logoSBD.svg"
                    width="150" />
            </div>
            <nav class="hidden md:flex space-x-6">
                <a class="text-black hover:text-yellow-500" href="/">
                    Inicio
                </a>
                <a class="text-black hover:text-yellow-500" href="/marcas">
                    Marcas
                </a>
                <a class="text-black hover:text-yellow-500" href="/contacto">
                    Contacto
                </a>
            </nav>

        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <div class="container mx-auto px-4 py-16">
        <footer class="flex flex-col items-center justify-between p-4 md:flex-row">
            <div class="text-center md:text-left">
                <p class="text-sm text-gray-600">
                    Copyright © 2024 Stanley Black &amp; Decker, Inc. All rights reserved.
                </p>
                <div class="flex flex-wrap justify-center mt-2 space-x-2 text-sm text-gray-600 md:justify-start">
                    <a class="hover:underline" href="#">
                        Privacy
                    </a>
                    <span>
                        |
                    </span>
                    <a class="hover:underline" href="#">
                        Cookies
                    </a>
                    <span>
                        |
                    </span>
                    <a class="hover:underline" href="#">
                        California Privacy
                    </a>
                    <span>
                        |
                    </span>
                    <a class="hover:underline" href="#">
                        Terms of Use
                    </a>
                    <span>
                        |
                    </span>
                    <a class="hover:underline" href="#">
                        Site Map
                    </a>
                    <span>
                        |
                    </span>
                    <a class="hover:underline" href="#">
                        Transparency in the Supply Chain
                    </a>
                    <span>
                        |
                    </span>
                    <a class="hover:underline" href="#">
                        Vulnerability Disclosure Policy
                    </a>
                    <span>
                        |
                    </span>
                    <a class="hover:underline" href="#">
                        Accessibility Statement
                    </a>
                </div>

            </div>
            <div class="flex items-center mt-4 space-x-2 md:mt-0">
                <div class="flex items-center space-x-2">
                    <img alt="Accessibility icon" class="w-6 h-6" height="30"
                        src="https://storage.googleapis.com/a1aa/image/NNOxuwpfV1zoMaPVCuUTtLfrVdsSO0ZyBUem2fpV2EJCReKfE.jpg"
                        width="30">
                    <img alt="Website icon" class="w-6 h-6" height="30"
                        src="https://storage.googleapis.com/a1aa/image/2jDDPhTFOt4nBRzhBIyflgiKln5J6PGTQ2BUSfJjAvfkIvynA.jpg"
                        width="30">
                </div>
                <div class="flex items-center space-x-2 ml-4">
                    <a class="flex items-center justify-center w-8 h-8 text-white bg-black rounded-full" href="#">
                        <i class="fab fa-facebook-f">
                        </i>
                    </a>
                    <a class="flex items-center justify-center w-8 h-8 text-white bg-black rounded-full" href="#">
                        <i class="fab fa-instagram">
                        </i>
                    </a>
                    <a class="flex items-center justify-center w-8 h-8 text-white bg-black rounded-full" href="#">
                        <i class="fab fa-linkedin-in">
                        </i>
                    </a>
                    <a class="flex items-center justify-center w-8 h-8 text-white bg-black rounded-full" href="#">
                        <i class="fab fa-twitter">
                        </i>
                    </a>
                    <a class="flex items-center justify-center w-8 h-8 text-white bg-black rounded-full" href="#">
                        <i class="fab fa-youtube">
                        </i>
                    </a>
                    <a class="flex items-center justify-center px-4 py-2 text-sm text-white bg-black rounded-full"
                        href="#">
                        Sign Up for Email
                    </a>
                </div>
            </div>
        </footer>
    </div>

    {{-- Sección para JS al final del body --}}
    @yield('scripts')
</body>

</html>
