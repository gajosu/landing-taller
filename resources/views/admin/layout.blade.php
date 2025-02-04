<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg">
            <div class="p-4">
                <h1 class="text-xl font-bold">Panel Admin</h1>
            </div>
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}"
                   class="block px-4 py-2 text-gray-600 hover:bg-yellow-50 hover:text-yellow-600">
                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                </a>
                <a href="{{ route('admin.forms.index') }}"
                   class="block px-4 py-2 text-gray-600 hover:bg-yellow-50 hover:text-yellow-600">
                    <i class="fas fa-list-alt mr-2"></i> Formularios
                </a>
                <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2">
                    @csrf
                    <button type="submit" class="text-gray-600 hover:text-red-600">
                        <i class="fas fa-sign-out-alt mr-2"></i> Cerrar sesión
                    </button>
                </form>
            </nav>
        </div>

        <!-- Content -->
        <div class="flex-1 overflow-hidden">
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4">
                    <h2 class="text-2xl font-bold text-gray-800">
                        @yield('header')
                    </h2>
                </div>
            </header>

            <main class="max-w-7xl mx-auto py-6 px-4">
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    @yield('scripts')
</body>
</html>
