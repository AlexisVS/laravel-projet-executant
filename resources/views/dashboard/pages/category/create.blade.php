<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Ajouter une catégorie') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl flex justify-center items-center mx-auto sm:px-6 lg:px-8">
      {{-- /* -------------------------------------------------------------------------- */ --}}
      <form class="flex flex-col space-y-8" action="/dashboard/category" method="post">
        @csrf
        <input
          class="bg-gray-50 pl-5 border-2 border-indigo-600 focus:border-indigo-600 ring-indigo-600 focus:bg-indigo-300 placeholder-indigo-600 text-indigo-600 rounded-full text-lg font-bold"
          type="text" name="name" placeholder="Nom de la catégorie" id="">
        <input class="bg-indigo-600 py-2 text-lg rounded-full hover:bg-indigo-700 text-white font-bold" type="submit"
          value="Sauvegarder">
      </form>
      {{-- /* -------------------------------------------------------------------------- */ --}}
    </div>
  </div>
</x-app-layout>
