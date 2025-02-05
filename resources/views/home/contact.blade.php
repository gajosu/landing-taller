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
                            Contacto
                        </span>
                    </li>
                </ol>
            </nav>
        </div>

        <section class="text-lg">
            <h1 class="text-4xl font-bold mb-8">Contáctanos</h1>
            <p class="mb-6">
                En el Centro de Entrenamiento SBD estamos comprometidos con tu desarrollo profesional.
                Conecta con nosotros a través de nuestros diferentes canales.
            </p>
        </section>

        <section class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="rounded-lg p-6 shadow-lg bg-white">
                <h2 class="text-2xl font-semibold mb-4">Información de Contacto</h2>
                <div class="flex items-start space-x-3 mb-4">
                    <i class="fas fa-map-marker-alt mt-1 text-amber-500"></i>
                    <p>Guayaquil, Ecuador<br>Av. Juan Tanca Marengo, km 2.5<br>CC Dicentro, planta alta local 18.</p>
                </div>
                <div class="flex items-start space-x-3">
                    <i class="fas fa-envelope mt-1 text-amber-500"></i>
                    <a href="mailto:info@cesbd.ec" class="hover:text-amber-500 transition-colors">
                        info@cesbd.ec
                    </a>
                </div>
            </div>

            <div class="rounded-lg p-6 shadow-lg bg-white">
                <h2 class="text-2xl font-semibold mb-4">Redes Sociales</h2>
                <div class="space-y-4">
                    <a href="https://www.facebook.com/centroentrenamientosbd"
                       class="flex items-center space-x-3 hover:text-amber-500 transition-colors"
                       target="_blank">
                        <i class="fab fa-facebook text-xl w-6"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="https://www.instagram.com/centroentrenamientosbd/"
                       class="flex items-center space-x-3 hover:text-amber-500 transition-colors"
                       target="_blank">
                        <i class="fab fa-instagram text-xl w-6"></i>
                        <span>Instagram</span>
                    </a>
                    <a href="https://www.tiktok.com/@centrodeentrenamientosbd"
                       class="flex items-center space-x-3 hover:text-amber-500 transition-colors"
                       target="_blank">
                        <i class="fab fa-tiktok text-xl w-6"></i>
                        <span>TikTok</span>
                    </a>
                </div>
            </div>
            <div class="rounded-lg p-6 shadow-lg bg-white">
                <h2 class="text-2xl font-semibold mb-4">Comunidad</h2>
                <div class="flex items-start space-x-3 mb-4">
                    <i class="fab fa-whatsapp text-amber-500"></i>
                    <a href="https://chat.whatsapp.com/C8838vbbWWlHrDbyJ7b75L"
                       class="hover:text-amber-500 transition-colors"
                       target="_blank">
                        Chat Comunidad WhatsApp
                    </a>
                </div>
            </div>
        </section>

        <section class="mt-12">
            <div class="rounded-lg overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3852.032268488878!2d-79.90172842519448!3d-2.150187497830675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d7565edac01%3A0x5d087d6554dd4a17!2sDicentro!5e1!3m2!1ses!2sec!4v1738680475881!5m2!1ses!2sec"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
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
