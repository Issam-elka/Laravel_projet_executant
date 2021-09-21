<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Avatars') }}
        </h2>
    </x-slot>

    <section class="flex  bg-white">
        <section>
            @include('partials.sidebar')
        </section>
        <section class="w-full h-full bg-white ">

            @include('partials.flash.flash')
            <section class="w-1/2 m-auto mt-10 ring-4 ring-gray-300 p-5 rounded-md shadow-2xl images">

                @include('partials.edit.editBlog')
            </section>
        </section>
    </section>
</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script>
        gsap.from(".images", {
            duration: 0.9,
            y: -500,
            ease: "slow(0.70.7,0.70.7,false)",
        });

    </script>