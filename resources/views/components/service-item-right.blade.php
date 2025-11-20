<!-- Service Item Right - Text Right, Image Left -->
@props([
    'tagColor' => 'green', 
    'tagText' => 'Service Tag',
    'iconPath' => 'M21,16V14L13,9V7A1,1 0 0,0 12,6A1,1 0 0,0 11,7V9L3,14V16L11,13.5V19L8,20.5V22L12,21L16,22V20.5L13,19V13.5L21,16Z',
    'title' => 'Service Title',
    'description' => 'Service description goes here.',
    'features' => [],
    'buttonText' => 'Learn More',
    'buttonUrl' => '#',
    'imageUrl' => '',
    'imageAlt' => 'Service Image',
    'darkBg' => false,
    'bgColor' => 'gray'
])

@php
    $colorClasses = [
        'primary' => [
            'tag' => 'bg-theme_color_primary-100/20 text-theme_color_primary-100 border-theme_color_primary-100/30 backdrop-blur-sm',
            'icon' => 'bg-gradient-to-br from-theme_color_primary-100 to-theme_color_primary-200 shadow-theme_color_primary-100/25',
            'button' => 'bg-theme_color_primary-100 hover:bg-theme_color_primary-200 hover:shadow-theme_color_primary-100/25',
            'check' => 'bg-theme_color_primary-100',
            'gradient' => 'from-theme_color_primary-100/60'
        ],
        'secondary' => [
            'tag' => 'bg-theme_color_secondary-100/20 text-theme_color_secondary-100 border-theme_color_secondary-100/30 backdrop-blur-sm',
            'icon' => 'bg-gradient-to-br from-theme_color_secondary-100 to-theme_color_secondary-200 shadow-theme_color_secondary-100/25',
            'button' => 'bg-theme_color_secondary-100 hover:bg-theme_color_secondary-200 hover:shadow-theme_color_secondary-100/25',
            'check' => 'bg-theme_color_secondary-100',
            'gradient' => 'from-theme_color_secondary-100/60'
        ],
        'accent' => [
            'tag' => 'bg-theme_color_accent-100/20 text-theme_color_accent-100 border-theme_color_accent-100/30 backdrop-blur-sm',
            'icon' => 'bg-gradient-to-br from-theme_color_accent-100 to-theme_color_accent-200 shadow-theme_color_accent-100/25',
            'button' => 'bg-theme_color_accent-100 hover:bg-theme_color_accent-200 hover:shadow-theme_color_accent-100/25',
            'check' => 'bg-theme_color_accent-100',
            'gradient' => 'from-theme_color_accent-100/60'
        ],
        // Legacy support for existing implementations
        'blue' => [
            'tag' => 'bg-theme_color_primary-100/20 text-theme_color_primary-100 border-theme_color_primary-100/30 backdrop-blur-sm',
            'icon' => 'bg-gradient-to-br from-theme_color_primary-100 to-theme_color_primary-200 shadow-theme_color_primary-100/25',
            'button' => 'bg-theme_color_primary-100 hover:bg-theme_color_primary-200 hover:shadow-theme_color_primary-100/25',
            'check' => 'bg-theme_color_primary-100',
            'gradient' => 'from-theme_color_primary-100/60'
        ],
        'green' => [
            'tag' => 'bg-theme_color_secondary-100/20 text-theme_color_secondary-100 border-theme_color_secondary-100/30 backdrop-blur-sm',
            'icon' => 'bg-gradient-to-br from-theme_color_secondary-100 to-theme_color_secondary-200 shadow-theme_color_secondary-100/25',
            'button' => 'bg-theme_color_secondary-100 hover:bg-theme_color_secondary-200 hover:shadow-theme_color_secondary-100/25',
            'check' => 'bg-theme_color_secondary-100',
            'gradient' => 'from-theme_color_secondary-100/60'
        ],
        'purple' => [
            'tag' => 'bg-theme_color_accent-100/20 text-theme_color_accent-100 border-theme_color_accent-100/30 backdrop-blur-sm',
            'icon' => 'bg-gradient-to-br from-theme_color_accent-100 to-theme_color_accent-200 shadow-theme_color_accent-100/25',
            'button' => 'bg-theme_color_accent-100 hover:bg-theme_color_accent-200 hover:shadow-theme_color_accent-100/25',
            'check' => 'bg-theme_color_accent-100',
            'gradient' => 'from-theme_color_accent-100/60'
        ],
    ];

    $colorSet = $colorClasses[$tagColor] ?? $colorClasses['green'];
    
    // Background color mapping - enhanced for right component with theme colors
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
        'gray' => 'bg-gray-900 dark:bg-gray-800',
        'dark' => 'bg-gray-900 dark:bg-gray-800',
    ];
    
    $bgClass = $bgClasses[$bgColor] ?? $bgClasses['gray'];
    
    // Override darkBg if bgColor is provided and is dark variant
    if (in_array($bgColor, ['dark', 'gray'])) {
        $darkBg = true;
    }
@endphp

