@props([
    'slides' => [],                 // Array of slide data
    'height' => '600px',            // Height of the carousel
    'interval' => 6000,             // Autoplay interval in milliseconds
    'showControls' => true,         // Show/hide prev/next controls
    'showIndicators' => true,       // Show/hide indicators 
    'theme' => 'theme_color_primary-100', // Theme color class suffix
])

<div 
    x-data="carouselComponent({
        slides: {{ json_encode($slides) }},
        interval: {{ $interval }},
        showControls: {{ json_encode($showControls) }},
        showIndicators: {{ json_encode($showIndicators) }}
    })"
    x-init="init()"
    @keydown.arrow-left.prevent="prevSlide()"
    @keydown.arrow-right.prevent="nextSlide()"
    @touchstart="handleTouchStart"
    @touchend="handleTouchEnd"
    @touchstart.passive="showControlsTemporarily"
    class="group relative w-full overflow-hidden carousel-container" 
    style="height: {{ $height }};"
    role="region"
    aria-roledescription="carousel"
    aria-label="Content carousel"
    tabindex="0"
>
    <!-- Screen reader live region for accessibility -->
    <div id="carousel-live-region" class="sr-only" aria-live="polite"></div>
    
    <!-- Carousel slides container with sliding track -->
    <div class="relative h-full overflow-hidden">
        <!-- Sliding track that moves with transitions -->
        <div 
            class="carousel-track h-full flex transition-transform duration-700 ease-in-out"
            :style="`transform: translateX(-${currentIndex * 100}%); --current-index: ${currentIndex};`"
            :class="slideDirection === 'left' ? 'slide-left' : 'slide-right'"
        >
            <template x-for="(slide, index) in slides" :key="index">
                <div class="carousel-slide w-full h-full flex-shrink-0">
                    <template x-if="slide.layout_style_name === 'hero'">
                        <!-- Enhanced Hero Layout - Improved mobile responsiveness -->
                        <div class="w-full h-full flex items-center relative overflow-hidden">
                            <!-- Background image container -->
                            <div class="absolute inset-0" 
                                 :style="slide.bg_image ? `background-image: url('${slide.bg_image}'); background-size: cover; background-position: center center; background-repeat: no-repeat;` : ''"
                                 :class="slide.bg_image ? 'bg-cover bg-center' : 'bg-{{ $theme }}'">
                            </div>
                            
                            <!-- Customizable overlay -->
                            <div class="absolute inset-0 z-10" 
                                 :class="slide.overlay_class || 'bg-{{ $theme }}/60'"
                                 :style="slide.overlay_style || ''">
                            </div>
                            
                            <!-- Content container -->
                            <div class="container mx-auto px-4 md:px-32 relative z-20">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
                                    <!-- Text Content - Better mobile spacing -->
                                    <div class="space-y-6 md:space-y-8 relative z-10 py-8 md:p-0">
                                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                                            <!-- Support for new split title format -->
                                            <template x-if="slide.titlePartA">
                                                <span>
                                                    <span :class="slide.titlePartAClass || 'text-white'" x-text="slide.titlePartA"></span>
                                                    <span x-if="slide.titlePartB" :class="slide.titlePartBClass || 'text-white'" x-text="slide.titlePartB"></span>
                                                </span>
                                            </template>
                                            
                                            <!-- Fallback for legacy title format -->
                                            <template x-if="!slide.titlePartA && slide.title">
                                                <span class="text-white" x-text="slide.title"></span>
                                            </template>
                                        </h1>
                                        <p x-text="slide.text" class="text-base sm:text-lg md:text-xl text-white/90 max-w-md md:max-w-xl"></p>
                                        <div class="flex flex-wrap gap-3 md:gap-4">
                                            <template x-if="slide.btn_text">
                                                <a :href="slide.btn_link" class="btn-primary px-6 sm:px-8 py-3 sm:py-4 rounded-lg bg-white text-{{ $theme }} font-semibold shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 text-sm sm:text-base w-full sm:w-auto text-center">
                                                    <span x-text="slide.btn_text"></span>
                                                </a>
                                            </template>
                                            <a href="#how-it-works" class="btn-secondary px-6 sm:px-8 py-3 sm:py-4 rounded-lg border-2 border-white text-white hover:bg-white hover:text-{{ $theme }} font-semibold transition-all duration-300 transform hover:-translate-y-1 text-sm sm:text-base w-full sm:w-auto text-center">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <!-- Image with enhanced styling - Now visible on all screen sizes -->
                                    <div class="relative transform transition-all duration-700 hover:scale-[1.02] mt-6 md:mt-0">
                                        <div class="absolute -top-10 -right-10 w-16 h-16 sm:w-32 sm:h-32 md:w-64 md:h-64 bg-white opacity-10 rounded-full blur-3xl"></div>
                                        <div class="absolute -bottom-10 -left-10 w-16 h-16 sm:w-32 sm:h-32 md:w-64 md:h-64 bg-white opacity-10 rounded-full blur-3xl"></div>
                                        <div class="bg-white/5 backdrop-blur-xs   shadow-2xl   rounded-2xl">
                                            <img :src="slide.image" class="rounded-xl shadow-2xl w-full h-auto object-cover relative z-10 border border-white/10 max-h-[250px] sm:max-h-[350px] md:max-h-[400px] lg:max-h-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>

                    <template x-if="!slide.layout_style_name || slide.layout_style_name !== 'hero'">
                        <!-- Standard slide layout - Improved mobile styles -->
                        <div class="w-full h-full">
                            <img :src="slide.image" :alt="slide.alt || ''" class="w-full h-full object-cover">
                            
                            <!-- Content overlay with customizable class -->
                            <div class="absolute inset-0 flex items-center px-4 md:px-32" 
                                 :class="slide.overlay_class || 'bg-gradient-to-r from-gray-900/80 to-gray-900/30'"
                                 :style="slide.overlay_style || ''">
                                <div class="container mx-auto px-4 md:px-6">
                                    <div :class="{
                                        'md:max-w-3xl p-4 md:p-6': !slide.position || slide.position === 'left',
                                        'mx-auto text-center p-4 md:p-6 max-w-3xl': slide.position === 'center',
                                        'ml-auto text-right md:max-w-3xl p-4 md:p-6': slide.position === 'right'
                                    }">
                                        <!-- Bold headline with improved mobile sizing -->
                                        <h2 class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl font-extrabold text-white mb-4 md:mb-6 leading-tight tracking-tight text-shadow">
                                            <!-- Support for new split title format -->
                                            <template x-if="slide.titlePartA">
                                                <span class="block py-2">
                                                    <span :class="slide.titlePartAClass || 'text-{{ $theme }}'" x-text="slide.titlePartA"></span>
                                                    <span x-if="slide.titlePartB" :class="slide.titlePartBClass || 'text-{{ $theme }}'" x-text="slide.titlePartB"></span>
                                                </span>
                                            </template>
                                            
                                            <!-- Fallback for legacy title format -->
                                            <template x-if="!slide.titlePartA && slide.title">
                                                <span class="block py-2 text-{{ $theme }}" x-text="slide.title"></span>
                                            </template>
                                        </h2>
                                        
                                        <!-- Optimized subheading with better spacing -->
                                        <p 
                                            x-text="slide.text" 
                                            :class="{
                                                'text-base sm:text-xl md:text-2xl text-white/90 mb-6 md:mb-8 max-w-2xl font-light leading-relaxed text-shadow-sm': true,
                                                'mx-auto': slide.position === 'center'
                                            }"
                                        ></p>
                                        
                                        <!-- Enhanced CTA button with better mobile layout -->
                                        <template x-if="slide.btn_text">
                                            <div :class="{
                                                'mt-6 md:mt-10 flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4': true,
                                                'justify-center': slide.position === 'center',
                                                'justify-end': slide.position === 'right'
                                            }">
                                                <a 
                                                    :href="slide.btn_link" 
                                                    class="inline-flex items-center justify-center capitalize font-semibold bg-{{ $theme }} hover:bg-theme_color_primary-200 text-white py-3 md:py-4 px-4 md:px-6 rounded-lg shadow-xl text-sm md:text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto"
                                                    x-text="slide.btn_text"
                                                ></a>
                                                
                                                <!-- Learn More link styled as button for consistency -->
                                                <a 
                                                    href="#how-it-works" 
                                                    class="inline-flex items-center justify-center capitalize font-semibold border-2 border-white hover:border-{{ $theme }} text-white hover:text-{{ $theme }} py-3 md:py-4 px-4 md:px-6 rounded-lg transition-all duration-300 text-sm md:text-lg w-full sm:w-auto"
                                                >
                                                    Learn More <i class="fas fa-arrow-right ml-2 text-xs md:text-sm"></i>
                                                </a>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </template>
        </div>
    </div>
    
    <!-- Controls - Improved mobile visibility and touch targets -->
    <template x-if="showControls">
        <div class="carousel-controls">
            <!-- Previous button with larger touch area on mobile -->
            <button 
                @click.prevent="prevSlide()" 
                @mouseenter="isPaused = true" 
                @mouseleave="isPaused = false"
                class="fixed-carousel-control left-1 sm:left-4 opacity-70 group-hover:opacity-100 focus:opacity-100 p-2"
                aria-label="Previous slide"
                role="button"
                tabindex="0"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            
            <!-- Next button with larger touch area on mobile -->
            <button 
                @click.prevent="nextSlide()" 
                @mouseenter="isPaused = true" 
                @mouseleave="isPaused = false"
                class="fixed-carousel-control right-1 sm:right-4 opacity-70 group-hover:opacity-100 focus:opacity-100 p-2"
                aria-label="Next slide"
                role="button"
                tabindex="0"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </template>
    
    <!-- Indicators Panel - Enlarged for mobile touch -->
    <div 
        x-show="showIndicators"
        class="carousel-indicators-container"
        role="tablist"
    >
        <div class="indicators-panel">
            <template x-for="(slide, index) in slides" :key="index">
                <button
                    @click.prevent="goToSlide(index)"
                    :class="{ 'active-indicator': currentIndex === index }"
                    class="carousel-indicator w-3 h-3 md:w-4 md:h-4 mx-1.5 md:mx-2"
                    :aria-label="`Go to slide ${index + 1}`"
                    role="tab"
                    :aria-selected="currentIndex === index"
                    tabindex="0"
                ></button>
            </template>
        </div>
    </div>
</div> 