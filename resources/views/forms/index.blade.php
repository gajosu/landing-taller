@extends('home.layout')

@section('content')
<div class="container mx-auto px-4 mt-28">
    <h1 class="text-4xl font-bold text-center mb-8">{{ $title }}</h1>

    @if($forms->isEmpty())
        <div class="text-center py-8">
            <p class="text-gray-600">No hay {{ strtolower($title) }} disponibles en este momento.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($forms as $form)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ $form->banner_desktop }}" alt="{{ $form->name }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">{{ $form->name }}</h2>
                        <p class="text-gray-600 mb-4 line-clamp-2">
                            {{ Str::limit($form->description, 120) }}
                        </p>
                        {{-- <div class="flex items-center text-sm text-gray-500 mb-4">
                            <i class="far fa-calendar mr-2"></i>
                            {{ $form->event_date->format('d/m/Y') }}
                            <i class="far fa-clock mx-2"></i>
                            {{ $form->event_time }}
                        </div> --}}
                        @if($form->event_date)
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                {{ $form->event_address }}, {{ $form->event_city }}
                            </div>
                        @endif
                        <a href="{{ route('forms.show', $form->slug) }}"
                           class="block w-full text-center py-2 px-4 bg-yellow-400 hover:bg-yellow-500 text-black rounded-md transition duration-300">
                            {{ $form->button_text ?? 'Ver más' }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
