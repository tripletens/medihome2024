<nav class="flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0 mb-6" x-data="{ isOpen: false }"
    @keydown.escape="isOpen = false" :class="{ 'shadow-lg': isOpen }"
    :style="isOpen ? 'background-color: #2F5E99;' : 'background-color: #2F5E99;'">
    {{--  <!--Logo etc--> 2F5E99  --}}
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
            <span class="text-2xl pl-2"><i class="em em-grinning"></i> Medihomecare</span>
        </a>
    </div>

    <!--Toggle button (hidden on large screens)-->
    <button @click="isOpen = !isOpen" type="button"
        class="block lg:hidden px-2 text-white hover:text-white focus:outline-none focus:text-white"
        :class="{ 'transition transform-180': isOpen }">
        <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd"
                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
            <path x-show="!isOpen" fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
        </svg>
    </button>

    <!--Menu-->
    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }" @click.away="isOpen = false"
        x-show.transition="true">
        <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
                <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('landing-page') }}"
                    @click="isOpen = false">Home
                </a>
            </li>
            <li class="mr-3">
                <a class="inline-block text-blue-200 no-underline border-b-2 border-transparent hover:border-blue-300 hover:text-blue-200 hover:text-underline py-2 px-4"
                    href="{{ route('about-page') }}" @click="isOpen = false">About
                </a>
            </li>
            <li class="mr-3">
                <a class="inline-block text-blue-200 no-underline border-b-2 border-transparent hover:border-blue-300  hover:text-blue-200 py-2 px-4"
                    href="{{ route('testimonial-page') }}" @click="isOpen = false">Testimonial
                </a>
            </li>
            <li class="mr-3">
                <a class="inline-block text-blue-200 no-underline border-b-2 border-transparent hover:border-blue-300 hover:text-blue-200 py-2 px-4"
                    href="{{ route('contact-us-page') }}" @click="isOpen = false">Contact
                </a>
            </li>
        </ul>
    </div>
</nav>
