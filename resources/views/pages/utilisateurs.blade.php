<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Avatars') }}
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

    <section class="flex  bg-white">
        <section>
            @include('partials.sidebar')
        </section>
        <section class="w-full h-full bg-white">
            <section class="container p-6 mx-auto bg-white dark:bg-gray-800">
                <h2 class="text-xl font-medium users text-gray-800 text-center capitalize dark:text-white md:text-2xl">Our
                    users</h2>

                <div class="flex items-center justify-center">
                    <div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach ($users as $user)

                            <div class="max-w-sm mx-auto overflow-hidden users bg-white rounded-lg ring-4 ring-gray-300 shadow-2xl dark:bg-gray-800">
                                <img class="object-cover object-center w-full h-56"
                                    src="{{ asset('storage/img/' . $user->avatars->src) }}" alt="avatar">

                                <div class="px-6 py-4">
                                    <h1 class="text-xl font-semibold text-gray-800 dark:text-white mb-3">
                                        {{ $user->name }} {{ $user->prenom }}</h1>

                                    <span
                                        class="py-2 text-gray-700 dark:text-gray-400 rounded-xl bg-green-300 p-2 mt-5">{{ $user->roles->role }}</span>

                                    

                                    <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z" />
                                        </svg>

                                        <h1 class="px-2 text-sm">{{ $user->email }}</h1>
                                    </div>
                                    <div class="mt-6 text-center flex justify-center">

                                        <a href="/utilisateur/{{$user->id}}/edit">
                                        
                                            <button class="btn bg-blue-200 rounded-md  p-3 text-white hover:bg-blue-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </button>
                                        </a>
                                        <form action="/utilisateur/{{ $user->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 mx-2 rounded "
                                                type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <section class="w-1/3 m-auto mt-16">

                <div class="flex users ">
                    <a href="#" class="flex items-center px-4 py-2 mx-1 text-white bg-gray-300 hover:bg-gray-500 rounded-md cursor-not-allowed ">
                        previous
                    </a>
                
                    <a href="#" class="flex items-center px-4 py-2 mx-1 text-white transition-colors duration-200 transform bg-gray-300 hover:bg-gray-500 rounded-md ">
                        1
                    </a>
                
                    <a href="#" class="flex items-center px-4 py-2 mx-1 text-white hover:bg-gray-500 transition-colors duration-200 transform bg-gray-300 rounded-md ">
                        2
                    </a>
                
                    <a href="#" class="flex items-center px-4 py-2 mx-1 text-white hover:bg-gray-500 transition-colors duration-200 transform bg-gray-300 hover:bg-gray-500 rounded-md ">
                        3
                    </a>
                
                    <a href="#" class="flex items-center px-4 py-2 mx-1 text-white transition-colors duration-200 transform bg-gray-300 hover:bg-gray-500 rounded-md ">
                        Next
                    </a>
                </div>
            </section>
        </section>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script>
        gsap.from(".users", {
            duration: 0.8,
            scale: 0.5,
            y: -500,
            ease: "slow(0.70.7,0.70.7,false)",
        });

    </script>
</x-app-layout>
