<x-layout>

<x-card class=" p-10  max-w-lg mx-auto mt-24">

<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Create a Post
    </h2>
    <p class="mb-4">Your Post will see by everyone in the community</p>
</header>

<form action="/listings/create"  method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2"
            >Post Title</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="title"
            
            value="{{old('title')}}"
            placeholder="Choose a best title for your post"
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
            value="{{old('location')}}"
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
            value="{{old('tags')}}"
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
            value="{{old('logo')}}"
            class="border border-gray-200 rounded p-2 w-full"
            name="logo"
            id="logo"
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
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="description"
            rows="10"
            value="{{old('description')}}"
            placeholder="what your post is about"
        ></textarea>
        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
        @enderror
    </div>
   

    <div class="mb-6">
        <button
        style="background-color:  #5E5CBA;opacity: 1;"
            class=" text-white rounded py-2 px-4" >
            Create a Post
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</x-card>

</x-layout>