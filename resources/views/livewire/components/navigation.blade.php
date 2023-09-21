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
    <div class="py-3 border-b border-[#c3c8d8]">
        <div class="flex items-center justify-between px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
            <div class="flex items-center">
                <a class="flex items-center flex-shrink-0"
                href="{{ url('/') }}">
                    <span class="sr-only">Home</span>

                    <x-brand.logo class="w-auto h-6 text-indigo-600" />
                </a>
            </div>
            <div class="flex items-center flex-1 ml-4">
                <nav class="hidden lg:gap-4 lg:flex lg:ml-8 flex-1 justify-center">
                    <a href="{{ route('collection.view', 'sdss') }}" data-dropdown-trigger="hover" data-dropdown-toggle="dropdownShopNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        Shop
                    </a>
                    <div id="dropdownShopNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
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
                    <a href="{{ route('collection.view', 'sdss') }}" data-dropdown-trigger="hover" data-dropdown-toggle="dropdownLearnNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        Learn
                    </a>
                    <div id="dropdownLearnNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
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
                    <a href="{{ route('collection.view', 'sdss') }}" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        In The Press
                    </a>
                    <a href="{{ route('about.view') }}" data-dropdown-trigger="hover" data-dropdown-toggle="dropdownAboutNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        About
                    </a>
                    <div id="dropdownAboutNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('about.view') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About Dr. Ergin & SugarMD</a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('collection.view', 'sdss') }}" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        Wholesale
                    </a>
                </nav>
                <div class="flex">
                    <ul class="mb-0 flex gap-2.5 items-center">
                        @if (!Auth::check())
                        <li class="mr-0 mb-0">
                            <a id="states-button" data-dropdown-trigger="hover" data-dropdown-toggle="dropdown-states" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" href="https://sugarmds.com/es/shop/" data-lang="es">
                                <img class="inline-block mr-0.75 " src="{{asset('assets/frontend/flags/en.svg')}}" alt="ES">
                                <b>&nbsp;EN</b>
                            </a>
                            <div id="dropdown-states" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="states-button">
                                    <li>
                                        <a class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" href="https://sugarmds.com/es/shop/" data-lang="es">
                                            <img class="inline-block mr-0.75 " src="{{asset('assets/frontend/flags/sp.svg')}}" alt="ES">
                                            <b>&nbsp;ES</b>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        <li class="mr-2.5 mb-0">
                            <a class="text-[#293453] flex items-center text-sm font-normal relative mt-0.75" href="https://sugarmds.com/checkout/"><i class="fa text-base mr-1 text-[#2a62fe] fa-shopping-cart"></i> <span class="text-[8px] absolute -top-2 -right-2 bg-[#293453] w-4 h-4 rounded-full flex items-center justify-center text-white">0</span></a>
                        </li>
                        @if (!Auth::check())
                        <li class="mr-2.5 mb-0">
                            <a class="text-[#293453] flex items-center text-sm font-normal relative mt-0.75" href="{{ route('login-register.view') }}">
                                <i class="fa text-base mr-1 text-[#2a62fe] fa-user"></i>Login</a>
                        </li>
                        <li class="mr-0 mb-0">
                            <a class="text-[#293453] flex items-center text-sm font-normal relative mt-0.75" href="{{ route('login-register.view') }}">
                                <i class="fa text-base mr-1 text-[#2a62fe] fa-user-plus"></i>Join</a>
                        </li>
                        @else
                        <li class="mr-2.5 mb-0">
                            <a class="text-[#293453] flex items-center text-sm font-normal relative mt-0.75" href="{{ route('logout') }}">
                                <i class="text-base mr-1 text-[#2a62fe] fa fa-sign-out"></i>Logout</a>
                        </li>
                        <li class="mr-0 mb-0">
                            <a class="text-[#293453] flex items-center text-sm font-normal relative mt-0.75" href="/my-account"><i class="text-base mr-1 text-[#2a62fe] fa fa-user"></i> Dmytro Savuliak</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
