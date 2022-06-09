@extends('layouts.app')

@section('title', 'Listagem do usuario')
@section('content')
<a href="{{ url()->previous() }}" class="bg-blue-700 rounded text-white font-sans px-3 py-1.5"> Voltar</a>
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