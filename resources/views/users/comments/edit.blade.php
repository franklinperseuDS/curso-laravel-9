@extends('layouts.app')

@section('title', "Editar o Comentário do usuário {{ $user->name }}")

@section('content')
<a href="{{ url()->previous() }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm w-full sm:w-auto px-3 py-1.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> Voltar</a>
<h1> Editar o Comentário do usuário  {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('comments.update' ,$comment->id) }}" method="post">
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    @method('PUT')
   @include('users.comments._partials.form')
</form>

@endsection