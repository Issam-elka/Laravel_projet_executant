<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
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
        </form>
        
    </x-auth-card>
</x-guest-layout>
