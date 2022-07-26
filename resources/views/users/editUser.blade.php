<x-layout>

    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            User Info
        </h2>
        <p class="mb-4">update Your Info here</p>
    </header>

    <form action="/listings/{{auth()->user()->id}}/updateUser"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">
                Name
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
                value={{auth()->user()->name}}
            />
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Email</label
            >
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                value={{auth()->user()->email}}
            />
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        
        </div>

        <div class="mb-6">
            <label for="birthday" class="inline-block text-lg mb-2">
                Select Your Birthdate
            </label>
            <input
                type="date"
                class="border border-gray-200 rounded p-2 w-full"
                name="birthday"
                value={{auth()->user()->birthday}}
            />
            @error('birthday')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        </div>


        
         
           



          <div class="mb-6">
            <label for="liveplace" class="inline-block text-lg mb-2">
                Your Live Place
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="liveplace"
                value={{auth()->user()->liveplace}}
            />
            @error('liveplace')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="phone" class="inline-block text-lg mb-2">
                Your phone number 
            </label>
            <input
                type="number"
                class="border border-gray-200 rounded p-2 w-full"
                name="phone"
                value={{auth()->user()->phone}}
            />
            @error('phone')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        </div>


        
        <div class="mb-6">
            <label for="dept" class="inline-block text-lg mb-2">
                Your department 
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="dept"
                value={{auth()->user()->dept}}
            />
            @error('dept')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="bio" class="inline-block text-lg mb-2">
                Your bio 
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="bio"
                value={{auth()->user()->bio}}
            />
            @error('bio')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        </div>



        <div class="mb-6">
            <label
                for="password"
                class="inline-block text-lg mb-2"
            >
                Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"
                value="{{old('password')}}"
            />
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password2"
                class="inline-block text-lg mb-2"
            >
                Confirm Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password_confirmation"
                value="{{old('password_confirmation')}}"
            />
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        </div>

        <div class="mb-6">
            <button
            style="background-color: #5E5CBA" 
                type="submit"
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                update
            </button>
        </div>

       
    </form>
    </x-card>
</x-layout>