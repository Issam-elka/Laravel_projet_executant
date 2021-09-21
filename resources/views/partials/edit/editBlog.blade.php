<form action="/blog/{{$edit->id}}" style="font-size: 18px" class=" pb-10 m-auto" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="block w-full h-full">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Date</label>
        <input id="username" type="date" name="date" value="{{$edit->date}}" class="block w-full px-4 py-2 mt-2 focus:ring-blue-200 text-gray-700 bg-white border border-gray-200 rounded-md ">
    </div>
    <div class="block w-full h-full mt-4">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Categorie</label>
        <input id="username" type="text" name="categorie" value="{{$edit->categorie}}" class="block w-full px-4 py-2 mt-2 focus:ring-blue-200 text-gray-700 bg-white border border-gray-200 rounded-md ">
    </div>
    <div class="block w-full h-full mt-4">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Titre</label>
        <input id="username" type="text" name="titre" value="{{$edit->titre}}" class="block w-full px-4 py-2 mt-2 focus:ring-blue-200 focus:border-blue-200 text-gray-700 bg-white border border-gray-200 rounded-md ">
    </div>
    <div class="block w-full h-full mt-4">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Texte</label>
        <input id="username" type="text" name="texte" value="{{$edit->texte}}" class="block w-full px-4 py-2 mt-2 focus:ring-blue-200 text-gray-700 bg-white border border-gray-200 rounded-md ">
    </div>

    <div class="flex justify-center mt-6 ">
        <button type="submit" class="px-6 py-4 leading-5 text-white transition-colors duration-200 transform bg-gray-300 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Enregistrer</button>
    </div>
</form>