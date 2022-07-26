<x-layout>
@include('partials._search')

    <div  class="lg:grid gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($listings) == 0)
            
@foreach ($listings as $listing)    

<x-listing-card style=""  :listing="$listing"/>
<a href="/get">get it </a>
@endforeach
@else
<a href="/get">get it </a>

<h1   class="text-2xl rounded w-100 font-bold mb-4 flex flex-col items-center justify-center text-center"
     style="background-color: grey;font-weight: bold;width: 100%;height: 300%">
         <img class=" w-50 h-20 " src="{{asset('images/empty.png')}}" alt="{{asset('images/empty.png')}}" />
        <a
        href="/listings/create"
        style="background-color:  #5E5CBA;font-weight: bold;margin-top: 12%"
        class="rounded absolute top-1/7  bg-black text-white py-2 px-5"
        >Create a New  Post</a>
        THERE IS NO POSTS HERE
        

    </h1>

@endunless
    </div>

    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
    
     
 <footer
 class="fixed bottom-0  w-full bg-white   h-20  opacity-100 ">

 <a
     href="/listings/create"
     style="background-color:  #5E5CBA;font-weight: bol"
     class="rounded absolute top-1/3 right-10 bg-black text-white py-2 px-5"
     >Create a Post</a>
     
</footer>  
</x-layout>