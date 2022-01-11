@extends('layouts.master')

@section('title', 'Trate')
@section('content')


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($tracks as $track)
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="{{$track->miesto}}" class="absolute inset-0 w-full h-full object-cover object-center" src="{{$track->fotoURL}}">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white bg-opacity-60 opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">{{$track->nazov}}</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Miesto: {{$track->miesto}}</h1>
                            <p class="leading-relaxed">Popis: {{$track->info}} </p>
                            >
                        </div>
                    </div>
                </div>
                   @endforeach
            </div>
        </div>
    </section>



@stop




