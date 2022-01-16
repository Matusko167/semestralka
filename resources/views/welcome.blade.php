@extends('layouts.master')

@section('title', 'MainController')
@section('content')


    <div class="start">
        <h1 class="Hlogo1">
           <span class="Hlogo">Slovak MX federation</span>
        </h1>
    </div>

    <script src="{{ asset('js/animatedStart.js')}}"></script>

<div class="relative m-20 border-2 border-black">


    <h2 class="text-center  pt-7 font-bold text-3xl sm:text-6xl">{{ $blog->title }}</h2>
    <p class="text-center py-8 px-10 text-xl ">
        {{ $blog->text }}
    </p>
    <img src="{{ $blog->url }}" alt="Motorky" class="relative px-10 pb-10 inline-block max-w-full w-screen">

</div>

@stop


