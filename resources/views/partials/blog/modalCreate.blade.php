<div id="modal"
    class="fixed z-20 top-0 left-0 w-screen h-screen flex items-center  justify-center bg-gray-300 bg-opacity-60 transform scale-0 transition-transform duration-300">
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
        <form action="/blog" style="font-size: 18px" class="form-control pb-10 m-auto" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="block w-full h-full text-left">
                <label class="text-gray-700 dark:text-gray-200  text-center" for="username">Date</label>
                <input id="username" type="date" name="date" value="{{old('date')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div class="block w-full h-full text-left">
                <label class="text-gray-700 dark:text-gray-200  text-center" for="username">Categorie</label>
                <input id="username" type="text" name="categorie" value="{{old('categorie')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div class="block w-full h-full text-left">
                <label class="text-gray-700 dark:text-gray-200  text-center" for="username">titre</label>
                <input id="username" type="text" name="titre" value="{{old('titre')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div class="block w-full h-full text-left">
                <label class="text-gray-700 dark:text-gray-200  text-center" for="username">texte</label>
                <input id="username" type="text" name="texte" value="{{old('texte')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div class="flex justify-center mt-6 ">
                <button type="submit" class="px-6 py-4 leading-5 text-white transition-colors duration-200 transform bg-blue-300 hover:bg-blue-500 rounded-md ">Save</button>
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