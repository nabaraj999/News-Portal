<header class="sticky top-0 z-50 bg-white">
    <div class="container py-4 flex justify-between items-center">
        <div>
            <img class="h-[40px] md:h-[80px]" src="{{ asset($company->logo) }}" alt="">
        </div>
        <div class="flex items-center gap-4">
            <div>
                <p>{{ nepalidate(now()) }}</p>
                <img class="h-2 md:h-4" src="https://jawaaf.com/frontend/images/redline.png" alt="">
            </div>
            <a href="{{ route('login') }}" class="bg-[var(--primary)] text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition">
                Login
            </a>
        </div>
    </div>

    <nav class="bg-[var(--primary)] text-white py-2">
        <div class="container hidden lg:flex justify-between items-center">
            <ul class="flex gap-6">
                <li>
                    <a href="{{ route('home') }}">गृहपृष्ठ</a>
                </li>
                @foreach ($categories as $index => $cat)
                    @if ($index < 7)
                        <li>
                            <a href="{{ route('category', $cat->slug) }}">{{ $cat->title }}</a>
                        </li>
                    @endif
                @endforeach

                @if (count($categories) > 7)
                    <button id="dropdownDefaultButton" class="flex items-center" data-dropdown-toggle="dropdown"
                        type="button">more <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdown"
                        class="z-10 hidden bg-[var(--primary)] divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            @foreach ($categories as $index => $cat)
                                @if ($index >= 7)
                                    <li>
                                        <a href="{{ route('category', $cat->slug) }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $cat->title }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endif
            </ul>
            <div>
                <form action="" method="get" class="relative">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit" class="absolute text-[#424242] right-2 top-2 text-xl"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>

        <div class="container flex justify-end lg:hidden">
            <button class="text-2xl" type="button" data-drawer-target="drawer-example"
                data-drawer-show="drawer-example" aria-controls="drawer-example">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>
</header>

<div id="drawer-example"
    class="fixed bg-[var(--primary)] text-white top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full w-80"
    tabindex="-1" aria-labelledby="drawer-label">
    <div>
        <h5 class="text-2xl font-semibold py-5">
            Menu
        </h5>
    </div>
    <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>


    <ul class="flex flex-col gap-6">
        <li>
            <a href="">गृहपृष्ठ</a>
        </li>
        @foreach ($categories as $index => $cat)
            <li>
                <a href="">{{ $cat->title }}</a>
            </li>
        @endforeach
        <li>
            <a href="{{ route('login') }}" class="block py-2">Login</a>
        </li>
    </ul>
</div>
