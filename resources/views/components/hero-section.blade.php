@props([
    'headline1' => 'Premium Shipping to',
    'headline2' => 'Jamaica from the USA',
    'description' => 'Experience premium USA mailbox service and shop from your favorite online stores with secure, fast shipping to Jamaica. <span class="text-theme_color_accent-100">Professional service, guaranteed delivery.</span>',
    'ctaButtonText' => 'Get Started',
    'ctaButtonUrl' => '#how-it-works',
    'secondaryButtonText' => 'View Rates',
    'secondaryButtonUrl' => '',
    'heroImage' => 'images/watopak-Logistics-hero.png',
    'badgeText' => 'Premium USA to Jamaica Shipping'
])

<!-- Enhanced Watopak Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 px-4 sm:px-6" id="hero">
    <!-- Advanced Background Elements -->
    <div class="absolute inset-0">
        <!-- Dynamic Gradient Mesh Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary-600/30 via-secondary-600/20 to-primary-500/30 animate-gradient-x"></div>
        
        <!-- Animated Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)] animate-pulse-slow"></div>
        
        <!-- Floating Orbs with Enhanced Animation -->
        <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-gradient-to-r from-primary-500/30 to-secondary-500/30 rounded-full blur-2xl animate-float-slow will-change-transform"></div>
        <div class="absolute bottom-1/4 right-1/4 w-72 h-72 bg-gradient-to-r from-secondary-500/25 to-primary-500/25 rounded-full blur-2xl animate-float-slow" style="animation-delay: 2s;"></div>
        
        <!-- Particle Container -->
        <div id="particles-js" class="absolute inset-0 opacity-40" aria-hidden="true"></div>
        
        <!-- Animated Wave Pattern -->
        <div class="absolute bottom-0 left-0 w-full h-24 overflow-hidden">
            <svg class="absolute bottom-0 w-full h-full" viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-white/5 animate-wave"></path>
            </svg>
        </div>
    </div>
    
    <!-- Content Container with responsive padding -->
    <div class="container relative z-10 mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 py-12 sm:py-16 md:py-20 lg:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 lg:gap-16 items-center min-h-[70vh] sm:min-h-[80vh]">
            <!-- Text Content - Left Side -->
            <div class="lg:col-span-7 text-center lg:text-left space-y-6 sm:space-y-8">
                <!-- Premium Badge with Enhanced Animation -->
                <div class="inline-flex items-center gap-2 sm:gap-3 px-4 sm:px-6 py-2 sm:py-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white text-xs sm:text-sm font-medium shadow-lg hover:bg-white/15 transition-all duration-300 group" data-aos="fade-up">
                    <div class="w-3 h-3 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full animate-pulse shadow-lg shadow-green-400/50"></div>
                    <span class="font-semibold tracking-wide">{{ $badgeText }}</span>
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>

                <!-- Optimized Main Headlines with better accessibility -->
                <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight tracking-tight">
                        <span class="block relative">
                            {{ $headline1 }}
                            <span class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-primary-400 to-secondary-400 transform scale-x-0 animate-scale-x"></span>
                        </span>
                        <span class="block bg-gradient-to-r from-primary-400 via-secondary-400 to-primary-400 bg-clip-text text-transparent animate-gradient-x font-extrabold">
                            {{ $headline2 }}
                        </span>
                    </h1>
                </div>

                <!-- Enhanced Description -->
                <div class="max-w-2xl mx-auto lg:mx-0" data-aos="fade-up" data-aos-delay="400">
                    <p class="text-lg sm:text-xl lg:text-2xl text-blue-100 leading-relaxed font-light">
                        {!! $description !!}
                    </p>
                </div>

                <!-- Optimized CTA Buttons with improved accessibility -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center lg:justify-start mt-6 md:mt-8" data-aos="fade-up" data-aos-delay="600">
                    <!-- Primary CTA with Advanced Effects -->
                    <a href="{{ $ctaButtonUrl }}" 
                       class="group relative inline-flex items-center justify-center px-6 sm:px-8 md:px-10 py-3 sm:py-4 md:py-5 bg-gradient-to-r from-secondary-600 to-secondary-500 hover:from-secondary-700 hover:to-secondary-600 text-white font-bold text-base sm:text-lg rounded-xl sm:rounded-2xl shadow-lg shadow-secondary-500/25 hover:shadow-secondary-500/40 transition-all duration-300 transform hover:-translate-y-1 overflow-hidden focus:outline-none focus:ring-2 focus:ring-secondary-500 focus:ring-offset-2 focus:ring-offset-blue-900">
                        <span class="relative z-10 flex items-center gap-2 sm:gap-3">
                            {{ $ctaButtonText }}
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                        <!-- Multiple shine effects -->
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-out"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <!-- Secondary CTA with Glass Effect -->
                    <a href="{{ $secondaryButtonUrl }}" 
                       class="group inline-flex items-center justify-center px-6 sm:px-8 md:px-10 py-3 sm:py-4 md:py-5 bg-white/10 backdrop-blur-md border-2 border-white/20 hover:border-white/40 text-white font-semibold text-base sm:text-lg rounded-xl sm:rounded-2xl hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-white/30 focus:ring-offset-2 focus:ring-offset-blue-900">
                        <span class="flex items-center gap-2 sm:gap-3">
                            {{ $secondaryButtonText }}
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Enhanced Trust Indicators with better mobile layout -->
                <!-- <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3 sm:gap-4 md:gap-6 lg:gap-8 pt-6 sm:pt-8 text-blue-200" data-aos="fade-up" data-aos-delay="800">
                    <div class="flex items-center gap-2 sm:gap-3 group">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center shadow-lg shadow-green-500/30">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-semibold text-base sm:text-lg block">10,000+</span>
                            <span class="text-xs sm:text-sm font-medium opacity-80">Trusted Customers</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 sm:gap-3 group">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center shadow-lg shadow-blue-500/30">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-semibold text-base sm:text-lg block">5-7 Days</span>
                            <span class="text-xs sm:text-sm font-medium opacity-80">Fast Delivery</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 sm:gap-3 group">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center shadow-lg shadow-purple-500/30">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-semibold text-base sm:text-lg block">100%</span>
                            <span class="text-xs sm:text-sm font-medium opacity-80">Insured Packages</span>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- Enhanced Image Content - Right Side -->
            <div class="lg:col-span-5 relative" data-aos="zoom-in" data-aos-delay="400">
                <!-- Optimized Image Container with Better Performance -->
                <div class="relative group">
                    <!-- Glass morphism container with reduced effects and improved spacing -->
                    <div class="relative bg-gradient-to-br from-white/20 to-white/5 backdrop-blur-xl border border-white/30 rounded-2xl sm:rounded-3xl p-3 sm:p-4 md:p-6 lg:p-8 xl:p-10 mx-2 sm:mx-4 md:mx-6 lg:mx-0 shadow-xl shadow-black/20 group-hover:shadow-black/30 transition-all duration-300">
                        <!-- Optimized Hero Image -->
                        <div class="relative aspect-square overflow-hidden rounded-2xl">
                            <img src="{{ asset($heroImage) }}" 
                                 alt="Watopak professional shipping services from USA to Jamaica" 
                                 class="w-full h-full object-cover"
                                 loading="eager" width="600" height="600">
                            
                            <!-- Enhanced image overlay gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
                            
                            
                            <div class="absolute bottom-3 sm:bottom-4 lg:bottom-6 left-3 sm:left-4 lg:left-6 right-3 sm:right-4 lg:right-6 bg-white/95 backdrop-blur-xl rounded-2xl sm:rounded-3xl p-3 sm:p-4 lg:p-5 shadow-lg border border-white/30 transform transition-all duration-300 hover:scale-[1.01] hover:shadow-xl">
                                <div class="flex items-center gap-3 sm:gap-4 lg:gap-5">
                                    <div class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14 bg-gradient-to-br from-gray-800 to-black rounded-xl sm:rounded-2xl flex items-center justify-center shadow-md rotate-3 transform transition-all duration-300 hover:rotate-6 flex-shrink-0">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 lg:w-7 lg:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                        </svg>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-base sm:text-lg lg:text-xl font-extrabold text-gray-900 truncate">Watopak Logistics</p>
                                        <p class="text-xs sm:text-sm text-gray-600 font-medium">Try our services today</p>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                        
                        <!-- Enhanced decorative elements -->
                        <div class="absolute -top-6 -right-6 w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-full animate-bounce shadow-lg" style="animation-delay: 1s;"></div>
                        <div class="absolute -bottom-4 -left-4 w-8 h-8 bg-gradient-to-r from-secondary-500 to-pink-500 rounded-full animate-bounce shadow-lg" style="animation-delay: 2s;"></div>
                        <div class="absolute top-1/2 -right-2 w-6 h-6 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full animate-pulse shadow-lg"></div>
                    </div>
                    
                    <!-- Simplified background decorative shapes for better performance -->
                    <div class="absolute -inset-6 bg-gradient-to-r from-primary-600/20 to-secondary-600/20 rounded-3xl blur-2xl -z-10 animate-pulse-slow opacity-60"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Scroll Indicator with better accessibility -->
    <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 text-white/70 animate-bounce hidden md:block">
        <div class="flex flex-col items-center gap-3 group cursor-pointer" onclick="document.getElementById('how-it-works').scrollIntoView({behavior: 'smooth'})">
            <span class="text-sm font-medium group-hover:text-white transition-colors">Scroll to explore</span>
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white/60 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Hero Styles -->
<style>
/* Advanced Animations */
@keyframes gradient-x {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

@keyframes pulse-slow {
    0%, 100% { opacity: 0.4; }
    50% { opacity: 0.8; }
}

@keyframes float-slow {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(-20px) rotate(3deg); }
    66% { transform: translateY(10px) rotate(-2deg); }
}

