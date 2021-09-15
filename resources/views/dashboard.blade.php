<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
    <section class="flex">
        <section>

            @include('partials.sidebar')

        </section>
        <section class="w-1/2 m-auto">
            <section class="bg-gray-100 dark:bg-gray-900 lg:py-12 lg:flex lg:justify-center">
                <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                    <div class="lg:w-1/2">
                        <img class="h-64 bg-cover lg:rounded-lg lg:h-full"
                            src="{{asset('storage/img/' . Auth::user()->avatars->src)}}">
                    </img>
                    </div>
                    <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2 ">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-xl">Nom : {{Auth::user()->name}}</h2>
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-xl">Prenom : {{Auth::user()->prenom}}</h2>
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-xl">Age : {{Auth::user()->age}}</h2>
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-xl">Email : {{Auth::user()->email}}</h2>
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-xl">Role : {{Auth::user()->roles->role}}</h2>
                        <div class="mt-8">
                            <a href="#"
                                class="px-5 py-3 font-semibold text-gray-100 transition-colors duration-200 transform bg-blue-300 rounded-md hover:bg-blue-500"> Modifier </a>
                        </div>
                    </div>
                </div>
            </section>

        </section>
    </section>


</x-app-layout>
