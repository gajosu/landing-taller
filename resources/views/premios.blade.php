@extends('home.layout')

@section('title', 'Registro de Sorteos')

@section('content')
    <!-- Banner -->
    <section class="h-screen relative mt-20">
        <!-- Desktop Banner Image -->
        <div class="hidden md:block bg-cover h-full flex flex-col justify-end bg-bottom backgroundSlideDown"
            style="background-image: url('/images/premios/banner_pag-web-sbd_desktop-3.webp'); animation-duration: 5s;"></div>

        <!-- Mobile Banner Image -->
        <div class="block md:hidden w-full h-full bg-cover flex flex-col justify-end bg-bottom backgroundSlideDown"
            style="background-image: url('/images/premios/premio-pag-web-sbd-movil.png'); animation-duration: 5s;"></div>

        <!-- Text Content -->
        <div class="w-full md:max-w-2xl absolute bottom-0">
            <div class="bg-gradient-to-r from-black to-transparent p-10 pb-20 md:p-10 fadeIn">
                <button
                    class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full uppercase text-2xl fadeInUp"
                    id="register-button" style="animation-delay: 1.5s;">
                    ¡Regístrate!
                </button>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-10" id="inscribe">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Formulario de Registro</h2>
            <div class="flex justify-center">
                <form action="{{ route('sorteo') }}" method="post" enctype="multipart/form-data"
                    class="w-full md:max-w-3xl shadow overflow-hidden rounded-md">
                    @csrf

                    <!-- Sección de Errores -->
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                            <strong class="font-bold">¡Ups! Algo salió mal.</strong>
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1">
                                <label for="firstname" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input type="text" name="firstname" id="firstname" required
                                    autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3"
                                    value="{{ old('firstname') }}">
                            </div>

                            <div class="col-span-1">
                                <label for="lastname" class="block text-sm font-medium text-gray-700">Apellido</label>
                                <input type="text" name="lastname" id="lastname" required
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3"
                                    value="{{ old('lastname') }}">
                            </div>

                            <div class="col-span-1">
                                <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                                <input type="number" name="cedula" id="cedula" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3"
                                    value="{{ old('cedula') }}">
                            </div>

                            <div class="col-span-1">
                                <label for="phone"
                                    class="block text-sm font-medium text-gray-700">Teléfono</label>
                                <input type="tel" name="phone" id="phone" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3"
                                    value="{{ old('phone') }}">
                            </div>

                            <div class="col-span-1">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3"
                                    value="{{ old('email') }}">
                            </div>

                            <div class="col-span-1">
                                <label for="business_type" class="block text-sm font-medium text-gray-700">Tipo de
                                    negocio</label>
                                <select name="business_type" id="business_type" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">
                                    <option value="">Seleccione</option>
                                    <option value="Ferretería" {{ old('business_type') == 'Ferretería' ? 'selected' : '' }}>Ferretería</option>
                                    <option value="Constructora – Contratista" {{ old('business_type') == 'Constructora – Contratista' ? 'selected' : '' }}>Constructora – Contratista</option>
                                    <option value="Industria" {{ old('business_type') == 'Industria' ? 'selected' : '' }}>Industria</option>
                                    <option value="Independiente" {{ old('business_type') == 'Independiente' ? 'selected' : '' }}>Independiente</option>
                                    <option value="Usuario final" {{ old('business_type') == 'Usuario final' ? 'selected' : '' }}>Usuario final</option>
                                    <option value="Otros" {{ old('business_type') == 'Otros' ? 'selected' : '' }}>Otros</option>
                                </select>
                            </div>

                            <div class="col-span-1">
                                <label for="factura" class="block text-sm font-medium text-gray-700">Número de Factura</label>
                                <input type="text" name="factura" id="factura" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3"
                                    value="{{ old('factura') }}">
                            </div>

                            <div class="col-span-1">
                                <label for="lugar" class="block text-sm font-medium text-gray-700">Lugar de Compra</label>
                                <input type="text" name="lugar" id="lugar" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3"
                                    value="{{ old('lugar') }}">
                            </div>


                            <div class="col-span-1">
                                <label for="ciudad" class="block text-sm font-medium text-gray-700">Ciudad</label>
                                <input type="text" name="ciudad" id="ciudad" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3"
                                    value="{{ old('ciudad') }}">
                            </div>


                            <div class="col-span-1">
                                <label for="monto" class="block text-sm font-medium text-gray-700">Monto de Compra</label>
                                <input type="number" name="monto" id="monto" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3"
                                    value="{{ old('monto') }}">
                            </div>

                            <div class="col-span-1">
                                <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha de Compra</label>
                                <input type="date" name="fecha" id="fecha" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3"
                                    value="{{ old('fecha') }}">
                            </div>

                            <div class="col-span-1">
                                <label for="imagen" class="block text-sm font-medium text-gray-700">Documento de la factura (.pdf)</label>
                                    <input type="file" name="imagen" id="imagen" required accept="application/pdf"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3">
                                <!-- Nota: El campo de archivo no puede conservar el valor anterior debido a restricciones de seguridad -->
                            </div>

                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-black uppercase shadow-lg bg-yellow-400 hover:bg-yellow-500 text-black rounded-md">
                            Registrarme
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('styles')
<style>
    .backgroundSlideDown {
        animation: slideDown 5s ease-out forwards;
    }

    .fadeIn {
        animation: fadeIn 1s ease-out forwards;
    }

    .fadeInUp {
        animation: fadeInUp 1s ease-out forwards;
    }

    @keyframes slideDown {
        from {
            background-position: center -100px;
        }
        to {
            background-position: center bottom;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var registerButton = document.querySelector("#register-button");

        registerButton.addEventListener("click", function(e) {
            e.preventDefault();
            var inscriptionSection = document.querySelector("#inscribe");

            inscriptionSection.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        });
    });
</script>
@endsection
