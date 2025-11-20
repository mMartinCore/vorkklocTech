@props([
    'rates' => [],
    'type' => 'air',
    'title' => '',
    'subtitle' => '',
    'note' => '',
    'isPriceFormatted' => true,
    'itemsPerPage' => 10
])

<div 
    x-data="{ 
        currentPage: 1,
        rates: {{ json_encode($rates) }},
        itemsPerPage: {{ $itemsPerPage }},
        
        pages() {
            return Math.ceil(this.rates.length / this.itemsPerPage);
        },
        
        paginatedRates() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.rates.slice(start, end);
        },
        
        nextPage() {
            if (this.currentPage < this.pages()) {
                this.currentPage++;
            }
        },
        
        prevPage() {
            if (this.currentPage > 1) {
                this.currentPage--;
            }
        },
        
        goToPage(page) {
            if (page >= 1 && page <= this.pages()) {
                this.currentPage = page;
            }
        },
        
        formatPrice(price) {
            if (typeof price === 'string' && price.startsWith('Contact')) {
                return price;
            }
            
            if ({{ $isPriceFormatted ? 'true' : 'false' }}) {
                return '$' + Number(price).toLocaleString('en-US', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }
            
            return '$' + price;
        }
    }"
    x-show="activeTab === '{{ $type }}'" 
    x-transition:enter="animate-fade-in"
>
    <div class="mb-8">
        <h3 class="text-3xl font-bold mb-3 text-neutral-800 dark:text-white font-primary">{{ $title }}</h3>
        <p class="text-lg text-neutral-600 dark:text-neutral-400 font-secondary">{{ $subtitle }}</p>
    </div>
    
    <div class="maritime-card overflow-hidden shadow-lg border border-neutral-200/50 dark:border-neutral-700/50 performance-optimized">
        <table class="w-full" role="table" aria-label="Shipping rates table">
            <thead class="bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                <tr>
                    <th class="px-8 py-6 text-left text-sm font-bold uppercase tracking-wider font-display">Package Weight</th>
                    <th class="px-8 py-6 text-left text-sm font-bold uppercase tracking-wider font-display">Shipping Rate</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-neutral-800">
                <template x-for="(rate, index) in paginatedRates()" :key="index">
                    <tr class="border-b border-neutral-100 dark:border-neutral-700/50 hover:bg-primary-50 dark:hover:bg-primary-900/10 transition-all duration-300 group">
                        <td class="px-8 py-6 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-2 h-2 bg-secondary-500 rounded-full mr-4 group-hover:scale-125 transition-transform duration-300"></div>
                                <span class="font-semibold text-neutral-800 dark:text-neutral-200 font-secondary" x-text="rate.weight"></span>
                            </div>
                        </td>
                        <td class="px-8 py-6 whitespace-nowrap">
                            <span class="font-bold text-lg text-primary-700 dark:text-primary-400 font-mono" x-text="formatPrice(rate.price)"></span>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
    
    <!-- Professional Pagination -->
    <div class="mt-8 space-y-4 sm:flex sm:justify-between sm:items-center" x-show="pages() > 1">
        <div class="text-sm text-neutral-600 dark:text-neutral-400 font-secondary hidden sm:block">
            <span x-text="'Showing ' + ((currentPage - 1) * itemsPerPage + 1) + ' to ' + Math.min(currentPage * itemsPerPage, rates.length) + ' of ' + rates.length + ' entries'"></span>
        </div>

        <!-- Mobile (compact) -->
        <div class="flex items-center justify-between sm:hidden">
            <button 
                class="professional-button px-4 py-2 bg-neutral-100 text-neutral-600 rounded-lg hover:bg-primary-50 hover:text-primary-600 disabled:opacity-50 disabled:cursor-not-allowed touch-target performance-optimized focus-visible-only"
                @click="prevPage()"
                :disabled="currentPage === 1"
                aria-label="Previous page">
                Prev
            </button>

            <span class="mx-3 text-sm text-neutral-600 dark:text-neutral-400 font-secondary" aria-live="polite">
                <span x-text="'Page ' + currentPage + ' of ' + pages()"></span>
            </span>

            <button 
                class="professional-button px-4 py-2 bg-neutral-100 text-neutral-600 rounded-lg hover:bg-primary-50 hover:text-primary-600 disabled:opacity-50 disabled:cursor-not-allowed touch-target performance-optimized focus-visible-only"
                @click="nextPage()" 
                :disabled="currentPage === pages()"
                aria-label="Next page">
                Next
            </button>
        </div>

        <!-- Desktop (full pager with horizontal scroll if many pages) -->
        <div class="hidden sm:flex space-x-2 overflow-x-auto whitespace-nowrap">
            <button 
                class="professional-button px-4 py-2 bg-neutral-100 text-neutral-600 rounded-lg hover:bg-primary-50 hover:text-primary-600 disabled:opacity-50 disabled:cursor-not-allowed touch-target performance-optimized focus-visible-only"
                @click="prevPage()"
                :disabled="currentPage === 1"
                aria-label="Previous page">
                Previous
            </button>

            <template x-for="page in pages()" :key="page">
                <button 
                    @click="goToPage(page)" 
                    :class="{'bg-primary-500 text-white shadow-md': currentPage === page, 'bg-neutral-100 text-neutral-600': currentPage !== page}"
                    class="professional-button px-4 py-2 rounded-lg hover:bg-primary-50 hover:text-primary-600 font-medium touch-target performance-optimized focus-visible-only"
                    :aria-label="'Go to page ' + page"
                    :aria-current="currentPage === page ? 'page' : 'false'">
                    <span x-text="page"></span>
                </button>
            </template>

            <button 
                class="professional-button px-4 py-2 bg-neutral-100 text-neutral-600 rounded-lg hover:bg-primary-50 hover:text-primary-600 disabled:opacity-50 disabled:cursor-not-allowed touch-target performance-optimized focus-visible-only"
                @click="nextPage()" 
                :disabled="currentPage === pages()"
                aria-label="Next page">
                Next
            </button>
        </div>
    </div>
    
    <div class="mt-8 p-6 bg-neutral-50 dark:bg-neutral-800/50 rounded-xl border border-neutral-200/50 dark:border-neutral-700/50">
        <div class="flex items-start space-x-3">
            <div class="flex-shrink-0 w-5 h-5 bg-secondary-500 rounded-full flex items-center justify-center mt-0.5">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z"/>
                </svg>
            </div>
            <p class="text-sm text-neutral-600 dark:text-neutral-400 font-secondary font-medium">{{ $note }}</p>
       
        </div>
    </div>
</div> 