@extends('layouts.master')

@section('title', 'Blogs')
@section('content')


    <div class="justify-center content-center">
        <div class="justify-center m-10 md:flex text-blue-200 text-center sm:grid-flow-row">
            <div class="bg-gray-500 ring-1 ring-black p-2">
                <div class="md:text-6xl text-4xl">
                    <h2>{{ $race->miesto }}</h2>
                    <p>{{ $race->datum }}</p>
                    <p >{{ $race->trieda }}</p>
                </div>
                @if (Auth::check())
                    <form action="{{ route('races.destroy',$race->id) }}" method="POST">
                        @csrf

                        @method('DELETE')
                        <button onclick="return confirm('Si si istý/istá že to chceš vymazať?')" type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                            Delete
                        </button>
                    </form>
                @endif
                <div class=" justify-center content-center p-3">

                    <h1 class="p-4 text-5xl" >Prihlásený jazdci</h1>

                    <table class="shadow-lg">
                        <tr class="content-center">
                            <th class="bg-gray-500 ring-1 ring-black p-2">Číslo</th>
                            <th class="bg-gray-500 ring-1 ring-black p-2" >Priezvisko</th>
                            <th class="bg-gray-500 ring-1 ring-black p-2">Body</th>

                        </tr>
                        @foreach ($riders as $rider)
                            <tr class="content-center">
                                <td class="bg-gray-400 ring-1 ring-black p-2">{{$rider->cislo}}</td>
                                <td class="bg-gray-400 ring-1 ring-black p-2">{{$rider->meno}}</td>
                                <td class="bg-gray-400 ring-1 ring-black p-2">{{$rider->priezvisko}}</td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
            <button class="bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 border-b-4 border-gray-600 hover:border-gray-800 rounded">
                <a class="" href="{{ route('races.index') }}"> Späť</a>
            </button>
        </div>


@stop
