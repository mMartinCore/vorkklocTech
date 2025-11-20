<!-- Services Section Component -->
@props(['customClass' => '', 'title' => 'Professional Services', 'heading' => 'Our Services', 'description' => 'Watopak Logistics offers comprehensive shipping solutions to make your online shopping experience seamless and stress-free.'])

<section {{ $attributes->merge(['class' => 'services-section pb-24 pt-24 relative overflow-hidden bg-gray-50 dark:bg-neutral-900 ' . $customClass]) }}>
    <div class="absolute inset-0">
        <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(90deg,transparent_24%,rgba(0,0,0,0.04)_25%,rgba(0,0,0,0.04)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.04)_75%,rgba(0,0,0,0.04)_76%,transparent_77%),linear-gradient(0deg,transparent_24%,rgba(0,0,0,0.04)_25%,rgba(0,0,0,0.04)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.04)_75%,rgba(0,0,0,0.04)_76%,transparent_77%)] dark:bg-[linear-gradient(90deg,transparent_24%,rgba(255,255,255,0.02)_25%,rgba(255,255,255,0.02)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.02)_75%,rgba(255,255,255,0.02)_76%,transparent_77%),linear-gradient(0deg,transparent_24%,rgba(255,255,255,0.02)_25%,rgba(255,255,255,0.02)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.02)_75%,rgba(255,255,255,0.02)_76%,transparent_77%)] [background-size:30px_30px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-25"></div>
    </div>
    
    <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-7xl relative z-10">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="flex items-center justify-center mb-6">
                <span class="px-6 py-2.5 bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300 text-xs tracking-widest uppercase font-medium rounded-full border border-blue-200 dark:border-blue-800 shadow-lg backdrop-blur-md animate-fade-in">
                    <span class="font-display">{{ $title }}</span>
                </span>
            </div>
            
            <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold mb-8 text-neutral-800 dark:text-white font-primary">
                {{ $heading }}
            </h2>
            
            <p class="max-w-3xl mx-auto text-lg text-neutral-700 dark:text-neutral-300 leading-relaxed font-secondary">{{ $description }}</p>
        </div>
        
        <!-- Service Items with Alternating Layout -->
        <div class="space-y-24">
            {{ $slot }}
        </div>
    </div>
</section>