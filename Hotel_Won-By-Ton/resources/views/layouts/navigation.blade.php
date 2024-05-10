<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Your stylesheets and other meta tags go here -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
       
        nav {
            background-color: black; 
            color: white; 
            font-family: 'Montserrat', sans-serif; 
        }
        nav a {
            color: inherit; 
        }
    </style>
</head>
<body>
    <!-- Primary Navigation Menu -->
    <nav x-data="{ open: false }" class="shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 justify-content-center">
                <div class="flex items-center">
                    <!-- Hamburger Button (visible on small screens) -->
                    <button @click="open = !open" class="block sm:hidden text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 focus:outline-none focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link :href="route('about1')" :active="request()->routeIs('about1')">
                            {{ __('About') }}
                        </x-nav-link>
                        <x-nav-link :href="route('room2')" :active="request()->routeIs('room2')">
                            {{ __('Rooms') }}
                        </x-nav-link>
                        <x-nav-link :href="route('service')" :active="request()->routeIs('service')">
                            {{ __('Service') }}
                        </x-nav-link>
                        <x-nav-link :href="route('booking')" :active="request()->routeIs('booking')">
                            {{ __('Booking') }}
                        </x-nav-link>
                        <x-nav-link :href="route('team')" :active="request()->routeIs('team')">
                            {{ __('Meet Our Team') }}
                        </x-nav-link>
                        @if (Auth::user()->AccessLevel === 'Manager')
                            <x-nav-link :href="route('managerAdd')" :active="request()->routeIs('managerAdd')">
                                {{ __('Add Rooms') }}
                            </x-nav-link>
                            <x-nav-link :href="route('managerDelete')" :active="request()->routeIs('managerDelete')">
                                {{ __('Delete Rooms') }}
                            </x-nav-link>
                        @endif
                        @if (Auth::user()->AccessLevel === 'Admin')
                            <x-nav-link :href="route('adminDashboard')" :active="request()->routeIs('adminDashboard')">
                                {{ __('Admin Dashboard') }}
                            </x-nav-link>
                        @endif
                        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                            {{ __('Contact') }}
                        </x-nav-link>
                    </div>
                </div>

                <!-- Settings Dropdown (visible on larger screens) -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('reservations.show')">
                                {{ __('Reservations') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('rewards.index')">
                                {{ __('Rewards') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu (visible on small screens) -->
        <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <!-- Navigation Links -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('about1')" :active="request()->routeIs('about1')">
                    {{ __('About') }}
                </x-nav-link>
                <x-nav-link :href="route('room2')" :active="request()->routeIs('room2')">
                    {{ __('Rooms') }}
                </x-nav-link>
                <x-nav-link :href="route('service')" :active="request()->routeIs('service')">
                    {{ __('Service') }}
                </x-nav-link>
                <x-nav-link :href="route('booking')" :active="request()->routeIs('booking')">
                    {{ __('Booking') }}
                </x-nav-link>
                <x-nav-link :href="route('team')" :active="request()->routeIs('team')">
                    {{ __('Meet Our Team') }}
                </x-nav-link>
                @if (Auth::user()->AccessLevel === 'Manager')
                    <x-nav-link :href="route('managerAdd')" :active="request()->routeIs('managerAdd')">
                        {{ __('Add Rooms') }}
                    </x-nav-link>
                    <x-nav-link :href="route('managerDelete')" :active="request()->routeIs('managerDelete')">
                        {{ __('Delete Rooms') }}
                    </x-nav-link>
                @endif
                @if (Auth::user()->AccessLevel === 'Admin')
                    <x-nav-link :href="route('adminDashboard')" :active="request()->routeIs('adminDashboard')">
                        {{ __('Admin Dashboard') }}
                    </x-nav-link>
                @endif
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-nav-link>
            </div>
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <!-- Settings Dropdown -->
                <div class="space-y-1">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('reservations.show')">
                        {{ __('Reservations') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('rewards.index')">
                        {{ __('Rewards') }}
                    </x-dropdown-link>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Your scripts go here -->
</body>
</html>