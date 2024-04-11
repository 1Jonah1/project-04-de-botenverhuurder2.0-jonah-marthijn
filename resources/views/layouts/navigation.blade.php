<nav x-data="{ open: false }" class="border-b bg-cyan-500 border-cyan-500">
    <style>
        .banner {
            background-image: url('images/2.jpg');
            background-color: yellow;
            background-size: cover;
            background-position: center;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            flex-direction: column;
        }

        .banner-content {
            text-align: center;
            font-size: 46px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-content: center;
            align-items: center;
        }
        .banner-content img {
            height: 150px;
        }
        .container {
            padding-left: 120px;
        }
        .boats {
            margin-top: 20px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .table-container {
            display: flex;
            justify-content: center;
        }


        .link {
            display: block;
            width: 100px;
            text-align: center;
            margin-top: 10px;
            background-color: blue;
            color: white;
        }
    </style>
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0" >
                    <a href="{{ route('dashboard') }}" class="text-white" >
                        <img src="images/rename.png" alt="" style="height: 53px;">
                    </a>
                </div>

                <!-- Navigation Links-->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('boats.index')" :active="request()->routeIs('boats.index')" class="text-white">
                        {{ __('Boten') }}
                    </x-nav-link>
                    @if (Auth::check() && Auth::user()->role == 'user')
                        <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')" class="text-white">
                            {{ __('Users') }}
                        </x-nav-link>
                    @endif
                </div>

            </div>

            <!-- Settings Dropdown or Login Button -->
            @guest
            <!-- If user is not authenticated, show login button -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <a href="{{ route('login') }}" class="text-white hover:text-gray-700">
                    {{ __('Log in') }}
                </a>
            </div>
            @else
            <!-- If user is authenticated, show settings dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out bg-yellow-400 border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Account') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Uitloggen') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @endguest

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <!-- Responsive Settings Options -->
        @auth
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-ya-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Account') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Uitloggen') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth
    </div>
</nav>
