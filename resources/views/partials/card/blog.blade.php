<div class="container mx-auto my-28 px-4 images">

    <div class="max-w-2xl px-8 py-4 mx-auto bg-white rounded-lg ring-gray-200 ring-2 m-4 shadow-md dark:bg-gray-800">
        <div class="flex items-center justify-between">
            <span class="text-sm font-light text-gray-600 dark:text-gray-400">{{$show->date}}</span>
            <a
                class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500">{{$show->categorie}}</a>
        </div>

        <div class="mt-2">
            <a href="#"
                class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">{{$show->titre}}</a>
            <p class="mt-2 text-gray-600 dark:text-gray-300">{{$show->texte}}
            </p>
        </div>

        
    </div>
</div>