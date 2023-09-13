<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-300"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed lg:hidden inset-0 z-50 flex items-end bg-dark-blue bg-opacity-50 sm:items-center sm:justify-center">
</div>
<aside class="fixed inset-y-0 right-0 z-50 flex-shrink-0 w-full overflow-y-auto bg-dark-blue lg:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-x-40" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform translate-x-40" @click.outside="isSideMenuOpen = false"
    @keydown.escape="isSideMenuOpen = false">
    <div class="flex items-center justify-between px-8 py-10">
        <img src="{{ asset('images/logo/logo.svg') }}" class="w-40" alt="Medfolks">
        <button @click="isSideMenuOpen = false" class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div>
        <ul class="text-white px-8 space-y-6">
            <li>
                <a href="{{ route('home') }}" class="flex items-center gap-x-2">
                    @if (request()->routeIs('home'))
                        <div class=" h-3 w-3 bg-white/50 rounded-full"></div>
                    @endif
                    Home
                </a>
            </li>
            <li x-data="{ mobService: false }">
                <button @click="mobService = !mobService" class="flex items-center justify-between w-full">
                    Services
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-5 h-5 transition-transform duration-300" :class="{ 'rotate-180': mobService }">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="mobService" class="bg-white/20 rounded-md mt-2 px-4 py-3" x-collapse>

                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="{{ route('radiology') }}"> Radiology</a>
                        </li>
                        <li>
                            <a href="{{ route('pathology') }}">Pathology</a>
                        </li>
                        <li>
                            <a href="{{ route('cardiology') }}"> Cardiology </a>
                        </li>

                        <li>
                            <a href="{{ route('dentistry') }}" > Dentistry </a>
                        </li>
                        <li>
                            <a href="{{ route('dermatology') }}" > Dermatology </a>
                        </li>
                        <li>
                            <a href="{{ route('opthalmology') }}" > Opthalmology </a>
                        </li>
                        <li>
                            <a href="{{ route('nephrology') }}" > Nephrology </a>
                        </li>
                        <li>
                            <a href="{{ route('orthopedics') }}" > Orthopedics </a>
                        </li>
                        <li>
                            <a href="{{ route('pharmacology') }}" > Pharmacology </a>
                        </li>
                        <li>
                            <a href="{{ route('robotics') }}" > Robotics </a>
                        </li>
                        <li>
                            <a href="{{ route('nlp') }}" > NLP </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('certifications') }}" class="flex items-center gap-x-2">
                    @if (request()->routeIs('certifications'))
                        <div class=" h-3 w-3 bg-white/50 rounded-full"></div>
                    @endif
                    Certifications
                </a>
            </li>
            <li x-data="{ dropDown: false }">
                <button @click="dropDown = !dropDown" class="flex items-center justify-between w-full">
                    Solutions
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-5 h-5 transition-transform duration-300" :class="{ 'rotate-180': dropDown }">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="dropDown" class="bg-white/20 rounded-md mt-2 px-4 py-3" x-collapse>
                    <ul class="space-y-3">
                        <li>
                            <a href="https://infolks.info" target="_blank" class="text-sm">
                                Infolks
                            </a>
                        </li>
                        <li>
                            <a href="https://infolksgroup.com" target="_blank" class="text-sm">
                                Infolks Group
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li>
                <a href="{{ route('about') }}" class="flex items-center gap-x-2">
                    @if (request()->routeIs('about'))
                        <div class=" h-3 w-3 bg-white/50 rounded-full"></div>
                    @endif
                    About
                </a>
            </li> --}}
            <li>
                <a href="https://www.infolksgroup.com/career" target="_blank" class="">Career</a>
            </li>
            <li>
                <a href="https://www.medfolks.ai/blog" target="_blank">Blog</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="flex items-center gap-x-2">
                    @if (request()->routeIs('contact'))
                        <div class=" h-3 w-3 bg-white/50 rounded-full"></div>
                    @endif
                    Contact Us
                </a>
            </li>
        </ul>
    </div>
</aside>
