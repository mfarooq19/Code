<x-layout>
    <x-card class="max-w-lg mx-auto mt-10">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
        <p class="mb-4">Log in</p>
      </header>
  
      <form method="POST" action="/user/authenticate">
        @csrf
  
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
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>



        <div class="mb-6">
    <label class="text-lg" for="role">Role</label>
    <div class="flex justify-start align-center">
        <select name="role" id="role" class="border border-gray-200 rounded p-2 w-full">
            <option value="admin">Admin</option>
            <option value="guest">Guest</option>
            <option value="student">Student</option>
        </select>
    </div>
</div>

          @error('role')
              <p class="text-green-500 text-xs mt-1">{{$message}}</p>
          @enderror
          
        <div class="mb-6">
          <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Sign In
          </button>
        </div>
  
        <div class="mt-8">
          <p>
            New?
            <a href="/register" class="text-laravel">Register</a>
          </p>
        </div>
      </form>
    </x-card>
  </x-layout>