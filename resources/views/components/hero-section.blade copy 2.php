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
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800" id="hero">
    <!-- Advanced Background Elements -->
    <div class="absolute inset-0">
        <!-- Dynamic Gradient Mesh Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary-600/30 via-secondary-600/20 to-primary-500/30 animate-gradient-x"></div>
        
        <!-- Animated Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)] animate-pulse-slow"></div>
        
        <!-- Floating Orbs with Enhanced Animation -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-primary-500/40 to-secondary-500/40 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-secondary-500/30 to-primary-500/30 rounded-full blur-3xl animate-float-slow" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-full blur-2xl animate-pulse-slow" style="animation-delay: 1s;"></div>
        
        <!-- Particle Container -->
        <div id="particles-js" class="absolute inset-0 opacity-50"></div>
        
        <!-- Animated Wave Pattern -->
        <div class="absolute bottom-0 left-0 w-full h-24 overflow-hidden">
            <svg class="absolute bottom-0 w-full h-full" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-white/5 animate-wave"></path>
            </svg>
        </div>
    </div>
    
    <!-- Content Container -->
    <div class="container relative z-10 mx-auto px-4 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center min-h-[80vh]">
            <!-- Text Content - Left Side -->
            <div class="lg:col-span-7 text-center lg:text-left space-y-8">
                <!-- Premium Badge with Enhanced Animation -->
                <div class="inline-flex items-center gap-3 px-6 py-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white text-sm font-medium shadow-lg hover:bg-white/15 transition-all duration-300 group" data-aos="fade-up">
                    <div class="w-3 h-3 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full animate-pulse shadow-lg shadow-green-400/50"></div>
                    <span class="font-semibold tracking-wide">{{ $badgeText }}</span>
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>

                <!-- Enhanced Main Headlines -->
                <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="text-5xl lg:text-7xl xl:text-8xl font-bold text-white leading-tight">
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
                    <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed font-light">
                        {!! $description !!}
                    </p>
                </div>

                <!-- Enhanced CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start" data-aos="fade-up" data-aos-delay="600">
                    <!-- Primary CTA with Advanced Effects -->
                    <a href="{{ $ctaButtonUrl }}" 
                       class="group relative inline-flex items-center justify-center px-10 py-5 bg-gradient-to-r from-secondary-600 to-secondary-500 hover:from-secondary-700 hover:to-secondary-600 text-white font-bold text-lg rounded-2xl shadow-2xl shadow-secondary-500/25 hover:shadow-secondary-500/40 transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
                        <span class="relative z-10 flex items-center gap-3">
                            {{ $ctaButtonText }}
                            <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                        <!-- Multiple shine effects -->
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-out"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <!-- Secondary CTA with Glass Effect -->
                    <a href="{{ $secondaryButtonUrl }}" 
                       class="group inline-flex items-center justify-center px-10 py-5 bg-white/10 backdrop-blur-md border-2 border-white/20 hover:border-white/40 text-white font-semibold text-lg rounded-2xl hover:bg-white/20 transition-all duration-300 hover:-translate-y-1">
                        <span class="flex items-center gap-3">
                            {{ $secondaryButtonText }}
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Enhanced Trust Indicators -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-8 pt-8 text-blue-200" data-aos="fade-up" data-aos-delay="800">
                    <div class="flex items-center gap-3 group">
                        <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center shadow-lg shadow-green-500/30">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-semibold text-lg block">10,000+</span>
                            <span class="text-sm font-medium opacity-80">Trusted Customers</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 group">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center shadow-lg shadow-blue-500/30">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-semibold text-lg block">5-7 Days</span>
                            <span class="text-sm font-medium opacity-80">Fast Delivery</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 group">
                        <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center shadow-lg shadow-purple-500/30">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-semibold text-lg block">100%</span>
                            <span class="text-sm font-medium opacity-80">Insured Packages</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Image Content - Right Side -->
            <div class="lg:col-span-5 relative" data-aos="zoom-in" data-aos-delay="400">
                <!-- Main Image Container with Advanced Effects -->
                <div class="relative group">
                    <!-- Glass morphism container with enhanced effects -->
                    <div class="relative bg-gradient-to-br from-white/20 to-white/5 backdrop-blur-2xl border border-white/30 rounded-3xl p-8 shadow-2xl shadow-black/20 group-hover:shadow-black/40 transition-all duration-500">
                        <!-- Hero Image with Enhanced Effects -->
                        <div class="relative aspect-square overflow-hidden rounded-2xl">
                            <img src="{{ asset($heroImage) }}" 
                                 alt="Watopak professional shipping services from USA to Jamaica" 
                                 class="w-full h-full object-cover hover:scale-110 transition-transform duration-700 ease-out">
                            
                            <!-- Enhanced image overlay gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
                            
                            <!-- Floating stats card with enhanced design -->
                            <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-lg rounded-2xl p-6 shadow-2xl transform hover:scale-105 transition-all duration-300">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center shadow-lg">
                                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-lg font-bold text-gray-900">99.9% Success Rate</p>
                                            <p class="text-sm text-gray-600">Professional Delivery</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-secondary-600">4.9/5</div>
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Animated border effect -->
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-primary-500 via-secondary-500 to-primary-500 p-1 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <div class="w-full h-full bg-gray-900 rounded-2xl"></div>
                            </div>
                        </div>
                        
                        <!-- Enhanced decorative elements -->
                        <div class="absolute -top-6 -right-6 w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-full animate-bounce shadow-lg" style="animation-delay: 1s;"></div>
                        <div class="absolute -bottom-4 -left-4 w-8 h-8 bg-gradient-to-r from-secondary-500 to-pink-500 rounded-full animate-bounce shadow-lg" style="animation-delay: 2s;"></div>
                        <div class="absolute top-1/2 -right-2 w-6 h-6 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full animate-pulse shadow-lg"></div>
                    </div>
                    
                    <!-- Enhanced background decorative shapes -->
                    <div class="absolute -inset-6 bg-gradient-to-r from-primary-600/30 to-secondary-600/30 rounded-3xl blur-3xl -z-10 animate-pulse-slow opacity-70"></div>
                    <div class="absolute -inset-8 bg-gradient-to-r from-secondary-600/20 to-primary-600/20 rounded-3xl blur-2xl -z-20 animate-float-slow"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/70 animate-bounce">
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
        font-size: 3rem !important;
        line-height: 1.1 !important;
    }
}

/* Performance optimizations */
.hero-image-container {
    will-change: transform;
    transform: translateZ(0);
    backface-visibility: hidden;
}

/* Enhanced accessibility */
a:focus-visible {
    outline: 3px solid #60a5fa;
    outline-offset: 3px;
    border-radius: 8px;
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
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 30,
                    "density": {
                        "enable": true,
                        "value_area": 1000
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
            
            // Apply different parallax speeds to different elements
            const orbs = heroSection.querySelectorAll('.absolute > div');
            orbs.forEach((orb, index) => {
                const speed = (index + 1) * 0.15;
                orb.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.05}deg)`;
            });
            
            // Fade out hero content as user scrolls
            const content = heroSection.querySelector('.container');
            if (content) {
                content.style.opacity = 1 - (scrollProgress * 0.5);
                content.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        }
        
        ticking = false;
    }
    
    function requestAdvancedTick() {
        if (!ticking && window.innerWidth > 768) { // Only on desktop
            requestAnimationFrame(updateAdvancedParallax);
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