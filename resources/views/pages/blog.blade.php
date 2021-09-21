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

            @include('partials.flash.flash')
            @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 1)
                
            <div class="w-full gap-y-5 gap-x-2 text-center pr-36 mt-4 text-right"">
                
                <button id="buttonmodal" type="submit"
                class="px-4 py-4 font-medium text-white border-b-4 border-gray-400 transition-colors duration-200 transform rounded-md bg-gray-300 hover:bg-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        
                </svg>
                </button>
                @include('partials.blog.modalCreate')
            </div>
            @endif
            <div class="container mx-auto px-4">

                @foreach ($blogs as $blog)
                <div class="max-w-2xl px-8 py-4 mx-auto bg-white rounded-lg ring-gray-200 ring-2 m-4 shadow-md dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-light text-gray-600 dark:text-gray-400">{{$blog->date}}</span>
                        <a
                            class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500">{{$blog->categorie}}</a>
                    </div>

                    <div class="mt-2">
                        <a href="#"
                            class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">{{$blog->titre}}</a>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">{{$blog->texte}}
                        </p>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <a href="/blog/{{$blog->id}}"  class="text-blue-600 dark:text-blue-400 hover:underline">Read more</a>
                        <div class="flex items-center">
                                
                            @can('delete', Model::class)
                            <a href="/blog/{{$blog->id}}/edit">
                                <button class="btn bg-blue-200 rounded-md  p-3 text-white hover:bg-blue-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                            </a>
                            
                                
                            <form action="/blog/{{$blog->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 mx-2 rounded "
                                    type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg></button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </section>
    </section>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script>
        gsap.from(".images", {
            duration: 1.5,
            y: -500,
            ease: "slow(0.70.7,0.70.7,false)",
        });

    </script> --}}
</x-app-layout>
{{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia at consequatur exercitationem, excepturi placeat ex corporis possimus reiciendis deleniti officia! --}}