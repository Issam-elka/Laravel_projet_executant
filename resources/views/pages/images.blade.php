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

            <div class="w-full ml-30 gap-y-5 gap-x-2 text-center mt-4"">
                <button id="buttonmodal" type="submit"
                class="px-4 py-2 font-medium text-white transition-colors duration-200 transform bg-gray-600 rounded-md dark:bg-gray-800 hover:bg-gray-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-500 dark:focus:bg-gray-700">
                Ajouter une image
                </button>
                @include('partials.image.modalCreate')
            </div>
            <div class="container mx-auto px-4">



                <section class="pt-8 px-4">
                    <div class="flex flex-wrap -mx-4">
                        @foreach ($images as $image)
                        <div class="md:w-1/3 px-4 mb-8 "><img class="rounded shadow-md"
                            src="{{asset('storage/img/' . $image->src)}}" width="300px" >
                        </div>
                        @endforeach
                    </div>
                </section>


            </div>

        </section>
    </section>
</x-app-layout>
