<!-- Service Item Left - Text Left, Image Right -->
@props([
    'tagColor' => 'blue', 
    'tagText' => 'Service Tag', 
    'iconPath' => 'M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19V8A2,2 0 0,1 4,6H8V4A2,2 0 0,1 10,2M14,6V4H10V6H14Z',
    'title' => 'Service Title',
    'description' => 'Service description goes here.',
    'features' => [],
    'buttonText' => 'Learn More',
    'buttonUrl' => '#',
    'imageUrl' => '',
    'imageAlt' => 'Service Image',
    'bgColor' => 'white'
])

@php
    $colorClasses = [
        'primary' => [
            'tag' => 'bg-gradient-to-r from-theme_color_primary-100/10 to-theme_color_primary-100/15 text-theme_color_primary-100 border-theme_color_primary-100/20 dark:bg-theme_color_primary-100/10 dark:text-theme_color_primary-100 dark:border-theme_color_primary-100/25',
            'icon' => 'bg-gradient-to-br from-theme_color_primary-100 to-theme_color_primary-200 shadow-theme_color_primary-100/25',
            'button' => 'bg-theme_color_primary-100 hover:bg-theme_color_primary-200 hover:shadow-theme_color_primary-100/25',
            'check' => 'bg-theme_color_primary-100',
            'gradient' => 'from-theme_color_primary-100/40'
        ],
        'secondary' => [
            'tag' => 'bg-gradient-to-r from-theme_color_secondary-100/10 to-theme_color_secondary-100/15 text-theme_color_secondary-100 border-theme_color_secondary-100/20 dark:bg-theme_color_secondary-100/10 dark:text-theme_color_secondary-100 dark:border-theme_color_secondary-100/25',
            'icon' => 'bg-gradient-to-br from-theme_color_secondary-100 to-theme_color_secondary-200 shadow-theme_color_secondary-100/25',
            'button' => 'bg-theme_color_secondary-100 hover:bg-theme_color_secondary-200 hover:shadow-theme_color_secondary-100/25',
            'check' => 'bg-theme_color_secondary-100',
            'gradient' => 'from-theme_color_secondary-100/40'
        ],
        'accent' => [
            'tag' => 'bg-gradient-to-r from-theme_color_accent-100/10 to-theme_color_accent-100/15 text-theme_color_accent-100 border-theme_color_accent-100/20 dark:bg-theme_color_accent-100/10 dark:text-theme_color_accent-100 dark:border-theme_color_accent-100/25',
            'icon' => 'bg-gradient-to-br from-theme_color_accent-100 to-theme_color_accent-200 shadow-theme_color_accent-100/25',
            'button' => 'bg-theme_color_accent-100 hover:bg-theme_color_accent-200 hover:shadow-theme_color_accent-100/25',
            'check' => 'bg-theme_color_accent-100',
            'gradient' => 'from-theme_color_accent-100/40'
        ],
        // Legacy support for existing implementations
        'blue' => [
            'tag' => 'bg-gradient-to-r from-theme_color_primary-100/10 to-theme_color_primary-100/15 text-theme_color_primary-100 border-theme_color_primary-100/20 dark:bg-theme_color_primary-100/10 dark:text-theme_color_primary-100 dark:border-theme_color_primary-100/25',
            'icon' => 'bg-gradient-to-br from-theme_color_primary-100 to-theme_color_primary-200 shadow-theme_color_primary-100/25',
            'button' => 'bg-theme_color_primary-100 hover:bg-theme_color_primary-200 hover:shadow-theme_color_primary-100/25',
            'check' => 'bg-theme_color_primary-100',
            'gradient' => 'from-theme_color_primary-100/40'
        ],
        'green' => [
            'tag' => 'bg-gradient-to-r from-theme_color_secondary-100/10 to-theme_color_secondary-100/15 text-theme_color_secondary-100 border-theme_color_secondary-100/20 dark:bg-theme_color_secondary-100/10 dark:text-theme_color_secondary-100 dark:border-theme_color_secondary-100/25',
            'icon' => 'bg-gradient-to-br from-theme_color_secondary-100 to-theme_color_secondary-200 shadow-theme_color_secondary-100/25',
            'button' => 'bg-theme_color_secondary-100 hover:bg-theme_color_secondary-200 hover:shadow-theme_color_secondary-100/25',
            'check' => 'bg-theme_color_secondary-100',
            'gradient' => 'from-theme_color_secondary-100/40'
        ],
        'purple' => [
            'tag' => 'bg-gradient-to-r from-theme_color_accent-100/10 to-theme_color_accent-100/15 text-theme_color_accent-100 border-theme_color_accent-100/20 dark:bg-theme_color_accent-100/10 dark:text-theme_color_accent-100 dark:border-theme_color_accent-100/25',
            'icon' => 'bg-gradient-to-br from-theme_color_accent-100 to-theme_color_accent-200 shadow-theme_color_accent-100/25',
            'button' => 'bg-theme_color_accent-100 hover:bg-theme_color_accent-200 hover:shadow-theme_color_accent-100/25',
            'check' => 'bg-theme_color_accent-100',
            'gradient' => 'from-theme_color_accent-100/40'
        ],
    ];

    $colorSet = $colorClasses[$tagColor] ?? $colorClasses['blue'];
    
    // Background color mapping - updated to use theme colors
    $bgClasses = [
        'white' => 'bg-white dark:bg-neutral-800',
        'primary' => 'bg-gradient-to-br from-theme_color_primary-100/5 to-theme_color_primary-100/10 dark:bg-theme_color_primary-100/10',
        'secondary' => 'bg-gradient-to-br from-theme_color_secondary-100/5 to-theme_color_secondary-100/10 dark:bg-theme_color_secondary-100/10',
        'accent' => 'bg-gradient-to-br from-theme_color_accent-100/5 to-theme_color_accent-100/10 dark:bg-theme_color_accent-100/10',
        // Legacy support
        'blue' => 'bg-gradient-to-br from-theme_color_primary-100/5 to-theme_color_primary-100/10 dark:bg-theme_color_primary-100/10',
        'green' => 'bg-gradient-to-br from-theme_color_secondary-100/5 to-theme_color_secondary-100/10 dark:bg-theme_color_secondary-100/10',
        'purple' => 'bg-gradient-to-br from-theme_color_accent-100/5 to-theme_color_accent-100/10 dark:bg-theme_color_accent-100/10',
        'orange' => 'bg-orange-50 dark:bg-orange-900/20',
        'pink' => 'bg-pink-50 dark:bg-pink-900/20',
        'gray' => 'bg-gray-50 dark:bg-gray-800',
    ];
    
    $bgClass = $bgClasses[$bgColor] ?? $bgClasses['white'];
