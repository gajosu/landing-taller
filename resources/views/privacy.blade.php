<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidad - Centro de Entrenamiento SBD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-gray-900">
                        Política de Privacidad
                    </h1>
                    <a href="{{ url('/') }}"
                       class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded">
                        Volver al inicio
                    </a>
                </div>
            </div>
        </header>

        <!-- Content -->
        <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg p-8">
                <div class="prose max-w-none">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">
                        Política de Privacidad del Centro de Entrenamiento SBD
                    </h2>

                    <div class="space-y-6 text-gray-600">
                        <p class="leading-relaxed">
                            En el Centro de Entrenamiento SBD, nos comprometemos a proteger la información personal de nuestros usuarios. Los datos proporcionados durante el registro y participación en nuestras actividades serán tratados con estricta confidencialidad y únicamente para fines de capacitación, promociones y comunicación relacionados con nuestros servicios.
                        </p>

                        <p class="leading-relaxed">
                            Implementamos medidas de seguridad para garantizar la integridad y protección de tu información.
                        </p>

                        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">
                            Uso de la Información
                        </h3>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Registro y gestión de participantes en eventos y capacitaciones</li>
                            <li>Comunicación sobre nuevos cursos y promociones</li>
                            <li>Mejora de nuestros servicios y experiencia del usuario</li>
                            <li>Cumplimiento de obligaciones legales y regulatorias</li>
                        </ul>

                        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">
                            Protección de Datos
                        </h3>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Almacenamiento seguro de información</li>
                            <li>Acceso restringido a personal autorizado</li>
                            <li>Encriptación de datos sensibles</li>
                            <li>Actualizaciones regulares de medidas de seguridad</li>
                        </ul>

                        <h3 class="text-xl font-semibold text-gray-900 mt-8 mb-4">
                            Derechos del Usuario
                        </h3>
                        <p class="leading-relaxed">
                            Los usuarios tienen derecho a:
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Acceder a su información personal</li>
                            <li>Solicitar correcciones o actualizaciones</li>
                            <li>Solicitar la eliminación de sus datos</li>
                            <li>Oponerse al uso de su información para marketing</li>
                        </ul>
                    </div>

                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <p class="text-sm text-gray-500">
                            Última actualización: {{ now()->format('d/m/Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
