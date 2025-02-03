@extends('home.layout')

@section('styles')
    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .gallery-container {
            position: relative;
            padding: 0 50px;
            margin-top: 3rem;
        }

        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 35px !important;
            height: 35px !important;
            background-color: white;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-top: 0 !important;
        }

        .swiper-button-prev {
            left: 0;
        }

        .swiper-button-next {
            right: 0;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 18px !important;
            color: black;
        }
        .swiper-wrapper {
            height: auto !important;
        }
    </style>
@endsection

@section('content')
    <div class="container mx-auto mt-28 px-4 pb-[10rem]">
        <div class="mb-10">
            <nav aria-label="breadcrumb">
                <ol class="flex flex-wrap items-center gap-1.5 break-words text-sm text-muted-foreground sm:gap-2.5">
                    <li class="inline-flex items-center gap-1.5">
                        <a class="transition-colors hover:text-foreground" href="/">Inicio</a>
                    </li>
                    <li role="presentation" aria-hidden="true" class="[&>svg]:w-3.5 [&>svg]:h-3.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 2 2 22"></path>
                        </svg>
                    </li>
                    <li class="inline-flex items-center gap-1.5">
                        <span role="link" aria-disabled="true" aria-current="page" class="text-amber-500 font-medium">
                            DEWALT
                        </span>
                    </li>
                </ol>
            </nav>
        </div>

        <section class="text-lg">
            <p>
                DEWALT es una marca reconocida por ofrecer herramientas de alto rendimiento diseñadas para los profesionales más exigentes.
                Con un enfoque en potencia, durabilidad y precisión, DEWALT garantiza superar las expectativas en cada proyecto,
                incluso en los entornos más desafiantes.
            </p>
        </section>

        <section class="mt-10">
            <h2 class="font-semibold text-3xl">
                ¿Por qué elegir <span class="text-amber-400">DEWALT</span>?
            </h2>
            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="rounded-md p-4 flex flex-col items-center justify-center shadow-lg">
                    <h3 class="my-2 text-xl font-bold text-center">Rendimiento Profesional</h3>
                    <p class="text-gray-500 text-center">Diseñado para trabajos de alta exigencia en construcción e industria.</p>
                </div>
                <div class="rounded-md p-4 flex flex-col items-center justify-center shadow-lg">
                    <h3 class="my-2 text-xl font-bold text-center">Tecnología Avanzada</h3>
                    <p class="text-gray-500 text-center">Innovaciones como Tool Connect™ y FlexVolt™.</p>
                </div>
                <div class="rounded-md p-4 flex flex-col items-center justify-center shadow-lg">
                    <h3 class="my-2 text-xl font-bold text-center">Durabilidad Extrema</h3>
                    <p class="text-gray-500 text-center">Materiales resistentes y pruebas rigurosas.</p>
                </div>
                <div class="rounded-md p-4 flex flex-col items-center justify-center shadow-lg">
                    <h3 class="my-2 text-xl font-bold text-center">Sostenibilidad</h3>
                    <p class="text-gray-500 text-center">Compromiso con reducir la huella de carbono mediante productos ecoeficientes.</p>
                </div>
            </div>
        </section>

        <section class="mt-12">
            <div class="gallery-container">
                <div class="swiper brandGallerySwiper">
                    <div class="swiper-wrapper">
                        @foreach(range(1, 6) as $index)
                            <div class="swiper-slide">
                                <div class="bg-white shadow-lg rounded-md aspect-square flex items-center justify-center">
                                    <img src="/images/brands/DEWALT/DEWALT-{{ $index }}.jpg"
                                         alt="DEWALT"
                                         class="w-[95%] h-[95%] object-fill rounded-md">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.brandGallerySwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
                1280: {
                    slidesPerView: 4,
                }
            }
        });
    </script>
@endsection