@endphp

<section class="mx-auto {{ $bgClass }} shadow-lg border border-gray-100 dark:border-neutral-700" data-aos="fade-up">
    <div class="container mx-auto px-8 md:px-12 xl:px-16 max-w-7xl relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-6 lg:gap-12 py-12 sm:py-16 md:py-20 lg:py-24">
    <!-- Text Content -->
    <div class="w-full lg:w-1/2 space-y-4 sm:space-y-6">
        <div class="inline-flex items-center gap-3 px-4 py-2 {{ $colorSet['tag'] }} rounded-full text-sm font-medium">
            <div class="w-2 h-2 {{ $colorSet['icon'] }} rounded-full"></div>
            <span>{{ $tagText }}</span>
        </div>
        
        <div class="space-y-4">
            <div class="inline-flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 rounded-2xl {{ $colorSet['icon'] }} shadow-lg">
                <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="{{ $iconPath }}"/>
                </svg>
            </div>
            
            <h3 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold text-neutral-900 dark:text-white font-primary">
                {{ $title }}
            </h3>
            
            <p class="text-base sm:text-lg text-neutral-700 dark:text-neutral-300 leading-relaxed font-secondary">
                {{ $description }}
            </p>
        </div>
        
        @if(count($features) > 0)
        <ul class="space-y-3 sm:space-y-4">
            @foreach($features as $feature)
            <li class="flex items-start">
                <div class="{{ $colorSet['check'] }} p-2 rounded-lg mr-4 flex-shrink-0 mt-1">
                    <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <span class="text-neutral-700 dark:text-neutral-300 font-medium">{{ $feature }}</span>
            </li>
            @endforeach
        </ul>
        @endif
        
        <div class="pt-4">
            <a href="{{ $buttonUrl }}" 
               class="inline-flex items-center {{ $colorSet['button'] }} text-white py-3 px-6 sm:py-4 sm:px-8 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl text-sm sm:text-base">
                <span>{{ $buttonText }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 sm:w-5 sm:h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
    
    <!-- Image Content -->
    <div class="w-full lg:w-1/2" data-aos="fade-left">
        <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img src="{{ $imageUrl }}" alt="{{ $imageAlt }}" class="w-full h-48 sm:h-64 lg:h-80 xl:h-96 object-cover transform hover:scale-105 transition-transform duration-700 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-t {{ $colorSet['gradient'] }} to-transparent"></div>
        </div>
        </div>
    </div>
</section>