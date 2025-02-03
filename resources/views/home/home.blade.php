@extends('home.layout')

@section('styles')
    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .accordion-content.active {
            max-height: 500px;
        }

        .accordion-button.active svg {
            transform: rotate(180deg);
        }

        .swiper-button-next,
        .swiper-button-prev {
            background-color: white;
            width: 40px !important;
            height: 40px !important;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 18px !important;
            color: black;
        }
    </style>
@endsection

@section('content')
    <div class="relative">
        <img alt="Hand holding Black &amp; Decker tool" class="w-full h-screen object-cover"
            src="/images/banner_home.jpg"
            width="1920" />

        {{-- Nuevo slider de marcas --}}
        <div
            class="absolute -bottom-20 left-0 right-0 z-10 bg-amber-300 max-w-fit rounded-md px-12 py-4 text-center mx-auto flex flex-col items-center justify-center gap-2 shadow-md">
            <h1 class="font-bold text-3xl md:text-4xl my-4 border-[5px] border-gray rounded-md p-4 uppercase">Nuestras Marcas
            </hbanner_home (1).jpg1>
            <div class="relative w-full max-w-sm sm:max-w-md lg:max-w-2xl xl:max-w-4xl z-10 mt-3">
                <div class="swiper brandsSwiper">
                    <div class="swiper-wrapper">
                        @foreach (['BLACK-AND-DECKER', 'DEWALT', 'STANLEY', 'CRAFTSMAN', 'IRWIN', 'PROTO'] as $brand)
                            <div class="swiper-slide">
                                <a href="/marcas/{{ strtolower($brand) }}">
                                    <div
                                        class="bg-white shadow-lg rounded-md w-[150px] h-[150px] flex items-center justify-center mx-auto">
                                        <img src="/images/thumbnails-brands/{{ $brand }}.png" alt="{{ $brand }}"
                                            class="w-[95%] h-[95%] object-cover rounded-md">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white my-16">
        <div class="container mx-auto mt-28 px-4 pb-[10rem]">
            <section class="text-lg">
                <p>
                    El Centro de Entrenamiento SBD es una plataforma de capacitación y
                    comunicación, diseñada especialmente para maestros, profesionales y
                    contratistas de la construcción en Ecuador.
                </p>
                <p>
                    También es una Comunidad Activa, que al unirte, podrás mantenerte
                    actualizado, participar en eventos y obtener beneficios exclusivos que
                    te dan ventajas reales para tu trabajo diario.
                </p>
                <p>
                    En el ecosistema CESBD impulsamos marcas innovadoras de renombre como:
                    BLACK &amp; DECKER, STANLEY, DEWALT, CRAFTSMAN, IRWIN Y PROTO.
                </p>
            </section>

            <section class="mt-10">
                <h2 class="font-semibold text-3xl">¿Qué ofrecemos?</h2>
                <p class="mt-4">
                    CESBD no solo brinda formación técnica, sino también una comunidad
                    vibrante y beneficios exclusivos que transforman la experiencia de los
                    especialistas en el sector, para crecer profesionalmente y potenciar tu
                    carrera.
                </p>
            </section>

            <section>
                <div class="w-full my-4">
                    @foreach (['Programa Modular de Capacitación', 'Talleres, Activaciones y Demostraciones', 'Promociones y Ofertas', 'Premios y Concursos'] as $index => $title)
                        <div class="border-b rounded-md shadow-sm border-amber-400 border-l-4 mb-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="accordion-button flex flex-1 items-center justify-between py-4 px-4 font-semibold text-xl hover:bg-amber-100 hover:transition-all duration-300"
                                    onclick="toggleAccordion({{ $index }})">
                                    {{ $title }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div id="accordion-{{ $index }}" class="accordion-content px-4">
                                <div class="text-lg px-4 pb-4 pt-0">
                                    @if ($index == 0)
                                        <p>
                                            Formación Certificada por niveles, para que adquieras
                                            habilidades técnicas avanzadas en el uso de herramientas de las marcas más
                                            confiables del mercado.
                                        </p>
                                        <ul class="list-disc list-inside pl-8 mt-1">
                                            <li><span class="font-bold">Básico:</span> Domina los fundamentos de las
                                                herramientas y su mantenimiento</li>
                                            <li><span class="font-bold">Profesional:</span> Perfecciona tus habilidades con
                                                técnicas avanzadas.</li>
                                            <li><span class="font-bold">Semi Industrial e Industrial:</span> Prepárate para
                                                proyectos de alta exigencia y complejidad.</li>
                                        </ul>
                                    @elseif ($index == 1)
                                        <p>Participa en eventos donde podrás conocer y probar tanto
                                            herramientas como accesorios de última generación, recibir asesoría directa de
                                            expertos y descubrir cómo optimizar tus proyectos con tecnologías
                                            innovadoras.</p>
                                    @elseif ($index == 2)
                                    <p>Aprovecha incentivos y descuentos exclusivos en herramientas, accesorios y repuestos disponibles en Puntos de Venta y Centros Autorizados de Servicio asociados al CESBD.</p>
                                    @elseif ($index == 3)
                                        <p>Con cada compra participas por premios increíbles. Es nuestra forma de agradecer
                                            tu preferencia y lealtad.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Inicializar Swiper
        const swiper = new Swiper('.brandsSwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                },
            },
        });

        // Código del acordeón
        function toggleAccordion(index) {
            const content = document.getElementById(`accordion-${index}`);
            const button = content.previousElementSibling.querySelector('.accordion-button');
            const allContents = document.querySelectorAll('.accordion-content');
            const allButtons = document.querySelectorAll('.accordion-button');

            allContents.forEach(item => item.classList.remove('active'));
            allButtons.forEach(item => item.classList.remove('active'));

            content.classList.toggle('active');
            button.classList.toggle('active');
        }
    </script>
@endsection
