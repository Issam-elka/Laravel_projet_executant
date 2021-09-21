<form action="/categorie/{{$edit->id}}/update" style="font-size: 18px" class="form-control pb-10 m-auto" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="block w-full h-full">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Nom</label>
        <input id="username" type="text" name="nom" value="{{$edit->nom}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
    </div>
    
    <div class="flex justify-center mt-6 ">
        <button type="submit" class="px-6 py-4 leading-5 text-white transition-colors duration-200 transform bg-blue-300 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-600">Enregistrer</button>
    </div>
</form>