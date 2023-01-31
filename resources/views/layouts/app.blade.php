<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="h-screen">

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

<footer class="bg-gray-900 text-white py-12 absolute bottom-0 w-full">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/4 text-center md:text-left mb-6">
                <h3 class="font-medium mb-3">VR Coaches</h3>
                <ul class="list-reset">
                    <li class="mb-2">VR Lifecoaches</li>
                    <li class="mb-2">VR Mindfullness/ Meditation coaches</li>
                    <li class="mb-2">VR Educational coaches/ trainers</li>
                    <li class="mb-2">VR Business coaches</li>
                    <li class="mb-2">VR Youth coaches</li>
                    <li class="mb-2">VR Language coaches</li>
                    <li class="mb-2">VR Team coaches/ organizations</li>
                    <li class="mb-2">VR Transformational coaches/ organizations</li>
                    <li class="mb-2">VR Psychology en therapy</li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left mb-6">
                <h3 class="font-medium mb-3">Metaverse Coaches</h3>
                <ul class="list-reset">
                    <li class="mb-2">Metaverse Lifecoaches</li>
                    <li class="mb-2">Metaverse Mindfullness/ Meditation coaches</li>
                    <li class="mb-2">Metaverse Educational coaches/ trainers</li>
                    <li class="mb-2">Metaverse Business coaches</li>
                    <li class="mb-2">Metaverse Youth coaches</li>
                    <li class="mb-2">Metaverse Language coaches</li>
                    <li class="mb-2">Metaverse Team coaches/ organizations</li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left mb-6">
                <h3 class="font-medium mb-3">XR Education</h3>
                <ul class="list-reset">
                    <li class="mb-2">XR Education</li>
                    <li class="mb-2">VR coach program (Basic)</li>
                    <li class="mb-2">Metaverse coach/trainers program (Basic)</li>
                    <li class="mb-2">Metaverse Worldbuilder program (Basic)</li>
                    <li class="mb-2">Metaverse Event Manager program (Basic)</li>
                    <li class="mb-2">Metaverse Consultant & Business Developer (Basic)</li>
                    <li class="mb-2">XR Consultant & Business Developer (Basic)</li>
                    <li class="mb-2">VR coach program (Expert)</li>
                    <li class="mb-2">Metaverse coach/trainer program (Expert)</li>
                    <li class="mb-2">Metaverse Worldbuilder program (Expert)</li>
                    <li class="mb-2">Metaverse Event Manager program (Expert)</li>
                    <li class="mb-2">Metaverse Consultant & Business Developer (Expert)</li>
                    <li class="mb-2">XR Consultant & Business Developer (Expert)</li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left mb-6">
                <h3 class="font-medium mb-3">XR Products</h3>
                <ul class="list-reset">
                    <li class="mb-2">VR MoodBooster</li>
                    <li class="mb-2">Healium</li>
                    <li class="mb-2">VR WallClimbing</li>
                    <li class="mb-2">Metaverse Leadership Experience MazeRunner</li>
                    <li class="mb-2">Metaverse Experience HappinessMaze</li>
                    <li class="mb-2">Metaverse Spaces</li>
                    <li class="mb-2">Coaching Spaces</li>
                    <li class="mb-2">Metaverse Training Spaces</li>
                    <li class="mb-2">Metaverse Mindfulness & Meditation Spaces</li>
                    <li class="mb-2">Visualization Spaces</li>
                    <li class="mb-2">Metaverse Onboarding Spaces</li>
                    <li class="mb-2">Metaverse Workspaces</li>
                    <li class="mb-2">Hybrid/ Metaverse Spaces</li>
                    <li class="mb-2">Hybrid/ Metaverse workspaces</li>
                    <li class="mb-2">Hybrid/Metaverse training spaces</li>
                    <li class="mb-2">Hybrid/Metaverse meeting spaces</li>
                    <li class="mb-2">De Captain App</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
