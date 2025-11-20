@props([
    'type' => 'card',
    'lines' => 3,
    'showAvatar' => false,
    'showButton' => false,
    'height' => 'auto',
    'animated' => true
])

{{-- Professional Loading Skeleton Component --}}
<div class="loading-skeleton-container {{ $animated ? 'animate-pulse' : '' }}" 
     role="status" 
     aria-label="Loading content"
     aria-live="polite">
    
    @if($type === 'card')
        {{-- Card Skeleton --}}
        <div class="maritime-card bg-white dark:bg-neutral-800 p-6 space-y-4">
            @if($showAvatar)
                <div class="flex items-center space-x-4">
                    <div class="content-skeleton w-12 h-12 rounded-full"></div>
                    <div class="flex-1 space-y-2">
                        <div class="content-skeleton h-4 w-3/4"></div>
                        <div class="content-skeleton h-3 w-1/2"></div>
                    </div>
                </div>
            @endif
            
            <div class="space-y-3">
                @for($i = 0; $i < $lines; $i++)
                    <div class="content-skeleton h-4 {{ $i === $lines - 1 ? 'w-2/3' : 'w-full' }}"></div>
                @endfor
            </div>
            
            @if($showButton)
                <div class="flex space-x-3 pt-4">
                    <div class="content-skeleton h-10 w-24 rounded-lg"></div>
                    <div class="content-skeleton h-10 w-20 rounded-lg"></div>
                </div>
            @endif
        </div>
        
    @elseif($type === 'table')
        {{-- Table Skeleton --}}
        <div class="maritime-card overflow-hidden">
            {{-- Table Header --}}
            <div class="bg-gradient-to-r from-primary-500 to-secondary-500 p-4">
                <div class="grid grid-cols-3 gap-4">
                    @for($i = 0; $i < 3; $i++)
                        <div class="content-skeleton h-4 bg-white/20"></div>
                    @endfor
                </div>
            </div>
            
            {{-- Table Rows --}}
            <div class="bg-white dark:bg-neutral-800 divide-y divide-neutral-200 dark:divide-neutral-700">
                @for($row = 0; $row < 5; $row++)
                    <div class="p-4">
                        <div class="grid grid-cols-3 gap-4">
                            @for($col = 0; $col < 3; $col++)
                                <div class="content-skeleton h-4"></div>
                            @endfor
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        
    @elseif($type === 'hero')
        {{-- Hero Section Skeleton --}}
        <div class="min-h-screen flex items-center">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    {{-- Text Content --}}
                    <div class="space-y-6">
                        <div class="content-skeleton h-6 w-32 rounded-full"></div>
                        <div class="space-y-4">
                            <div class="content-skeleton h-12 w-full"></div>
                            <div class="content-skeleton h-12 w-4/5"></div>
                        </div>
                        <div class="space-y-3">
                            <div class="content-skeleton h-6 w-full"></div>
                            <div class="content-skeleton h-6 w-3/4"></div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="content-skeleton h-12 w-32 rounded-xl"></div>
                            <div class="content-skeleton h-12 w-28 rounded-xl"></div>
                        </div>
                    </div>
                    
                    {{-- Image Content --}}
                    <div class="flex justify-center">
                        <div class="content-skeleton w-80 h-80 rounded-3xl"></div>
                    </div>
                </div>
            </div>
        </div>
        
    @elseif($type === 'list')
        {{-- List Skeleton --}}
        <div class="space-y-4">
            @for($i = 0; $i < $lines; $i++)
                <div class="flex items-center space-x-4 p-4 bg-white dark:bg-neutral-800 rounded-lg border border-neutral-200 dark:border-neutral-700">
                    <div class="content-skeleton w-8 h-8 rounded-full"></div>
                    <div class="flex-1 space-y-2">
                        <div class="content-skeleton h-4 w-full"></div>
                        <div class="content-skeleton h-3 w-2/3"></div>
                    </div>
                    <div class="content-skeleton w-16 h-8 rounded"></div>
                </div>
            @endfor
        </div>
        
    @elseif($type === 'form')
        {{-- Form Skeleton --}}
        <div class="maritime-card bg-white dark:bg-neutral-800 p-6 space-y-6">
            <div class="content-skeleton h-8 w-48"></div>
            
            @for($i = 0; $i < $lines; $i++)
                <div class="space-y-2">
                    <div class="content-skeleton h-4 w-24"></div>
                    <div class="content-skeleton h-12 w-full rounded-lg"></div>
                </div>
            @endfor
            
            <div class="flex space-x-4 pt-4">
                <div class="content-skeleton h-12 w-32 rounded-lg"></div>
                <div class="content-skeleton h-12 w-24 rounded-lg"></div>
            </div>
        </div>
        
    @else
        {{-- Custom Skeleton --}}
        <div class="space-y-4" style="{{ $height !== 'auto' ? 'height: ' . $height : '' }}">
            @for($i = 0; $i < $lines; $i++)
                <div class="content-skeleton h-4 {{ $i % 2 === 0 ? 'w-full' : 'w-3/4' }}"></div>
            @endfor
        </div>
    @endif
    
    {{-- Screen Reader Text --}}
    <span class="sr-only">Loading content, please wait...</span>
</div>

@push('styles')
<style>
/* Enhanced skeleton animations */
@keyframes skeleton-shimmer {
    0% {
        background-position: -200% 0;
    }
    100% {
        background-position: 200% 0;
    }
}

.loading-skeleton-container .content-skeleton {
    background: linear-gradient(
        90deg,
        var(--color-neutral-200) 25%,
        var(--color-neutral-100) 50%,
        var(--color-neutral-200) 75%
    );
    background-size: 200% 100%;
    animation: skeleton-shimmer 2s infinite;
    border-radius: 0.375rem;
}

.dark .loading-skeleton-container .content-skeleton {
    background: linear-gradient(
        90deg,
        var(--color-neutral-700) 25%,
        var(--color-neutral-600) 50%,
        var(--color-neutral-700) 75%
    );
    background-size: 200% 100%;
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
    .loading-skeleton-container .content-skeleton {
        animation: none;
        background: var(--color-neutral-200);
    }
    
    .dark .loading-skeleton-container .content-skeleton {
        background: var(--color-neutral-700);
    }
}

/* Professional loading fade-in */
.skeleton-loaded {
    animation: skeleton-fade-out 0.3s ease-out forwards;
}

@keyframes skeleton-fade-out {
    from {
        opacity: 1;
    }
    to {
        opacity: 0;
        pointer-events: none;
    }
}
</style>
@endpush 