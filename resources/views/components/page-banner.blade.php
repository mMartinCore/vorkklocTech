@props(['title' => 'Page Title', 'subtitle' => null])

<section class="curved-title-bg">
    <!-- Subtle floating elements -->
    <div class="absolute top-16 right-16 w-24 h-3 bg-white opacity-8 rounded-full transform rotate-12" style="animation: wave 8s ease-in-out infinite;"></div>
    <div class="absolute bottom-24 left-12 w-8 h-16 bg-white opacity-6 rounded-lg transform -rotate-45" style="animation: wave 10s ease-in-out infinite 2s;"></div>
    <div class="absolute top-1/3 left-1/5 w-4 h-4 bg-white opacity-8 rounded-full" style="animation: bounce-float 7s ease-in-out infinite 1s;"></div>
    <div class="absolute top-24 left-2/3 w-16 h-2 bg-white opacity-6 rounded-full transform rotate-45" style="animation: wave 9s ease-in-out infinite 0.5s;"></div>
    
    <!-- Subtle geometric background elements -->
    <div class="absolute bottom-1/3 right-1/3 w-28 h-28 bg-white opacity-3 clip-star transform rotate-12" style="animation: slow-spin 20s linear infinite;"></div>
    <div class="absolute top-2/5 left-1/6 w-20 h-20 bg-white opacity-3 clip-octagon transform -rotate-6" style="animation: gentle-pulse 12s ease-in-out infinite;"></div>
    <div class="absolute top-1/4 right-1/5 w-12 h-24 bg-white opacity-3 rounded-full transform rotate-30" style="animation: sway 15s ease-in-out infinite;"></div>
    
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center relative">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 modern-gradient-text" data-aos="fade-up">
                {!! $title !!}
            </h2>
            @if($subtitle)
                <p class="text-xl enhanced-subtitle" data-aos="fade-up" data-aos-delay="50">
                    {{ $subtitle }}
                </p>
            @endif
        </div>
    </div>

    <style>
        /* Subtle modern banner with elegant color scheme */
        .curved-title-bg {
            position: relative;
            background: linear-gradient(140deg, 
                #2F5F8F 0%,
                #4682B4 25%,
                #2F5F8F 50%,
                #4682B4 75%,
                #5B9BD5 100%
            );
            color: white;
            padding: 6rem 2rem 7rem;
            margin-bottom: -5rem;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.15);
            border-radius: 0;
        }
        
        .curved-title-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(45deg,transparent 24%,rgba(255, 255, 255, 0.08) 25%,rgba(255, 255, 255, 0.08) 26%,transparent 27%,transparent 74%,rgba(255, 255, 255, 0.08) 75%,rgba(255, 255, 255, 0.08) 76%,transparent 77%),
                     linear-gradient(-45deg,transparent 24%,rgba(255, 255, 255, 0.08) 25%,rgba(255, 255, 255, 0.08) 26%,transparent 27%,transparent 74%,rgba(255, 255, 255, 0.08) 75%,rgba(255, 255, 255, 0.08) 76%,transparent 77%);
            background-size: 30px 30px;
            opacity: 1;
            z-index: 0;
            animation: movePattern 20s linear infinite;
        }
        
        .curved-title-bg::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 120px;
            background: white;
            clip-path: polygon(0 40%, 20% 70%, 40% 45%, 60% 80%, 80% 55%, 100% 85%, 100% 100%, 0 100%);
            z-index: 1;
        }

        .modern-gradient-text {
            font-weight: 800;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            letter-spacing: -0.02em;
            position: relative;
            z-index: 2;
            margin-bottom: 2rem;
            background: linear-gradient(145deg, #ffffff 0%, #f8faff 30%, #ffffff 60%, #f5f7ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            filter: drop-shadow(0 1px 3px rgba(255, 255, 255, 0.1));
        }
        
        .enhanced-subtitle {
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            font-size: 1.25rem;
            text-shadow: 0 1px 8px rgba(0, 0, 0, 0.08);
            font-weight: 300;
            line-height: 1.6;
        }

        /* Custom shape clips */
        .clip-star {
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
        }

        .clip-octagon {
            clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%);
        }
        
        /* Subtle animations */
        @keyframes wave {
            0% { transform: translateY(0px) translateX(0px) rotate(0deg) scale(1); }
            33% { transform: translateY(-8px) translateX(5px) rotate(2deg) scale(1.02); }
            66% { transform: translateY(3px) translateX(-3px) rotate(-1deg) scale(0.98); }
            100% { transform: translateY(0px) translateX(0px) rotate(0deg) scale(1); }
        }

        @keyframes bounce-float {
            0%, 100% { transform: translateY(0px) scale(1); opacity: 0.08; }
            50% { transform: translateY(-12px) scale(1.05); opacity: 0.12; }
        }
        
        @keyframes slow-spin {
            0% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.05); }
            100% { transform: rotate(360deg) scale(1); }
        }

        @keyframes gentle-pulse {
            0%, 100% { transform: scale(1) rotate(-6deg); opacity: 0.03; }
            50% { transform: scale(1.08) rotate(-3deg); opacity: 0.05; }
        }

        @keyframes sway {
            0%, 100% { transform: rotate(30deg) translateX(0px); }
            50% { transform: rotate(32deg) translateX(5px); }
        }

        @keyframes movePattern {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 30px 30px;
            }
        }

        /* Responsive enhancements */
        @media (max-width: 768px) {
            .curved-title-bg {
                padding: 4rem 1rem 5rem;
                margin-bottom: -3rem;
                border-radius: 0 0 25px 25px;
            }

            .modern-gradient-text {
                font-size: 2.5rem;
                margin-bottom: 1.5rem;
            }

            .enhanced-subtitle {
                font-size: 1.1rem;
                max-width: 90%;
            }
        }
    </style>
</section> 