<header class="relative bg-[#2A62FE]">
    <div class="py-3">
        <div class="flex items-center justify-between px-4 mx-auto max-w-screen-xl sm:px-6 lg:px-16">
            <div class="flex items-center">
                <a class="flex items-center flex-shrink-0"
                href="{{ url('/') }}">
                    <span class="sr-only">Home</span>

                    <x-brand.new-logo class="w-auto h-6 text-indigo-600" />
                </a>
            </div>
            <div class="flex items-center flex-1 ml-4">
                <nav class="hidden lg:gap-4 lg:flex lg:ml-8 flex-1 justify-center">
                    <a href="{{ route('collection.view', 'sdss') }}" data-dropdown-trigger="hover" data-dropdown-toggle="dropdownShopNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 md:w-auto">
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
                    <a href="{{ route('collection.view', 'sdss') }}" data-dropdown-trigger="hover" data-dropdown-toggle="dropdownLearnNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 md:w-auto">
                        Learn
                    </a>
                    <div id="dropdownLearnNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Referral Program</a>
                            </li>
                            <li>
                                <a href="{{ route('blog.view') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Videos</a>
                            </li>
                            <li>
                                <a href="{{ route('testimonial-new.view') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Testimonials</a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('in-the-press.view') }}" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 md:w-auto">
                        In The Press
                    </a>
                    <a href="{{ route('about.view') }}" data-dropdown-trigger="hover" data-dropdown-toggle="dropdownAboutNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 md:w-auto">
                        About
                    </a>
                    <div id="dropdownAboutNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('about.view') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About Dr. Ergin & SugarMD</a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('wholesale-form.view') }}" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 md:w-auto">
                        Wholesale
                    </a>
                </nav>
                <div class="flex flex-row gap-4">
                    <input type="text" class="px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-7 w-52 align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" value="" placeholder="Search">
                    <div class="flex w-7 h-7 rounded bg-[#ddd] items-center justify-center">
                        <ul class="mb-0 flex items-center">
                            <li class="">
                                <a class="text-[#293453] flex items-center text-sm font-normal relative mt-0.75" href="{{ route('checkout.view') }}">&nbsp;<i class="fa text-base mr-1 text-[#2a62fe] fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
