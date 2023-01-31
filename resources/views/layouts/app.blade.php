<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>CaptainVR - @yield('title')</title>
</head>
<body>

<nav class="bg-white h-[60px] flex items-center shadow-md">
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
               class="bg-yellow-500 rounded-full px-4 py-1 font-small text-teal-600 hover:text-teal-700 hover:scale-105 transition duration-300 ease-in-out mt-1">
                {{ __('Sail Along') }}
            </a>
            <x-nav-item :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-nav-item>
        </div>
    </div>


</nav>


@yield('content')


</body>
</html>
