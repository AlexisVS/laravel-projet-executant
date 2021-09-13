<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Utilisateurs') }}
      </h2>
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      {{-- /* -------------------------------------------------------------------------- */
            /*                                      *                                     */
            /* -------------------------------------------------------------------------- */ --}}

      <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="py-8">
          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
              <table class="min-w-full leading-normal">
                <thead>
                  <tr class="hover:bg-gray-200">
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
                      Email
                    </th>
                    <th scope="col"
                      class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                      Rôle
                    </th>
                    <th scope="col"
                      class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                      
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr class="hover:bg-gray-200">
                    <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                      <p class="text-gray-900 whitespace-no-wrap">
                        {{ $user->id }}
                      </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                      <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img alt="profil" src="{{ asset('storage/img/' . $user->avatars->fileName) }}" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                      </div>
                      <div class="ml-3">
                        <p class="text-gray-900 whitespace-no-wrap">
                          {{ $user->name . ' ' . $user->prenom }}
                        </p>
                      </div>
                    </div>
                  </td>
                  <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                      {{ $user->email }}
                    </p>
                  </td>
                  <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                    <span class="relative inline-block px-3 py-1 font-semibold {{ $user->roles->id == 1 ? 'text-red-600' : 'text-green-600' }} leading-tight">
                      <span aria-hidden="true" class="absolute inset-0 {{ $user->roles->id == 1 ? 'bg-red-200' : 'bg-green-200' }} opacity-50 rounded-full">
                      </span>
                      <span class="relative">
                          {{ $user->roles->name }}
                      </span>
                  </span>
                  </td>
                  <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                    
                    <span class="relative flex items-center">
                      <a href="/dashboard/user/{{ $user->id }}/edit" class="h-max py-1.5 mr-4 px-3 rounded-full font-bold bg-indigo-500 hover:bg-indigo-600 text-white">Editer</a>
                      <form class="w-max h-max" action="/dashboard/user/{{ $user->id }}" method="post">
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
</x-app-layout>
