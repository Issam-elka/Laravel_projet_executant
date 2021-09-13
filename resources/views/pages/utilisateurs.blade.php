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
        <section >
            @include('partials.sidebar')
        </section>
    <section class="w-full h-full bg-white">
        <section class="container p-6 mx-auto bg-white dark:bg-gray-800">
            <h2 class="text-xl font-medium text-gray-800 text-center capitalize dark:text-white md:text-2xl">Our users</h2>
        
            <div class="flex items-center justify-center">
                <div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach ($users as $user)
                    <div class="w-full max-w-xs text-center">
                        <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="{{asset('storage/img/' . $user->avatars->src)}}" alt="avatar"/>
        
                        <div class="mt-2">
                            <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">{{$user->name}} {{$user->prenom}}</h3>
                            <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">{{$user->roles->role}}</span>
                            
                        </div>
                        <div class="mt-6">

                            <a id="buttonmodal"  class="btn bg-blue-500 rounded-md  p-3 text-white hover:bg-blue-700" href="#">EDIT</a>
                        </div>
                    </div>
                    @include('partials.utilisateur.modalEdit')
                    @endforeach
        
                    
                </div>
            </div>
        </section>
    </section>
</section>
</x-app-layout>