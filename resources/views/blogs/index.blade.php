@extends('layouts.master')

@section('title', 'Blogs')
@section('content')

<div class="justify-center m-10 md:flex text-blue-200 text-center  ">
    <div class=" shadow-lg justify-center content-center bg-gray-500" >
            <div class="">
                <h2 class="px-2 pb-5 text-5xl">Články o motocrosse</h2>
            </div>
            <div class="py-3 px-5">
                <a class="bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded" href="{{ route('blogs.create') }}"> Vytvor nový članok</a>
            </div>
    </div>
</div>

    <div class="justify-center m-10 hidden md:flex text-center ">

        <table class="shadow-lg justify-center content-center text-blue-300">
            <tr class="content-center">
                <th class="bg-gray-500 p-2 text-2xl text-gray">Nazov článku</th>
                <th class="bg-gray-500 p-2 text-2xl">Popis</th>
        </tr>
        @foreach ($blogs as $blog)
            <tr class="content-center text-white">
                <td class="bg-gray-500 p-2 truncate">{{ $blog->title }}</td>
                <td class="bg-gray-500 p-2 truncate">{{ $blog->popis }}</td>
                <td>
                    <form class="text-white" action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                        <a class="bg-gray-500 ring-1 ring-black p-2 hover:bg-gray-800" href="{{ route('blogs.show',$blog->id) }}">Otvor</a>
                        @if (Auth::check())
                        <a class="bg-gray-500 ring-1 ring-black p-2 hover:bg-gray-800" href="{{ route('blogs.edit',$blog->id) }}">Edituj</a>
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
            <tr class="content-center">
                <th class="bg-gray-500 p-2 text-2xl text-gray">Nazov článku</th>
            </tr>
            @foreach ($blogs as $blog)
                <tr class="content-center text-white"> </tr><tr>
                    <td class="bg-gray-500 p-2 truncate">{{ $blog->title }}</td>
                </tr><tr>
                    <td>
                        <form class="text-white" action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                            <a class="bg-gray-500 ring-1 ring-black p-2 hover:bg-gray-800" href="{{ route('blogs.show',$blog->id) }}">Otvor</a>
                            @if (Auth::check())
                                <a class="bg-gray-500 ring-1 ring-black p-2 hover:bg-gray-800" href="{{ route('blogs.edit',$blog->id) }}">Edituj</a>
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
