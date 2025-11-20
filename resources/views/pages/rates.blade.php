<x-layouts.guest_two :active="'rates'">
 
    @push('styles')
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fadeIn 0.5s ease forwards;
        }
    </style>
    @endpush

    <!-- Spacer to compensate for fixed header height -->
    <div class="header-spacer" id="headerSpacer" aria-hidden="true"></div>
    
    <!-- Main Content for Skip Link -->
    <main id="main-content" role="main">
    
    <!-- Professional Rates Hero Section -->
    <x-page-banner 
        title="Shipping <span class='text-primary-600'>Rates</span>" 
        subtitle="Transparent pricing for fast air freight and economical sea freight services." 
    />
    
    <!-- Rates Section -->
    <section class="py-24 mt-18 relative overflow-hidden bg-white dark:from-neutral-900 dark:to-neutral-800/30 dark:bg-gradient-to-b">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[conic-gradient(from_0deg_at_50%_50%,transparent_0deg,rgba(0,0,0,0.03)_45deg,transparent_90deg,rgba(0,0,0,0.03)_135deg,transparent_180deg,rgba(0,0,0,0.03)_225deg,transparent_270deg,rgba(0,0,0,0.03)_315deg,transparent_360deg)] dark:bg-[conic-gradient(from_0deg_at_50%_50%,transparent_0deg,rgba(255,255,255,0.02)_45deg,transparent_90deg,rgba(255,255,255,0.02)_135deg,transparent_180deg,rgba(255,255,255,0.02)_225deg,transparent_270deg,rgba(255,255,255,0.02)_315deg,transparent_360deg)] [background-size:60px_60px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-20"></div>
            <div aria-hidden="true" class="absolute -top-96 -right-40 w-[800px] h-[800px] rounded-full bg-gradient-to-br from-amber-100/40 to-orange-100/40 dark:from-amber-900/30 dark:to-orange-900/30 blur-[150px] animate-pulse-slow"></div>
        </div>
        
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-7xl relative z-10">
            <!-- Professional Rates Tabs Section -->
            <div class="maritime-card bg-white dark:bg-neutral-800/50 shadow-2xl overflow-hidden backdrop-blur-sm border border-neutral-200/50 dark:border-neutral-700/50 performance-optimized loading-fade-in" x-data="{ activeTab: 'air' }" role="tabpanel" aria-label="Shipping rates calculator">
                <div class="flex border-b border-neutral-200/50 dark:border-neutral-700/50">
                    <div 
                        @click="activeTab = 'air'" 
                        :class="{ 'text-primary-600 border-primary-500 bg-primary-50': activeTab === 'air', 'text-neutral-600 dark:text-neutral-300 hover:bg-neutral-50 dark:hover:bg-neutral-800/50': activeTab !== 'air' }" 
                        class="flex-1 py-8 px-6 text-center text-lg font-semibold cursor-pointer transition-all duration-300 relative border-b-4 border-transparent font-primary"
                    >
                        <svg class="w-6 h-6 mx-auto mb-2 transition-transform duration-300" :class="{ 'transform -translate-y-0.5': activeTab === 'air' }" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21,16V14L13,9V7A1,1 0 0,0 12,6A1,1 0 0,0 11,7V9L3,14V16L11,13.5V19L8,20.5V22L12,21L16,22V20.5L13,19V13.5L21,16Z"/>
                        </svg>
                        Air Freight
                    </div>
                    <div 
                        @click="activeTab = 'sea'" 
                        :class="{ 'text-primary-600 border-primary-500 bg-primary-50': activeTab === 'sea', 'text-neutral-600 dark:text-neutral-300 hover:bg-neutral-50 dark:hover:bg-neutral-800/50': activeTab !== 'sea' }" 
                        class="flex-1 py-8 px-6 text-center text-lg font-semibold cursor-pointer transition-all duration-300 relative border-b-4 border-transparent font-primary"
                    >
                        <svg class="w-6 h-6 mx-auto mb-2 transition-transform duration-300" :class="{ 'transform -translate-y-0.5': activeTab === 'sea' }" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3,4H7A1,1 0 0,1 8,5V8H16V5A1,1 0 0,1 17,4H21A1,1 0 0,1 22,5V8H20V20A1,1 0 0,1 19,21H5A1,1 0 0,1 4,20V8H2V5A1,1 0 0,1 3,4M6,18H18V10H6V18Z"/>
                        </svg>
                        Sea Freight
                    </div>
                </div>
                
                <div class="p-6 md:p-8">
                    <!-- Air Freight Table -->
                    <x-rates-table 
                        type="air"
                        :rates="$airRates"
                        title="Air Freight Rates"
                        subtitle="Fast delivery (3-5 business days) with our premium air freight service"
                        note="Air freight rates are per pound. Contact us for a quote for items over 50lbs."
                        :isPriceFormatted="true"
                        :itemsPerPage="10"
                    />
                    
                    <!-- Sea Freight Table -->
                    <x-rates-table 
                        type="sea"
                        :rates="$seaRates"
                        title="Sea Freight Rates"
                        subtitle="Economical shipping for larger shipments"
                        note="Contact us for a quote for items over 50lbs."
                        :isPriceFormatted="true"
                        :itemsPerPage="10"
                    />
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <x-cta-section 
                    buttonUrl="https://portal.watopak.com/register" 
    buttonText="Get Started" 
    title="Want to ship your shipment to Jamaica fast?" 
    subtitle="Contact us today to get started and experience the best shipping services in Jamaica." />
    </main>
</x-layouts.guest_two> 