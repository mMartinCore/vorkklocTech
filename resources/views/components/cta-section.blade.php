@props([
    'title' => 'Ready to Transform Your Business?', 
    'subtitle' => 'Let us develop custom software solutions that increase efficiency and productivity for your business',
    'buttonText' => 'Get Started',
    'buttonUrl' => '#contact',
    'secondButtonText' => null,
    'secondButtonUrl' => null,
    'showStats' => true
])

{{-- Use site theme colors --}}
<style>
    :root {
        --color-theme_color_primary-rgb: 25, 85, 185;  /* Deeper blue */
        --color-theme_color_secondary-rgb: 0, 128, 128; /* Teal */
    }
</style>

<section class="modern-cta relative overflow-hidden py-16 md:py-20 lg:py-24 bg-white" id="modern-cta-section">
    <!-- Background pattern and effects for light background -->
    <div class="absolute inset-0">
        <!-- Modern wave pattern background -->
        <div aria-hidden="true" class="absolute inset-0 w-full h-full">
            <div class="absolute inset-0 bg-pattern opacity-20"></div>
            <div class="absolute inset-0 bg-gradient-mesh opacity-25"></div>
            <div class="absolute inset-0 noise-overlay opacity-30"></div>
        </div>
        
        <!-- Lighter gradient blobs -->
        <div aria-hidden="true" class="absolute -top-96 -right-40 w-[700px] h-[700px] bg-gradient-to-br from-[rgba(var(--color-theme_color_primary-rgb),0.15)] to-[rgba(var(--color-theme_color_secondary-rgb),0.15)] blur-[80px] animate-pulse-slow transform rotate-12 rounded-3xl"></div>
        <div aria-hidden="true" class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-gradient-to-tr from-[rgba(var(--color-theme_color_secondary-rgb),0.15)] to-[rgba(var(--color-theme_color_primary-rgb),0.1)] blur-[60px] animate-pulse-slow skew-x-12 rounded-3xl" style="animation-delay: 2s;"></div>
    </div>
    
    <!-- Modern animated geometric shapes with enhanced effects -->
    <div class="modern-shape right-shape"></div>
    <div class="modern-shape left-shape" style="animation-delay: 2s;"></div>
    <div class="modern-shape center-shape" style="animation-delay: 1s;"></div>
    <div class="modern-shape small-shape" style="animation-delay: 3s;"></div>
    
    <!-- Modern morphing blobs -->
    <div class="morphing-blob blob-primary"></div>
    <div class="morphing-blob blob-secondary"></div>
    
    <!-- Subtle grid lines -->
    <div class="grid-lines"></div>
     
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-5xl mx-auto text-center cta-content">
            <div class="flex justify-center mb-4" data-aos="fade-up" data-aos-duration="800">
                <span class="inline-block px-5 py-2 text-theme_color_primary-100 text-xs tracking-widest uppercase font-semibold rounded-full border border-white/30 shadow-sm backdrop-blur-md animate-fade-in relative overflow-hidden">
                    <span class="absolute inset-0 bg-gradient-to-r from-theme_color_primary-100/10 to-theme_color_secondary-100/10"></span>
                    <!-- <span class="relative">Get started today</span> -->
                </span>
            </div>
            
            <h2 class="text-center relative mb-8 mt-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <span class="block text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-gray-800 to-gray-700">
                    {{ $title }}
                    <span style="background: linear-gradient(90deg, var(--color-theme_color_primary-100) 0%, var(--color-theme_color_secondary-100) 50%, var(--color-theme_color_primary-100) 100%); 
                            background-size: 200% auto;
                            animation: shimmer 3s linear infinite;
                            opacity: 0.15;
                            filter: blur(15px);" 
                        class="absolute -bottom-4 left-0 w-full h-8 -z-10 rounded-full">
                    </span>
                </span>
            </h2>
            
            <p class="text-xl sm:text-2xl text-gray-600 font-medium mb-12 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                {{ $subtitle }}
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <a href="{{ $buttonUrl }}" 
                   class="modern-btn primary-btn relative overflow-hidden bg-gradient-to-r from-secondary-500 to-secondary-600 text-white py-3.5 sm:py-4 px-8 sm:px-10 rounded-full shadow-lg font-display font-semibold tracking-wide text-sm inline-flex items-center justify-center"
                   aria-label="Get started with VorkklocTech"
                   role="button">
                    <span class="sr-only">Navigate to registration page</span>
                    <span class="relative z-10 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                        {{ $buttonText }}
                    </span>
                    <div class="absolute inset-0 button-shine"></div>
                </a>
                
                @if($secondButtonText && $secondButtonUrl)
                <a href="{{ $secondButtonUrl }}" 
                   class="modern-btn secondary-btn relative overflow-hidden bg-white/95 border-2 border-primary-500/50 text-primary-600 py-3.5 sm:py-4 px-8 sm:px-10 rounded-full shadow-md font-display font-semibold tracking-wide text-sm inline-flex items-center justify-center"
                   aria-label="View additional information or services"
                   role="button">
                    <span class="sr-only">Navigate to secondary action</span>
                    <span class="relative z-10 flex items-center">
                        {{ $secondButtonText }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
                @endif
            </div>
            
            <!-- @if($showStats)
            <div class="mt-14 grid grid-cols-1 md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="stat-item p-6 rounded-2xl bg-white/70 backdrop-blur-sm border border-theme_color_primary-100/20 shadow-md transition-all duration-300">
                    <div class="text-3xl font-bold text-theme_color_primary-100 mb-2">100+</div>
                    <div class="text-gray-700 text-sm font-medium">Countries Served</div>
                </div>
                <div class="stat-item p-6 rounded-2xl bg-white/70 backdrop-blur-sm border border-theme_color_primary-100/20 shadow-md transition-all duration-300">
                    <div class="text-3xl font-bold text-theme_color_primary-100 mb-2">24/7</div>
                    <div class="text-gray-700 text-sm font-medium">Support</div>
                </div>
                <div class="stat-item p-6 rounded-2xl bg-white/70 backdrop-blur-sm border border-theme_color_primary-100/20 shadow-md transition-all duration-300">
                    <div class="text-3xl font-bold text-theme_color_primary-100 mb-2">99%</div>
                    <div class="text-gray-700 text-sm font-medium">Customer Satisfaction</div>
                </div>
            </div>
            @endif -->
        </div>
    </div>
    
    <style>
        /* These styles will be included with the component */
        .modern-cta {
            position: relative;
            color: #333;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            z-index: 1;
        }
        
        /* Modern background pattern styles */
        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23195589' fill-opacity='0.15'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-size: 60px 60px;
            animation: bg-pattern-float 40s linear infinite;
        }
        
        .bg-gradient-mesh {
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(var(--color-theme_color_primary-rgb), 0.15) 0%, transparent 35%),
                radial-gradient(circle at 75% 40%, rgba(var(--color-theme_color_secondary-rgb), 0.18) 0%, transparent 40%),
                radial-gradient(circle at 40% 80%, rgba(var(--color-theme_color_primary-rgb), 0.15) 0%, transparent 40%);
            background-size: 100% 100%;
            animation: gradient-shift 20s ease-in-out infinite alternate;
        }
        
        .noise-overlay {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            background-size: 200px 200px;
            opacity: 0.2;
            mix-blend-mode: soft-light;
        }
        
        @keyframes bg-pattern-float {
            0% { background-position: 0 0; }
            100% { background-position: 80px 80px; }
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 0%; }
            100% { background-position: 100% 100%; }
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Modern geometric shapes with site theme styling */
        .modern-shape {
            position: absolute;
            z-index: 0;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, rgba(240, 245, 255, 0.6), transparent);
            box-shadow: inset 0 0 20px rgba(240, 245, 255, 0.5), 0 0 15px rgba(var(--color-theme_color_primary-rgb), 0.2);
            animation: morph 12s ease-in-out infinite;
            mix-blend-mode: soft-light;
            backdrop-filter: blur(5px);
        }
        
        .right-shape {
            top: 5%;
            right: 10%;
            width: 300px;
            height: 300px;
            border: 1px solid rgba(var(--color-theme_color_primary-rgb), 0.08);
            background-color: rgba(var(--color-theme_color_primary-rgb), 0.04);
        }
        
        .left-shape {
            bottom: 10%;
            left: 5%;
            width: 250px;
            height: 250px;
            border: 1px solid rgba(var(--color-theme_color_secondary-rgb), 0.08);
            background-color: rgba(var(--color-theme_color_secondary-rgb), 0.04);
            animation-duration: 15s;
        }
        
        .center-shape {
            top: 30%;
            left: 25%;
            width: 180px;
            height: 120px;
            border: 1px solid rgba(var(--color-theme_color_primary-rgb), 0.06);
            background-color: rgba(var(--color-theme_color_primary-rgb), 0.03);
            animation-duration: 20s;
        }
        
        .small-shape {
            bottom: 30%;
            right: 20%;
            width: 150px;
            height: 150px;
            border: 1px solid rgba(var(--color-theme_color_secondary-rgb), 0.06);
            background-color: rgba(var(--color-theme_color_secondary-rgb), 0.03);
            animation-duration: 18s;
        }
        
        /* Lighter morphing blobs with modern design */
        .morphing-blob {
            position: absolute;
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            animation: blob-morph 15s ease-in-out infinite both;
            opacity: 0.25;
            filter: blur(10px);
        }
        
        .blob-primary {
            top: 20%;
            left: 10%;
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, rgba(var(--color-theme_color_primary-rgb), 0.25), rgba(var(--color-theme_color_primary-rgb), 0.03));
            border: 1px solid rgba(var(--color-theme_color_primary-rgb), 0.1);
        }
        
        .blob-secondary {
            bottom: 15%;
            right: 10%;
            width: 250px;
            height: 180px;
            background: linear-gradient(225deg, rgba(var(--color-theme_color_secondary-rgb), 0.25), rgba(var(--color-theme_color_secondary-rgb), 0.03));
            border: 1px solid rgba(var(--color-theme_color_secondary-rgb), 0.1);
            animation-delay: -7s;
        }
        
        /* Lighter grid pattern with theme colors */
        .grid-lines {
            position: absolute;
            inset: 0;
            background-size: 40px 40px;
            background-image: 
                linear-gradient(to right, rgba(var(--color-theme_color_primary-rgb), 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(var(--color-theme_color_primary-rgb), 0.03) 1px, transparent 1px);
            opacity: 0.5;
            mask-image: radial-gradient(ellipse 90% 90% at 50% 50%, black 50%, transparent 100%);
            pointer-events: none;
        }
        
        @keyframes morph {
            0%, 100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; transform: translateY(0) scale(1) rotate(0deg); }
            25% { border-radius: 40% 60% 70% 30% / 30% 60% 40% 70%; transform: translateY(-15px) scale(1.02) rotate(2deg); }
            50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; transform: translateY(0) scale(0.98) rotate(-2deg); }
            75% { border-radius: 60% 40% 30% 60% / 60% 40% 60% 30%; transform: translateY(15px) scale(1.01) rotate(1deg); }
        }
        
        @keyframes blob-morph {
            0% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; transform: rotate(0deg) scale(1); }
            33% { border-radius: 70% 30% 50% 50% / 30% 40% 60% 70%; transform: rotate(120deg) scale(1.1); }
            66% { border-radius: 40% 60% 60% 40% / 60% 30% 70% 40%; transform: rotate(240deg) scale(0.9); }
            100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; transform: rotate(360deg) scale(1); }
        }
        
        .button-shine {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0) 100%);
            animation: shine-effect 8s ease-in-out infinite;
            z-index: 1;
        }
        
        @keyframes shine-effect {
            0% { left: -100%; }
            5% { left: 100%; }
            100% { left: 100%; }
        }
        
        @keyframes shimmer {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
        
        @keyframes pulse-slow {
            0% { opacity: 0.2; }
            50% { opacity: 0.4; }
            100% { opacity: 0.2; }
        }
        
        .animate-pulse-slow {
            animation: pulse-slow 6s ease-in-out infinite;
        }
        
        .animate-fade-in {
            animation: fadeIn 0.8s ease-in-out forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .stat-item {
            transition: all 0.3s ease;
        }
        
        /* Hover effect removed */
        

    </style>
    

</section> 