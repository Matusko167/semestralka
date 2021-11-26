@extends('layouts.master')

@section('title', 'Riders')
@section('content')

    @foreach ($riders as $rider)
    <div class="justify-center m-10 hidden md:flex text-blue-200 text-center">
        <table class="shadow-lg justify-center content-center ">
            <tr class="content-center">
                <th class="bg-gray-500 ring-1 ring-black p-2">Číslo</th>
                <th class="bg-gray-500 ring-1 ring-black p-2" >Meno</th>
                <th class="bg-gray-500 ring-1 ring-black p-2">Priezvisko</th>
                <th class="bg-gray-500 ring-1 ring-black p-2">Team</th>
                <th class="bg-gray-500 ring-1 ring-black p-2">Motorka</th>
                <th class="bg-gray-500 ring-1 ring-black p-2">Body</th>
                <th class="bg-gray-500 ring-1 ring-black p-2"></th>
            </tr>
            <tr class="content-center">
                <td class="bg-gray-400 ring-1 ring-black p-2">{{$rider->cislo}}</td>
                <td class="bg-gray-400  ring-1 ring-black p-2">{{$rider->meno}}</td>
                <td class="bg-gray-400  ring-1 ring-black p-2">{{$rider->priezvisko}}</td>
                <td class="bg-gray-400  ring-1 ring-black p-2">{{$rider->team}}</td>
                <td class="bg-gray-400  ring-1 ring-black p-2">{{$rider->motorka}}</td>
                <td class="bg-gray-400  ring-1 ring-black p-2">{{$rider->body}}</td>
                <td class="p-2"><button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Detail
                    </button>
                </td>
            </tr>

        </table>
    </div>
    @endforeach
    <div class="justify-center m-5 flex md:hidden text-blue-200">
        <table class="shadow-lg justify-center content-center">
            <tr class="content-center">
                <th class="bg-gray-500 ring-1 ring-black p-2">Číslo</th>
                <th class="bg-gray-500 ring-1 ring-black p-2" >Priezvisko</th>
                <th class="bg-gray-500 ring-1 ring-black p-2">Body</th>

            </tr>
            <tr class="content-center">
                <td class="bg-gray-400 ring-1 ring-black p-2">{{$rider->cislo}}</td>
                <td class="bg-gray-400 ring-1 ring-black p-2">{{$rider->priezvisko}}</td>
                <td class="bg-gray-400 ring-1 ring-black p-2">{{$rider->body}}</td>

            </tr>
            <tr class="content-center ">
                <td class="p-2 w-full"><button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Detail
                    </button></td>
                <td class="bg-gray-400 ring-1 ring-black p-2"></td>
                <td class="bg-gray-400 ring-1 ring-black p-2"></td>

            </tr>

        </table>
    </div>

@stop

