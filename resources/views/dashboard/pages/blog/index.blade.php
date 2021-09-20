<x-app-layout>

  <x-slot name="header">
    <div class="flex items-center justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Blog') }}
      </h2>
      @can('create', \App\Models\Post::class)
      <a href="/dashboard/post/create"
      class="h-max py-1 px-4 font-semibold rounded-full bg-indigo-500 text-white hover:bg-indigo-600">Ajouter un
      article</a>
      @endcan
    </div>
  </x-slot>

  <div class="py-14">
    <div class="flex flex-wrap justify-evenly mx-auto space-x-5 space-y-16 sm:px-6 lg:px-8">
      @foreach ($posts as $post)
        @if ($loop->iteration == 1)
        
        <div
        class="mt-16 ml-5
        {{ 'bg-' . Arr::random($colors) . '-200' }}
        h-max border rounded-lg shadow-xl lg:w-1/4  hover:scale-125 hover:transition transform duration-700 hover:duration-700">
        <a href="/dashboard/post/{{ $post->id }}">
                <div class="p-5">
                  <h2 class="mb-2 text-md font-semibold tracking-widest text-black uppercase title-font">
                    {{ $post->title }}</h2>
                    <div class="flex items-center justify-between w-full mb-3">
                    <p class=" text-xs leading-relaxed text-gray-500">
                      <span class="text-xs text-gray-600 font-semibold">Créé par </span>
                      {{ $post->users->name . ' ' . $post->users->prenom }}
                    </p>
                    @can(['update', 'delete'], $post)
                    <div class="flex items-center justify-between">
                        <a href="/dashboard/post/{{ $post->id }}/edit"
                          class="text-xs px-3 py-1.5 mx-2 rounded-lg bg-blue-500 text-white">Editer</a>
                        <form action="/dashboard/post/{{ $post->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" value="X"
                            class="text-xs h-max px-3 pb-1 pt-2 rounded-lg bg-red-600 text-white">
                        </form>
                      </div>
                      @endcan
                  </div>

                  <p class="mb-3 text-base leading-relaxed text-blueGray-500">{{ $post->description }}</p>
                  <p></p>
                </div>
              </a>
            </div>
        @else
        
        <div
              class="
              {{ 'bg-' . Arr::random($colors) . '-200' }}
        border rounded-lg shadow-xl lg:w-1/4  hover:scale-125 hover:transition transform duration-700 hover:duration-700">
        <a href="/dashboard/post/{{ $post->id }}">
                <div class="p-5">
                  <h2 class="mb-2 text-md font-semibold tracking-widest text-black uppercase title-font">
                    {{ $post->title }}</h2>
                  <div class="flex items-center justify-between w-full mb-3">
                    <p class=" text-xs leading-relaxed text-gray-500">
                      <span class="text-xs text-gray-600 font-semibold">Créé par </span>
                      {{ $post->users->name . ' ' . $post->users->prenom }}
                    </p>
                    @can(['update', 'delete'], $post)
                    <div class="flex items-center justify-between">
                        <a href="/dashboard/post/{{ $post->id }}/edit"
                          class="text-xs px-3 py-1.5 mx-2 rounded-lg bg-blue-500 text-white">Editer</a>
                        <form action="/dashboard/post/{{ $post->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" value="X"
                            class="text-xs h-max px-3 pb-1 pt-2 rounded-lg bg-red-600 text-white">
                        </form>
                      </div>
                      @endcan
                  </div>
                  <p class="mb-3 text-base leading-relaxed text-blueGray-500">{{ $post->description }}</p>
                  <p></p>
                </div>
              </a>
            </div>
        @endif
      @endforeach
    </div>
  </div>

</x-app-layout>
