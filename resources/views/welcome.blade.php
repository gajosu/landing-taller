<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller de Reparación de Superficies</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">

    <!-- Section 1: Header with Call to Action -->
    <div class="bg-black p-10 text-center">
        <h1 class="text-4xl font-bold mb-4">¡SÉ UN EXPERTO!</h1>
        <p class="text-2xl mb-4">TALLER: "REPARACIÓN DE SUPERFICIES EN ÉPOCA DE LLUVIAS"</p>
        <button class="bg-yellow-500 text-black px-4 py-2 rounded-full">¡REGÍSTRATE AQUÍ!</button>
    </div>

    <!-- Section 2: Information Section -->
    <div class="p-10 grid grid-cols-2 gap-4">
        <div class="bg-gray-800 p-6 text-center">
            <h2 class="text-xl font-bold">DEMOSTRACIÓN EN VIVO</h2>
            <!-- Placeholder for image -->
            <div class="bg-gray-700 h-60 mt-4"></div>
        </div>
        <div class="bg-gray-800 p-6 text-center">
            <h2 class="text-xl font-bold">EXPOSICIÓN DE PRODUCTOS</h2>
            <!-- Placeholder for image -->
            <div class="bg-gray-700 h-60 mt-4"></div>
        </div>
        <!-- ... More sections as per design ... -->
    </div>

    <!-- Section 3: Form Section -->
    <div class="bg-yellow-400 p-10 text-black">
        <h2 class="text-3xl font-bold mb-4">TALLER REPARACIÓN DE SUPERFICIES</h2>
        <form action="#" method="POST">
            <!-- Input fields and labels -->
            <div class="mb-4">
                <label for="city" class="block text-lg">Ciudad de Evento *</label>
                <select id="city" name="city" class="w-full p-2 bg-gray-200 rounded">
                    <!-- Options go here -->
                </select>
            </div>
            <!-- ... More input fields ... -->
            <button type="submit" class="bg-black text-yellow-400 px-4 py-2 rounded-full">Inscribirme</button>
        </form>
    </div>

</body>

</html>
