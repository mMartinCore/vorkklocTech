@props([
    'headline1' => 'Shop Globally,',
    'headline2' => 'Deliver Locally',
    'description' => 'Get your personal USA mailbox address and shop from your favorite online stores with easy shipping to Jamaica. <span class="text-theme_color_accent-100">No hassle, just reliable delivery.</span>',
    'ctaButtonText' => 'Get Started',
    'ctaButtonUrl' => '#how-it-works',
    'secondaryButtonText' => 'View Rates',
    'secondaryButtonUrl' => '',
    'heroImage' => 'images/watopak-Logistics-hero.png',
    'badgeText' => 'Premium USA to Jamaica Shipping'
])

<!-- Modern Watopak Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800" id="hero">
    <!-- Modern Background Elements -->
    <div class="absolute inset-0">
        <!-- Gradient Mesh Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-purple-600/10 to-teal-600/20"></div>
        
        <!-- Modern Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>
        
        <!-- Floating Orbs -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500/30 to-purple-500/30 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-teal-500/20 to-blue-500/20 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 2s;"></div>
        
        <!-- Particle Container -->
        <div id="particles-js" class="absolute inset-0 opacity-40"></div>
    </div>
    
    <!-- Content Container -->
    <div class="container relative z-10 mx-auto px-4 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center min-h-[80vh]">
            <!-- Text Content - Left Side -->
            <div class="lg:col-span-7 text-center lg:text-left space-y-8">
                <!-- Premium Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white text-sm font-medium shadow-lg hover:bg-white/15 transition-all duration-300" data-aos="fade-up">
                    <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                    <span>{{ $badgeText }}</span>
                    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>

                <!-- Main Headlines -->
                <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="text-5xl lg:text-7xl font-bold text-white leading-tight">
                        <span class="block">{{ $headline1 }}</span>
                        <span class="block bg-gradient-to-r from-blue-400 via-purple-400 to-teal-400 bg-clip-text text-transparent animate-gradient-x">{{ $headline2 }}</span>
                    </h1>
                </div>

                <!-- Description -->
                <div class="max-w-xl mx-auto lg:mx-0" data-aos="fade-up" data-aos-delay="400">
                    <p class="text-xl text-blue-100 leading-relaxed">
                        {!! $description !!}
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start" data-aos="fade-up" data-aos-delay="600">
                    <!-- Primary CTA -->
                    <a href="{{ $ctaButtonUrl }}" 
                       class="group relative inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-xl hover:shadow-2xl hover:shadow-blue-500/25 transition-all duration-300 transform hover:-translate-y-1">
                        <span class="relative z-10 flex items-center gap-2">
                            {{ $ctaButtonText }}
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                        <!-- Animated gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <!-- Shine effect -->
                        <div class="absolute inset-0 rounded-xl overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        </div>
                    </a>

                    <!-- Secondary CTA -->
                    <a href="{{ $secondaryButtonUrl }}" 
                       class="group inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold rounded-xl hover:bg-white/20 transition-all duration-300">
                        <span class="flex items-center gap-2">
                            {{ $secondaryButtonText }}
                            <svg class="w-4 h-4 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-6 pt-8 text-blue-200" data-aos="fade-up" data-aos-delay="800">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-medium">Trusted by 10,000+ customers</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-medium">5-7 day delivery</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-medium">Package insurance</span>
                    </div>
                </div>
            </div>

            <!-- Image Content - Right Side -->
            <div class="lg:col-span-5 relative" data-aos="zoom-in" data-aos-delay="400">
                <!-- Main Image Container -->
                <div class="relative">
                    <!-- Glass morphism container -->
                    <div class="relative bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 shadow-2xl">
                        <!-- Hero Image -->
                        <div class="relative aspect-square overflow-hidden rounded-2xl">
                            <img src="{{ asset($heroImage) }}" 
                                 alt="Watopak professional shipping services from USA to Jamaica" 
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-700 ease-out">
                            
                            <!-- Image overlay gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            
                            <!-- Floating stats card -->
                            <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-md rounded-xl p-4 shadow-lg">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-900">99.9% Delivery Success</p>
                                        <p class="text-xs text-gray-600">Professional Service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Decorative elements -->
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
                        <div class="absolute -bottom-2 -left-2 w-6 h-6 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full animate-bounce" style="animation-delay: 2s;"></div>
                    </div>
                    
                    <!-- Background decorative shapes -->
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-600/20 to-purple-600/20 rounded-3xl blur-2xl -z-10 animate-pulse-slow"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/60 animate-bounce">
        <div class="flex flex-col items-center gap-2">
            <span class="text-sm font-medium">Scroll to explore</span>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </div>
</section>

<!-- Modern Hero Styles -->
<style>
/* Modern Animations */
@keyframes gradient-x {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

@keyframes pulse-slow {
    0%, 100% { opacity: 0.5; }
    50% { opacity: 0.8; }
}

.animate-gradient-x {
    background-size: 200% auto;
    animation: gradient-x 4s ease infinite;
}

.animate-pulse-slow {
    animation: pulse-slow 6s ease-in-out infinite;
}

/* Glass morphism enhancements */
.backdrop-blur-lg {
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
}

/* Button hover effects */
.group:hover .transform {
    transform: translateY(-2px);
}

/* Improved responsive text */
@media (max-width: 640px) {
    h1 {
        font-size: 2.5rem !important;
        line-height: 1.1 !important;
    }
}

/* Performance optimizations */
.hero-image-container {
    will-change: transform;
    transform: translateZ(0);
}

/* Enhanced focus styles for accessibility */
a:focus-visible {
    outline: 2px solid #60a5fa;
    outline-offset: 2px;
}
</style>

<!-- Hero JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize particles if available
    initializeModernParticles();
    
    // Add scroll-based animations
    initializeScrollAnimations();
});

function initializeModernParticles() {
    if (typeof particlesJS !== 'undefined') {
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 20,
                    "density": {
                        "enable": true,
                        "value_area": 1000
                    }
                },
                "color": {
                    "value": ["#60a5fa", "#a78bfa", "#34d399"]
                },
                "shape": {
                    "type": "circle"
                },
                "opacity": {
                    "value": 0.3,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 0.5,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 6,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 1,
                        "size_min": 2,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#60a5fa",
                    "opacity": 0.1,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
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
                        "distance": 200,
                        "size": 8,
                        "duration": 2,
                        "opacity": 0.5,
                        "speed": 2
                    },
                    "repulse": {
                        "distance": 150,
                        "duration": 0.8
                    }
                }
            },
            "retina_detect": true
        });
    }
}

function initializeScrollAnimations() {
    // Smooth parallax effect for background elements
    let ticking = false;
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;
        
        const parallaxElements = document.querySelectorAll('#hero .absolute');
        parallaxElements.forEach((element, index) => {
            const speed = (index + 1) * 0.1;
            element.style.transform = `translateY(${rate * speed}px)`;
        });
        
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestTick, { passive: true });
}
</script> 