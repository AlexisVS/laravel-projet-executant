<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 border-r-2">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col justify-between h-16">
            <div class="flex flex-col w-full px-2">
                <!-- Logo -->
                <div class="flex-shrink-0 flex flex-col items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="pr-4 mt-4 h-16 w-auto fill-current text-indigo-500" />
                    </a>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center mt-4">
                    <x-dropdown align="middle right" width="48">
                        <x-slot name="trigger">
                            <button class="flex ml-1 mb-5 items-center text-lg font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                <!-- Navigation Links -->

                {{-- {{ dd(url('/dashboard')) }}                 --}}
                <div class="hidden w-full flex-col space-y-4 sm:flex">
                    <x-nav-link href="/dashboard" :active="  url()->current() == url('/dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link href="/dashboard/avatar" :active="url()->current() == url('/dashboard/avatar')  ">
                        {{ __('Avatars') }}
                    </x-nav-link>
                    <x-nav-link href="/dashboard/category" :active="url()->current() == url('/dashboard/category')  ">
                        {{ __('Catégories') }}
                    </x-nav-link>
                    <x-nav-link href="/dashboard/gallery" :active="url()->current() == url('/dashboard/gallery')  ">
                        {{ __('Gallerie') }}
                    </x-nav-link>
                    <x-nav-link href="/dashboard/image" :active="url()->current() == url('/dashboard/image')  ">
                        {{ __('Images') }}
                    </x-nav-link>
                    <x-nav-link href="/dashboard/user" :active="url()->current() == url('/dashboard/user')  ">
                        {{ __('Utilisateurs') }}
                    </x-nav-link>
                </div>
            </div>


            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
