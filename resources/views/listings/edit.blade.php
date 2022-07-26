<x-layout>

    <x-card class=" p-10  max-w-lg mx-auto mt-24"
    >
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit   <p style="display: inline;color: #5E5CBA;" class="mb-4">{{$listing->title}}</p>
        </h2>
      
    </header>
    
    <form action="/listings/{{$listing->id}}/update"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      
    
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2"
                >Post Title</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                
                value="{{$listing->title}}"
                placeholder="Choose a best title for your post "
            />
            @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
        </div>
    
        <div class="mb-6">
            <label
                for="location"
                class="inline-block text-lg mb-2"
                >Your Location</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="location"
                value="{{$listing->location}}"
                placeholder="Example: Hawler, Slemani, Duhok, Halabja"
            />
            @error('location')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
        </div>
      
    
        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                value="{{$listing->tags}}"
                placeholder="Example:funding, software, Koya"
            />
            @error('tags')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Link a Picture
            </label>
            <input
                type="file"  
                class="border border-gray-200 rounded p-2 w-full"
                name="logo"
                value="{{$listing->logo}}"

            />
            @error('logo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
        </div>
    
        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
            Description of Your Post
            </label>
            <input
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                value="{{$listing->description}}"
                placeholder="what your post is about"
            >
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
        </div>
    
        <div class="mb-6">
            <button style="background-color: #5E5CBA"
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black" >
                update Post
            </button>
    
            <a href="/gig/public" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
    
    </x-layout>