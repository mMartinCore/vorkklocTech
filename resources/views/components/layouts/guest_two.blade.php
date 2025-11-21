<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">  
        {!! SEO::generate(true) !!}
    <!-- Laravel Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- GSAP for animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    
    <!-- Particles.js for animated backgrounds -->
    <script src="{{ asset('js/particles.min.js') }}"></script>
    
    <!-- Watopak Enhanced Animations System -->
    @vite('resources/js/animations.js')
    
    <!-- AOS (Animate on Scroll) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link rel="icon" href="{{ asset('images/logo-no-text.png') }}" type="image/x-icon">
    <meta name="application-name" content="VorkklocTech">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Watopak Typography - Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Source+Sans+Pro:wght@400;500;600&family=Poppins:wght@500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet"> 
    <!-- Styles Stack -->
    @stack('styles')
    <style>
        /* Custom styles */
        body {
            font-family: var(--font-secondary), 'Source Sans Pro', sans-serif;
            overflow-x: hidden;
        }
        
 
        
        .hero-animated-gradient {
            background: linear-gradient(
                135deg, 
                var(--color-theme_color_primary-50), 
                rgba(222, 166, 31, 0.3), 
                var(--color-theme_color_primary-50)
            );
            animation: gradient-shift 8s ease infinite;
            background-size: 200% 200%;
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .magnetic-button {
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--color-theme_color_primary-100);
            transform-origin: 0%;
            z-index: 50;
        }
        
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .parallax-bg {
            transform-style: preserve-3d;
            will-change: transform;
        }
        
        /* Carousel component styles */
        .carousel-btn {
            transition: all 0.3s ease;
            opacity: 0.7;
        }

        .carousel-btn:hover {
            opacity: 1;
            transform: scale(1.05);
        }

        /* Theme binding class for carousel */
        .text-bg-theme_color_primary-100 {
            color: var(--color-theme_color_primary-100);
        }
        
        /* Hero content styling */
        .hero-content {
            backdrop-filter: blur(2px);
            background: rgba(0, 0, 0, 0.4);
            border-left: 3px solid var(--color-theme_color_primary-100);
        }
        
        /* Slider styles */
        .slider-container {
            overflow: hidden;
            position: relative;
        }
        
        .slide {
            opacity: 0;
            transition: opacity 1s ease;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .slide.active {
            opacity: 1;
            z-index: 10;
        }
        
   
        
        /* Particle animation for background */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(222, 166, 31, 0.3);
            animation: float 15s infinite ease-in-out;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-30px) translateX(15px); }
            50% { transform: translateY(-5px) translateX(30px); }
            75% { transform: translateY(-20px) translateX(-15px); }
        }
        
        /* Step counter for how it works section */
        .step-counter {
            position: relative;
        }
        
        .step-counter::before {
            content: "";
            position: absolute;
            left: 15px;
            top: 50px;
            bottom: -30px;
            width: 2px;
            background: var(--color-theme_color_primary-100);
            z-index: 0;
        }
        
        .step-counter:last-child::before {
            display: none;
        }
        
        .step-count {
            position: relative;
            z-index: 1;
            height: 36px;
            width: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }
        
        .step-counter:hover .step-count {
            transform: scale(1.2);
        }
        
        /* Slider pagination dots */
        .slider-pagination {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 20;
        }
        
        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .slider-dot.active {
            background: #fff;
            transform: scale(1.3);
        }
        
        /* Custom utility classes following Laravel's theme pattern */
        .bg-theme_color_primary-100 {
            background-color: var(--color-theme_color_primary-100);
        }
        
        .bg-theme_color_primary-200 {
            background-color: var(--color-theme_color_primary-200);
        }
        
        .text-theme_color_primary-100 {
            color: var(--color-theme_color_primary-100);
        }
        
        .border-theme_color_primary-100 {
            border-color: var(--color-theme_color_primary-100);
        }
        
        .hover\:bg-theme_color_primary-200:hover {
            background-color: var(--color-theme_color_primary-200);
        }
        
        .hover\:text-theme_color_primary-100:hover {
            color: var(--color-theme_color_primary-100);
        }
    </style>
    </head>
  
    <body class="font-Poppins bg-gray-50">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Header / Navigation -->
            <x-header-navigation />

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <x-footer />
        </div>

        <script>
            // Initialize AOS
            document.addEventListener('DOMContentLoaded', function() {
                AOS.init({
                    duration: 800,
                    easing: 'ease-out',
                    once: true
                });
            });
        </script>
        
        <!-- Scripts Stack -->
        @stack('scripts')
    </body>
</html>
