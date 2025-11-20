<x-layouts.guest_two :active="'calculator'">
    <!-- Page Banner -->
    <x-page-banner 
        title="Shipping <span class='text-theme_color_primary-100'>Calculator</span>" 
        subtitle="Estimate your shipping costs for USA to Jamaica" 
    />
    
    <!-- Calculator Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(90deg,transparent_24%,rgba(0,0,0,0.04)_25%,rgba(0,0,0,0.04)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.04)_75%,rgba(0,0,0,0.04)_76%,transparent_77%),linear-gradient(0deg,transparent_24%,rgba(0,0,0,0.04)_25%,rgba(0,0,0,0.04)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.04)_75%,rgba(0,0,0,0.04)_76%,transparent_77%)] dark:bg-[linear-gradient(90deg,transparent_24%,rgba(255,255,255,0.02)_25%,rgba(255,255,255,0.02)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.02)_75%,rgba(255,255,255,0.02)_76%,transparent_77%),linear-gradient(0deg,transparent_24%,rgba(255,255,255,0.02)_25%,rgba(255,255,255,0.02)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.02)_75%,rgba(255,255,255,0.02)_76%,transparent_77%)] [background-size:30px_30px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-25"></div>
            <div aria-hidden="true" class="absolute bottom-0 left-0 w-[500px] h-[500px] rounded-full bg-gradient-to-br from-green-100/30 to-teal-100/30 dark:from-green-900/20 dark:to-teal-900/20 blur-[100px] animate-pulse-slow"></div>
        </div>
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-7xl relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12" data-aos="fade-up">
                    <h2 class="text-4xl font-bold mb-6">Calculate Your Shipping Cost</h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Use our calculator to get an estimate for shipping your packages from the USA to Jamaica. 
                        Enter your package details below for an instant quote.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden" data-aos="fade-up">
                    <div class="p-8 border-b border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Package Details</h3>
                        
                        <div x-data="{ 
                            weight: 1, 
                            length: 10, 
                            width: 10, 
                            height: 10,
                            method: 'air',
                            insurance: false,
                            itemValue: 0,
                            showAdvanced: false,
                            
                            calculatePrice() {
                                let baseRate = this.method === 'air' ? 750 : 500;
                                let price = this.weight * baseRate;
                                
                                // Calculate dimensional weight
                                let dimWeight = (this.length * this.width * this.height) / 166;
                                if (dimWeight > this.weight && this.showAdvanced) {
                                    price = dimWeight * baseRate;
                                }
                                
                                // Add insurance if selected
                                if (this.insurance && this.itemValue > 0 && this.showAdvanced) {
                                    price += this.itemValue * 0.05;
                                }
                                
                                return price.toFixed(2);
                            }
                        }">
                            <!-- Basic Options -->
                            <div class="space-y-6">
                                <!-- Package Weight -->
                                <div>
                                    <label for="weight" class="block text-gray-700 font-medium mb-2">Package Weight (lbs) <span class="text-red-500">*</span></label>
                                    <input 
                                        type="number" 
                                        id="weight" 
                                        x-model="weight" 
                                        min="0.1" 
                                        step="0.1"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-theme_color_primary-100 focus:border-theme_color_primary-100 transition-all duration-300" 
                                        required
                                    >
                                </div>
                                
                                <!-- Shipping Method -->
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Shipping Method <span class="text-red-500">*</span></label>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer transition-all duration-300" :class="{ 'bg-blue-50 border-blue-300': method === 'air' }">
                                            <input type="radio" name="method" value="air" x-model="method" class="form-radio h-5 w-5 text-blue-600">
                                            <div class="ml-3">
                                                <span class="block font-medium text-gray-700">Air Freight</span>
                                                <span class="text-sm text-gray-500">Faster delivery (3-5 days)</span>
                                            </div>
                                        </label>
                                        <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer transition-all duration-300" :class="{ 'bg-blue-50 border-blue-300': method === 'sea' }">
                                            <input type="radio" name="method" value="sea" x-model="method" class="form-radio h-5 w-5 text-blue-600">
                                            <div class="ml-3">
                                                <span class="block font-medium text-gray-700">Sea Freight</span>
                                                <span class="text-sm text-gray-500">Economical (2-4 weeks)</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                
                                <!-- Advanced Options Toggle -->
                                <div>
                                    <button @click="showAdvanced = !showAdvanced" type="button" class="text-theme_color_primary-100 flex items-center font-medium hover:text-theme_color_primary-200 transition-colors">
                                        <span x-text="showAdvanced ? 'Hide Advanced Options' : 'Show Advanced Options'"></span>
                                        <svg :class="{'rotate-180': showAdvanced}" class="w-5 h-5 ml-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Advanced Options -->
                            <div x-show="showAdvanced" x-collapse>
                                <div class="mt-6 pt-6 border-t border-gray-200 space-y-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Advanced Options</h4>
                                    
                                    <!-- Package Dimensions -->
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Package Dimensions (inches)</label>
                                        <div class="grid grid-cols-3 gap-4">
                                            <div>
                                                <label for="length" class="block text-gray-600 text-sm mb-1">Length</label>
                                                <input 
                                                    type="number" 
                                                    id="length" 
                                                    x-model="length" 
                                                    min="1" 
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-theme_color_primary-100 focus:border-theme_color_primary-100"
                                                >
                                            </div>
                                            <div>
                                                <label for="width" class="block text-gray-600 text-sm mb-1">Width</label>
                                                <input 
                                                    type="number" 
                                                    id="width" 
                                                    x-model="width" 
                                                    min="1" 
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-theme_color_primary-100 focus:border-theme_color_primary-100"
                                                >
                                            </div>
                                            <div>
                                                <label for="height" class="block text-gray-600 text-sm mb-1">Height</label>
                                                <input 
                                                    type="number" 
                                                    id="height" 
                                                    x-model="height" 
                                                    min="1" 
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-theme_color_primary-100 focus:border-theme_color_primary-100"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Insurance -->
                                    <div>
                                        <div class="flex items-center mb-2">
                                            <input 
                                                type="checkbox" 
                                                id="insurance" 
                                                x-model="insurance" 
                                                class="form-checkbox h-5 w-5 text-theme_color_primary-100 rounded"
                                            >
                                            <label for="insurance" class="ml-2 block text-gray-700 font-medium">Add Shipping Insurance</label>
                                        </div>
                                        <p class="text-sm text-gray-500 ml-7">Protects your package against loss or damage (5% of declared value)</p>
                                        
                                        <!-- Item Value -->
                                        <div x-show="insurance" class="mt-4 ml-7">
                                            <label for="item-value" class="block text-gray-700 font-medium mb-2">Declared Value</label>
                                            <input 
                                                type="number" 
                                                id="item-value" 
                                                x-model="itemValue" 
                                                min="0" 
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-theme_color_primary-100 focus:border-theme_color_primary-100"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Result Box -->
                            <div class="mt-8 p-6 bg-gray-50 rounded-xl border border-gray-200">
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-lg font-medium text-gray-700">Estimated Shipping Cost:</span>
                                    <span class="text-3xl font-bold text-theme_color_primary-100" x-text="'$' + calculatePrice()"></span>
                                </div>
                                <p class="text-sm text-gray-500">
                                    <i class="fas fa-info-circle mr-1"></i>
                                    This is an estimate only. Final cost may vary based on actual weight and dimensions upon receipt. Customs duties and taxes are not included.
                                </p>
                            </div>
                            
                            <!-- Action buttons -->
                            <div class="mt-8 flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                                <a href="{{ route('contact') }}" class="inline-flex justify-center items-center px-6 py-3 bg-theme_color_primary-100 text-white font-medium rounded-lg hover:bg-theme_color_primary-200 transition-colors duration-300 shadow-md hover:shadow-lg">
                                    <span>Contact Us for Quote</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </a>
                                <a href="{{ route('rates') }}" class="inline-flex justify-center items-center px-6 py-3 bg-white text-theme_color_primary-100 font-medium rounded-lg border border-theme_color_primary-100 hover:bg-gray-50 transition-colors duration-300">
                                    <span>View Full Rate Sheet</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Information -->
                <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8" data-aos="fade-up">
                    <!-- Shipping Tips -->
                    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-theme_color_primary-100 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Shipping Tips
                        </h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Combine multiple packages to save on shipping costs</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Choose air freight for time-sensitive items</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Opt for sea freight for larger, heavier packages</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Add insurance for valuable or fragile items</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Important Notes -->
                    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            Important Notes
                        </h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-amber-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <span>Customs duties and taxes are not included in shipping rates</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-amber-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <span>Some items may be prohibited or restricted for shipping</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-amber-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <span>Package consolidation may delay shipping by 1-2 days</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-amber-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <span>Contact us for quotes on packages exceeding 50 lbs</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <x-cta-section />
</x-layouts.guest_two> 