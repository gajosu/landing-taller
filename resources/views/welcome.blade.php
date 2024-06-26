<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller gratuito - Aprende a cortar y desbastar con discos de metal como un profesional</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="/styles.css">
</head>

<body class="bg-white text-white">

    <!-- Header -->
    <header class="bg-yellow-400 absolute top-0 left-0 w-full z-10">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Placeholder for logo -->
            <a href="/"><img src="/images/logo.svg" alt="Company Logo" class="h-12"></a>
            <nav>
                <!-- Navigation links -->
            </nav>
        </div>
    </header>
    <!-- Banner -->
    <section class="h-screen relative">
        <!-- Desktop Banner Image -->
        <div class="hidden md:block bg-cover h-full flex flex-col justify-end bg-bottom backgroundSlideDown"
            style="background-image: url('/images/banner.jpg'); animation-duration: 5s;"></div>

        <!-- Mobile Banner Image -->
        <div class="block md:hidden w-full h-full bg-cover flex flex-col justify-end bg-bottom backgroundSlideDown"
            style="background-image: url('/images/banner_mobile1.jpg'); animation-duration: 5s;"></div>

        <!-- Text Content -->
        <div class="w-full md:max-w-2xl absolute bottom-0">
            <div class="bg-gradient-to-r from-black to-transparent p-10 pb-20 md:p-10 fadeIn">
                <h2 class="text-5xl font-bold text-white mb-4 fadeInUp" style="animation-delay: 0.5s;">Taller Gratuito
                </h2>
                <p class="text-2xl text-white mb-4 max-w-md fadeInUp" style="animation-delay: 1s;">Aprende a cortar y
                    desbastar con discos de metal como un
                    profesional</p>
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
                    <span>SÁBADO 18 DE MAYO</span>
                </div>
                <!-- Address Info -->
                <div class="flex flex-col items-center w-full md:w-1/4 mb-4 md:mb-0">
                    <i class="fas fa-map-marker-alt fa-4x mb-5"></i>
                    <span class="font-semibold">DIRECCIÓN GUAYAQUIL</span>
                    <span>C.C. Dicentro</span>

                    <span class="font-semibold mt-5">DIRECCIÓN QUITO</span>
                    <span>Av. 10 de Agosto N31-237 y Mariana de Jesús (Importadora
                        Morgueytio Yepez)</span>
                </div>
                <!-- Time Info -->
                <div class="flex flex-col items-center w-full md:w-1/4">
                    <i class="fas fa-clock fa-4x mb-5"></i>
                    <span class="font-semibold">HORA</span>
                    <span>10:00 AM</span>
                </div>
            </div>
        </div>
    </section>

    <section class="flex flex-col md:flex-row w-full md:max-h-screen bg-yellow-400">
        <!-- Left Image Placeholder -->
        <div class="md:w-1/2 w-full flex-shrink-0">
            <!-- Add 'ml-auto' to align the image to the right -->
            <img src="/images/leftbanner.jpg" alt="Placeholder Image" class="h-full ml-auto">
        </div>

        <!-- Right Topics List -->
        <div class="md:w-1/2 w-full flex flex-col justify-center p-10 text-black">
            <div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">TEMAS:</h2>
                <div class="space-y-4">
                    <div class="">
                        <i class="fas fa-check-circle text-xl md:text-3xl text-black mr-2"></i>
                        <span class="font-semibold text-lg md:text-3xl">Bondades del Disco HP2 de rango</span>
                        {{-- <ul class="list-disc list-inside pt-3">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul> --}}
                    </div>
                    <div class="">
                        <i class="fas fa-check-circle text-xl md:text-3xl text-black mr-2"></i>
                        <span class="font-semibold text-lg md:text-3xl">Clasificación de Los Discos para corte y
                            desbaste</span>
                        {{-- <ul class="list-disc list-inside pt-3">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul> --}}
                    </div>
                    <!-- ... More topics ... -->
                    <div class="">
                        <i class="fas fa-check-circle text-xl md:text-3xl text-black mr-2"></i>
                        <span class="font-semibold text-lg md:text-3xl">Como Usar un Disco Abrasivo</span>
                        {{-- <ul class="list-disc list-inside pt-3">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul> --}}
                    </div>
                    <div class="">
                        <i class="fas fa-check-circle text-xl md:text-3xl text-black mr-2"></i>
                        <span class="font-semibold text-lg md:text-3xl">Como está compuesto nuestro Disco
                            Abrasivo</span>
                        {{-- <ul class="list-disc list-inside pt-3">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-10">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">PROMOCIONES EXCLUSIVAS</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center text-center"></div>
                <!-- Extras: Gifts -->
                <div class="flex flex-col items-center text-center">
                    <img src="/images/extra1.jpg" alt="Regalos" class="mb-4">
                    <h3 class="font-semibold text-xl text-gray-800">Camiseta y Gorra</h3>
                    <p class="text-gray-600">Compra $500 en accesorios <br><strong>GRATIS</strong><br> 3 camisetas + 2 gorras DeWalt 100
                        años</p>
                </div>
                <!-- Extras: Promotions -->
                <div class="flex flex-col items-center text-center">
                    <img src="/images/extra2.jpg" alt="Promociones" class="mb-4">
                    <h3 class="font-semibold text-xl text-gray-800">Bolso</h3>
                    <p class="text-gray-600">Compra $100 en discos de corte HP2 RECIBE GRATIS 1 bolso térmico DeWalt 100
                        años</p>
                </div>
                <div class="flex flex-col items-center text-center"></div>
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
                            <div class="col-span-1">
                                <label for="event_city" class="block text-sm font-medium text-gray-700">Ciudad de
                                    evento</label>
                                <select name="event_city" id="event_city" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">
                                    <option>Guayaquil</option>
                                    <option>Quito</option>
                                </select>
                            </div>
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

                    <input type="hidden" name="event_name" value="Dewalt">
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
