@extends('home.layout')

@section('styles')
    <link rel="stylesheet" href="/styles.css">
@endsection

@section('content')
    <!-- Banner -->
    <section class="h-screen relative">
        <div class="hidden md:block bg-cover h-full flex flex-col justify-end bg-bottom backgroundSlideDown"
            style="background-image: url('{{ $form->banner_desktop }}'); animation-duration: 5s;"></div>

        <div class="block md:hidden w-full h-full bg-cover flex flex-col justify-end bg-bottom backgroundSlideDown"
            style="background-image: url('{{ $form->banner_mobile }}'); animation-duration: 5s;"></div>

        <div class="w-full md:max-w-2xl absolute bottom-0">
            <div class="bg-gradient-to-r from-black to-transparent p-10 pb-20 md:p-10 fadeIn">
                <h2 class="text-5xl font-bold text-white mb-4 fadeInUp" style="animation-delay: 0.5s;">{{ $form->name }}
                </h2>
                @if ($form->description)
                    <p class="text-2xl text-white mb-4 max-w-md fadeInUp" style="animation-delay: 1s;">{{ $form->description }}</p>
                @endif
                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full uppercase text-2xl fadeInUp"
                    id="register-button" style="animation-delay: 1.5s;">
                    {{ $form->button_text ?? '¡Regístrate y Capacítate!' }}
                </button>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    @if($form->event_date && $form->event_time && $form->event_address)
        <section class="bg-gray-200 text-gray-800 py-10">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-around items-center text-center">
                    <div class="flex flex-col items-center w-full md:w-1/4 mb-4 md:mb-0">
                        <i class="fas fa-calendar-check fa-4x mb-5"></i>
                        <span class="font-semibold">FECHA</span>
                        <span>{{ $form->event_date->format('d/m/Y') }}</span>
                    </div>
                    <div class="flex flex-col items-center w-full md:w-1/4 mb-4 md:mb-0">
                        <i class="fas fa-map-marker-alt fa-4x mb-5"></i>
                        <span class="font-semibold">DIRECCIÓN</span>
                        <span>{{ $form->event_address }}</span>
                        @if($form->event_city)
                            <span>{{ $form->event_city }}</span>
                        @endif
                    </div>
                    <div class="flex flex-col items-center w-full md:w-1/4">
                        <i class="fas fa-clock fa-4x mb-5"></i>
                        <span class="font-semibold">HORA</span>
                        <span>{{ \Carbon\Carbon::parse($form->event_time)->format('H:i') }}
                            @if($form->end_time)
                                - {{ \Carbon\Carbon::parse($form->end_time)->format('H:i') }}
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Form Section -->
    @include('forms.partials.inscription-form', ['form' => $form])
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var registerButton = document.querySelector("#register-button");
            registerButton.addEventListener("click", function(e) {
                e.preventDefault();
                document.querySelector("#inscribe").scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            });
        });
    </script>
@endsection
