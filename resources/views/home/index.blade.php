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


@endsection
