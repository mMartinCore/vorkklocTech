@props([
    'active' => '',
    'additional_classes' => '',
    'transparent' => false
])

<header 
    class="fixed w-full top-0 z-50 {{ $transparent ? 'bg-transparent' : 'bg-white/95 backdrop-blur-lg border-b border-neutral-200/50 shadow-lg shadow-primary-900/5' }} {{ $additional_classes }} transition-all duration-300" 
    id="mainHeader" 
    data-header-fixed="true"
    role="banner"
>
    <!-- Skip Link for Accessibility -->
    <a href="#main-content" class="skip-link">Skip to main content</a>
    <div class="container mx-auto px-4 py-3">
        <nav class="flex justify-between items-center">
            <!-- Watopak Professional Logo -->
            <div class="flex items-center space-x-4" data-aos="fade-right" data-aos-once="true" data-aos-delay="100">
                <a href="{{ route('home') }}" class="relative">
                    <img src="{{ asset('images/Watopak-logo.png') }}" alt="Watopak Logistics Logo" class="h-14 w-auto rounded-lg shadow-md transition-transform duration-300 hover:scale-105" id="navLogo">
                    <div class="absolute -inset-1 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-lg blur opacity-20 group-hover:opacity-30 transition-opacity"></div>
                </a>
                <!-- <div class="flex flex-col">
                    <span class="text-primary-700 font-primary font-bold text-xl hidden md:block tracking-tight" id="navBrand">Watopak</span>
                    <span class="text-secondary-600 font-display text-sm hidden md:block -mt-1 font-medium">Logistics Services</span>
                    <span class="text-neutral-600 font-secondary text-xs hidden lg:block mt-0.5 italic">Professional Maritime Shipping</span>
                </div> -->
            </div>
            
            <!-- Professional Command Center Navigation -->
            <div class="hidden md:flex items-center space-x-2" data-aos="fade-left" data-aos-once="true" data-aos-delay="200">
                <a 
                    href="{{ route('home') }}" 
                    class="relative px-4 py-2 rounded-lg font-primary font-medium text-neutral-700 hover:text-primary-600 hover:bg-primary-50 transition-all duration-300 {{ $active === 'home' ? 'text-primary-700 bg-primary-100 shadow-sm' : '' }}"
                >
                    Home
                    @if($active === 'home')
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-secondary-500/10 rounded-lg"></div>
                    @endif
                </a> 
                <a 
                    href="{{ route('rates') }}" 
                    class="relative px-4 py-2 rounded-lg font-primary font-medium text-neutral-700 hover:text-primary-600 hover:bg-primary-50 transition-all duration-300 {{ $active === 'rates' ? 'text-primary-700 bg-primary-100 shadow-sm' : '' }}"
                >
                    Rates
                    @if($active === 'rates')
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-secondary-500/10 rounded-lg"></div>
                    @endif
                </a> 
                <a 
                    href="{{ route('about') }}" 
                    class="relative px-4 py-2 rounded-lg font-primary font-medium text-neutral-700 hover:text-primary-600 hover:bg-primary-50 transition-all duration-300 {{ $active === 'about' ? 'text-primary-700 bg-primary-100 shadow-sm' : '' }}"
                >
                    About
                    @if($active === 'about')
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-secondary-500/10 rounded-lg"></div>
                    @endif
                </a>
                <a 
                    href="{{ route('contact') }}" 
                    class="relative px-4 py-2 rounded-lg font-primary font-medium text-neutral-700 hover:text-primary-600 hover:bg-primary-50 transition-all duration-300 {{ $active === 'contact' ? 'text-primary-700 bg-primary-100 shadow-sm' : '' }}"
                >
                    Contact
                    @if($active === 'contact')
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/10 to-secondary-500/10 rounded-lg"></div>
                    @endif
                </a>
                <a 
                    href="https://watopak.jashippers.com/register" 
                    target="_blank"
                    class="professional-button hero-primary-btn group relative overflow-hidden bg-gradient-to-r from-secondary-500 to-secondary-600 hover:from-secondary-600 hover:to-secondary-700 text-white py-2.5 px-6 rounded-xl shadow-lg hover:shadow-secondary-500/25 font-display font-semibold text-sm inline-flex items-center justify-center border border-secondary-400/30 touch-target performance-optimized focus-visible-only"
                    aria-label="Sign up for Watopak shipping services"
                    role="button"
                >
                    <span class="sr-only">Open registration page in new tab</span>
                    <span class="relative z-10">Sign Up</span>
                    <div class="absolute inset-0 button-shine"></div>
                    <div class="absolute inset-0 button-expand"></div>
                </a>

                <a 
                    href="https://watopak.jashippers.com/login" 
                    target="_blank"
                    class="professional-button hero-primary-btn group relative overflow-hidden border-2 border-secondary-500 text-secondary-500 hover:text-white bg-transparent hover:bg-secondary-500 py-2.5 px-6 rounded-xl shadow-lg hover:shadow-secondary-500/25 font-display font-semibold text-sm inline-flex items-center justify-center touch-target performance-optimized focus-visible-only"
                    aria-label="Login to your Watopak account"
                    role="button"
                >
                    <span class="sr-only">Open login page in new tab</span>
                    <span class="relative z-10">Login</span>
                    <div class="absolute inset-0 button-shine"></div>
                    <div class="absolute inset-0 button-expand"></div>
                </a>

            </div>
            
            <!-- Mobile Navigation Toggle -->
            <div class="md:hidden" x-data="{ open: false }">
                <button @click="open = !open" class="text-theme_color_primary-100 focus:outline-none p-1">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                
                <!-- Mobile Menu -->
                <div 
                    x-show="open" 
                    @click.away="open = false" 
                    class="absolute top-16 right-0 left-0 bg-white shadow-lg rounded-b-lg py-6 px-6 mt-2 z-50 border-t border-theme_neutral-200" 
                    x-transition:enter="transition ease-out duration-300" 
                    x-transition:enter-start="opacity-0 transform -translate-y-4" 
                    x-transition:enter-end="opacity-100 transform translate-y-0" 
                    x-transition:leave="transition ease-in duration-300" 
                    x-transition:leave-start="opacity-100 transform translate-y-0" 
                    x-transition:leave-end="opacity-0 transform -translate-y-4" 
                    style="display: none;"
                >
                    <div class="flex flex-col space-y-5">
                        <a 
                            href="{{ route('home') }}" 
                            class="text-theme_neutral-700 hover:text-theme_color_secondary-100 transition-colors duration-300 py-2 font-display text-sm tracking-wide uppercase {{ $active === 'home' ? 'text-theme_color_secondary-100 font-semibold' : '' }}"
                        >
                            Home
                        </a> 
                        <a 
                            href="{{ route('rates') }}" 
                            class="text-theme_neutral-700 hover:text-theme_color_secondary-100 transition-colors duration-300 py-2 font-display text-sm tracking-wide uppercase {{ $active === 'rates' ? 'text-theme_color_secondary-100 font-semibold' : '' }}"
                        >
                            Rates
                        </a> 
                        <a 
                            href="{{ route('about') }}" 
                            class="text-theme_neutral-700 hover:text-theme_color_secondary-100 transition-colors duration-300 py-2 font-display text-sm tracking-wide uppercase {{ $active === 'about' ? 'text-theme_color_secondary-100 font-semibold' : '' }}"
                        >
                            About
                        </a>
                        <a 
                            href="{{ route('contact') }}" 
                            class="text-theme_neutral-700 hover:text-theme_color_secondary-100 transition-colors duration-300 py-2 font-display text-sm tracking-wide uppercase {{ $active === 'contact' ? 'text-theme_color_secondary-100 font-semibold' : '' }}"
                        >
                            Contact
                        </a>
                        <a 
                            href="https://portal.watopak.com/register" 
                            class="bg-theme_color_secondary-100 hover:bg-theme_color_secondary-200 text-white font-display text-sm tracking-wide uppercase py-3 px-4 rounded-md shadow-md text-center transition-all duration-300 transform hover:-translate-y-1"
                            target="_blank"
                        >
                           Sign Up
                        </a>

                        <a 
                            href="https://portal.watopak.com/login" 
                            class="bg-theme_color_secondary-100 hover:bg-theme_color_secondary-200 text-white font-display text-sm tracking-wide uppercase py-3 px-4 rounded-md shadow-md text-center transition-all duration-300 transform hover:-translate-y-1"
                            target="_blank"
                        >
                           Login
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    
    <!-- Floating Action Button for Quick Contact (Mobile Only) -->
    <!-- <div class="fixed bottom-6 right-6 md:hidden z-50">
        <a href="{{ route('contact') }}" class="flex items-center justify-center w-12 h-12 bg-theme_color_secondary-100 rounded-full shadow-lg hover:bg-theme_color_secondary-200 transition-all duration-300 hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
        </a>
    </div> --> 
</header>

<!-- Spacer to compensate for fixed header height -->
<div class="header-spacer" id="headerSpacer" aria-hidden="true"></div> 