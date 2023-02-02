@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex flex-row">
        <div class="w-full z-0 h-72 bg-gradient-to-r from-indigo-500 to-cyan-400 absolute">
            <div class="flex justify-end mr-56">
                <div class="flex-col mt-8 -skew-x-6">
                    <h1 class="font-bold text-3xl text-white">Welcome to the VR-Coaches<br />platform</h1>
                    <p class="text-m text-gray-300 w-80">The VR Coaches platform is a platform where VR/ XR/Metaverse coaches, trainers, therapists, and consultants come together and join forces to create a better real world for everyone.</p>
                </div>
            </div>
        </div>
        <div class=" w-1/2 z-10 -skew-x-6 h-72 bg-gradient-to-r from-indigo-500 to-cyan-400 relative">
            <div class="flex flex-row">
                <img src="{{ asset('images/pinkgradient-vrheadset.jpg') }}" class="h-56 w-56 skew-x-6 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full p-1 ml-56 mt-36 z-0">
                <img src="{{ asset('images/purplegradient-vrheadset.jpg') }}" class="h-24 w-24 skew-x-6 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full p-1 ml-76 mt-16 z-10">
            </div>
        </div>
    </div>

    <div class="flex ml-96 w-auto h-auto mt-36">
        <div class="flex flex-col ml-48">
            <div class="flex justify-center w-2/5 h-90 bg-cyan-400 mb-16 p-6 rounded-xl shadow-2xl">
                <p class="font-sans text-gray-100 text-xl w-auto h-auto">
                    <span class="font-bold text-white text-2xl">Why VR coaching or Metaverse coaching?</span><br/>
                    We believe that learning and coaching will become increasingly digitized. The most effective, interactive, and fun
                    learning environments will be hybrid, multi-user, and immersive learning environments. Where you can meet each other
                    from your own 'living room' in an XR space / the Metaverse while still having the feeling of being together. Moonshot:
                    By 2030 the best and most inspiring XR coaching experiences accessible on every corner of the world.
                </p>
            </div>
            <div class="flex flex-col w-5/12 h-56 bg-indigo-400 mb-16 ml-96 p-6 rounded-xl shadow-2xl">
                <p class="font-sans text-gray-100 text-xl w-auto h-auto">
                    Do you want to be part of teaching, coaching and even creating the best and most inspiring XR coaching and learning experiences?
                    Come on board and sail along into the future!<br/>
                </p>
                <a href="{{ route('sail_along') }}"
                    class="flex bg-yellow-500 rounded-full items-center justify-center w-32 ml-44 mt-4 mb-1 px-5 py-1 text-lg text-teal-800 hover:text-teal-900 hover:scale-105 transition duration-300 ease-in-out">
                    {{ __('Sail Along') }}
                </a>
            </div>

            <div class="w-2/6 h-76 bg-purple-400 p-6 rounded-xl shadow-2xl">
                <div class="flex flex-col">
                    <p class="-sans text-gray-100 text-lg w-auto h-auto">
                        <span class="font-bold text-white text-2xl">Find your VR Coach Here</span>
                    </p>
                    <div class="flex justify-center mt-4">
                        <a href="{{ route('vr_coaches') }}"
                            class="flex border-2 border-white rounded-md w-36 h-12 items-center justify-center text-white text-xl font-bold">
                            {{ __('VR Coaches') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="ml-96">
        <div class="flex justify-center w-2/6 h-76 bg-purple-400 ml-28 p-6 rounded-xl shadow-2xl">
            <div class="flex flex-col">
                <p class="-sans text-gray-100 text-lg w-auto h-auto">
                    <span class="font-bold text-white text-2xl">Find your VR Coach Here</span>
                </p>
                <div class="flex justify-center mt-4">
                    <a href="{{ route('vr_coaches') }}"
                        class="flex border-2 border-white rounded-md w-36 h-12 items-center justify-center text-white text-xl font-bold">
                        {{ __('VR Coaches') }}
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="flex justify-end">
        <div class="flex flex-row">
            <img src="{{ asset('images/greybc-vrheadset.jpg') }}" class="h-36 w-36 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full drop-shadow-2xl p-1 mt-56 z-0">
            <img src="{{ asset('images/whitebc-vrheadset.jpg') }}" class="h-80 w-80 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full drop-shadow-2xl p-1 mr-96 z-0">
        </div>
    </div>

@endsection
