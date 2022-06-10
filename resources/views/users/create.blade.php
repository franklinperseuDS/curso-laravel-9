@extends('layouts.app')

@section('title','Novo usuario')

@section('content')
<a href="{{ url()->previous() }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm w-full sm:w-auto px-3 py-1.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> Voltar</a>
<h1> Novo Usuário</h1>

@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="post" enctype="multpart/form-data">
    @include('users._partials.form')
</form>

@endsection