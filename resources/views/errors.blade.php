@if ($errors->{ $bag ?? 'default' }->any())
<ul class="field mr-6 list-reset" >
    @foreach ($errors->{ $bag ?? 'default' }->all() as $error) 
    <li class="text-sm text-red-600"> {{$error}} </li>
    
    @endforeach
</ul>

@endif