<nav x-data="{ open: false }" class="bg-black border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8 fixed w-full bg-black text-center">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="/" :active="request()->routeIs('dashboard')">
                        Home
                    </x-jet-nav-link>
                    <x-jet-nav-link href="/works" :active="request()->routeIs('/')">
                        Works
                    </x-jet-nav-link>
                    <x-jet-nav-link href="#" :active="request()->routeIs('')">
                        Blog
                    </x-jet-nav-link>
                    <x-jet-nav-link href="#" :active="request()->routeIs('/')">
                        Components
                    </x-jet-nav-link>
                    <x-jet-nav-link href="#" :active="request()->routeIs('/')">
                        Contact me
                    </x-jet-nav-link>
                </div>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link>
                    <x-bi-github />
                </x-jet-nav-link>
                <x-jet-nav-link>
                    <x-bi-twitter />
                </x-jet-nav-link>
                <x-jet-nav-link>
                    <x-bi-instagram />
                </x-jet-nav-link>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
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
            <x-jet-responsive-nav-link href="#" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#" :active="request()->routeIs('/')">
                Blog
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#" :active="request()->routeIs('')">
                Components
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#" :active="request()->routeIs('/')">
                Courses
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#" :active="request()->routeIs('/')">
                Contact me
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#" :active="request()->routeIs('/')">
                <x-bi-github />
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#" :active="request()->routeIs('/')">
                <x-bi-twitter />
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#" :active="request()->routeIs('/')">
                <x-bi-instagram />
            </x-jet-responsive-nav-link>



            <x-jet-nav-link>
            </x-jet-nav-link>
            <x-jet-nav-link>
            </x-jet-nav-link>

        </div>
    </div>
</nav>
