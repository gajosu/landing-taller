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

    <div class="bg-white my-16">
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
                Our Brands Empower the Way We Live
            </h1>
            <p class="text-lg text-gray-700 mb-8">
                Honing our craft since 1843, we know a thing or two about making great tools. We stock your toolbox, shed
                and truck bed. The ones you’ve come to rely on to make that repair, nail that renovation and landscape like
                a pro. But that’s just part of our story. We help build the roads you drive on. And the car you drive in.
                Even the cell phone that keeps you connected. What we do may go unnoticed, but that doesn’t make it any less
                remarkable. Get to know how our brands empower the way we live.
            </p>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/4 mb-8 md:mb-0">
                    <ul class="space-y-4">
                        <li>
                            <a class="text-blue-600 font-bold hover:underline" href="#">
                                Tool Brands
                            </a>
                        </li>
                        <li>
                            <a class="text-blue-400 hover:underline" href="#">
                                Outdoor Brands
                            </a>
                        </li>
                        <li>
                            <a class="text-blue-400 hover:underline" href="#">
                                Industrial Solutions
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="md:w-3/4">
                    <h2 class="text-3xl font-bold mb-4">
                        Leading in Tools
                    </h2>
                    <p class="text-lg text-gray-700 mb-8">
                        From experienced pros to first-time do-it-yourselfers, people around the globe trust our hand and
                        power tool brands to help them tackle the task at hand – and get the job done right.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="flex items-center justify-center bg-yellow-500 h-32">
                            <img alt="DeWalt logo" class="h-16" height="100"
                                src="https://storage.googleapis.com/a1aa/image/F3qYeSzJX00nfk4qpKooIto366TpE4TXX6vCcTF2tSo5DW5TA.jpg"
                                width="100">
                        </div>
                        <div class="flex items-center justify-center bg-gray-300 h-32">
                            <img alt="Craftsman logo" class="h-16" height="100"
                                src="https://storage.googleapis.com/a1aa/image/edNpEwemqdoLG0UenkcqZXiQBQC7ckr2ZcOofgD5nHkpPYlPB.jpg"
                                width="100">
                        </div>
                        <div class="flex items-center justify-center bg-red-500 h-32">
                            <img alt="Stanley logo" class="h-16" height="100"
                                src="https://storage.googleapis.com/a1aa/image/mNSEy8wgpd7PDlm9hCR2jgtcy3y16AtbCKeYEdpWN3i9Br8JA.jpg"
                                width="100">
                        </div>
                        <div class="flex items-center justify-center bg-yellow-500 h-32">
                            <img alt="Stanley logo" class="h-16" height="100"
                                src="https://storage.googleapis.com/a1aa/image/mNSEy8wgpd7PDlm9hCR2jgtcy3y16AtbCKeYEdpWN3i9Br8JA.jpg"
                                width="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-16 my-16">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">A Global Leader in Tools &amp; Outdoor With Highly Engineered Industrial
                Businesses</h1>
            <p class="text-lg mb-8">We create the toughest, most innovative tools, accessories, storage solutions and
                outdoor power equipment on the market. That’s why people everywhere know they can rely on our products as
                they get to work building and maintaining our world.</p>
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
@endsection
