@php
    $usertag = Auth::user()->tag_id;
@endphp
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-black" />
                    </a>
                    <a href="{{ route('dashboard') }}"><p class="ml-2 font-bold text-xl text-black">Probus Implementator</p></a>
                </div>

                
            </div>
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('activitylog')" :active="request()->routeIs('activitylog')">
                        {{ __('Activity Log') }}
                    </x-nav-link>
                </div>
                @can('aspv')
                <div class="hidden sm:flex sm:items-center sm:ml-6 mt-1">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-end text-sm font-bold text-gray-400 hover:text-black hover:border-gray-300 focus:outline-none focus:text-black focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>Advanced Settings</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link :href="route('tag')">
                                    {{ __('Tag List') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('kategori')">
                                    {{ __('Category List') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('status')">
                                    {{ __('Status List') }}
                            </x-dropdown-link>
                            @can('admin')
                            <x-dropdown-link :href="route('user')">
                                    {{ __('User List') }}
                            </x-dropdown-link>
                            @endcan
                        </x-slot>
                    </x-dropdown>
                </div>
                @endcan
            </div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-end text-sm font-bold text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div><i class="fa-solid fa-user"></i> {{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="block px-4 py-2">
                            <p class="font-bold text-sm leading-5 text-gray-700">Account Information</p>
                            <p class="text-sm leading-5 text-gray-500"><i class="fa-solid fa-envelope"></i> {{ Auth::user()->email }}</p>
                            <p class="text-sm leading-5 text-gray-500"><i class="fa-solid fa-user-shield"></i> {{ Auth::user()->usertype }}</p>
                            <p class="text-sm leading-5 text-gray-500"><i class="fa-solid fa-user-tag"></i> {{ Auth::user()->tag->name }}</p>
                        </div>
                            <x-dropdown-link href="{{ route('myreq') }}">
                                {{-- {{ __('My Request') }} --}}
                                <p><i class="fa-solid fa-folder"></i> My Request</p> 
                            </x-dropdown-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <p><i class="fa-solid fa-right-from-bracket"></i> Logout</p>
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
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
            <x-responsive-nav-link :href="route('activitylog')" :active="request()->routeIs('activitylog')">
                {{ __('Activity Log') }}
            </x-responsive-nav-link>
            @can('aspv')
            <hr>
            <p class="pl-4 text-sm font-bold">Advanced Settings <i class="fa-solid fa-gear"></i></p>
            <x-responsive-nav-link :href="route('tag')" :active="request()->routeIs('tag')">
                {{ __('Tag List') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('kategori')" :active="request()->routeIs('kategori')">
                {{ __('Category List') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('status')" :active="request()->routeIs('status')">
                {{ __('Status List') }}
            </x-responsive-nav-link>
            @endcan
            @can('admin')
            <x-responsive-nav-link :href="route('user')" :active="request()->routeIs('user')">
                {{ __('User List') }}
            </x-responsive-nav-link>
            @endcan
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800"><i class="fa-solid fa-user"></i> {{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500"><i class="fa-solid fa-envelope"></i> {{ Auth::user()->email }}</div>
                <div class="font-medium text-sm text-gray-500"><i class="fa-solid fa-user-shield"></i> {{ Auth::user()->usertype }}</div>
                <div class="font-medium text-sm text-gray-500"><i class="fa-solid fa-user-tag"></i> {{ Auth::user()->tag->name }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('myreq')">
                    {{-- {{ __('My Request') }} --}}
                    <p><i class="fa-solid fa-folder"></i> My Requests</p>
                </x-responsive-nav-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{-- {{ __('Log Out') }} --}}
                        <p><i class="fa-solid fa-right-from-bracket"></i> Logout</p>
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
