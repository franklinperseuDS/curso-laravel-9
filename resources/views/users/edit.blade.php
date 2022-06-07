@extends('layouts.app')

@section('title', "Editar o Usuário {{ $user->name }}")

@section('content')
<h1> Editar o Usuário {{ $user->name }}</h1>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    
        <li class="error"> {{$error }} </li>
    

    @endforeach
</ul>
@endif

<form action="{{ route('users.update' , $user->id) }}" method="post">
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    @method('PUT')
    @csrf
    <input type="text" name="name" id="name" placeholder="Nome:" value=" {{ $user->name }}">
    <input type="text" name="email" id="email" placeholder="E-mail:" value=" {{ $user->email }}">
    <input type="text" name="password" id="password" placeholder="password:" >
    <button type="submit">
        Enviar
    </button>
</form>

@endsection