<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Gallerie') }}
    </h2>
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
                  <tr>
                    <th scope="col"
                      class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                      User
                    </th>
                    <th scope="col"
                      class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                      Role
                    </th>
                    <th scope="col"
                      class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                      Created at
                    </th>
                    <th scope="col"
                      class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                      status
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <div class="flex items-center">

                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap">
                            {{-- {{  }} --}}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <p class="text-gray-900 whitespace-no-wrap">
                        {{-- {{  }} --}}
                      </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <p class="text-gray-900 whitespace-no-wrap">
                        {{-- {{  }} --}}
                      </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                        </span>
                        <span class="relative">
                          {{-- {{  }} --}}
                        </span>
                      </span>
                    </td>
                  </tr>
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
