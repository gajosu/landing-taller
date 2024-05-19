<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller gratuito - Herramientas Electricas e Inalambricas Stanley</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="/styles.css">
</head>

<body class="bg-white text-white">

    {{-- <!-- Header -->
    <header class="bg-black absolute top-0 left-0 w-full z-10">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Placeholder for logo -->
            <a href="/"><img src="/images/black-and-decker/logo.svg" alt="Black and Decker" class="h-12 my-2"></a>
            <nav>
                <!-- Navigation links -->
            </nav>
        </div>
    </header> --}}
    <!-- Banner -->
    <section class="h-screen relative">
        <!-- Desktop Banner Image -->
        <div class="hidden md:block bg-cover h-full flex flex-col justify-end bg-bottom backgroundSlideDown"
            style="background-image: url('/images/stanley28/banner.jpg'); animation-duration: 5s;"></div>

        <!-- Mobile Banner Image -->
        <div class="block md:hidden w-full h-full bg-cover flex flex-col justify-end bg-bottom backgroundSlideDown"
            style="background-image: url('/images/stanley28/banner_mobile.jpg'); animation-duration: 5s;"></div>

        <!-- Text Content -->
        <div class="w-full md:max-w-2xl absolute bottom-0">
            <div class="bg-gradient-to-r from-black to-transparent p-10 pb-20 md:p-10 fadeIn">
                <h2 class="text-5xl font-bold text-white mb-4 fadeInUp" style="animation-delay: 0.5s;">Taller Gratuito
                </h2>
                <button
                    class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full uppercase text-2xl fadeInUp"
                    id="register-button" style="animation-delay: 1.5s;">
                    ¡Regístrate y Capacítate!
                </button>
            </div>
        </div>
    </section>




    <!-- Main Info Section -->
    <section class="bg-gray-200 text-gray-800 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-around items-center text-center">
                <!-- Date Info -->
                <div class="flex flex-col items-center w-full md:w-1/4 mb-4 md:mb-0">
                    <i class="fas fa-calendar-check fa-4x mb-5"></i>
                    <span class="font-semibold">FECHA</span>
                    <span>MARTES 28 DE MAYO</span>
                </div>
                <!-- Address Info -->
                <div class="flex flex-col items-center w-full md:w-1/4 mb-4 md:mb-0">
                    <i class="fas fa-map-marker-alt fa-4x mb-5"></i>
                    <span class="font-semibold">DIRECCIÓN GUAYAQUIL</span>
                    <span>C.C. Dicentro</span>
                </div>
                <!-- Time Info -->
                <div class="flex flex-col items-center w-full md:w-1/4">
                    <i class="fas fa-clock fa-4x mb-5"></i>
                    <span class="font-semibold">HORA</span>
                    <span>05:30 a 06:30 PM</span>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-10" id="inscribe">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Formulario de Inscripción</h2>
            <div class="flex justify-center">
                <form action="{{ route('inscribe') }}" method="post"
                    class="w-full md:max-w-3xl shadow overflow-hidden rounded-md">
                    {{ csrf_field() }}
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Form fields with added styling -->
                            <div class="col-span-1">
                                <label for="firstname" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input type="text" name="firstname" id="firstname" required
                                    autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">

                            </div>
                            <!-- ... other fields ... -->
                            <div class="col-span-1">
                                <label for="lastname" class="block text-sm font-medium text-gray-700">Apellido</label>
                                <input type="text" name="lastname" id="lastname" required
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">
                            </div>
                            <!-- ... rest of the fields ... -->
                            <div class="col-span-1">
                                <label for="birthday" class="block text-sm font-medium text-gray-700">Fecha de
                                    nacimiento</label>
                                <input type="date" name="birthday" id="birthday" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">
                            </div>
                            <div class="col-span-1">
                                <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                                <input type="number" name="cedula" id="cedula" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">
                            </div>
                            <div class="col-span-1">
                                <label for="phone"
                                    class="block text-sm font-medium text-gray-700">Teléfono</label>
                                <input type="tel" name="phone" id="phone" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">
                            </div>
                            <div class="col-span-1">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">
                            </div>
                            <div class="col-span-1">
                                <label for="specialty"
                                    class="block text-sm font-medium text-gray-700">Especialidad</label>
                                <select name="specialty" id="specialty" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">
                                    <option>Eléctrico</option>
                                    <option>Metalmecánico</option>
                                    <option>Mecánico Automotriz</option>
                                    <option>Línea Madera</option>
                                    <option>Jardinería</option>
                                    <option>General</option>
                                </select>
                            </div>

                            <div class="col-span-1">
                                <label for="business_type" class="block text-sm font-medium text-gray-700">Tipo de
                                    negocio</label>
                                <select name="business_type" id="business_type" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">
                                    <option>Ferretería</option>
                                    <option>Constructora – Contratista</option>
                                    <option>Industria</option>
                                    <option>Independiente</option>
                                    <option>Otros</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">

                        <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-black uppercase shadow-lg bg-yellow-400 hover:bg-yellow-500 text-black  rounded-md">
                            Inscribirme
                        </button>

                    </div>
                    <input type="hidden" name="event_name" value="Stanley Herramientas Electricas e Inalambricas">
                    <input type="hidden" name="event_city" value="Guayaquil">
                </form>
            </div>
        </div>
    </section>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var registerButton = document.querySelector("#register-button");

            registerButton.addEventListener("click", function(e) {
                e.preventDefault(); // Prevent the default anchor behavior
                var inscriptionSection = document.querySelector("#inscribe");

                inscriptionSection.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            });
        });
    </script>

</body>

</html>
