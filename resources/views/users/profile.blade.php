<x-layout>

<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
    <h1 class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">Show Your Profile</h1>
<x-card class="p-10">
     
<div style="margin-bottom: 12px;border-radius: 50px;height: 200px;width: 200px;clip-path: circle()">
    <img
    class="hidden w-48 mr-6 md:block"
    src="doctorimage/{{auth()->user()->logo}}"
    alt="" />

    <img src="{{ asset(auth()->user()->logo) }}" class="img img-responsive" />

</div>
    <div align="end" class="flex flex-col items-center justify-center text-center">
         
      
        <h1 style="display: inline" class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">
            Your Name: <span style="display: inline;color:#5E5CBA">{{auth()->user()->name}}</span> 
        </h1>

        <h1 style="display: inline" class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">
            Your bio: <span style="display: inline;color:#5E5CBA">{{auth()->user()->bio}}</span> 
        </h1>
        
        <h1 style="display: inline" class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">
            Your Birthdate: <span style="display: inline;color:#5E5CBA">{{auth()->user()->birthday}}</span> 
        </h1>

        <h1 style="display: inline" class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">
            Your livePlace: <span style="display: inline;color:#5E5CBA">{{auth()->user()->liveplace}}</span> 
        </h1>
        
        <h1 style="display: inline" class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">
            Your gender: <span style="display: inline;color:#5E5CBA">{{auth()->user()->gender}}</span> 
        </h1>

        <h1 style="display: inline" class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">
            Your email: <span style="display: inline;color:#5E5CBA">{{auth()->user()->email}}</span> 
        </h1>
        
        <h1 style="display: inline" class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">
            Your blockNumber: <span style="display: inline;color:#5E5CBA">{{auth()->user()->block}}</span> 
        </h1>

        <h1 style="display: inline" class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">
            Your roomNumber: <span style="display: inline;color:#5E5CBA">{{auth()->user()->room}}</span> 
        </h1>

        <h1 style="display: inline" class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">
            Your PhoneNumber: <span style="display: inline;color:#5E5CBA">{{auth()->user()->phone}}</span> 
        </h1>
        <h1 style="display: inline" class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center">
            Your department: <span style="display: inline;color:#5E5CBA">{{auth()->user()->dept}}</span> 
        </h1>

    
      
    </div>
  
    <a style="background-color: #5E5CBA;color: white"  href="/listings/{{auth()->user()->id}}/editUser" class="
        flex w-full flex-col items-center justify-center text-center col-sm
        text-blue-400 px-6 py-2 rounded-xl">
        <i class="fa-solid fa-pen-to-square"></i>
    
    <button >Edit</button></a>
</div>











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
                class="px-4 py-8 border-t uppercase border-b border-gray-300 text-lg"
            >
               TITLE: <a style="color: #5E5CBA" href="/listings/{{$listing->id}}">
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
            >also create another Post </a
        >
       </footer>  
@endforeach
@else
<tr class="border-gray-300">
<td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
<div  class="d-flex d-flex align-self-center align-items-center align-items-center">
<img class=" w-30 h-20 align-items-center" src="{{asset('images/empty.png')}}" alt=""/>
<h1 class="align-items-center" style="font-weight: bold">sorry<h1 style="color: #5E5CBA"> {{auth()->user()->name}}</h1> do a post and then you can see and edit it </h1>
</div>
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
</td>
</tr>

@endunless
     
    </tbody>
</table>




</x-card>
 
</x-layout>