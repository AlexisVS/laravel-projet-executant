<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Article : ' . $post->title) }}
      </h2>

    </div>
  </x-slot>

  <div class="py-14">
    <div class="flex flex-wrap justify-evenly space-x-5 space-y-16 sm:px-6 lg:px-8">

      <div
        class="
          {{ 'bg-' . Arr::random($colors) . '-200' }}
          border rounded-lg shadow-xl lg:w-8/12 hover: scale-125 duration-700">
        <div class="p-5">
          <h2 class="mb-2 text-md font-semibold tracking-widest text-black uppercase title-font">
            {{ $post->title }}</h2>
          <p class="mb-3 text-xs leading-relaxed text-gray-500">
            <span class="text-xs text-gray-600 font-semibold">Créé par </span>
            {{ $post->users->name . ' ' . $post->users->prenom }}
          </p>
          <p class="mb-3 text-base leading-relaxed text-blueGray-500">{{ $post->description }}</p>
          <p></p>
        </div>
      </div>


    </div>
  </div>

</x-app-layout>
