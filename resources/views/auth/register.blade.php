<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        {{-- <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>
            <div class="mt-4">
                <x-label for="prenom" :value="__('Prenom')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required
                    autofocus />
            </div>
            <div class="mt-4">
                <x-label for="age" :value="__('Age')" />

                <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required
                    autofocus />
            </div>
            <label class="block mt-4">
                <x-label for="avatar_id" :value="__('Avatar')" />
                <select class="border rounded-md border-gray-300 mt-1 block w-full " name="avatar_id"
                    :value="old('avatar_id')" required autofocus>
                    <option>Select an avatar</option>
                    @foreach ($avatars as $avatar)
                        <div class="flex">
                            <img src="{{ asset('storage/img/' . $avatar->src) }}" alt="">
                            <option value="{{ $avatar->id }}"> {{ $avatar->nom }}</option>
                        </div>
                    @endforeach
                </select>
            </label>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form> --}}
        
        
        <form method="POST" action="{{ route('register') }}" >
            @csrf
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2 ">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Nom</label>
                    <input id="username" type="text" name="name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Prenom</label>
                    <input id="emailAddress" type="text" name="prenom" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Age</label>
                    <input id="password" type="number" name="age" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <label class="block mt-4">
                    <x-label for="avatar_id" :value="__('Avatar')" />
                    <select class="border rounded-md border-gray-300 mt-1 block w-full " name="avatar_id"
                        :value="old('avatar_id')" required autofocus>
                        <option>Select an avatar</option>
                        @foreach ($avatars as $avatar)
                            <div class="flex">
                                <img src="{{ asset('storage/img/' . $avatar->src) }}" alt="">
                                <option value="{{ $avatar->id }}"> {{ $avatar->nom }}</option>
                            </div>
                        @endforeach
                    </select>
                </label>
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">Email</label>
                    <input id="passwordConfirmation" type="email"  name="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Password</label>
                    <input id="passwordConfirmation" type="password" name="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">Confirm password</label>
                    <input id="passwordConfirmation" type="password" name="password_confirmation" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
    
                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
            </div>
        </form>
        
    </x-auth-card>
</x-guest-layout>
