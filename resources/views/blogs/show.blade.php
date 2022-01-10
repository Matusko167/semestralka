@extends('layouts.master')

@section('title', 'Blogs')
@section('content')


    <div class="">
        <div class="justify-center m-10 md:flex text-blue-200 text-center sm:grid-flow-row">
            <div class="bg-gray-500 ring-1 ring-black p-2">
                <div class="md:text-6xl text-4xl">
                    <h2>{{ $blog->title }}</h2>
                </div>
                <div>
                    <p>{{ $blog->text }}</p>
                </div>
                <div class="pull-right">
                    <button class="bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 border-b-4 border-gray-600 hover:border-gray-800 rounded">
                        <a class="" href="{{ route('blogs.index') }}"> Späť</a>
                    </button>
                </div>
            </div>
        </div>


@stop
