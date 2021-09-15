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
                Nom du fichier
              </th>
              <th scope="col"
                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                Categorie
              </th>
              <th scope="col"
                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">

              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($images as $image)

              <tr class="hover:bg-gray-200">
                <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                  <div class="flex items-center">

                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                        {{ $image->id }}
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">
                    {{ $image->fileName }}
                  </p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">
                    {{ $image->categories->name }}
                  </p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-transparent text-sm">

                  <span class="relative">
                      <button
                        wire:click="delete('{{ $image->id }}')"
                        class="h-max px-3 py-1 rounded-full bg-red-500 hover:bg-red-600 text-white text-lg font-bold "
                        type="submit">
                        X
                      <button>
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
