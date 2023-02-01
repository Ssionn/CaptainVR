@extends('layouts.app')

@section('title', 'Metaverse Coaches')

@section('content')

    <div class="container mx-auto py-12">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 p-3">
                <img class="rounded-lg drop-shadow-2xl -skew-y-2" src="{{ $coach->image }}" alt="User Image">
            </div>
            <div class="w-full md:w-1/2 p-7 mt-4 shadow-2xl bg-gray-100">
                <h2 class="text-4xl font-bold text-violet-800">{{ $coach->name }}</h2>
                <p class="text-indigo-400 text-2xl font-semibold">{{ $coach->profession }}</p>
                <p class="text-teal-600 text-xl">{{ $coach->email }}</p>
                <p class="text-gray-700 text-xl mt-16">{{ $coach->bio }}</p>
            </div>
        </div>
    </div>

@endsection
