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

            <div class="w-full ml-30 gap-y-5 gap-x-2 text-center"">
                <button id="buttonmodal" type="submit"
                class="px-4 py-2 font-medium text-white transition-colors duration-200 transform bg-gray-600 rounded-md dark:bg-gray-800 hover:bg-gray-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-500 dark:focus:bg-gray-700">
                Ajouter un avatar
                </button>
                @include('partials.avatar.modalCreate')
            </div>
            <section class="container p-6 mx-auto bg-white dark:bg-gray-800">
                <h2 class="text-xl font-medium text-gray-800 text-center capitalize dark:text-white md:text-2xl">Our
                    avatars</h2>

                <div class="flex items-center justify-center">
                    <div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach ($avatars as $avatar)
                            <div class="w-full max-w-xs text-center">
                                <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                                    src="{{ asset('storage/img/' . $avatar->src) }}" alt="avatar" />

                                <div class="mt-2">
                                    <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">
                                        {{ $avatar->nom }}
                                    </h3>
                                </div>
                                <div class="mt-2">
                                    <form action="/avatar/{{ $avatar->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded"
                                            type="submit">DELETE</button>
                                    </form>
                                </div>

                            </div>
                        @endforeach


                    </div>
                </div>
            </section>
        </section>
    </section>
</x-app-layout>
