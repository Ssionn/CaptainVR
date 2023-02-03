@extends('layouts.app')

@section('title', 'VR Coaches')

@section('content')

    {{-- Hero is hier nodig   --}}
    <div class="flex flex-row">
        <div class="w-full z-0 h-72 bg-gradient-to-r from-cyan-400 to-indigo-500 absolute">
            <div class="flex justify-end mr-56">
                <div class="flex-col mt-8 -skew-x-6">
                    <h1 class="font-bold text-3xl text-white">Welcome to the VR-Coaches<br />platform</h1>
                    <p class="text-m text-gray-300 w-80">The VR Coaches platform is a platform where VR/ XR/Metaverse coaches, trainers, therapists, and consultants come together and join forces to create a better real world for everyone.</p>
    <div class="flex flex-row mb-44">
        <div class="w-full z-0 h-72 bg-gradient-to-r from-cyan-400 to-indigo-500 absolute">
            <div class="flex justify-end mr-56">
                <div class="flex-col mt-8 -skew-x-6">
                    <h1 class="font-bold text-3xl text-white">Virtual coaches, real results: <br/>Your success, our mission.</h1>
                    <p class="text-m text-gray-300 w-80">Our experts use VR technology, they're ready and dedicated to help individuals achieve their goals. Our goal is to support and guide individuals to reach their desired outcomes.</p>
                </div>
            </div>
        </div>
        <div class=" w-1/2 z-10 -skew-x-6 h-72 bg-gradient-to-r from-cyan-400 to-indigo-500 relative">
            <div class="flex flex-row">
                <img src="{{ asset('images/pinkgradient-vrheadset.jpg') }}" class="h-56 w-56 skew-x-6 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full p-1 ml-56 mt-36 z-0">
                <img src="{{ asset('images/purplegradient-vrheadset.jpg') }}" class="h-24 w-24 skew-x-6 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full p-1 ml-76 mt-16 z-10">
            <div class="flex flex-row z-0 absolute">
                <img src="{{ asset('images/dana.jpg') }}" class="h-56 w-56 skew-x-6 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full p-1 ml-56 mt-36 z-0" alt="dana">
                <img src="{{ asset('images/jose.jpg') }}" class="h-28 w-28 skew-x-6 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full p-1 ml-76 mt-16 z-10" alt="jose">
            </div>
            <div class="flex flex-row z-10 relative">
                <img src="{{ asset('images/sophie.jpg') }}" class="h-36 w-36 skew-x-6 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full p-1 z-20 ml-16 mt-5" alt="sophie">
                <div class="ml-96">
                    <img src="{{ asset('images/nick.jpg') }}" class="h-40 w-40 skew-x-6 bg-gradient-to-r from-purple-500 to-cyan-300 rounded-full p-1 z-30 ml-20 mt-44" alt="nick">
                </div>
            </div>
        </div>
    </div>

    {{--Einde hero--}}

    <div class="w-full max-w-screen-xl mx-auto mt-20">
        <div class="grid grid-cols-4 gap-6">
            @foreach($coaches as $coach)
                <div class="col-span-1">
                    <div class="max-w-[320px] m-4 mx-auto border border-gray-400 shadow-xl rounded-lg overflow-hidden">
                        <img class="w-36 h-36 rounded-full object-cover flex justify-center mx-auto mt-2"
                             src="{{ $coach['image'] }}" alt="Your Image">
                        <div class="px-6 py-4 text-center">
                            <div class="font-bold text-xl mb-2">{{ $coach->name }}</div>
                            <p class="text-gray-700 text-base mt-1">{{ $coach->profession }}</p>
                        </div>
                        <div class="px-6 py-4 text-center">
                    <span
                        class="inline-block bg-gray-200 rounded-sm px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                        <i class='fa fa-map-marker'></i>
                        {{ $coach->location }}
                    </span>
                        </div>
                        <div class="px-6 py-4 text-center mb-3">
                            <a href="{{ route('vr_coaches.show', Str::slug($coach->name)) }}"
                               class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-2 rounded">Bekijk
                                profiel</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
