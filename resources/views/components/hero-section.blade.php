@props([
    'headline1' => 'Custom Software Development',
    'headline2' => 'Transform Your Business with Tailored Solutions',
    'description' => 'We design and develop custom websites, web applications, mobile apps, and APIs that solve specific business challenges and drive growth. <span class="text-theme_color_accent-100">Professional service, guaranteed results.</span>',
    'ctaButtonText' => 'Get Started',
    'ctaButtonUrl' => '#contact',
    'secondaryButtonText' => 'Our Services',
    'secondaryButtonUrl' => '#services',
    'heroImage' => 'images/logo-no-text.png',
    'badgeText' => 'VorkklocTech - Custom Software Solutions',
    'sliderImages' => []
])

<!-- Modern Professional Developer Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950 px-4 sm:px-6" id="hero">
    <!-- Advanced Background Elements -->
    <div class="absolute inset-0">
        <!-- Animated Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(59,130,246,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(6,182,212,0.03)_1px,transparent_1px)] bg-[size:80px_80px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>
        
        <!-- Floating Tech Orbs with Professional Glow -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 rounded-full blur-3xl animate-float-slow will-change-transform"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-cyan-500/8 to-purple-500/8 rounded-full blur-3xl animate-float-slow" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 right-1/3 w-64 h-64 bg-gradient-to-r from-indigo-500/6 to-blue-500/6 rounded-full blur-3xl animate-float-slow" style="animation-delay: 4s;"></div>
        
        <!-- Code-inspired Pattern -->
        <div class="absolute inset-0 opacity-[0.03]" aria-hidden="true">
            <div class="absolute top-20 left-10 font-mono text-xs text-cyan-400/30">const innovation = true;</div>
            <div class="absolute top-40 right-20 font-mono text-xs text-blue-400/30">function buildSolution() {</div>
            <div class="absolute bottom-40 left-20 font-mono text-xs text-purple-400/30">return success;</div>
            <div class="absolute top-60 left-1/3 font-mono text-xs text-indigo-400/30">class SoftwareDev {</div>
            <div class="absolute bottom-60 right-1/3 font-mono text-xs text-cyan-400/30">async deploy() {}</div>
        </div>
        
        <!-- Particle Container -->
        <div id="particles-js" class="absolute inset-0 opacity-30" aria-hidden="true"></div>
        
        <!-- Professional Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-slate-900/50 to-slate-950"></div>
    </div>
    
    <!-- Content Container -->
    <div class="container relative z-10 mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 py-12 sm:py-16 md:py-20 lg:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 lg:gap-16 items-center min-h-[75vh] sm:min-h-[80vh]">
            <!-- Text Content - Left Side -->
            <div class="lg:col-span-7 text-center lg:text-left space-y-6 sm:space-y-8">
                <!-- Professional Badge -->
                <div class="inline-flex items-center gap-2 sm:gap-3 px-4 sm:px-6 py-2.5 sm:py-3 bg-gradient-to-r from-blue-500/10 via-cyan-500/10 to-blue-500/10 backdrop-blur-md border border-blue-500/20 rounded-full text-cyan-400 text-xs sm:text-sm font-medium shadow-lg shadow-blue-500/10 hover:border-blue-500/30 transition-all duration-300 group" data-aos="fade-up">
                    <div class="w-2 h-2 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full animate-pulse shadow-lg shadow-cyan-400/50"></div>
                    <span class="font-semibold tracking-wide">{{ $badgeText }}</span>
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>

                <!-- Modern Headlines -->
                <div class="space-y-3" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight tracking-tight">
                        <span class="block relative mb-2">
                            {{ $headline1 }}
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 via-cyan-400 to-blue-400 group-hover:w-full transition-all duration-1000"></span>
                        </span>
                        <span class="block bg-gradient-to-r from-blue-400 via-cyan-400 to-blue-500 bg-clip-text text-transparent animate-gradient-x font-extrabold">
                            {{ $headline2 }}
                        </span>
                    </h1>
                </div>

                <!-- Professional Description -->
                <div class="max-w-2xl mx-auto lg:mx-0" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-sm sm:text-base lg:text-lg text-slate-300 leading-relaxed font-light">
                        {!! $description !!}
                    </p>
                </div>

                <!-- Modern CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mt-8 md:mt-10" data-aos="fade-up" data-aos-delay="300">
                    <!-- Primary CTA -->
                    <a href="{{ $ctaButtonUrl }}" 
                       class="group relative inline-flex items-center justify-center px-8 sm:px-10 md:px-12 py-4 sm:py-5 bg-gradient-to-r from-blue-600 via-blue-500 to-cyan-500 hover:from-blue-700 hover:via-blue-600 hover:to-cyan-600 text-white font-semibold text-base sm:text-lg rounded-xl shadow-xl shadow-blue-500/25 hover:shadow-blue-500/40 transition-all duration-300 transform hover:-translate-y-1 hover:scale-[1.02] overflow-hidden focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-slate-900">
                        <span class="relative z-10 flex items-center gap-3">
                            {{ $ctaButtonText }}
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-out"></div>
                    </a>

                    <!-- Secondary CTA -->
                    <a href="{{ $secondaryButtonUrl }}" 
                       class="group inline-flex items-center justify-center px-8 sm:px-10 md:px-12 py-4 sm:py-5 bg-slate-800/50 backdrop-blur-md border-2 border-slate-700/50 hover:border-slate-600 text-white font-semibold text-base sm:text-lg rounded-xl hover:bg-slate-800/70 transition-all duration-300 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-slate-600 focus:ring-offset-2 focus:ring-offset-slate-900">
                        <span class="flex items-center gap-3">
                            {{ $secondaryButtonText }}
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Trust Indicators - Customer Friendly -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 sm:gap-6 pt-6 sm:pt-8" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center gap-2 text-slate-300 text-sm">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Transparent Pricing</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-300 text-sm">
                        <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>No Hidden Fees</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-300 text-sm">
                        <svg class="w-5 h-5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Quick Response</span>
                    </div>
                </div>
            </div>

            <!-- Professional Code Visual - Right Side -->
            <div class="lg:col-span-5 relative" data-aos="zoom-in" data-aos-delay="200">
                <div class="relative group">
                    <!-- Glass morphism container -->
                    <div class="relative bg-gradient-to-br from-slate-800/40 via-slate-800/30 to-slate-900/40 backdrop-blur-2xl border border-slate-700/50 rounded-2xl sm:rounded-3xl p-6 sm:p-8 shadow-2xl shadow-black/50 group-hover:shadow-blue-500/20 transition-all duration-500">
                        <!-- Code Editor Visual -->
                        <div class="relative aspect-square overflow-hidden rounded-xl bg-slate-950/80 border border-slate-700/50" id="hero-code-visual">
                            <!-- Code Editor Header -->
                            <div class="absolute top-0 left-0 right-0 h-10 bg-slate-900/80 border-b border-slate-700/50 flex items-center gap-2 px-4 z-20">
                                <div class="flex gap-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500/80"></div>
                                </div>
                                <div class="flex-1 text-center">
                                    <span class="text-xs text-slate-400 font-mono">app.js</span>
                                </div>
                            </div>
                            
                            <!-- Code Content -->
                            <div class="absolute inset-0 pt-12 pb-4 px-4 sm:px-6 overflow-hidden">
                                <div class="space-y-3 font-mono text-xs sm:text-sm">
                                    <div class="flex gap-4 text-slate-500">
                                        <span class="text-slate-600">1</span>
                                        <span class="text-blue-400">const</span> <span class="text-cyan-400">buildSolution</span> <span class="text-slate-400">=</span> <span class="text-purple-400">async</span> <span class="text-slate-400">()</span> <span class="text-slate-400">=&gt;</span> <span class="text-slate-400">{</span>
                                    </div>
                                    <div class="flex gap-4 text-slate-500 pl-6">
                                        <span class="text-slate-600">2</span>
                                        <span class="text-blue-400">const</span> <span class="text-cyan-400">innovation</span> <span class="text-slate-400">=</span> <span class="text-green-400">true</span><span class="text-slate-400">;</span>
                                    </div>
                                    <div class="flex gap-4 text-slate-500 pl-6">
                                        <span class="text-slate-600">3</span>
                                        <span class="text-blue-400">const</span> <span class="text-cyan-400">quality</span> <span class="text-slate-400">=</span> <span class="text-green-400">'excellent'</span><span class="text-slate-400">;</span>
                                    </div>
                                    <div class="flex gap-4 text-slate-500 pl-6">
                                        <span class="text-slate-600">4</span>
                                        <span class="text-purple-400">return</span> <span class="text-cyan-400">innovation</span> <span class="text-slate-400">&&</span> <span class="text-cyan-400">quality</span><span class="text-slate-400">;</span>
                                    </div>
                                    <div class="flex gap-4 text-slate-500">
                                        <span class="text-slate-600">5</span>
                                        <span class="text-slate-400">};</span>
                                    </div>
                                    <div class="flex gap-4 text-slate-500 pt-4">
                                        <span class="text-slate-600">6</span>
                                        <span class="text-slate-400">//</span> <span class="text-slate-500 italic">Building the future, one line at a time</span>
                                    </div>
                                </div>
                                
                                <!-- Animated Cursor -->
                                <div class="absolute bottom-8 left-16 w-2 h-5 bg-cyan-400 animate-pulse"></div>
                            </div>
                            
                            <!-- Subtle Background Pattern -->
                            <div class="absolute inset-0 opacity-5">
                                <div class="absolute inset-0" style="background-image: 
                                    linear-gradient(30deg, transparent 40%, rgba(59, 130, 246, 0.1) 50%, transparent 60%),
                                    linear-gradient(60deg, transparent 40%, rgba(6, 182, 212, 0.1) 50%, transparent 60%);
                                    background-size: 60px 60px, 40px 40px;"></div>
                            </div>
                        </div>
                        
                        <!-- Floating Tech Icons -->
                        <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 animate-float-slow">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <div class="absolute -bottom-4 -left-4 w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center shadow-lg shadow-purple-500/30 animate-float-slow" style="animation-delay: 1s;">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Glow Effect -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600/20 via-cyan-500/20 to-purple-600/20 rounded-3xl blur-2xl -z-10 opacity-60 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Professional Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-slate-400 animate-bounce hidden md:block">
        <div class="flex flex-col items-center gap-2 group cursor-pointer" onclick="document.getElementById('features').scrollIntoView({behavior: 'smooth'})">
            <span class="text-xs font-medium group-hover:text-white transition-colors uppercase tracking-wider">Explore</span>
            <div class="w-6 h-10 border-2 border-slate-600 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-slate-400 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Professional Styles -->
<style>
@keyframes gradient-x {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

@keyframes float-slow {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(-15px) rotate(2deg); }
    66% { transform: translateY(10px) rotate(-2deg); }
}

.animate-gradient-x {
    background-size: 200% auto;
    animation: gradient-x 8s ease infinite;
}

.animate-float-slow {
    animation: float-slow 15s ease-in-out infinite;
}

/* Professional Code Editor Styling */
#hero-code-visual {
    font-family: 'JetBrains Mono', 'Fira Code', 'Consolas', monospace;
}

/* Enhanced Glass Morphism */
.backdrop-blur-2xl {
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
}

/* Responsive Typography */
@media (max-width: 640px) {
    h1 {
        font-size: 1.75rem !important;
        line-height: 1.3 !important;
    }
}

/* Performance Optimizations */
.will-change-transform {
    will-change: transform;
    transform: translateZ(0);
    backface-visibility: hidden;
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
    .animate-gradient-x,
    .animate-float-slow,
    .animate-bounce,
    .animate-pulse {
        animation: none !important;
    }
    
    .group-hover\:translate-x-1,
    .hover\:-translate-y-1,
    .hover\:scale-\[1\.02\] {
        transition: none !important;
        transform: none !important;
    }
}

/* Focus States */
a:focus-visible, button:focus-visible {
    outline: 2px solid #3b82f6;
    outline-offset: 2px;
    border-radius: 8px;
}
</style>

<!-- Enhanced Hero JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    initializeEnhancedParticles();
    initializeAdvancedScrollAnimations();
});

function initializeEnhancedParticles() {
    if (typeof particlesJS !== 'undefined') {
        const isMobile = window.innerWidth < 768;
        const particleCount = isMobile ? 20 : 30;
        
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": particleCount,
                    "density": {
                        "enable": true,
                        "value_area": 1000
                    }
                },
                "color": {
                    "value": ["#3b82f6", "#06b6d4", "#8b5cf6"]
                },
                "shape": {
                    "type": "circle"
                },
                "opacity": {
                    "value": 0.3,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 0.6,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 6,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 1.2,
                        "size_min": 2,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#3b82f6",
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
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 200,
                        "line_linked": {
                            "opacity": 0.2
                        }
                    },
                    "push": {
                        "particles_nb": 3
                    }
                }
            },
            "retina_detect": true
        });
    }
}

function initializeAdvancedScrollAnimations() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion || window.innerWidth < 768) return;
    
    let ticking = false;
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        const heroSection = document.getElementById('hero');
        
        if (heroSection) {
            const orbs = heroSection.querySelectorAll('.animate-float-slow');
            orbs.forEach((orb, index) => {
                const speed = (index + 1) * 0.08;
                orb.style.transform = `translateY(${scrolled * speed}px)`;
            });
        }
        
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
