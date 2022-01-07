@extends('layouts.master')

@section('content')


<script src="{{ asset('js/validation.js')}}"></script>
    <div class="">
        <div class="justify-center m-10 md:flex text-blue-200 text-center sm:grid-flow-row">
            <div class="bg-gray-500 ring-1 ring-black p-2">
                <div class="md:text-6xl sm:text-2xl">
                    <h2>Editovanie jazdca</h2>
                </div>
                <div class="pull-right">
                    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        <a class="" href="{{ route('riders.index') }}"> Späť</a>
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

    <form class="justify-center m-10 md:flex text-blue-200 text-center" action="{{ route('riders.update',$rider->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="shadow-lg justify-center content-center">
            <div class="">
                <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                    <strong>Name:</strong>
                    <input type="number" name="cislo" value="{{ $rider->cislo }}" class="text-black" placeholder="Číslo" required>
                </div>
            </div>
            <div class="">
                <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                    <strong>Name:</strong>
                    <input type="text" name="meno" value="{{ $rider->meno }}" class="text-black" placeholder="Meno" required>
                </div>
            </div>
            <div class="">
                <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                    <strong>Name:</strong>
                    <input type="text" name="priezvisko" value="{{ $rider->priezvisko }}" class="text-black" placeholder="Priezvisko" required>
                </div>
            </div>
            <div class="">
                <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                    <strong>Name:</strong>
                    <input type="text" name="team" value="{{ $rider->team }}" class="text-black" placeholder="Team" required>
                </div>
            </div>
            <div class="">
                <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                    <strong>Name:</strong>
                    <input type="text" name="motorka" value="{{ $rider->motorka }}" class="text-black" placeholder="Motorka" required>
                </div>
            </div>

            <div class=" bg-gray-500 ring-1 ring-black p-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Submit</button>
            </div>
        </div>
    </form>
    </div>
    </form>


@endsection
