@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
        <li class="bg-red-300 error"> {{$error }} </li>
    @endforeach
</ul>
@endif