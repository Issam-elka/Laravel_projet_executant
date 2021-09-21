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


            <div class="container mx-auto px-4">
                <section class="pt-8 px-4">
                    <div class="flex flex-wrap -mx-4 m-2 ">
                        @foreach ($images as $image)
                        <div
                        class="md:w-1/4 px-4 mb-8 galerie ring-2 ring-gray-300 p-4 mx-10 justify-center  px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                        <img class="rounded shadow-md " src="{{ asset('storage/img/' . $image->src) }}" alt=""
                        width="400px">
                        <h4 class="mt-4 text-center">Catégorie: {{$image->Categorie->nom}}</h4>
                                        <a
                                            href="/image/{{ $image->id }}/download">
                                            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center justify-center text-center mt-4 mx-16">
                                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                            <span>Download</span>
                                            </button>
                                        </a>
                                    {{-- </button> --}}
                                

                            </div>
                        @endforeach

                    </div>

                </section>


            </div>

        </section>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script>
        gsap.from(".galerie", {
            duration: 0.8,
            scale: 0.5,
            y: -500,
            ease: "slow(0.70.7,0.70.7,false)",
        });
        gsap.from(".download", {
            duration: 1,
            scale: 0.9,
            y: -500,
            ease: "bounce.out",
        });

    </script>
</x-app-layout>
