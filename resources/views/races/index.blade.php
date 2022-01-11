@extends('layouts.master')

@section('title', 'Kalendar')
@section('content')



    <div class="justify-center m-10 md:flex text-blue-200 text-center  ">
        <div class=" shadow-lg justify-center content-center bg-gray-500" >
            <div class="">
                <h2 class="px-2 pb-5 text-5xl">Nadchadzajúce preteky</h2>
            </div>
            @if (Auth::check())
            <div class="py-3 px-5">
                <a class="bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded" href="{{ route('races.create') }}"> Vytvor nový članok</a>
            </div>
            @endif
        </div>
    </div>

    <div class="justify-center m-10 hidden md:flex text-center ">

        <table class="shadow-lg justify-center content-center">
            <tr class="content-center text-white">
                <th class="bg-gray-500 p-2 text-2xl">ID</th>
                <th class="bg-gray-500 p-2 text-2xl">Miesto</th>
                <th class="bg-gray-500 p-2 text-2xl">Datum</th>
                <th class="bg-gray-500 p-2 text-2xl">Trieda</th>
            </tr>
            @foreach ($races as $race)
                <tr class="content-center text-blue-300">
                    <td class="bg-gray-500 p-2 truncate">{{ $race->id }}</td>
                    <td class="bg-gray-500 p-2 truncate">{{ $race->miesto }}</td>
                    <td class="bg-gray-500 p-2 truncate">{{ $race->datum }}</td>
                    <td class="bg-gray-500 p-2 truncate">{{ $race->trieda }}</td>
                    <td>
                        <form class="text-white" action="{{ route('blogs.destroy',$race->id) }}" method="POST">
                            <a class="bg-gray-500 ring-1 ring-black p-2 hover:bg-gray-800" href="{{ route('blogs.show',$race->id) }}">Otvor</a>
                            @if (Auth::check())
                                <a class="bg-gray-500 ring-1 ring-black p-2 hover:bg-gray-800" href="{{ route('blogs.edit',$race->id) }}">Edituj</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-gray-500 ring-1 ring-black p-2 hover:bg-gray-800" onclick="return confirm('Si si istý/istá že to chceš vymazať?')">Vymaž</button>
                            @endif
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="md:hidden flex justify-center m-10 text-center ">
        <table class="shadow-lg justify-center content-center text-blue-300">
            <tr class="content-center text-white">
                <th class="bg-gray-500 p-2 text-2xl">ID</th>
                <th class="bg-gray-500 p-2 text-2xl">Miesto</th>
                <th class="bg-gray-500 p-2 text-2xl">Datum</th>
                <th class="bg-gray-500 p-2 text-2xl">Trieda</th>
            </tr>
            @foreach ($races as $race)
                <tr class="content-center text-white"> </tr><tr>
                    <td class="bg-gray-500 p-2 truncate">{{ $race->id }}</td>
                    <td class="bg-gray-500 p-2 truncate">{{ $race->miesto }}</td>
                    <td class="bg-gray-500 p-2 truncate">{{ $race->datum }}</td>
                    <td class="bg-gray-500 p-2 truncate">{{ $race->trieda }}</td>
                </tr><tr>
                    <td>
                        <form class="text-white" action="{{ route('blogs.destroy',$race->id) }}" method="POST">
                            <a class="bg-gray-500 ring-1 ring-black p-2 hover:bg-gray-800" href="{{ route('blogs.show',$race->id) }}">Otvor</a>
                            @if (Auth::check())
                                <a class="bg-gray-500 ring-1 ring-black p-2 hover:bg-gray-800" href="{{ route('blogs.edit',$race->id) }}">Edituj</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-gray-500 ring-1 ring-black p-2 hover:bg-gray-800" onclick="return confirm('Si si istý/istá že to chceš vymazať?')">Vymaž</button>
                            @endif
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>







@stop
