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

            <div class="w-full ml-30 gap-y-5 gap-x-2 text-center pr-36 mt-6 text-right"">
                <button id="buttonmodal" type="submit"
                class="px-4 py-4 font-medium text-white transition-colors duration-200 transform bg-gray-300 rounded-md hover:bg-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                </button>
                @include('partials.image.modalCreate')
            </div>
            <div class="container mx-auto px-4">



                <section class="pt-8 px-4">
                    <div class="flex flex-wrap -mx-4">
                        @foreach ($images as $image)
                        <div class="md:w-1/3 px-4 mb-8 border-blue-200 px-4 py-6 rounded-lg images "><img class="rounded shadow-md"
                            src="{{asset('storage/img/' . $image->src)}}"  >
                        </div>
                        @endforeach
                    </div>
                </section>


            </div>

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
