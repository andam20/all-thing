@props(['tagsCsv'])
{{-- Csv=>comma seperated value --}}

@php

$tags=explode(',',$tagsCsv);

@endphp

<ul class="flex">
    
    @foreach($tags as $tag)
    <li style="background-color:   #5E5CBA"
        class=" text-white rounded-xl px-3 py-1 mr-2">
        
        <a href="/?tag={{$tag}}">{{$tag}}</a>

    </li>
    @endforeach

</ul>