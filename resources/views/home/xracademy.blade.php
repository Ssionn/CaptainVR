@extends('layouts.app')

@section('title', 'XR Academy')

@section('content')

    <div class="container mx-auto flex justify-center mt-10">
        <div class="grid grid-cols-4 gap-8">
            @foreach($academics as $academic)
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <div class="bg-white rounded overflow-hidden shadow-lg w-[320px] transition ease-in-out hover:scale-110">
                        <img src="{{ $academic->image }}" alt="Image" class="w-full">
                        <div class="px-6 py-4 flex justify-center">
                                <a href="{{ route('xr_academy.show', Str::slug($academic->title)) }}" class="text-gray-900 font-bold text-md mb-2 pt-2 underline">{{ $academic->title }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
