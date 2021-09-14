<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Ajouter un avatar') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto min-h-full flex justify-center items-center sm:px-6 lg:px-8">
      {{-- /* -------------------------------------------------------------------------- */ --}}
      <form class="flex flex-col space-y-8" action="/dashboard/avatar" method="post" enctype="multipart/form-data">
        @csrf
        <input
          class="bg-gray-50 pl-5 border-2 border-indigo-600 focus:border-indigo-600 ring-indigo-600 focus:bg-indigo-300 placeholder-indigo-600 text-indigo-600 rounded-full text-lg font-bold"
          type="text" name="name" placeholder="Nom de l'avatar" id="">
        <input class="bg-gray-100 text-gray-700" type="file" name="fileName" id="">
        <input type="text" name="imageLink" id="">
        <input class="bg-indigo-600 py-2 text-lg rounded-full hover:bg-indigo-700 text-white font-bold " type="submit"
          value="Sauvegarder">
      </form>
      {{-- /* -------------------------------------------------------------------------- */ --}}
    </div>
  </div>
</x-app-layout>