@keyframes scale-x {
    0% { transform: scaleX(0); }
    100% { transform: scaleX(1); }
}

@keyframes wave {
    0% { transform: translateX(0) translateY(0); }
    50% { transform: translateX(-25%) translateY(-10px); }
    100% { transform: translateX(-50%) translateY(0); }
}

.animate-gradient-x {
    background-size: 200% auto;
    animation: gradient-x 6s ease infinite;
}

.animate-pulse-slow {
    animation: pulse-slow 8s ease-in-out infinite;
}

.animate-float-slow {
    animation: float-slow 12s ease-in-out infinite;
}

.animate-scale-x {
    animation: scale-x 2s ease-out 0.5s forwards;
}

.animate-wave {
    animation: wave 10s linear infinite;
}

/* Enhanced Glass morphism */
.backdrop-blur-2xl {
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
}

/* Advanced button effects */
.group:hover .transform {
    transform: translateY(-4px);
}

/* Improved responsive design */
@media (max-width: 640px) {
    h1 {
        font-size: 2.5rem !important;
        line-height: 1.1 !important;
    }
    
    .min-h-[80vh] {
        min-height: 70vh;
    }
    
    /* Reduce visual complexity on mobile */
    .backdrop-blur-2xl {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
}

/* Enhanced Performance optimizations */
.hero-image-container, 
.will-change-transform {
    will-change: transform;
    transform: translateZ(0);
    backface-visibility: hidden;
}

/* Reduce animation on mobile for better performance */
@media (max-width: 640px) {
    .animate-float-slow {
        animation-duration: 20s;
    }
    
    .animate-pulse-slow {
        animation-duration: 12s;
    }
}

/* Enhanced accessibility */
a:focus-visible, button:focus-visible {
    outline: 3px solid #60a5fa;
    outline-offset: 3px;
    border-radius: 8px;
    box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.5);
}

