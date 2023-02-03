@extends('layouts.app')

@section('title', 'Metaverse Coaches')

@section('content')

    {{-- Hero is hier nodig   --}}

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
                            <a href="{{ route('metaverse_coaches.show', Str::slug($coach->name)) }}"
                               class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-2 rounded">Bekijk
                                profiel</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
