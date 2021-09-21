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

    <section class="flex bg-white">
        <section>
            @include('partials.sidebar')
        </section>

        <section class="w-full h-full bg-white mt-10">
            @include('partials.flash.flash')

            <div class="w-full ml-30 gap-y-5 gap-x-2 text-right pr-36"">
                <button id="buttonmodal" type="submit"
                class="px-4 avatar py-3 font-medium text-white transition-colors duration-200 transform bg-gray-300 rounded-md hover:bg-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                </button>
                @include('partials.avatar.modalCreate')
            </div>
            <section class="container p-6 mx-auto bg-white dark:bg-gray-800">
                <h2 class="text-xl font-medium text-gray-800 text-center capitalize dark:text-white md:text-2xl">Our
                    avatars</h2>

                <div class="flex items-center justify-center">
                    <div class="grid gap-8 mt-8 sm:grid-cols-2  lg:grid-cols-2 xl:grid-cols-3">
                        @foreach ($avatars as $avatar)
                            
                        <div class="max-w-xs mx-auto avatars avatar overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800 ring-4 ring-gray-300">
                            <img class="object-cover w-full h-56" src="{{ asset('storage/img/' . $avatar->src) }}" alt="avatar">
                            
                            <div class="py-5 text-center">
                                <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white mb-3">{{$avatar->nom}}</a>
                        
                                <form action="/avatar/{{ $avatar->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded "
                                        type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg></button>
                                </form>    </div>
                        </div>
                        @endforeach
                            

                    </div>
                </div>
            </section>
        </section>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script>
        gsap.from(".avatar", {
            duration: 0.9,
            y:500,
            ease: "slow(0.70.7,0.70.7,false)",
        });
    </script>
</x-app-layout>
