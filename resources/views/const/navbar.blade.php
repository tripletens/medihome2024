<nav class="flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0 mb-6"
        x-data="{ isOpen: false, isSubmenuOpen: false }"
        @keydown.escape="isOpen = false"
        :class="{ 'shadow-lg': isOpen }"
        :style="`background-color: #2F5E99;`">

        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
                <span class="text-2xl pl-2"><i class="em em-grinning"></i> Medihomecare</span>
            </a>
        </div>

        <!-- Toggle button for mobile -->
        <button @click="isOpen = !isOpen" type="button"
            class="block lg:hidden px-2 text-white hover:text-white focus:outline-none">
            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd"
                    d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                <path x-show="!isOpen" fill-rule="evenodd"
                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
            </svg>
        </button>

        <!-- Menu -->
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
            :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
            @click.away="isOpen = false">

            <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('landing-page') }}" @click="isOpen = false">
                        Home
                    </a>
                </li>

                <!-- Submenu for About -->
                <li class="relative mr-3">
                    <button @click="isSubmenuOpen = !isSubmenuOpen" class="inline-block text-blue-200 no-underline border-b-2 border-transparent hover:border-blue-300 hover:text-blue-300 py-2 px-4">
                        About
                    </button>
                    <ul x-show="isSubmenuOpen" class="absolute mt-2 w-48 bg-white border border-gray-300 shadow-lg rounded-lg">
                        <li>
                            <a href="{{ route('about-page') }}" class="block px-4 py-2 text-blue-700 hover:bg-blue-100 focus:bg-blue-200">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('what-we-offer') }}" class="block px-4 py-2 text-blue-700 hover:bg-blue-100 focus:bg-blue-200">What we offer</a>
                        </li>
                        <li>
                            <a href="{{ route('mission-and-vision') }}" class="block px-4 py-2 text-blue-700 hover:bg-blue-100 focus:bg-blue-200">Mission & Vision</a>
                        </li>
                    </ul>
                </li>

                <!-- Other Menu Items -->
                <li class="mr-3">
                    <a class="inline-block text-blue-200 no-underline border-b-2 border-transparent hover:border-blue-300 hover:text-blue-200 py-2 px-4"
                        href="{{ route('testimonial-page') }}" @click="isOpen = false">
                        Testimonial
                    </a>
                </li>

                <li class="mr-3">
                    <a class="inline-block text-blue-200 no-underline border-b-2 border-transparent hover:border-blue-300 hover:text-blue-200 py-2 px-4"
                        href="{{ route('contact-us-page') }}" @click="isOpen = false">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </nav>