<div id="modal"
    class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-200 bg-opacity-50 transform scale-0 transition-transform duration-300">
    <!-- Modal content -->
    <div class="bg-white w-1/3 h-50 p-12"> 
        <!--Close modal button-->
        <button id="closebutton" type="button" class="focus:outline-none justify-end">
            <!-- Hero icon - close button -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <!-- Test content -->
        <form action="/image" style="font-size: 18px" class="form-control pb-10 m-auto" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="block w-full h-full mt-4 bg-grey-lighter">
                <label class="text-gray-700 dark:text-gray-200" for="username">Image</label>
                <label class="w-full flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue  cursor-pointer hover:bg-blue-200 hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal">Select a file</span>
                    <input type='file' value="{{old('src')}}" name="src" class="hidden" />
                </label>
            </div>
            <label class="block mt-4">
                <x-label for="categorie_id" :value="__('Categorie')" />
                <select class="border rounded-md border-gray-300 mt-1 block w-full " name="categorie_id" :value="old('categorie_id')"  required autofocus>
                    <option>Selectionner une catégorie</option>
                    @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                    @endforeach
                </select>
            </label>
            <div class="flex justify-center mt-6 ">
                <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
            </div>
        </form>
    </div>
</div>

<script> 
    const button = document.getElementById('buttonmodal')
    const closebutton = document.getElementById('closebutton')
    const modal = document.getElementById('modal')

    button.addEventListener('click',()=>modal.classList.add('scale-100'))
    closebutton.addEventListener('click',()=>modal.classList.remove('scale-100'))
</script>