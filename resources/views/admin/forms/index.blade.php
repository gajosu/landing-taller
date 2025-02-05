@extends('admin.layout')

@section('title', 'Formularios')

@section('header')
    <div class="flex justify-between items-center">
        <h2>Formularios</h2>
        <a href="{{ route('admin.forms.create') }}"
           class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded">
            <i class="fas fa-plus mr-2"></i>Nuevo Formulario
        </a>
    </div>
@endsection

@section('content')
    <div class="bg-white shadow rounded-lg">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tipo
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Registros
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($forms as $form)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $form->name }}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{ $form->slug }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                    {{ $form->type === 'evento' ? 'bg-blue-100 text-blue-800' :
                                       ($form->type === 'capacitacion' ? 'bg-green-100 text-green-800' :
                                        'bg-purple-100 text-purple-800') }}">
                                    {{ ucfirst($form->type) }}
                                </span>
                            </td>
                            {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $form->event_date->format('d/m/Y') }}
                            </td> --}}
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                    {{ $form->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $form->is_active ? 'Activo' : 'Inactivo' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <a href="{{ route('admin.forms.records', $form) }}"
                                   class="text-yellow-600 hover:text-yellow-900">
                                    {{ $form->records_count ?? $form->records()->count() }} registros
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-end space-x-2">
                                    <a href="{{ route('admin.forms.edit', $form) }}"
                                       class="text-yellow-600 hover:text-yellow-900">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.forms.records', $form) }}"
                                       class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-list"></i>
                                    </a>
                                    <form action="{{ route('admin.forms.destroy', $form) }}"
                                          method="POST"
                                          class="inline"
                                          onsubmit="return confirm('¿Estás seguro de que deseas eliminar este formulario? Se eliminarán todos los registros asociados.')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                No hay formularios registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($forms->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $forms->links() }}
            </div>
        @endif
    </div>
@endsection
