@extends('layouts.app')

@section('title', 'VR Coaches')

@section('content')

    <div class="container mx-auto py-12">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 p-3">
                <img class="rounded-lg drop-shadow-2xl -skew-y-2" src="{{ $coach->image }}" alt="User Image">
            </div>
            <div class="w-full md:w-1/2 p-7 mt-4 shadow-2xl bg-gray-100">
                <h1 class="text-4xl font-bold text-violet-800">{{ $coach->name }}</h1>
                <p class="text-indigo-400 text-2xl font-semibold">{{ $coach->profession }}</p>
                <p class="text-teal-600 text-xl">{{ $coach->email }}</p>
                <p class="text-teal-700 text-sm">{{ $coach->phone }}</p>
                <p class="text-gray-700 text-xl mt-16 mb-10">{{ $coach->bio }}</p>
                <div class="flex justify-end">
                    <a href="" class="block w-full md:w-auto text-white bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800" type="button">
                        Contact Coach
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
