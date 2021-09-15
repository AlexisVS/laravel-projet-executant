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
                <img class="w-32 rounded-full" src="{{ asset('storage/img/' . Auth()->user()->avatars->fileName) }}"
                  alt="">
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
                </div>
</x-app-layout>
