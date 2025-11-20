<!-- Service Item Component -->
@props([
    'title' => '',
    'description' => '',
    'image' => '',
    'imageAlt' => '',
    'features' => [],
    'color' => 'blue',
    'layout' => 'image-right',
    'buttonText' => 'Learn More',
    'buttonLink' => '#',
    'icon' => ''
])

@php
    $colors = [
        'blue' => [
            'badge' => 'bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300 border-blue-200 dark:border-blue-800',
            'dot' => 'bg-blue-500',
            'icon_bg' => 'bg-blue-500',
            'check_bg' => 'bg-blue-500',
            'button' => 'bg-blue-600 hover:bg-blue-700',
            'gradient' => 'from-blue-900/40'
        ],
        'green' => [
            'badge' => 'bg-green-500/20 text-green-300 backdrop-blur-sm border-green-500/30',
            'dot' => 'bg-green-400',
            'icon_bg' => 'bg-green-500 shadow-green-500/25',
            'check_bg' => 'bg-green-500',
            'button' => 'bg-green-600 hover:bg-green-500 hover:shadow-green-500/25 transform hover:scale-105',
            'gradient' => 'from-green-900/60'
        ],
        'purple' => [
            'badge' => 'bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 border-purple-200 dark:border-purple-800',
            'dot' => 'bg-purple-500',
            'icon_bg' => 'bg-purple-500',
            'check_bg' => 'bg-purple-500',
            'button' => 'bg-purple-600 hover:bg-purple-700',
            'gradient' => 'from-purple-900/40'
        ],
        'orange' => [
            'badge' => 'bg-orange-100 dark:bg-orange-900/30 text-orange-800 dark:text-orange-300 border-orange-200 dark:border-orange-800',
            'dot' => 'bg-orange-500',
            'icon_bg' => 'bg-orange-500',
            'check_bg' => 'bg-orange-500',
            'button' => 'bg-orange-600 hover:bg-orange-700',
            'gradient' => 'from-orange-900/40'
        ],
        'teal' => [
            'badge' => 'bg-teal-100 dark:bg-teal-900/30 text-teal-800 dark:text-teal-300 border-teal-200 dark:border-teal-800',
            'dot' => 'bg-teal-500',
            'icon_bg' => 'bg-teal-500',
            'check_bg' => 'bg-teal-500',
            'button' => 'bg-teal-600 hover:bg-teal-700',
            'gradient' => 'from-teal-900/40'
        ]
    ];
    
    $currentColor = $colors[$color] ?? $colors['blue'];
    $isSpecial = $color === 'green';
    $textColor = $isSpecial ? 'text-white' : 'text-neutral-900 dark:text-white';
    $descriptionTextColor = $isSpecial ? 'text-gray-300' : 'text-neutral-700 dark:text-neutral-300';
    $featureTextColor = $isSpecial ? 'text-gray-200' : 'text-neutral-700 dark:text-neutral-300';
@endphp

@if($isSpecial)
<div class="relative bg-gray-900 dark:bg-gray-800 rounded-3xl overflow-hidden" data-aos="fade-up">
    <!-- Dark Background with Patterns -->
    <div class="absolute inset-0">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(0deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px] opacity-40"></div>
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-green-900/20 via-transparent to-green-600/10"></div>
        <!-- Animated Shape -->
        <div class="absolute top-10 right-10 w-32 h-32 bg-green-500/10 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-24 h-24 bg-green-400/5 rounded-full blur-lg animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="relative flex flex-col lg:flex-{{ $layout == 'image-right' ? 'row' : 'row-reverse' }} items-center gap-12 p-12">
@else
<div class="flex flex-col lg:flex-{{ $layout == 'image-right' ? 'row' : 'row-reverse' }} items-center gap-12" data-aos="fade-up">
@endif

    <!-- Text Content -->
    <div class="w-full lg:w-1/2 space-y-6{{ $isSpecial ? ' relative z-10' : '' }}">
        <div class="inline-flex items-center gap-3 px-4 py-2 {{ $currentColor['badge'] }} rounded-full text-sm font-medium">
            <div class="w-2 h-2 {{ $currentColor['dot'] }} rounded-full{{ $isSpecial ? ' animate-pulse' : '' }}"></div>
            <span>{{ $tag ?? 'Feature' }}</span>
        </div>
        
        <div class="space-y-4">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl {{ $currentColor['icon_bg'] }} shadow-lg">
                @if($icon)
                    {!! $icon !!}
                @else
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12,2L1,21H23M12,6L19.5,19H4.5" />
                    </svg>
                @endif
            </div>
            
            <h3 class="text-4xl lg:text-5xl font-bold {{ $textColor }} font-primary">
                {{ $title }}
            </h3>
            
            <p class="text-lg {{ $descriptionTextColor }} leading-relaxed font-secondary">
                {{ $description }}
            </p>
        </div>
        
        <ul class="space-y-4">
            @foreach($features as $feature)
            <li class="flex items-start">
                <div class="{{ $currentColor['check_bg'] }} p-2 rounded-lg mr-4 flex-shrink-0 mt-1{{ $isSpecial ? ' shadow-lg' : '' }}">
                    <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <span class="{{ $featureTextColor }} font-medium">{{ $feature }}</span>
            </li>
            @endforeach
        </ul>
        
        <div class="pt-4">
            <a href="{{ $buttonLink }}" 
                class="inline-flex items-center {{ $currentColor['button'] }} text-white py-4 px-8 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl"
            >
                <span>{{ $buttonText }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
    
    <!-- Image Content -->
    <div class="w-full lg:w-1/2{{ $isSpecial ? ' relative z-10' : '' }}" data-aos="{{ $layout == 'image-right' ? 'fade-left' : 'fade-right' }}">
        <div class="relative overflow-hidden rounded-{{ $isSpecial ? '2xl' : '3xl' }} shadow-2xl{{ $isSpecial ? ' shadow-green-500/10 border border-green-500/20' : '' }}">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" class="w-full h-96 object-cover transform hover:scale-105 transition-transform duration-700 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-t {{ $currentColor['gradient'] }} to-transparent"></div>
            
            @if($isSpecial)
            <!-- Floating Elements -->
            <div class="absolute top-4 right-4 bg-green-500/20 backdrop-blur-sm rounded-full p-3 border border-green-400/30">
                <svg class="w-6 h-6 text-green-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M21,16V14L13,9V7A1,1 0 0,0 12,6A1,1 0 0,0 11,7V9L3,14V16L11,13.5V19L8,20.5V22L12,21L16,22V20.5L13,19V13.5L21,16Z"/>
                </svg>
            </div>
            @endif
        </div>
    </div>

@if($isSpecial)
    </div>
@endif
</div>