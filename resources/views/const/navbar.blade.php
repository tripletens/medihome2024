<nav id="navbar_container" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('images/medihome_logo.png')}}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto d-flex justify-space-between">
                        <!-- Authentication Links -->
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('landing-page') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('about-page') }}">{{ __('About Us') }}</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('testimonial-page') }}">{{ __('Testimonials') }}</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('contact-us-page') }}">{{ __('Contact Us') }}</a>
                        </li>
                        @guest
                        <!-- @if (Route::has('login'))
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif -->

                        @if (Route::has('register'))
                        <li class="nav-item mx-2">
                            <a class="nav-link get-started text-white"  href="#" title="Coming Soon">{{ __('Get Started') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>