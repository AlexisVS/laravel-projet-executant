<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Editer l\'utilisateur : ' . $user->name . ' ' . $user->prenom) }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto flex flex-col items-center justify-center sm:px-6 lg:px-8">
      {{-- /* -------------------------------------------------------------------------- */ --}}
      <form class="flex flex-col space-y-8" action="/dashboard/image" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <input
          class="bg-gray-50 pl-5 border-2 border-indigo-600 focus:border-indigo-600 ring-indigo-600 focus:bg-indigo-300 placeholder-indigo-600 text-indigo-600 rounded-full text-lg font-bold"
          placeholder="Nom de l'image" value="{{ $user->name }}" type="text" name="name" id="">

        <input
          class="bg-gray-50 pl-5 border-2 border-indigo-600 focus:border-indigo-600 ring-indigo-600 focus:bg-indigo-300 placeholder-indigo-600 text-indigo-600 rounded-full text-lg font-bold"
          placeholder="Nom de l'image" value="{{ $user->prenom }}" type="text" name="prenom" id="">

        <input
          class="bg-gray-50 pl-5 border-2 border-indigo-600 focus:border-indigo-600 ring-indigo-600 focus:bg-indigo-300 placeholder-indigo-600 text-indigo-600 rounded-full text-lg font-bold"
          placeholder="Nom de l'image" value="{{ $user->email }}" type="email" name="email" id="">

        <input
          class="bg-gray-50 pl-5 border-2 border-indigo-600 focus:border-indigo-600 ring-indigo-600 focus:bg-indigo-300 placeholder-indigo-600 text-indigo-600 rounded-full text-lg font-bold"
          placeholder="Nom de l'image" value="{{ $user->age }}" type="text" name="age" id="">

        <select name="role_id" id="">
          @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ $role->name }}</option>
          @endforeach
        </select>

        <select name="avatar_id" id="">
          @foreach ($avatars as $avatar)
            <option value="{{ $avatar->id }}">{{ $avatar->name }}</option>
          @endforeach
        </select>

        <input class="bg-indigo-600 py-2 text-lg rounded-full hover:bg-indigo-700 text-white font-bold" type="submit"
          value="Sauvegarder">
      </form>
      {{-- /* -------------------------------------------------------------------------- */ --}}
    </div>
  </div>
</x-app-layout>
