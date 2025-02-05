@extends('admin.layout')

@section('title', 'Editar Formulario')

@section('header')
    <div class="flex justify-between items-center">
        <h2>Editar Formulario</h2>
        <a href="{{ route('admin.forms.index') }}"
           class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
            <i class="fas fa-arrow-left mr-2"></i>Volver
        </a>
    </div>
@endsection

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        @if ($errors->any())
            <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-exclamation-circle text-red-500"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">
                            Hay {{ $errors->count() }} {{ $errors->count() == 1 ? 'error' : 'errores' }} en el formulario
                        </h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('admin.forms.update', $form) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" name="name" id="name"
                           class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4"
                           value="{{ old('name', $form->name) }}" required>
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                    <input type="text" name="slug" id="slug"
                           class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4"
                           value="{{ old('slug', $form->slug) }}" required>
                    @error('slug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea name="description" id="description" rows="3"
                              class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4 resize-none"
                              required>{{ old('description', $form->description) }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Tipo</label>
                    <select name="type" id="type"
                            class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4"
                            required>
                        <option value="evento" {{ old('type', $form->type) == 'evento' ? 'selected' : '' }}>Evento</option>
                        <option value="capacitacion" {{ old('type', $form->type) == 'capacitacion' ? 'selected' : '' }}>Capacitación</option>
                        <option value="promocion" {{ old('type', $form->type) == 'promocion' ? 'selected' : '' }}>Promoción</option>
                    </select>
                    @error('type')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="button_text" class="block text-sm font-medium text-gray-700">Texto del Botón</label>
                    <input type="text" name="button_text" id="button_text"
                           class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4"
                           value="{{ old('button_text', $form->button_text) }}" required>
                    @error('button_text')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="banner_desktop" class="block text-sm font-medium text-gray-700">Banner Desktop</label>
                    @if($form->banner_desktop)
                        <div class="mt-2 mb-2">
                            <img src="{{ $form->banner_desktop }}" alt="Banner Desktop actual" class="h-32 object-contain">
                        </div>
                    @endif
                    <input type="file" name="banner_desktop" id="banner_desktop" class="mt-1 block w-full file:mr-4 file:py-3 file:px-4 file:rounded-md file:border-2 file:border-gray-300 file:text-sm file:font-semibold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100">
                    <p class="mt-1 text-sm text-gray-500">Deja vacío para mantener la imagen actual</p>
                    @error('banner_desktop')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="banner_mobile" class="block text-sm font-medium text-gray-700">Banner Mobile</label>
                    @if($form->banner_mobile)
                        <div class="mt-2 mb-2">
                            <img src="{{ $form->banner_mobile }}" alt="Banner Mobile actual" class="h-32 object-contain">
                        </div>
                    @endif
                    <input type="file" name="banner_mobile" id="banner_mobile" class="mt-1 block w-full file:mr-4 file:py-3 file:px-4 file:rounded-md file:border-2 file:border-gray-300 file:text-sm file:font-semibold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100">
                    <p class="mt-1 text-sm text-gray-500">Deja vacío para mantener la imagen actual</p>
                    @error('banner_mobile')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" rows="2"
                              class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4 resize-none"
                              required>{{ old('meta_description', $form->meta_description) }}</textarea>
                    @error('meta_description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="mt-6 mb-6">
                <div class="flex items-center">
                    <input type="checkbox" name="has_event" id="has_event"
                           class="h-4 w-4 text-yellow-500 rounded border-gray-300"
                           {{ ($form->event_date && $form->event_time && $form->event_address && $form->event_city) ? 'checked' : '' }}>
                    <label for="has_event" class="ml-2 block text-sm text-gray-700">
                        Agregar Fecha y Lugar
                    </label>
                </div>
            </div>

            <div id="event_fields" class="{{ ($form->event_date && $form->event_time && $form->event_address && $form->event_city) ? '' : 'hidden' }} grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="event_date" class="block text-sm font-medium text-gray-700">Fecha del Evento</label>
                    <input type="date" name="event_date" id="event_date"
                           class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4"
                           value="{{ old('event_date', $form->event_date ? $form->event_date->format('Y-m-d') : '') }}">
                    @error('event_date')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event_time" class="block text-sm font-medium text-gray-700">Hora de Inicio</label>
                    <input type="time" name="event_time" id="event_time"
                           class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4"
                           value="{{ old('event_time', $form->event_time ? \Carbon\Carbon::parse($form->event_time)->format('H:i') : '') }}">
                    @error('event_time')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="end_time" class="block text-sm font-medium text-gray-700">Hora de Finalización</label>
                    <input type="time" name="end_time" id="end_time"
                           class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4"
                           value="{{ old('end_time', $form->end_time ? \Carbon\Carbon::parse($form->end_time)->format('H:i') : '') }}">
                    @error('end_time')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event_city" class="block text-sm font-medium text-gray-700">Ciudad</label>
                    <input type="text" name="event_city" id="event_city"
                           class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4"
                           value="{{ old('event_city', $form->event_city) }}">
                    @error('event_city')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event_address" class="block text-sm font-medium text-gray-700">Dirección</label>
                    <input type="text" name="event_address" id="event_address"
                           class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 py-3 px-4"
                           value="{{ old('event_address', $form->event_address) }}">
                    @error('event_address')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between">
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ $form->is_active ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-yellow-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-yellow-400"></div>
                    <span class="ms-3 text-sm font-medium text-gray-700">Activar Formulario</span>
                </label>

                <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded">
                    <i class="fas fa-save mr-2"></i>{{ isset($form) ? 'Actualizar' : 'Guardar' }} Formulario
                </button>
            </div>
        </form>
    </div>

    <script>
        // Auto-generar slug desde el nombre
        document.getElementById('name').addEventListener('input', function() {
            let slug = this.value
                .toLowerCase()
                .replace(/[^a-z0-9-]/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-|-$/g, '');
            document.getElementById('slug').value = slug;
        });

        // Manejo de campos de evento
        const hasEventCheckbox = document.getElementById('has_event');
        const eventFields = document.getElementById('event_fields');
        const eventInputs = ['event_date', 'event_time', 'end_time', 'event_city', 'event_address'].map(
            id => document.getElementById(id)
        );

        hasEventCheckbox.addEventListener('change', function() {
            eventFields.classList.toggle('hidden');
            eventInputs.forEach(input => {
                input.required = this.checked;
                if (!this.checked) {
                    input.value = ''; // Limpiar campos si se desmarca
                }
            });
        });

        // Establecer required inicial basado en el estado del checkbox
        if (hasEventCheckbox.checked) {
            eventInputs.forEach(input => input.required = true);
        }
    </script>
@endsection
