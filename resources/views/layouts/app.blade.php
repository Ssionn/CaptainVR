<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="CaptainVR made this website">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.2.1-web/css/fontawesome.min.css') }}">
    <title>@yield('title') - TheVRCoaches</title>
</head>

<body class="h-screen bg-slate-100">

<nav class=" bg-white h-[60px] flex items-center shadow-md">
    <div class="container mx-auto px-6 py-2 flex items-center justify-between">
        <div class="flex-shrink-0">
            <a href="{{ route('home') }}">
                <img class="h-[29px] w-[450px]" src="{{ asset('images/logo.png') }}" alt="CaptainVR Logo">
            </a>
        </div>
        <div class="flex items-center justify-center text-center">
            <x-nav-item :href="route('vr_coaches')" :active="request()->routeIs('vr_coaches')">
                {{ __('VR Coaches') }}
            </x-nav-item>
            <x-nav-item :href="route('metaverse_coaches')" :active="request()->routeIs('metaverse_coaches')">
                {{ __('Metaverse Coaches') }}
            </x-nav-item>
            <x-nav-item :href="route('xr_academy')" :active="request()->routeIs('xr_academy')">
                {{ __('XR Academy') }}
            </x-nav-item>
            <x-nav-item :href="route('xr_products')" :active="request()->routeIs('xr_products')">
                {{ __('XR Products') }}
            </x-nav-item>
            <a href="{{ route('sail_along') }}"
               class="bg-yellow-500 rounded-full px-4 py-1 text-teal-800 hover:text-teal-900 hover:scale-105 transition duration-300 ease-in-out">
                {{ __('Sail Along') }}
            </a>
            <x-nav-item :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-nav-item>
        </div>
    </div>


</nav>


@yield('content')

<div class="relative min-h-screen">
    <footer class="bg-[#232323] text-white py-8 absolute inset-x-0 bottom-0 w-full">
        <div class="container mx-auto flex flex-wrap">
            <div class="w-full md:w-1/5 text-center md:text-left space-x-2 pt-2">
                <h1 class="text-lg font-medium">&nbsp;VR Coaches</h1>
                <h2 class="text-lg font-medium">Metaverse Coaches</h2>
                <h2 class="text-lg font-medium">XR Academy</h2>
                <h2 class="text-lg font-medium">XR Products</h2>
            </div>
            <div class="w-full md:w-1/5 text-center md:text-left space-x-2 pt-2">
                <h2 class="text-lg font-medium">Captain app</h2>
            </div>
            <div class="w-full md:w-1/5 text-center md:text-left space-x-2 pt-2">
                <h2 class="text-lg font-medium">&nbsp;Basic packages</h2>
                <h2 class="text-lg font-medium">Expert packages</h2>
            </div>
            <div class="w-full md:w-1/5 text-center md:text-left space-x-2 pt-2">
                <h2 class="text-lg font-medium underline">Contact CaptainVR</h2>
                <p class="text-md mt-2">
                    <i class="fa fa-map-marker"></i>
                    Prinses Margrietplantsoen 33<br>
                    2595 AM ‘s-Gravenhage
                </p>
                <p class="text-md mt-2">
                    <i class="fa fa-phone"></i>
                    +31618137271
                </p>
                <p class="text-md">
                    <a href="mailto:info@captainvr.nl">
                        <i class="fa fa-envelope"></i>
                        info@captainvr.nl
                    </a>
                </p>
            </div>
            <div class="w-full md:w-1/5 text-center md:text-left space-x-2 pt-2">
                <iframe
                    title="location"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2452.0346379988237!2d4.332702836299941!3d52.07909931490961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b7059ce880bf%3A0x7382e12271b4d1ef!2sPr.%20Margrietplantsoen%2033%2C%202595%20AM%20Den%20Haag!5e0!3m2!1snl!2snl!4v1675244672977!5m2!1snl!2snl"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="container mx-auto text-center py-4">
            <hr/>
            <p class="text-sm mt-2">Copyright &copy; CaptainVR 2023</p>
        </div>
    </footer>
</div>



</body>
</html>
