<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Gallerie') }}
    </h2>
  </x-slot>

  <div class="flex justify-evenly items-center flex-wrap space-x-10 space-y-10 h-full">
    @foreach ($images as $image)
      @if ($loop->iteration == 1)
        <a href="/dashboard/gallery/{{ $image->id }}/download">
          <img class="mt-10 ml-10" src="{{ asset('storage/img/' . $image->fileName) }}" alt="">
        </a>
      @else
        <a href="/dashboard/gallery/{{ $image->id }}/download">
          <img src="{{ asset('storage/img/' . $image->fileName) }}" alt="">
        </a>
      @endif
    @endforeach
  </div>
</x-app-layout>
