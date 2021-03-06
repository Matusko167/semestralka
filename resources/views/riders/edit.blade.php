@extends('layouts.master')

@section('content')


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

    <form id="form" class="justify-center m-10 md:flex text-blue-200 text-center" >
        @csrf
        @method('PUT')
        <div class="shadow-lg justify-center content-center">
            <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                <div class="">
                    <strong>Name:</strong>
                    <input id="cislo" type="number" name="cislo" value="{{ $rider->cislo }}" class="text-black" placeholder="Číslo">
                </div>
                <small class="invisible absolute">Error</small>
            </div>
            <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                <div class="">
                    <strong>Name:</strong>
                    <input id="meno" type="text" name="meno" value="{{ $rider->meno }}" class="text-black" placeholder="Meno">
                </div>
                <small class="invisible absolute">Error</small>
            </div>
            <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                <div class="">
                    <strong>Name:</strong>
                    <input id="priezvisko" type="text" name="priezvisko" value="{{ $rider->priezvisko }}" class="text-black" placeholder="Priezvisko" >
                </div>
                <small class="invisible absolute">Error</small>
            </div>
            <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                <div class="">
                    <strong>Name:</strong>
                    <input id="team" type="text" name="team" value="{{ $rider->team }}" class="text-black" placeholder="Team" >
                </div>
                <small class="invisible absolute">Error</small>
            </div>
            <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                <div class="">
                    <strong>Name:</strong>
                    <input id="motorka" type="text" name="motorka" value="{{ $rider->motorka }}" class="text-black" placeholder="Motorka" >
                </div>
                <small class="invisible absolute">Error</small>
            </div>

            <div class=" bg-gray-500 ring-1 ring-black p-2">
                <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Submit</button>
            </div>
        </div>
    </form>
    </div>
    </form>

<script>
    const riderID = {{ $rider->id }};
    const info = "edit";
</script>

<script src="{{ asset('js/validation.js')}}"></script>

@endsection