<section class="relative {{ $bgClass }} overflow-hidden shadow-lg border border-gray-100 dark:border-neutral-700" data-aos="fade-up">
    @if($darkBg)
    <!-- Dark Background with Patterns -->
    <div class="absolute inset-0">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(0deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px] opacity-40"></div>
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-theme_color_{{ $tagColor === 'blue' ? 'primary' : ($tagColor === 'green' ? 'secondary' : 'accent') }}-100/20 via-transparent to-theme_color_{{ $tagColor === 'blue' ? 'primary' : ($tagColor === 'green' ? 'secondary' : 'accent') }}-100/10"></div>
        <!-- Animated Shape -->
        <div class="absolute top-10 right-10 w-32 h-32 bg-theme_color_{{ $tagColor === 'blue' ? 'primary' : ($tagColor === 'green' ? 'secondary' : 'accent') }}-100/10 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-24 h-24 bg-theme_color_{{ $tagColor === 'blue' ? 'primary' : ($tagColor === 'green' ? 'secondary' : 'accent') }}-100/5 rounded-full blur-lg animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    @endif
    
    <div class="container mx-auto px-8 md:px-12 xl:px-16 max-w-7xl relative z-10">
        <div class="flex flex-col lg:flex-row-reverse items-center gap-6 lg:gap-12 py-12 sm:py-16 md:py-20 lg:py-24">
        <!-- Text Content -->
        <div class="w-full lg:w-1/2 space-y-4 sm:space-y-6 relative z-10">
            <div class="inline-flex items-center gap-3 px-4 py-2 {{ $colorSet['tag'] }} rounded-full text-sm font-medium border">
                <div class="w-2 h-2 bg-theme_color_{{ $tagColor === 'blue' ? 'primary' : ($tagColor === 'green' ? 'secondary' : 'accent') }}-100 rounded-full animate-pulse"></div>
                <span>{{ $tagText }}</span>
            </div>
            
            <div class="space-y-4">
                <div class="inline-flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 rounded-2xl {{ $colorSet['icon'] }} shadow-lg">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="{{ $iconPath }}"/>
                    </svg>
                </div>
                
                <h3 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold {{ $darkBg ? 'text-white' : 'text-neutral-900 dark:text-white' }} font-primary">
                    {{ $title }}
                </h3>
                
                <p class="text-base sm:text-lg {{ $darkBg ? 'text-gray-300' : 'text-neutral-700 dark:text-neutral-300' }} leading-relaxed font-secondary">
                    {{ $description }} 
                </p>
            </div>
            
            @if(count($features) > 0)
            <ul class="space-y-3 sm:space-y-4">
                @foreach($features as $feature)
                <li class="flex items-start">
                    <div class="{{ $colorSet['check'] }} p-2 rounded-lg mr-4 flex-shrink-0 mt-1 shadow-lg">
                        <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <span class="{{ $darkBg ? 'text-gray-200' : 'text-neutral-700 dark:text-neutral-200' }} font-medium">{{ $feature }}</span>
                </li>
                @endforeach
            </ul>
            @endif
            
            <div class="pt-4">
                <a href="{{ $buttonUrl }}" 
                   class="inline-flex items-center {{ $colorSet['button'] }} text-white py-3 px-6 sm:py-4 sm:px-8 rounded-xl font-semibold transition-all duration-300 shadow-lg transform hover:scale-105 text-sm sm:text-base">
                    <span>{{ $buttonText }} </span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 sm:w-5 sm:h-5 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Image Content -->
        <div class="w-full lg:w-1/2 relative z-10" data-aos="fade-right">
            <div class="relative overflow-hidden rounded-2xl shadow-2xl @if($darkBg) shadow-theme_color_{{ $tagColor === 'blue' ? 'primary' : ($tagColor === 'green' ? 'secondary' : 'accent') }}-100/10 border border-theme_color_{{ $tagColor === 'blue' ? 'primary' : ($tagColor === 'green' ? 'secondary' : 'accent') }}-100/20 @endif">
                <img src="{{ $imageUrl }}" alt="{{ $imageAlt }}" class="w-full h-48 sm:h-64 lg:h-80 xl:h-96 object-cover transform hover:scale-105 transition-transform duration-700 ease-in-out">
                <div class="absolute inset-0 bg-gradient-to-t {{ $colorSet['gradient'] }} to-transparent"></div>
                @if($darkBg)
                <!-- Floating Elements -->
                <div class="absolute top-4 right-4 bg-theme_color_{{ $tagColor === 'blue' ? 'primary' : ($tagColor === 'green' ? 'secondary' : 'accent') }}-100/20 backdrop-blur-sm rounded-full p-3 border border-theme_color_{{ $tagColor === 'blue' ? 'primary' : ($tagColor === 'green' ? 'secondary' : 'accent') }}-100/30">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-theme_color_{{ $tagColor === 'blue' ? 'primary' : ($tagColor === 'green' ? 'secondary' : 'accent') }}-100" fill="currentColor" viewBox="0 0 24 24">
                        <path d="{{ $iconPath }}"/>
                    </svg>
                </div>
                @endif 
            </div>
        </div>
    </div>
</section>