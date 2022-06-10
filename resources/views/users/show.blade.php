@extends('layouts.app')

@section('title', 'Listagem do usuario')
@section('content')
<a href="{{ url()->previous() }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm w-full sm:w-auto px-3 py-1.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> Voltar</a>
<h1 class="text-2xl font-semibold leading-tigh py-2">
    Listagem do Usuario  {{$user->name}}</h1>


    
    <div class="mb-6 flex flex-row font-sans shadow-md">
    <div class="basis-1/2">NOME: {{ $user->name}} </div>
    <div class="basis-1/2">E-MAIL: {{ $user->email}} </div>
    <div class="basis-1/2">
    <form action=" {{ route('users.destroy', $user->id)}}" method="POST">
        @method('DELETE')
        @csrf
    <button class="bg-red-700 rounded text-white px-3 py-1.5"> Delete</button>
    </form>
    </div>
</div>
@endsection