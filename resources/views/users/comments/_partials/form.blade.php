<div class="shadow-md">
@csrf
<div> 
<label class="block mb-2 text-sm font-medium " for='name'> Nome: </label>
    <textarea
    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 
    focus:text-gray-700 focus:bg-white focus:border-gray-100"
    name="body" id="body" cols="30" rows="10"> {{$comment->body ?? old('body')}} </textarea>
</div>
<div>
    <label  class="block mb-2 text-sm font-medium " for='visible'> 
        <input type="checkbox" name="visible" 
            @if(isset($comment) && $comment->visible)
                checked="checked"
            @endif
            >
        Visível ?
    </label>
    
    
</div>
<div>
</div>
<button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
    Enviar
</button>
</div>