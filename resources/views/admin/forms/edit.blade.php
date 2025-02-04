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
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500"
                           value="{{ old('name', $form->name) }}" required>
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                    <input type="text" name="slug" id="slug"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500"
                           value="{{ old('slug', $form->slug) }}" required>
                    @error('slug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea name="description" id="description" rows="3"
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500"
                              required>{{ old('description', $form->description) }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Tipo</label>
                    <select name="type" id="type"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500"
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
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500"
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
                    <input type="file" name="banner_desktop" id="banner_desktop" class="mt-1 block w-full">
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
                    <input type="file" name="banner_mobile" id="banner_mobile" class="mt-1 block w-full">
                    <p class="mt-1 text-sm text-gray-500">Deja vacío para mantener la imagen actual</p>
                    @error('banner_mobile')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" rows="2"
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500"
                              required>{{ old('meta_description', $form->meta_description) }}</textarea>
                    @error('meta_description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded">
                    <i class="fas fa-save mr-2"></i>Actualizar Formulario
                </button>
            </div>
        </form>
    </div>
@endsection
