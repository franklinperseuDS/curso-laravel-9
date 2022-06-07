@extends('layouts.app')

@section('title', 'Listagem dos usuarios')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">
    Listagem de Usuarios
    <a href="{{ route('users.create')}}" class="bg-blue-900 rounded-full"> (+) </a>
</h1>

<form action="{{ route('users.index') }}" method="get">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>
<table class="min-w-full leading-normal shadow-md rounded">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Editar</th>
            <th>Detalhes</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
    <tr>
        <td>
    {{ $user->name}} 
        </td>
        <td>
    {{ $user->email}} 
        </td>
        <td>
    <a href="{{ route('users.edit', $user->id)}}">Editar </a> 
        </td>
        <td>
    <a href="{{ route('users.show', $user->id)}}">Detalhes </a>
        </td>
    </tr>
    
@endforeach
    </tbody>
</table>



@endsection