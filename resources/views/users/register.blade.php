<x-layout>

    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Register
        </h2>
        <p class="mb-4">Create an account</p>
    </header>

    <form action="/users" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">
                Name
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
                value="{{old('name')}}"
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
                value="{{old('email')}}"
            />
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
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
            <label for="birthday" class="inline-block text-lg mb-2">
                Select Your Birthdate
            </label>
            <input
                type="date"
                class="border border-gray-200 rounded p-2 w-full"
                name="birthday"
                value="{{old('birthday')}}"
            />
            @error('birthday')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        </div>



        <div class="mb-6">
            <label for="room" class="inline-block text-lg mb-2">
                 Your Room Number
            </label>
            <input
                type="number"
                class="border border-gray-200 rounded p-2 w-full"
                name="room"
                value="{{old('room')}}"
            />
            @error('room')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
            @enderror
        </div>


        <div class="mb-6">

            <p>Please choose the block that you want:</p>
            <input type="radio" id="block1" name="block" value="block1">
             <label for="block1">block1</label><br>
 
            <input type="radio" id="block2" name="block" value="block2">
            <label for="block2">block2</label><br>

           <input type="radio" id="block3" name="block" value="block3">
             <label for="block3">block3</label><br>

           <input type="radio" id="block4" name="block" value="block4">
             <label for="block4">block4</label><br>
 
             <input type="radio" id="block5" name="block" value="block5">
             <label for="block5">block5</label><br>
 
           @error('block')
           <p class="text-red-500 text-xs mt-1">{{$message}} </p>
       @enderror
        </div>

          
          <div class="mb-6">
            <p>Please Select Your Gender :</p>
            <input type="radio" id="male" name="gender" value="male">
             <label for="male">male</label><br>
    
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">female</label><br>
           @error('gender')
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
                value="{{old('liveplace')}}"
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
                value="{{old('phone')}}"
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
                value="{{old('dept')}}"
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
                value="{{old('bio')}}"
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
                Sign Up
            </button>
        </div>

        <div class="mt-8">
            <p>
                Already have an account?
                <a  style="color: #5E5CBA" href="/login" class="text-laravel"
                    >Login</a
                >
            </p>
        </div>
    </form>
    </x-card>
</x-layout>