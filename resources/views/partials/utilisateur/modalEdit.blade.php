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
        <form action="/utilisateur/{{$edit->id}}" style="font-size: 18px" class="form-control pb-10 m-auto" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="block w-full h-full">
                <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Nom</label>
                <input id="username" type="text" name="prenom" value="{{$edit->name}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div class="block w-full h-full">
                <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Prenom</label>
                <input id="username" type="text" name="prenom" value="{{$edit->prenom}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div class="block w-full h-full">
                <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Age</label>
                <input id="username" type="integer" name="age" value="{{$edit->age}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div class="block w-full h-full">
                <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Email</label>
                <input id="username" type="text" name="email" value="{{$edit->email}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <label class="block mt-4">
                <x-label for="avatar_id" :value="__('Avatar')" />
                <select class="border rounded-md border-gray-300 mt-1 block w-full " name="avatar_id" :value="old('avatar_id')"  required autofocus>
                    <option>Select an avatar</option>
                    @foreach ($avatars as $avatar)
                        <option value="{{ $avatar->id }}"
                            {{ $edit->avatars->nom == $avatar->nom ? 'selected' : null }}>{{ $avatar->nom }}</option>
                    @endforeach
                </select>
            </label>
            {{-- <div class="block w-full h-full">
                <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Mot de passe</label>
                <input id="username" type="password" name="password" value="{{$edit->password}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div> --}}

            <div class="flex justify-center mt-6 ">
                <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Enregistrer</button>
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