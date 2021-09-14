<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mt-14 flex items-center justify-center mx-auto sm:px-6 lg:px-8">
      <!-- This example requires Tailwind CSS v2.0+ -->
      <div class="w-max bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 bg-indigo-700">
          <h3 class="text-lg leading-6 font-medium text-white">
            Utilisateur actuellement connecté
          </h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-50">
            Détails personnel
          </p>
        </div>
        <div class="border-t border-gray-200">
          <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-200">
              <dt class="text-sm font-medium flex flex-col justify-between text-gray-500">
                <p class="mt-9">
                  Avatar
                </p>
                
              </dt>
              <dd class="mt-1 text-sm flex justify-between flex-col text-gray-900 sm:mt-0 sm:col-span-2">
                <img class="w-32 rounded-full"
                src="{{ asset('storage/img/' . Auth()->user()->avatars->fileName) }}" alt="">
              </dd>
            </div>
            <div class="border-t border-gray-200">
              <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-200">
                  <dt class="text-sm font-medium text-gray-500">
                    Nom de l'avatar
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ Auth::user()->avatars->name }}
                  </dd>
                </div>
            <div class="border-t border-gray-200">
              <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-200">
                  <dt class="text-sm font-medium text-gray-500">
                    Nom complet
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ Auth::user()->prenom . ' ' . Auth::user()->name }}
                  </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Age
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ Auth::user()->age }}
                  </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-200">
                  <dt class="text-sm font-medium text-gray-500">
                    Adresse email
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ Auth::user()->email }}
                  </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-200 ">
                  <dt class="text-sm font-medium text-gray-500">
                    Rôle
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <div
                      class="w-max h-max px-3 rounded-full font-semibold border-2 text-base 
                {{ Auth()->user()->roles->id == 1 ? 'text-red-600 bg-red-300 border-red-500' : ' text-green-700 bg-green-200 border-green-600' }}
                ">
                      {{ Auth()->user()->roles->name }}
                    </div>

                  </dd>
                </div>
                {{-- <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-200">
              <dt class="text-sm font-medium text-gray-500">
                About
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur
                qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure
                nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
              </dd>
            </div> --}}
                {{-- <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Attachments
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
                      <!-- Heroicon name: solid/paper-clip -->
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                          clip-rule="evenodd" />
                      </svg>
                      <span class="ml-2 flex-1 w-0 truncate">
                        resume_back_end_developer.pdf
                      </span>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                      <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Download
                      </a>
                    </div>
                  </li>
                  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
                      <!-- Heroicon name: solid/paper-clip -->
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                          clip-rule="evenodd" />
                      </svg>
                      <span class="ml-2 flex-1 w-0 truncate">
                        coverletter_back_end_developer.pdf
                      </span>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                      <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Download
                      </a>
                    </div>
                  </li>
                </ul>
              </dd>
            </div> --}}
              </dl>
            </div>
        </div>
      </div>

      <livewire:counter/>


    </div>
</x-app-layout>