/* Reduce motion for users who prefer reduced motion */
@media (prefers-reduced-motion: reduce) {
    .animate-gradient-x,
    .animate-pulse-slow,
    .animate-float-slow,
    .animate-scale-x,
    .animate-wave,
    .animate-bounce,
    .group-hover\:translate-x-1,
    .group-hover\:translate-x-2,
    .hover\:-translate-y-1,
    .hover\:-translate-y-2 {
        animation: none !important;
        transition: none !important;
        transform: none !important;
    }
}

/* Custom scrollbar for webkit browsers */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, #60a5fa, #ef4444);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, #3b82f6, #dc2626);
}
</style>

<!-- Enhanced Hero JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize enhanced particles
    initializeEnhancedParticles();
    
    // Add advanced scroll-based animations
    initializeAdvancedScrollAnimations();
    
    // Initialize interactive elements
    initializeInteractiveElements();
});

function initializeEnhancedParticles() {
    if (typeof particlesJS !== 'undefined') {
        // Use fewer particles on mobile for better performance
        const isMobile = window.innerWidth < 768;
        const particleCount = isMobile ? 15 : 25;
        
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": particleCount,
                    "density": {
                        "enable": true,
                        "value_area": 1200
                    }
                },
                "color": {
                    "value": ["#5B9BD5", "#ef4444", "#34d399", "#a855f7"]
                },
                "shape": {
                    "type": "circle"
                },
                "opacity": {
                    "value": 0.4,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 0.8,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 8,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 1.5,
                        "size_min": 3,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 180,
                    "color": "#5B9BD5",
                    "opacity": 0.15,
                    "width": 1.5
                },
                "move": {
                    "enable": true,
                    "speed": 1.2,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "bubble"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "resize": true
                },
                "modes": {
                    "bubble": {
                        "distance": 250,
                        "size": 12,
                        "duration": 2.5,
                        "opacity": 0.8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 180,
                        "duration": 1.2
                    }
                }
            },
            "retina_detect": true
        });
    }
}

