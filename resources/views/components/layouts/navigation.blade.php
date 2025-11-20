<nav x-data="{ open: false }" class=" bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto  py-5 px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between relative">


            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('home') }}" aria-label="Skyshopperja Home">
                    <x-app-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>
            </div>

            <div class="items-center hidden space-x-10 lg:flex">

                <x-nav-link class="text-gray-900" :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>


                <x-nav-link class="text-gray-900" :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('Contact Us') }}
                </x-nav-link>

                <x-nav-link class="text-gray-900" :href="route('rates')" :active="request()->routeIs('rates')">
                    {{ __('Rates') }}
                </x-nav-link>
                {{-- estimate-calculator --}}
                <x-nav-link class="text-gray-900" :href="route('estimate-calculator')" :active="request()->routeIs('estimate-calculator')">
                    {{ __('Calculator') }}
                </x-nav-link>
            </div>

            <div class="items-center hidden space-x-8 lg:flex">
                <a href="https://my.skyshopperja.com/signup" aria-label="Register"
                    class="inline-block capitalize   border border-2 border-theme_color-100 hover:border-red-70
                                           transition duration-200 font-semibold   shadow-4xl  rounded-global px-8  font-extrabold
                                           focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50
                                         text-blue-300 py-2 hover:text-white/80 hover:bg-blue-400">
                    Register
                </a>

                <a href="http://my.skyshopperja.com" aria-label="Login"
                    class="inline-block capitalize  focus:shadow-outline focus:outline-none 
                                           transition duration-200 font-semibold  bg-theme_color-100 shadow-4xl  rounded-global px-8
                                         text-white/80 py-2 hover:bg-blue-400 ">
                    Login
                </a>
            </div>




            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <div @click="open = !open"
                    class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" x-show="!open"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd" />
                    </svg>

                    <svg class="w-6 h-6 text-gray-700" x-show="open" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"
                            class=""></path>
                    </svg>
                </div>

                {{-- </button> --}}
            </div>

        </div>








    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">

        <div
            class="container relative flex z-50 flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">

            <div class="top-0 left-0 items-start w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex hidden"
                :class="{ 'flex fixed': open, 'hidden': !open }">
                <div
                    class="flex-col   pb-4 w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                    <a href="#"
                        class="inline-flex  items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden">
                        {{ config('app.name', 'App') }}
                        <span class="text-indigo-600">
                        </span></a>
                    <div class="flex flex-col items-center justify-center w-full space-y-4 text-center  ">

                        <x-responsive-nav-link class=" flex items-center justify-center" :href="route('home')"
                            :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link class=" flex items-center justify-center" :href="route('contact')"
                            :active="request()->routeIs('contact')">
                            {{ __('Contact Us') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link class=" flex items-center justify-center" :href="route('rates')"
                            :active="request()->routeIs('rates')">
                            {{ __('Rates') }}
                        </x-responsive-nav-link>
                        {{-- estimate-calculator --}}
                        <x-responsive-nav-link class=" flex items-center justify-center" :href="route('estimate-calculator')"
                            :active="request()->routeIs('estimate-calculator')">
                            {{ __('Calculator') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link class=" flex items-center justify-center"
                            href="http://my.skyshopperja.com">
                            {{ __('Login') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link class=" flex items-center justify-center"
                            href="https://my.skyshopperja.com/signup">
                            {{ __('Register') }}
                        </x-responsive-nav-link>
                    </div>
                </div>
            </div>
            <div @click="open = !open"
                class="fixed top-8  right-8 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" x-show="!open" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd" />
                </svg>
                <svg class="w-6 h-6 text-gray-700 top-0 " x-show="open" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"
                        class=""></path>
                </svg>
            </div>
        </div>

    </div>
</nav>
