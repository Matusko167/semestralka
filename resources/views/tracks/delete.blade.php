@extends('layouts.master')

@section('title', 'Riders')
@section('content')



    <div class="justify-center m-10 hidden md:flex text-blue-200 text-center">
        <table class="shadow-lg justify-center content-center">
            <tr class="content-center">
                <th class="bg-gray-500 ring-1 ring-black p-2">Názov</th>
            </tr>
            @foreach ($tracks as $track)
                <tr class="content-center">
                    <td class="bg-gray-400 ring-1 ring-black p-2">{{$track->nazov}}</td>
                    </td>
                        <td class="px-2">
                            <form action="{{ route('riders.destroy',$track->id) }}" method="POST">
                                @csrf

                                @method('DELETE')
                                <button onclick="return confirm('Si si istý/istá že to chceš vymazať?')" type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                    Delete
                                </button>
                            </form>
                </tr>
            @endforeach


        </table>
        <div class="">
            <button class="bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 border-b-4 border-gray-600 hover:border-gray-800 rounded">
                <a class="" href="{{ route('tracks.index') }}"> Späť</a>
            </button>
        </div>
    </div>





@stop

