<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Edition de l\'article ' . $post->title) }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl flex justify-center items-center mx-auto sm:px-6 lg:px-8">
      {{-- /* -------------------------------------------------------------------------- */ --}}
      <form class="flex flex-col space-y-8" action="/dashboard/post" method="post">
        @csrf
        <input
          class="bg-gray-50 pl-5 border-2 border-indigo-600 focus:border-indigo-600 ring-indigo-600 focus:bg-indigo-300 placeholder-indigo-600 text-indigo-600 rounded-full text-lg font-bold"
          type="text" name="title" value="{{$post->title}}" placeholder="Nom de la catégorie" id="">
          <textarea
          class="bg-gray-50 pt-2 pl-5 border-2 border-indigo-600 focus:border-indigo-600 ring-indigo-600 focus:bg-indigo-300 placeholder-indigo-600 text-indigo-600 rounded-3xl text-lg font-bold"
          type="text" name="description" cols="60" rows='8' id="">{{ $post->description }}</textarea>
        <input class="bg-indigo-600 py-2 text-lg rounded-full hover:bg-indigo-700 text-white font-bold" type="submit"
          value="Sauvegarder">
      </form>
      {{-- /* -------------------------------------------------------------------------- */ --}}
    </div>
  </div>
</x-app-layout>
