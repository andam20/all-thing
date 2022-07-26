<x-layout>

    <x-card>
        <header>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Edit Your Posts Here 
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($listings->isEmpty())
                @foreach($listings as $listing)
                <tr class="border-gray-300">
                    <td style="font-weight: bold"
                        class="px-4 py-8 border-t uppercase border-b border-gray-300 text-lg">
                        <a href="/listings/{{$listing->id}}">
                         {{$listing->title}}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a
                            href="/listings/{{$listing->id}}/edit"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                            ><i
                                class="fa-solid fa-pen-to-square"
                            ></i>
                            Edit</a
                        >
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    
                    <form action="/listings/{{$listing->id}}/delete" method="POST">

                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">
                            <i class="fa-solid fa-trash"></i>delete
                        </button>
                    
                    </form>
                   
                    </td>
                </tr>
                <footer
                class="fixed bottom-0  w-full bg-white   h-20  opacity-100 "
               >
               
                <a
                    href="/listings/create"
                    style="background-color:  #5E5CBA;font-weight: bol"
                    class="rounded absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                    >Create another Post </a
                >
               </footer>
@endforeach
@else
<tr class="border-gray-300">
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
<div  class="d-flex d-flex align-self-center align-items-center align-items-center">
    <img class=" w-30 h-20 align-items-center" src="{{asset('images/empty.png')}}" alt=""/>
    <h1 class="align-items-center" style="font-weight: bold">sorry<h1 style="color: #5E5CBA"> {{auth()->user()->name}}</h1> do a post and then you can edit it </h1>
</div>
    </td>
</tr>
<footer
class="fixed bottom-0  w-full bg-white   h-20  opacity-100 "
>

<a
    href="/listings/create"
    style="background-color:  #5E5CBA;font-weight: bol"
    class="rounded absolute top-1/3 right-10 bg-black text-white py-2 px-5"
    >Create a Post</a
>
</footer>  
@endunless
             
            </tbody>
        </table>
    </x-card>
 
  
</x-layout>