{{-- <x-layout>

    <x-card class=" p-10  max-w-lg mx-auto mt-24"
    >
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit Your Cost
        </h2>
        <p class="mb-4">You Can Edit your costs here  </p>
    </header>
    
    <form action="/costs/{{$costing->id}}/update"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <div class="mb-6">
            <label
                for="item_name"
                class="inline-block text-lg mb-2"
                >item name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_name"
                value="{{old('item_name')}}"
                placeholder="Example: Tamata , Milk ...."
            />
            @error('item_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="price" class="inline-block text-lg mb-2"
                >Price</label
            >
            <input
                type="number"
                class="border border-gray-200 rounded p-2 w-full"
                name="price"
                
                value="{{old('price')}}"
                placeholder="Choose a price for your item"
            />
            @error('price')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
        </div>
       
        <div class="mb-6">
            <label for="desc" class="inline-block text-lg mb-2">
                Description
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="desc"
                value="{{old('desc')}}"
                placeholder="Example:funding, software, Koya"
            />
            @error('desc')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
        </div>
    
        <div class="mb-6">
            <button
            style="background-color:  #5E5CBA;opacity: 1;"
                class=" text-white rounded py-2 px-4" >
                update Your Expense
            </button>
    
            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
    
    </x-layout> --}}