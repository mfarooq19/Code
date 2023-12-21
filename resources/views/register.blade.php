<x-layout>
    <x-card class="max-w-lg mx-auto mt-10">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
        <p class="mb-4">Create an account</p>
      </header>
  
      <form method="POST" action="/user/register">
        @csrf
        <div class="mb-6">
          <label for="name" class="inline-block text-lg mb-2"> Name </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />
  
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">Email</label>
          <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="password" class="inline-block text-lg mb-2">
            Password
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
            value="{{old('password')}}" />
  
          @error('password')
          <p class="text-green-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="password2" class="inline-block text-lg mb-2">
            Confirm Password
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
            value="{{old('password_confirmation')}}" />
  
          @error('password_confirmation')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <label class="text-lg" for="">Register As</label>
        <div class="mb-6">
    <label class="text-lg" for="role">Role</label>
    <div class="flex justify-start align-center">
        <select name="role" id="role" class="border border-gray-200 rounded p-2 w-full">
            <option value="guest">Guest</option>
            <option value="student">Student</option>
        </select>
    </div>
</div>

  
        <div class="mb-6">
          <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Sign Up
          </button>
        </div>
  
        <div class="mt-8">
          <p>
            Already have an account?
            <a href="/login" class="text-laravel">Login</a>
          </p>
        </div>
      </form>
    </x-card>
  </x-layout>