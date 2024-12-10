@extends('home.layout')
@section('content')
    <div class="relative">
        <img alt="Hand holding Black &amp; Decker tool" class="w-full h-screen object-cover"
            src="https://storage.googleapis.com/a1aa/image/rEKtZMNNQIaqKpzz1OafLr7d5SIRmAeW30s0CTe3w6jugrynA.jpg"
            width="1920" />
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 mb-8 bg-yellow-500 p-8">
            <h1 class="text-6xl font-bold text-black">
                Our Brands
            </h1>
            <p class="text-2xl text-black">
                KNOW US BY NAME
            </p>
        </div>
    </div>

    <div class="bg-white my-5">
        <div class="container mx-auto px-4 py-8">
            <nav class="text-sm text-gray-500 mb-4">
                <a class="hover:underline" href="#">
                    Home
                </a>
                <span>
                    |
                </span>
                <span>
                    Brands
                </span>
            </nav>
            <h1 class="text-4xl font-bold mb-4">
                Turning Disruption Into Opportunity
            </h1>
            <p class="text-lg text-gray-700 mb-8">
                Impossible never stopped us. Pushing boundaries, thinking differently and staying on the cutting edge – that’s how we’ve evolved our family of brands into household names. For us, being a leader in tools, engineered fastening and industrial equipment goes hand-in-hand with being a world-class innovator. In this extraordinarily fast-paced digital age, where others deviate from disruption, we embrace technological change as a way to make our products and business solutions that much better for our customers.
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-16 mt-16">
        <div class="text-center">
            <h1 class="text-5xl font-bold mb-4">A Timeline of World’s Firsts</h1>
        </div>
        <div class="flex justify-center items-center mb-8">
            <i class="fas fa-arrow-left text-blue-500 mx-2"></i>
            <i class="fas fa-arrow-right text-blue-500 mx-2"></i>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white shadow-md p-6 text-center border-b-4 border-yellow-500">
                <p class="text-4xl font-bold mb-2">#1</p>
                <p class="text-sm uppercase font-semibold mb-1">World Leader</p>
                <p class="text-gray-600">in tools &amp; outdoor</p>
            </div>
            <div class="bg-white shadow-md p-6 text-center border-b-4 border-yellow-500">
                <p class="text-4xl font-bold mb-2">50,000</p>
                <p class="text-sm uppercase font-semibold mb-1">Employees</p>
                <p class="text-gray-600">worldwide</p>
            </div>
            <div class="bg-white shadow-md p-6 text-center border-b-4 border-yellow-500">
                <p class="text-4xl font-bold mb-2">60</p>
                <p class="text-sm uppercase font-semibold mb-1">Countries</p>
                <p class="text-gray-600">global presence</p>
            </div>
            <div class="bg-white shadow-md p-6 text-center border-b-4 border-yellow-500">
                <p class="text-4xl font-bold mb-2">90%</p>
                <p class="text-sm uppercase font-semibold mb-1">Cars &amp; Light Trucks</p>
                <p class="text-gray-600">in Europe and North America use our fasteners</p>
            </div>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row items-center justify-center min-h-screen">
        <div class="w-full lg:w-1/2">
            <img alt="Two people working together, one smiling and the other holding a pen and a laptop"
                class="w-full h-auto" height="600"
                src="https://storage.googleapis.com/a1aa/image/9nffHZyDPZkbU01WeWz4kC7sLRL5GGwiLlVRKYZyv6mqbvynA.jpg"
                width="800" />
        </div>
        <div class="w-full lg:w-1/2 bg-gray-100 p-8 lg:p-16">
            <h2 class="text-sm font-semibold uppercase text-gray-600 mb-2">
                Embracing Big Ideas
            </h2>
            <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Supporting Tomorrow’s Entrepreneurs with Techstars
            </h1>
            <p class="text-gray-700 mb-6">
                From enriching educational experiences and invaluable mentorship opportunities to a diverse, collaborative
                environment, learn how the Founder Catalyst Program helps the next wave of entrepreneurs turn their ideas
                into reality.
            </p>
            <button class="bg-black text-white py-2 px-4 rounded-full">
                Apply Today
            </button>
        </div>
    </div>
@endsection
