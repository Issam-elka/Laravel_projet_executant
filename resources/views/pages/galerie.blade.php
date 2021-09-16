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
                                class="md:w-1/4 px-4 mb-8 galerie ring-2 ring-blue-300 p-4 mx-10 justify-center  px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                                <img class="rounded shadow-md " src="{{ asset('storage/img/' . $image->src) }}" alt=""
                                    width="400px">
                                @if (Auth::user()->role_id == 1)
                                    <button class="btn bg-blue-300 download rounded-md p-3 text-white mt-2"><a
                                            href="/image/{{ $image->id }}/download"><svg
                                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg></a>
                                    </button>
                                @else

                                @endif

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
