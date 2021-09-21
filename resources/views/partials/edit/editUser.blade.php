<form action="/utilisateur/{{$edit->id}}/update" style="font-size: 18px" class=" pb-10 m-auto" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="block w-full h-full">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Nom</label>
        <input id="username" type="text" name="name" value="{{$edit->name}}" class="block w-full px-4 py-2 mt-2 focus:ring-blue-200 text-gray-700 bg-white border border-gray-200 rounded-md ">
    </div>
    <div class="block w-full h-full mt-4">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Prenom</label>
        <input id="username" type="text" name="prenom" value="{{$edit->prenom}}" class="block w-full px-4 py-2 mt-2 focus:ring-blue-200 text-gray-700 bg-white border border-gray-200 rounded-md ">
    </div>
    <div class="block w-full h-full mt-4">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Age</label>
        <input id="username" type="integer" name="age" value="{{$edit->age}}" class="block w-full px-4 py-2 mt-2 focus:ring-blue-200 focus:border-blue-200 text-gray-700 bg-white border border-gray-200 rounded-md ">
    </div>
    <div class="block w-full h-full mt-4">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Email</label>
        <input id="username" type="text" name="email" value="{{$edit->email}}" class="block w-full px-4 py-2 mt-2 focus:ring-blue-200 text-gray-700 bg-white border border-gray-200 rounded-md ">
    </div>
    <label class="block mt-4">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Avatar</label>
        <select class="border rounded-md border-gray-300 mt-1 block w-full focus:ring-blue-200" name="avatar_id" :value="old('avatar_id')"  required autofocus>
            <option>Select an avatar</option>
            @foreach ($avatars as $avatar)
                <option value="{{ $avatar->id }}"
                    {{ $edit->avatars->nom == $avatar->nom ? 'selected' : null }}>{{ $avatar->nom }}</option>
            @endforeach
        </select>
    </label>
    @if (Auth::user()->role_id == 1)
        
    <label class="block mt-4">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Role</label>
        <select class="border rounded-md border-gray-300 mt-1 block w-full focus:ring-blue-200" name="role_id" :value="old('role_id')"  required autofocus>
            <option>Select an avatar</option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}"
                    {{ $edit->roles->role == $role->role ? 'selected' : null }}>{{ $role->role }}</option>
            @endforeach
        </select>
    </label>
    @else
        
    @endif
    {{-- <div class="block w-full h-full">
        <label class="text-gray-700 dark:text-gray-200 justify-start" for="username">Mot de passe</label>
        <input id="username" type="password" name="password" value="{{$edit->password}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
    </div> --}}

    <div class="flex justify-center mt-6 ">
        <button type="submit" class="px-6 py-4 leading-5 text-white transition-colors duration-200 transform bg-gray-300 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Enregistrer</button>
    </div>
</form>