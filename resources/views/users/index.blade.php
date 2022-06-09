@extends('layouts.app')

@section('title', 'Listagem dos usuarios')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">
    Listagem de Usuarios
    <a href="{{ route('users.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-3 py-1.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> + </a>
</h1>

<form action="{{ route('users.index') }}" method="get">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>
<table class="min-w-full text-left leading-normal shadow-md rounded">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
            <th scope="col" class="px-6 py-3">Nome</th>
            <th scope="col" class="px-6 py-3">E-mail</th>
            <th scope="col" class="px-6 py-3">Editar</th>
            <th scope="col" class="px-6 py-3">Detalhes</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($users as $user)
        <tr class="bg-white border-b px-6 py-4">
            <td class="px-6 py-4">
                 {{ $user->name}} 
            </td>
            <td class="px-6 py-4">
                 {{ $user->email}} 
            </td>
            <td class="px-6 py-4">
                 <a class="bg-yellow-700 rounded text-white px-3 py-1.5" href="{{ route('users.edit', $user->id)}}">Editar </a> 
            </td>
            <td class="px-6 py-4">
                <a class="bg-red-700 rounded text-white px-3 py-1.5" href="{{ route('users.show', $user->id)}}">Detalhes </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>



@endsection