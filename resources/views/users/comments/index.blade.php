@extends('layouts.app')

@section('title', "Comentários do usuário {$user->name}")

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">
    Listagem de Usuarios {{$user->name}}
    <a href="{{ route('comments.create', $user->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-3 py-1.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> + </a>
</h1>

<form action="{{ route('comments.index', $user->id) }}" method="get">
    <input class="bg-gray-700 rounded text-white px-3 py-1.5" type="text" name="search" placeholder="Pesquisar">
    <button class="bg-purple-700 rounded text-white px-3 py-1.5" >Pesquisar</button>
</form>
<table class="min-w-full text-left leading-normal shadow-md rounded">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
            <th scope="col" class="px-6 py-3">Conteúdo</th>
            <th scope="col" class="px-6 py-3">Visivél</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($comments as $comment)
        <tr class="bg-white border-b px-6 py-4">
            <td class="px-6 py-4">
                 {{ $comment->body}} 
            </td>
            <td class="px-6 py-4">
                 {{ $comment->visible ? "SIM" : "NÃO"}} 
            </td>
            <td class="px-6 py-4">
                 <a class="bg-blue-200 rounded text-white px-3 py-1.5" href="{{ route('comments.edit', ['user' =>$user->id , 'id' => $comment->id])}}">Editar </a> 
            </td>
            <td class="px-6 py-4">
                <a class="bg-red-400 rounded text-white px-3 py-1.5" href="{{ route('users.show', $user->id)}}">DELETE </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>



@endsection