function initializeAdvancedScrollAnimations() {
    // Enhanced parallax effect
    let ticking = false;
    
    function updateAdvancedParallax() {
        const scrolled = window.pageYOffset;
        const heroSection = document.getElementById('hero');
        
        if (heroSection) {
            const heroHeight = heroSection.offsetHeight;
            const scrollProgress = Math.min(scrolled / heroHeight, 1);
            
            // Apply different parallax speeds to different elements - only to a limited number for performance
            const orbs = heroSection.querySelectorAll('.absolute > div.will-change-transform');
            orbs.forEach((orb, index) => {
                const speed = (index + 1) * 0.12;
                orb.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.03}deg)`;
            });
            
            // Fade out hero content as user scrolls - with reduced intensity
            // Exclude the stats card from scroll effects
            const mainContent = heroSection.querySelector('.container > .grid');
            if (mainContent) {
                mainContent.style.opacity = 1 - (scrollProgress * 0.3);
                
                // Apply transform only to text content, not the image side that contains stats card
                const textContent = mainContent.querySelector('.lg\\:col-span-7');
                if (textContent) {
                    textContent.style.transform = `translateY(${scrolled * 0.15}px)`;
                }
            }
        }
        
        ticking = false;
    }
    
    function requestAdvancedTick() {
        // Check for reduced motion preference and don't apply scroll effects if preferred
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        
        if (!ticking && window.innerWidth > 768 && !prefersReducedMotion) { // Only on desktop and if animation is allowed
            // Use requestAnimationFrame more efficiently
            if (window.requestIdleCallback) {
                window.requestIdleCallback(() => {
                    requestAnimationFrame(updateAdvancedParallax);
                });
            } else {
                requestAnimationFrame(updateAdvancedParallax);
            }
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestAdvancedTick, { passive: true });
}

function initializeInteractiveElements() {
    // Add hover effects to trust indicators
    const trustIndicators = document.querySelectorAll('[data-aos-delay="800"] .group');
    trustIndicators.forEach(indicator => {
        indicator.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        indicator.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Add ripple effect to buttons
    const buttons = document.querySelectorAll('a[class*="bg-gradient-to"]');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.3);
                transform: scale(0);
                animation: ripple 0.6s linear;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                pointer-events: none;
            `;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
}

// Add ripple animation keyframes
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
</script> 