<header class="relative border-b border-gray-100">
    <div class="bg-[#ebf0f8] pt-0.5 pb-px">
        <div class="flex items-center justify-between h-16 px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
            <div class="">
                <a href="https://apps.apple.com/in/app/sugarmd/id1591017644">
                    <img class="app-btn" alt="apple app store" src="{{asset('assets/frontend/images/app-store-logo-resized-black-and-white.webp')}}" style="display:inline;width:120px;border-radius:3px;margin-right:5px;margin-left:5px;">
                </a>
                <a href="https://play.google.com/store/apps/details?id=com.sugarmd">
                    <img alt="google play store" class="app-btn" src="{{asset('assets/frontend/images/google-play-logo-resized.webp')}}" style="display:inline;width:120px;border-radius:3px;">
                </a>
            </div>
            <div class="text-lg font-bold" style="color:#000 !important;">
                <u>GET FREE SHIPPING ON ALL PRODUCTS </u>
            </div>
            <div class="">
                <span class="text-left block">
                    <!-- <svg class="" width="18" height="18">
                        <use xlink:href="#email-i"></use>
                    </svg> -->
                    <a class="text-left" href="mailto:feedback@sugarmds.com">feedback@sugarmds.com</a>
                </span>
                <span class="text-left block">
                    <!-- <svg class="" width="18" height="18">
                        <use xlink:href="#phone-i"></use>
                    </svg> -->
                    <a class="text-left" href="tel:5614625053">561-462-5053</a>
                </span>
            </div>
        </div>
    </div>
    <div class="py-3.5">
        <div class="flex items-center justify-between px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
            <div class="flex items-center">
                <a class="flex items-center flex-shrink-0"
                href="{{ url('/') }}">
                    <span class="sr-only">Home</span>

                    <x-brand.logo class="w-auto h-6 text-indigo-600" />
                </a>
                <nav class="hidden lg:gap-4 lg:flex lg:ml-8">
                    <!-- @foreach ($this->collections as $collection)
                        <a class="text-sm font-medium transition hover:opacity-75"
                        href="{{ route('collection.view', $collection->defaultUrl->slug) }}">
                            {{ $collection->translateAttribute('name') }}
                        </a>
                    @endforeach -->
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                    Dropdown 
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                            </li>
                        </ul>
                        <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="flex items-center justify-between flex-1 ml-4 lg:justify-end">
                <x-header.search class="max-w-sm mr-4" />

                <div class="flex items-center -mr-4 sm:-mr-6 lg:mr-0">
                    @livewire('components.cart')

                    <div x-data="{ mobileMenu: false }">
                        <button x-on:click="mobileMenu = !mobileMenu"
                                class="grid flex-shrink-0 w-16 h-16 border-l border-gray-100 lg:hidden">
                            <span class="sr-only">Toggle Menu</span>

                            <span class="place-self-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </span>
                        </button>

                        <div x-cloak
                            x-transition
                            x-show="mobileMenu"
                            class="absolute right-0 top-auto z-50 w-screen p-4 sm:max-w-xs">
                            <ul x-on:click.away="mobileMenu = false"
                                class="p-6 space-y-4 bg-white border border-gray-100 shadow-xl rounded-xl">
                                @foreach ($this->collections as $collection)
                                    <li>
                                        <a class="text-sm font-medium"
                                        href="{{ route('collection.view', $collection->defaultUrl->slug) }}">
                                            {{ $collection->translateAttribute('name') }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
