<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
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
            <div class="w-full ml-30 gap-y-5 gap-x-2 pr-36 mt-4 text-right">
                <button" id="buttonmodal" type="submit"
                    class="px-4 cat py-2 font-medium text-white cursor-pointer transition-colors duration-200 transform bg-gray-300 rounded-md dark:bg-gray-800 hover:bg-gray-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-500 dark:focus:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                    </svg>
                    </button>
            </div>
            @include('partials.categorie.modalCreate')
            <link
                href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
                rel="stylesheet">
            <h2 class="text-xl font-medium text-gray-800 text-center cat capitalize dark:text-white md:text-2xl">Our
                Categories</h2>
            <div class="flex mt-6 justify-center min-h-screen w-80 m-auto bg-white-900">

                <div class="col-span-12">
                    <div class="overflow-auto lg:overflow-visible ">
                        <table class="table text-gray-400 border-separate space-y-6 text-sm">
                            <thead class="bg-gray-300 text-gray-600 cat">
                                <tr>
                                    <th class="p-3">#</th>
                                    <th class="p-3"></th>
                                    <th class="p-3 text-center">Nom</th>
                                    <th class="p-3">Edit</th>
                                    <th class="p-3">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categorie)
                                    <tr class="bg-gray-300 text-gray-600">

                                        <td class="p-3">
                                            {{ $categorie->id }}
                                        </td>
                                        <td class="p-3"></td>
                                        <td class="p-3 font-bold text-center">
                                            {{ $categorie->nom }}
                                        </td>
                                        <td class="p-3 ">
                                            <a href="/categorie/{{ $categorie->id }}/edit"
                                                class="text-gray-400 hover:text-blue-300  mx-2">
                                                <i class="material-icons-outlined text-base text text-center">edit</i>
                                            </a>
                                        </td>
                                        <td class="p-3 text-center ">
                                            <form action="/categorie/{{ $categorie->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="material-icons-round text-center  text-red-400 hover:text-red-200">delete_outline</button
                                                    type="submit">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <style>
                .table {
                    border-spacing: 0 15px;
                }

                i {
                    font-size: 1rem !important;
                }

                .table tr {
                    border-radius: 20px;
                }

                tr td:nth-child(n+5),
                tr th:nth-child(n+5) {
                    border-radius: 0 .625rem .625rem 0;
                }

                tr td:nth-child(1),
                tr th:nth-child(1) {
                    border-radius: .625rem 0 0 .625rem;
                }

            </style>

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
