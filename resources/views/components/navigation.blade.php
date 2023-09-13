<nav class="w-full z-50 fixed translate-y-6 scrolled transition-all ease-linear" id="navbar">
    <div class="flex items-center justify-between py-3 md:py-3 text-white container mx-auto px-4 md:px-2">
        <div>
            <img src="{{ asset('images/logo/logo.svg') }}" class="w-40 md:w-48" alt="Medfolks">
        </div>
        <div class="hidden lg:flex">
            <ul class="flex items-center justify-around gap-x-4">
                
                {{-- Home --}}
                <li>
                    <a href="{{ route('home') }}" class="py-4 px-3 relative">
                        Home
                        @if (request()->routeIs('home'))
                            <div
                                class="absolute h-3 w-3 bg-white/50 rounded-full top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-4">
                            </div>
                        @endif
                    </a>
                </li>

                {{-- Services --}}
                <li class="relative group">
                    <a href="{{ route('services') }}" class="py-6 px-3">
                        Services
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 inline-flex transition-all duration-300 group-hover:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>
                    <div
                        class="bg-white rounded-md shadow-lg w-[30rem] min-h-fit absolute top-10 transition-all duration-300 translate-y-4 opacity-0 pointer-events-none focus-within:opacity-100 group-hover:translate-y-0 group-hover:opacity-100 group-hover:pointer-events-auto">
                        <div class="grid grid-cols-3">
                            <a href="{{ route('radiology') }}" class="dropdown-links">
                                Radiology
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('pathology') }}" class="dropdown-links">
                                Pathology
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('cardiology') }}" class="dropdown-links">
                                Cardiology
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('dentistry') }}" class="dropdown-links">
                                Dentistry
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('dermatology') }}" class="dropdown-links">
                                Dermatology
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('opthalmology') }}" class="dropdown-links">
                                Opthalmology
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('nephrology') }}" class="dropdown-links">
                                Nephrology
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('orthopedics') }}" class="dropdown-links">
                                Orthopedics
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('pharmacology') }}" class="dropdown-links">
                                Pharmacology
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('robotics') }}" class="dropdown-links">
                                Robotics
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('nlp') }}" class="dropdown-links">
                                NLP
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                        </div>
                    </div>
                    @if (request()->routeIs('services'))
                        <div
                            class="absolute h-3 w-3 bg-white/50 rounded-full top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-4">
                        </div>
                    @endif
                </li>

                {{-- Certification --}}
                <li>
                    <a href="{{ route('certifications') }}" class="py-4 px-3 relative">
                        Certifications
                        @if (request()->routeIs('certifications'))
                            <div
                                class="absolute h-3 w-3 bg-white/50 rounded-full top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-4">
                            </div>
                        @endif
                    </a>
                </li>

                {{-- Solutions --}}
                <li class="relative group">
                    <span class="py-6 px-3 cursor-default">
                        Solutions
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 inline-flex transition-all duration-300 group-hover:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                    <div
                        class="bg-white rounded-md shadow-lg w-56 min-h-fit absolute top-10 transition-all duration-300 translate-y-4 opacity-0 pointer-events-none focus-within:opacity-100 group-hover:translate-y-0 group-hover:opacity-100 group-hover:pointer-events-auto">
                        <div class="flex flex-col">
                            <a href="https://infolks.info" target="_blank" class="dropdown-links">
                                Infolks
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="https://infolksgroup.com" target="_blank" class="dropdown-links">
                                Infolks Group
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>

                {{-- About --}}
                {{-- <li>
                    <a href="{{ route('about') }}" class="py-4 px-3 relative">About
                        @if (request()->routeIs('about'))
                            <div
                                class="absolute h-3 w-3 bg-white/50 rounded-full top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-4">
                            </div>
                         @endif
                    </a>
                </li> --}}

                {{-- Career --}}
                <li>
                    <a href="https://www.infolksgroup.com/career" target="_blank" class="py-4 px-3 relative">Career</a>
                </li>

                {{-- Blog --}}
                <li>
                    <a href="https://www.medfolks.ai/blog" target="_blank" class="py-4 px-3 relative">Blog</a>
                </li>

                {{-- Contact Us --}}
                <li>
                    <a href="{{ route('contact') }}" class="py-4 px-3 relative">
                        Contact Us
                        @if (request()->routeIs('contact'))
                            <div
                                class="absolute h-3 w-3 bg-white/50 rounded-full top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-4">
                            </div>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex lg:hidden">
            <button x-on:click.prevent="isSideMenuOpen = !isSideMenuOpen" aria-label="Navigation">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
</nav>
