@extends('layouts.master')

@section('title', 'Blogs')
@section('content')

    <div class="">
        <div class="justify-center m-10 md:flex text-blue-200 text-center sm:grid-flow-row">
            <div class="bg-gray-500 ring-1 ring-black p-2">
                <div class="md:text-6xl sm:text-2xl">
                    <h2>Prídavanie článku</h2>
                </div>
                <div class="pull-right">
                    <button class="bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 border-b-4 border-gray-600 hover:border-gray-800 rounded">
                        <a class="" href="{{ route('blogs.index') }}"> Späť</a>
                    </button>
                </div>
            </div>
        </div>



        @if ($errors->any())
            <div class="justify-center m-10 hidden md:flex text-blue-200 text-center">
                <div class="bg-gray-500 ring-1 ring-black p-2">
                    <strong>Pozor</strong> Nezadal si všetko<br><br>
                </div>
                <ul class="bg-gray-500 ring-1 ring-black p-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form id="form" name="formA" class="justify-center m-10 md:flex text-blue-200 text-center" >
            @csrf
            <div class="shadow-lg justify-center content-center">
                <div class="form p-4 bg-gray-500 ring-1 ring-black p-2">
                    <div class="">
                        <strong>Názov:</strong>
                        <input id="title" type="text" name="title" class="text-black" placeholder="Názov">
                    </div>
                    <small class="invisible absolute">Error</small>
                </div>
                <div class="form p-4 bg-gray-500 ring-1 ring-black p-2">
                    <div class="">
                        <strong>Popis:</strong>
                        <input id="popis" type="text" name="popis" class="text-black" placeholder="Popis">
                    </div>
                    <small class="invisible absolute">Error</small>
                </div>
                <div class="form p-4 bg-gray-500 ring-1 ring-black p-2">
                    <div class="">
                        <strong>Text:</strong>
                        <textarea class="text-black" name="text" id="form" cols="30" rows="10" placeholder="Text"></textarea>
                    </div>
                    <small class="invisible absolute">Error</small>
                </div>


                <div class=" bg-gray-500 ring-1 ring-black p-2">
                    <button id="btn" class="bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 border-b-4 border-gray-600 hover:border-gray-800 rounded">Odošli</button>
                </div>
            </div>
        </form>

    </div>

    <script>
        const info = "create";
    </script>

    <script src="{{ asset('js/validationBlogs.js')}}"></script>
@stop
