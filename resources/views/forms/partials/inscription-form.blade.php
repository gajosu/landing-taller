<section class="bg-gray-100 py-10" id="inscribe">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Formulario de Inscripción</h2>
        <div class="flex justify-center">
            <form action="{{ route('forms.register', $form->slug) }}" method="post" class="w-full md:max-w-3xl shadow overflow-hidden rounded-md">
                @csrf
                <div class="px-4 py-5 bg-white sm:p-6">
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500">
                            <div class="text-red-700">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 gap-6">
                        {{-- Nombre --}}
                        <div class="col-span-1">
                            <label for="firstname" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="firstname" id="firstname" required autocomplete="given-name"
                                value="{{ old('firstname') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3 @error('firstname') border-red-500 @enderror">
                        </div>

                        {{-- Apellido --}}
                        <div class="col-span-1">
                            <label for="lastname" class="block text-sm font-medium text-gray-700">Apellido</label>
                            <input type="text" name="lastname" id="lastname" required autocomplete="family-name"
                                value="{{ old('lastname') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3 @error('lastname') border-red-500 @enderror">
                        </div>

                        {{-- Fecha de nacimiento --}}
                        <div class="col-span-1">
                            <label for="birthday" class="block text-sm font-medium text-gray-700">Fecha de nacimiento</label>
                            <input type="date" name="birthday" id="birthday" required
                                value="{{ old('birthday') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3 @error('birthday') border-red-500 @enderror">
                        </div>

                        {{-- Cédula --}}
                        <div class="col-span-1">
                            <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                            <input type="text" name="cedula" id="cedula" required
                                value="{{ old('cedula') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3 @error('cedula') border-red-500 @enderror">
                        </div>

                        {{-- Teléfono --}}
                        <div class="col-span-1">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <input type="tel" name="phone" id="phone" required
                                value="{{ old('phone') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3 @error('phone') border-red-500 @enderror">
                        </div>

                        {{-- Email --}}
                        <div class="col-span-1">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" required
                                value="{{ old('email') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3 @error('email') border-red-500 @enderror">
                        </div>

                        {{-- Ciudad --}}
                        <div class="col-span-1">
                            <label for="city" class="block text-sm font-medium text-gray-700">Ciudad</label>
                            <input type="text" name="city" id="city" required
                                value="{{ old('city') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3 @error('city') border-red-500 @enderror">
                        </div>

                        {{-- Especialidad --}}
                        <div class="col-span-1">
                            <label for="specialty" class="block text-sm font-medium text-gray-700">Especialidad</label>
                            <select name="specialty" id="specialty" required
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3 @error('specialty') border-red-500 @enderror">
                                <option value="">Seleccione una especialidad</option>
                                @foreach(['Eléctrico', 'Metalmecánico', 'Mecánico Automotriz', 'Línea Madera', 'Jardinería', 'General'] as $specialty)
                                    <option value="{{ $specialty }}" {{ old('specialty') == $specialty ? 'selected' : '' }}>
                                        {{ $specialty }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Tipo de negocio --}}
                        <div class="col-span-1">
                            <label for="business_type" class="block text-sm font-medium text-gray-700">Tipo de negocio</label>
                            <select name="business_type" id="business_type" required
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-black border-2 border-gray-300 rounded-md py-2 px-3 @error('business_type') border-red-500 @enderror">
                                <option value="">Seleccione un tipo de negocio</option>
                                @foreach(['Ferretería', 'Constructora – Contratista', 'Industria', 'Independiente', 'Otros'] as $type)
                                    <option value="{{ $type }}" {{ old('business_type') == $type ? 'selected' : '' }}>
                                        {{ $type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                        class="w-full py-3 mt-6 font-medium tracking-widest text-black uppercase shadow-lg bg-yellow-400 hover:bg-yellow-500 rounded-md">
                        Inscribirme
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
