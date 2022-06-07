@extends('layouts.app')

@section('title','Novo usuario')

@section('content')
<h1> Novo Usuário</h1>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    
        <li class="error"> {{$error }} </li>
    

    @endforeach
</ul>
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nome:" value=" {{ old('name') }}">
    <input type="text" name="email" id="email" placeholder="E-mail:" value=" {{ old('email') }}">
    <input type="text" name="password" id="password" placeholder="password:" >
    <button type="submit">
        Enviar
    </button>
</form>

@endsection