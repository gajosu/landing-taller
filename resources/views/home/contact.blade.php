@extends('home.layout')
@section('content')

<script>
    function toggleAccordion(id) {
        var content = document.getElementById("accordion-content-" + id);
        var icon = document.getElementById("accordion-icon-" + id);
        if (content.style.display === "none") {
            content.style.display = "block";
            icon.classList.remove("fa-plus");
            icon.classList.add("fa-minus");
        } else {
            content.style.display = "none";
            icon.classList.remove("fa-minus");
            icon.classList.add("fa-plus");
        }
    }
</script>

<div class="bg-yellow-500 p-8">
    <div class="container mx-auto">
        <h1 class="text-5xl font-bold">Contact Us</h1>
        <nav class="mt-2">
            <a href="#" class="text-black font-semibold">Home</a>
            <span class="text-black"> | </span>
            <a href="#" class="text-black">About</a>
        </nav>
    </div>
</div>

<!-- Main Content Section -->
<div class="p-8 container mx-auto">
    <p class="text-xl mb-8">For general customer support, please call <span class="font-bold">+1 (860) 973-2891</span>.</p>
    
    
    <!-- Contactos de Puntos de Venta por ciudad -->
    <div class="border-t border-gray-300 mt-4">
        <h2 class="text-2xl font-bold mt-4">Contactos de Puntos de Venta por ciudad</h3>
        
        <div class="mt-4">
            <div class="flex items-center cursor-pointer" onclick="toggleAccordion('city1')">
                <i id="accordion-icon-city1" class="fas fa-plus text-blue-500"></i>
                <span class="text-blue-500 ml-2">Ciudad 1</span>
            </div>
            <div id="accordion-content-city1" style="display: none;">
                <table class="w-full mt-4">
                    <thead>
                        <tr>
                            <th class="text-left">DEWALT</th>
                            <th class="text-left">Website</th>
                            <th class="text-left">Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2">CRAFTSMAN</td>
                            <td class="py-2">Website</td>
                            <td class="py-2">Contact</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="mt-4">
            <div class="flex items-center cursor-pointer" onclick="toggleAccordion('city2')">
                <i id="accordion-icon-city2" class="fas fa-plus text-blue-500"></i>
                <span class="text-blue-500 ml-2">Ciudad 2</span>
            </div>
            <div id="accordion-content-city2" style="display: none;">
                <table class="w-full mt-4">
                    <thead>
                        <tr>
                            <th class="text-left">DEWALT</th>
                            <th class="text-left">Website</th>
                            <th class="text-left">Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2">CRAFTSMAN</td>
                            <td class="py-2">Website</td>
                            <td class="py-2">Contact</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Contactos de Servicios Técnicos por ciudad -->
    <div class="border-t border-gray-300 mt-8">
        <h2 class="text-2xl font-bold mt-4">Contactos de Servicios Técnicos por ciudad</h3>
        
        <div class="mt-4">
            <div class="flex items-center cursor-pointer" onclick="toggleAccordion('city3')">
                <i id="accordion-icon-city3" class="fas fa-plus text-blue-500"></i>
                <span class="text-blue-500 ml-2">Ciudad 3</span>
            </div>
            <div id="accordion-content-city3" style="display: none;">
                <table class="w-full mt-4">
                    <thead>
                        <tr>
                            <th class="text-left">DEWALT</th>
                            <th class="text-left">Website</th>
                            <th class="text-left">Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2">CRAFTSMAN</td>
                            <td class="py-2">Website</td>
                            <td class="py-2">Contact</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="mt-4">
            <div class="flex items-center cursor-pointer" onclick="toggleAccordion('city4')">
                <i id="accordion-icon-city4" class="fas fa-plus text-blue-500"></i>
                <span class="text-blue-500 ml-2">Ciudad 4</span>
            </div>
            <div id="accordion-content-city4" style="display: none;">
                <table class="w-full mt-4">
                    <thead>
                        <tr>
                            <th class="text-left">DEWALT</th>
                            <th class="text-left">Website</th>
                            <th class="text-left">Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2">CRAFTSMAN</td>
                            <td class="py-2">Website</td>
                            <td class="py-2">Contact</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection