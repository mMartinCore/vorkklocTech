<x-layouts.guest_two :active="'products'">
    <!-- Spacer to compensate for fixed header height -->
    <div class="header-spacer" id="headerSpacer" aria-hidden="true"></div>
    
    <!-- Main Content for Skip Link -->
    <main id="main-content" role="main">
    
    <!-- Page Banner -->
    <x-page-banner 
        title="Our <span class='text-primary-600'>Products</span>" 
        subtitle="Powerful software solutions tailored for your business needs." 
    />

    <!-- Products Section -->
    <section class="py-20 md:py-24 relative overflow-hidden bg-slate-50 dark:bg-slate-800/50" id="products">
        <!-- Section Divider -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-200 dark:via-blue-800 to-transparent"></div>
        
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-6xl relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="flex items-center justify-center mb-6">
                    <span class="px-6 py-2.5 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 text-blue-600 dark:text-cyan-400 text-xs tracking-widest uppercase font-medium rounded-full border border-blue-500/20 dark:border-cyan-500/30 shadow-lg backdrop-blur-md">
                        Our Products
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-slate-900 dark:text-white">
                    Ready-to-Use Solutions
                </h2>
                <p class="text-lg sm:text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Powerful, scalable, and customizable software solutions designed to streamline your logistics and courier business operations immediately.
                </p>
            </div>
            
            <!-- Product 1: Courier Web App + Mobile App -->
            <div class="mb-24" data-aos="fade-up">
                <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-xl border border-slate-200 dark:border-slate-700 overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                        <div class="p-8 md:p-12 flex flex-col justify-center">
                            <div class="inline-flex items-center gap-2 mb-4">
                                <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 text-xs font-bold uppercase tracking-wider">Best Seller</span>
                            </div>
                            <h3 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-4">Courier Management System</h3>
                            <p class="text-lg text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                                A complete end-to-end solution for courier companies. Includes a powerful web admin panel for managing shipments and a user-friendly mobile app for your customers.
                            </p>
                            
                            <div class="space-y-4 mb-8">
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <div>
                                        <h4 class="font-bold text-slate-900 dark:text-white">Real-time Tracking</h4>
                                        <p class="text-sm text-slate-500 dark:text-slate-400">Let customers track their packages every step of the way.</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <div>
                                        <h4 class="font-bold text-slate-900 dark:text-white">Mobile App Included</h4>
                                        <p class="text-sm text-slate-500 dark:text-slate-400">Native Android app for customers to manage shipments.</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <div>
                                        <h4 class="font-bold text-slate-900 dark:text-white">Automated Notifications</h4>
                                        <p class="text-sm text-slate-500 dark:text-slate-400">Email and push notifications for status updates.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-100 dark:bg-slate-700/50 relative min-h-[300px] lg:min-h-full">
                            <div class="absolute inset-0 flex items-center justify-center p-8">
                                <!-- Placeholder for Product Image -->
                                <div class="w-full max-w-md bg-gradient-to-tr from-blue-500 to-cyan-500 rounded-2xl shadow-2xl aspect-video flex items-center justify-center text-white text-center p-8 transform rotate-3 hover:rotate-0 transition-transform duration-500">
                                    <div>
                                        <svg class="w-16 h-16 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                        <p class="font-bold text-xl">Web Dashboard + Mobile App</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pricing Tiers -->
                    <div class="border-t border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50 p-8 md:p-12">
                        <h4 class="text-2xl font-bold text-center text-slate-900 dark:text-white mb-10">Choose Your Plan</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Starter Tier -->
                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-sm border border-slate-200 dark:border-slate-700 hover:shadow-md transition-all">
                                <h5 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Startup</h5>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">Essential features for new businesses.</p>
                                <ul class="space-y-3 mb-6 text-sm text-slate-600 dark:text-slate-300">
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Web Admin Dashboard</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Basic Customer App</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> up to 500 Shipments/mo</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Email Support</li>
                                </ul>
                                <a href="{{ route('contact') }}" class="block w-full py-2 px-4 bg-slate-100 dark:bg-slate-700 hover:bg-slate-200 dark:hover:bg-slate-600 text-slate-900 dark:text-white text-center rounded-lg font-medium transition-colors">Contact for Price</a>
                            </div>
                            
                            <!-- Professional Tier -->
                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-lg border-2 border-blue-500 relative transform md:-translate-y-4">
                                <div class="absolute top-0 right-0 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">POPULAR</div>
                                <h5 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Business</h5>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">For growing courier companies.</p>
                                <ul class="space-y-3 mb-6 text-sm text-slate-600 dark:text-slate-300">
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Advanced Admin Panel</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Full Mobile App Features</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Unlimited Shipments</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Priority Support</li>
                                </ul>
                                <a href="{{ route('contact') }}" class="block w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white text-center rounded-lg font-medium transition-colors shadow-lg shadow-blue-500/30">Contact for Price</a>
                            </div>
                            
                            <!-- Enterprise Tier -->
                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-sm border border-slate-200 dark:border-slate-700 hover:shadow-md transition-all">
                                <h5 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Enterprise</h5>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">Custom solutions for large scale.</p>
                                <ul class="space-y-3 mb-6 text-sm text-slate-600 dark:text-slate-300">
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> White Label Solution</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Custom Integrations</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Dedicated Account Manager</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 24/7 Premium Support</li>
                                </ul>
                                <a href="{{ route('contact') }}" class="block w-full py-2 px-4 bg-slate-100 dark:bg-slate-700 hover:bg-slate-200 dark:hover:bg-slate-600 text-slate-900 dark:text-white text-center rounded-lg font-medium transition-colors">Contact for Price</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 2: Courier Website -->
            <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-xl border border-slate-200 dark:border-slate-700 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                     <div class="bg-slate-100 dark:bg-slate-700/50 order-last lg:order-first relative min-h-[300px] lg:min-h-full">
                        <div class="absolute inset-0 flex items-center justify-center p-8">
                             <!-- Placeholder for Website Image -->
                             <div class="w-full max-w-md bg-gradient-to-tl from-cyan-500 to-blue-600 rounded-2xl shadow-2xl aspect-video flex items-center justify-center text-white text-center p-8 transform -rotate-2 hover:rotate-0 transition-transform duration-500">
                                <div>
                                    <svg class="w-16 h-16 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                                    <p class="font-bold text-xl">Professional Website</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 md:p-12 flex flex-col justify-center">
                        <h3 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-4">Professional Courier Website</h3>
                        <p class="text-lg text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                            Establish your digital presence with a high-converting, professional website designed specifically for courier and logistics businesses.
                        </p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center flex-shrink-0 text-blue-600 dark:text-blue-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-sm">Package Tracking</h4>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Integrated public tracking page</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center flex-shrink-0 text-blue-600 dark:text-blue-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-sm">Service Showcase</h4>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Display your rates and services</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center flex-shrink-0 text-blue-600 dark:text-blue-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-sm">SEO Optimized</h4>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Rank higher on Google</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center flex-shrink-0 text-blue-600 dark:text-blue-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-sm">Mobile Responsive</h4>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Looks great on all devices</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 shadow-lg shadow-cyan-500/30 transition-all">
                            Get Your Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <x-cta-section />
    </main>
</x-layouts.guest_two>
