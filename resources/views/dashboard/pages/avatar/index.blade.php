<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Avatar') }}
      </h2>
      @if ($avatars->count() < 5)
        <a href="/dashboard/avatar/create"
          class="h-max py-1 px-4 font-semibold rounded-full bg-indigo-500 text-white hover:bg-indigo-600">Ajouter un
          avatar</a>
      @endif
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="min-h-full flex items-center justify-center overflow-hidden sm:rounded-lg">
        {{-- /* -------------------------------------------------------------------------- */
            /*                                      *                                     */
            /* -------------------------------------------------------------------------- */ --}}

        <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
          <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                  <thead>
                    <tr>
                      <th scope="col"
                        class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                        #
                      </th>
                      <th scope="col"
                        class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                        Nom
                      </th>
                      <th scope="col"
                        class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                        Nom du fichier
                      </th>
                      <th scope="col"
                        class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">

                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($avatars as $avatar)
                      @if ($avatar->id != 1)
                        <tr class="hover:bg-gray-200">
                          <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                            <div class="flex items-center">

                              <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                  {{ $avatar->id }}
                                </p>
                              </div>
                            </div>
                          </td>
                          <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ $avatar->name }}
                            </p>
                          </td>
                          <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ $avatar->fileName }}
                            </p>
                          </td>
                          <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">

                            <span class="relative">
                              <form class="w-max h-max" action="/dashboard/avatar/{{ $avatar->id }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <input
                                  class="h-max px-3 py-1 rounded-full bg-red-500 hover:bg-red-600 text-white text-lg font-bold "
                                  type="submit" value="X">
                              </form>
                            </span>
                            </span>
                          </td>
                        </tr>
                      @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        {{-- /* -------------------------------------------------------------------------- */ --}}
      </div>
    </div>
  </div>
</x-app-layout>
