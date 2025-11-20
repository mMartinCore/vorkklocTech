<x-layouts.guest_two :active="'home'">
  
    <!-- Spacer to compensate for fixed header height -->
    <div class="header-spacer" id="headerSpacer" aria-hidden="true"></div>
    
    <!-- Main Content for Skip Link -->
    <main id="main-content" role="main">
    
    <!-- Hero Section -->
    <x-hero-section 
        headline1="WatoPak Logistics"
        headline2="Ship items from the USA to Jamaica"
        description="Signup for your free USA mailbox address, shop online and ship with us to Jamaica. <span class='text-theme_color_accent-100'>Professional service, guaranteed delivery.</span>"
        ctaButtonText="Get Started"
        ctaButtonUrl="https://watopak.jashippers.com/register"
        secondaryButtonText="View Rates"
        secondaryButtonUrl="{{ route('rates') }}"
        heroImage="images/watopak-logistics-hero.png"
        badgeText="Fast Shipping from USA to Jamaica"
    />
    <section class="py-24 md:py-24 relative overflow-hidden bg-gray-100 dark:from-neutral-900 dark:to-neutral-800/30 dark:bg-gradient-to-b" id="how-it-works">
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(45deg,transparent_24%,rgba(0,0,0,0.05)_25%,rgba(0,0,0,0.05)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.05)_75%,rgba(0,0,0,0.05)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(0,0,0,0.05)_25%,rgba(0,0,0,0.05)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.05)_75%,rgba(0,0,0,0.05)_76%,transparent_77%)] dark:bg-[linear-gradient(45deg,transparent_24%,rgba(255,255,255,0.03)_25%,rgba(255,255,255,0.03)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.03)_75%,rgba(255,255,255,0.03)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(255,255,255,0.03)_25%,rgba(255,255,255,0.03)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.03)_75%,rgba(255,255,255,0.03)_76%,transparent_77%)] [background-size:40px_40px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-30"></div>
            <div aria-hidden="true" class="absolute -top-96 -right-40 w-[800px] h-[800px] rounded-full bg-gradient-to-br from-blue-100/40 to-purple-100/40 dark:from-blue-900/30 dark:to-purple-900/30 blur-[150px] animate-pulse-slow"></div>
         </div>
        
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-6xl relative z-10">
            <div class="relative mb-24 max-w-3xl mx-auto" data-aos="fade-up">
                <div class="flex items-center justify-center mb-6">
                    <span class="px-6 py-2.5 bg-gradient-to-r from-theme_color_primary-100/15 to-theme_color_secondary-100/15 text-theme_color_secondary-100 dark:text-theme_color_primary-100 text-xs tracking-widest uppercase font-medium rounded-full border border-theme_color_secondary-100/15 dark:border-theme_color_primary-100/25 shadow-lg backdrop-blur-md animate-fade-in relative overflow-hidden group">
                        <span class="absolute inset-0 bg-gradient-to-r from-theme_color_primary-100/5 to-theme_color_secondary-100/5 translate-y-full group-hover:translate-y-0 transition-transform duration-700"></span>
                        <span class="relative">Seamless Shipping Flow</span>
                    </span>
                </div>
                
                <h2 class="text-center relative mb-14">
                    <span class="block text-5xl md:text-6xl xl:text-7xl font-bold mb-8 text-gray-600 dark:text-white  animate-gradient-x relative">
                        How It Works
                        <span style="background: linear-gradient(90deg, var(--color-theme_color_primary-100) 0%, var(--color-theme_color_secondary-100) 50%, var(--color-theme_color_primary-100) 100%); 
                                background-size: 200% auto;
                                animation: shimmer 3s linear infinite;
                                opacity: 0.15;
                                filter: blur(20px);" 
                            class="absolute -bottom-4 left-0 w-full h-8 -z-10 rounded-full">
                        </span>
                    </span>
                    <span class="block text-lg sm:text-xl text-gray-700 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed font-sans font-medium">
                     Sign up on our platform for the best shipping experience from the USA to Jamaica.   
                </span>
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 relative z-10">
                <!-- Professional Flow Connector -->
                <div class="timeline-connector absolute top-28 left-0 w-full h-2 bg-gradient-to-r from-transparent via-primary-500/40 to-transparent hidden md:block rounded-full"></div>
                
                <!-- Step 1: Professional Maritime Design -->
                <div class="maritime-card group relative p-8 pt-16 bg-white dark:bg-neutral-800/90 shadow-xl shadow-primary-500/10 dark:shadow-neutral-900/50 dark:backdrop-blur-lg border border-neutral-200 dark:border-neutral-700/50 flex flex-col items-center text-center performance-optimized loading-fade-in" data-aos="fade-up" data-aos-delay="50" role="article" aria-labelledby="step-1-title">
                    <div class="parallax-element step-number w-32 h-32 rounded-full border-2 border-primary-500 text-white flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition-all duration-500 relative -mt-28 shadow-xl shadow-primary-500/30 dark:shadow-neutral-900/50 bg-gradient-to-br from-primary-500 to-secondary-500" data-speed="-0.05">
                        <div class="absolute inset-0 rounded-full bg-white/20 backdrop-blur-sm group-hover:opacity-30 transition-opacity duration-300"></div>
                        
                        <!-- Professional SVG Icon -->
                        <svg class="relative z-10 w-12 h-12 text-white drop-shadow-lg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17,19H7V5H17M17,1H7C5.89,1 5,1.89 5,3V21A2,2 0 0,0 7,23H17A2,2 0 0,0 19,21V3C19,1.89 18.1,1 17,1M9,7H15V9H9V7M9,11H13V13H9V11Z"/>
                        </svg>
                        
                        <!-- Step Number -->
                        <!-- <div class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-secondary-500 text-white flex items-center justify-center text-sm font-bold shadow-lg font-display">1</div> -->
                    </div>
                    
                    <h3 id="step-1-title" class="step-title text-3xl font-bold text-neutral-900 dark:text-white mb-5 group-hover:text-primary-600 transition-colors duration-300 font-primary">Sign Up</h3>
                    
                    <p class="text-lg text-neutral-700 dark:text-neutral-200 font-secondary mb-8 leading-relaxed">
                        Create your account and receive your professional US shipping address instantly.
                    </p>
                    
                    <!-- Arrow connecting to next step (visible on desktop) -->
                    <div class="hidden md:block absolute top-1/2 -right-5 transform -translate-y-1/2 z-20">
                        <div class="w-10 h-10 text-theme_color_primary-100/70 animate-pulse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Professional Maritime Design -->
                <div class="maritime-card group relative p-8 pt-16 bg-white dark:bg-neutral-800/90 shadow-xl shadow-primary-500/10 dark:shadow-neutral-900/50 dark:backdrop-blur-lg border border-neutral-200 dark:border-neutral-700/50 flex flex-col items-center text-center performance-optimized loading-fade-in" data-aos="fade-up" data-aos-delay="100" role="article" aria-labelledby="step-2-title">
                    <div class="parallax-element step-number w-32 h-32 rounded-full border-2 border-primary-500 text-white flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition-all duration-500 relative -mt-28 shadow-xl shadow-primary-500/30 dark:shadow-neutral-900/50 bg-gradient-to-br from-primary-500 to-secondary-500" data-speed="-0.1">
                        <div class="absolute inset-0 rounded-full bg-white/20 backdrop-blur-sm group-hover:opacity-30 transition-opacity duration-300"></div>
                        
                        <!-- Professional SVG Icon -->
                        <svg class="relative z-10 w-12 h-12 text-white drop-shadow-lg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z"/>
                        </svg>
                        
                        <!-- Step Number -->
                        <!-- <div class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-secondary-500 text-white flex items-center justify-center text-sm font-bold shadow-lg font-display">2</div> -->
                    </div>
                    
                    <h3 id="step-2-title" class="step-title text-3xl font-bold text-neutral-900 dark:text-white mb-5 group-hover:text-primary-600 transition-colors duration-300 font-primary">Shop Online</h3>
                    
                    <p class="text-lg text-neutral-700 dark:text-neutral-200 font-secondary mb-8 leading-relaxed">
                        Shop from Amazon, eBay, and thousands of US retailers using your Watopak shipping address.
                    </p>
                    
                    <!-- Arrow connecting to next step (visible on desktop) -->
                    <div class="hidden md:block absolute top-1/2 -right-5 transform -translate-y-1/2 z-20">
                        <div class="w-10 h-10 text-theme_color_primary-100/70 animate-pulse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3: Professional Maritime Design -->
                <div class="maritime-card group relative p-8 pt-16 bg-white dark:bg-neutral-800/90 shadow-xl shadow-primary-500/10 dark:shadow-neutral-900/50 dark:backdrop-blur-lg border border-neutral-200 dark:border-neutral-700/50 flex flex-col items-center text-center performance-optimized loading-fade-in" data-aos="fade-up" data-aos-delay="150" role="article" aria-labelledby="step-3-title">
                    <div class="parallax-element step-number w-32 h-32 rounded-full border-2 border-primary-500 text-white flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition-all duration-500 relative -mt-28 shadow-xl shadow-primary-500/30 dark:shadow-neutral-900/50 bg-gradient-to-br from-primary-500 to-secondary-500" data-speed="-0.15">
                        <div class="absolute inset-0 rounded-full bg-white/20 backdrop-blur-sm group-hover:opacity-30 transition-opacity duration-300"></div>
                        
                        <!-- Professional SVG Icon -->
                        <svg class="relative z-10 w-12 h-12 text-white drop-shadow-lg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21,16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V7.5C3,7.12 3.21,6.79 3.53,6.62L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.79,6.79 21,7.12 21,7.5V16.5M12,4.15L6.04,7.5L12,10.85L17.96,7.5L12,4.15M12,12.85L6.04,16.2L12,19.55L17.96,16.2L12,12.85Z"/>
                        </svg>
                        
                        <!-- Step Number -->
                        <!-- <div class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-secondary-500 text-white flex items-center justify-center text-sm font-bold shadow-lg font-display">3</div> -->
                    </div>
                    <h3 id="step-3-title" class="step-title text-3xl font-bold text-neutral-900 dark:text-white mb-5 group-hover:text-primary-600 transition-colors duration-300 font-primary">Delivery</h3>
                    
                    <p class="text-lg text-neutral-700 dark:text-neutral-200 font-secondary mb-8 leading-relaxed">
                      Schedule a delivery and we will deliver your items to your doorstep
                    </p>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Services Section -->
    <section class="pt-24 md:py-24 relative overflow-hidden bg-gray-50 dark:bg-neutral-900 ">
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(90deg,transparent_24%,rgba(0,0,0,0.04)_25%,rgba(0,0,0,0.04)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.04)_75%,rgba(0,0,0,0.04)_76%,transparent_77%),linear-gradient(0deg,transparent_24%,rgba(0,0,0,0.04)_25%,rgba(0,0,0,0.04)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.04)_75%,rgba(0,0,0,0.04)_76%,transparent_77%)] dark:bg-[linear-gradient(90deg,transparent_24%,rgba(255,255,255,0.02)_25%,rgba(255,255,255,0.02)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.02)_75%,rgba(255,255,255,0.02)_76%,transparent_77%),linear-gradient(0deg,transparent_24%,rgba(255,255,255,0.02)_25%,rgba(255,255,255,0.02)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.02)_75%,rgba(255,255,255,0.02)_76%,transparent_77%)] [background-size:30px_30px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-25"></div>
        </div>
        
        <div class="  relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="flex items-center justify-center mb-6">
                    <span class="px-6 py-2.5 bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300 text-xs tracking-widest uppercase font-medium rounded-full border border-blue-200 dark:border-blue-800 shadow-lg backdrop-blur-md animate-fade-in">
                        <span class="font-display">WatoPak Logistics</span>
                    </span>
                </div>
                
                <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold mb-8 text-neutral-800 dark:text-white font-primary">
                    Our Services
                </h2>
                
                <p class="max-w-3xl mx-auto text-lg text-neutral-700 dark:text-neutral-300 leading-relaxed font-secondary">Shipping your online purchases from the USA to Jamaica is now easy and stress-free, thanks to Watopak Logistics's comprehensive solutions</p>
            </div>
            <x-service-item-left 
                    tagColor="blue"
                    tagText="Personal USA Address"
                    iconPath="M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19V8A2,2 0 0,1 4,6H8V4A2,2 0 0,1 10,2M14,6V4H10V6H14Z"
                    title=" We Got You Covered"
                    description="Get your personal USA shipping address to shop from US retailers online. Watopak Logistics ensures your packages are delivered to your branch office in Jamaica."
                    :features="[
                        'Personal USA shipping address', 
                        '24/7 secure package storage', 
                    ]"
                    buttonText="Get Your USA Address"
                    buttonUrl="https://watopak.jashippers.com/register"
                    imageUrl="{{ asset('images/wato-close-up-delivery-person-giving-parcel-client.jpg') }}"
                    imageAlt="USA Mailbox Service"
                    bgColor="blue"
                />

            
        
                
                 
                <x-service-item-right 
                    tagColor="green"
                    tagText="Air Freight"
                    iconPath="M21,16V14L13,9V7A1,1 0 0,0 12,6A1,1 0 0,0 11,7V9L3,14V16L11,13.5V19L8,20.5V22L12,21L16,22V20.5L13,19V13.5L21,16Z"
                    title="Air Freight"
                    description="Fast, reliable air shipping for time-sensitive packages from USA to Jamaica. Professional service with full tracking and expedited customs clearance for urgent deliveries."
                    :features="[
                        'Fast, reliable air shipping for time-sensitive packages from USA to Jamaica.',
                        'Professional service with full tracking and expedited customs clearance for urgent deliveries.',
                        'Perfect for electronics and urgent items', 
                    ]"
                    buttonText="Book Air Freight"
                    buttonUrl="https://watopak.jashippers.com/register"
                    imageUrl="{{ asset('images/wato-pak-cargo-plane-sunset.jpg') }}"
                    imageAlt="Express Air Freight Service"
                    :darkBg="true"
                    bgColor="dark"
                />
 
                <x-service-item-left 
                    tagColor="purple"
                    tagText="Sea Freight Shipping"
                    iconPath="M21,16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V7.5C3,7.12 3.21,6.79 3.53,6.62L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.79,6.79 21,7.12 21,7.5V16.5M12,4.15L5,8.09V15.91L12,19.85L19,15.91V8.09L12,4.15M12,6.23L16.9,9.07L12,11.91L7.1,9.07L12,6.23M17,14.89L13,17.2V13.62L17,11.31V14.89M11,17.2L7,14.89V11.31L11,13.62V17.2Z"
                    title="Sea Freight"
                    description="Ship big and heavy items we got you covered with our cost-effective sea freight service. Perfect for bulk orders and non-urgent deliveries."
                    :features="[
                        'Barel', 
                        'Stove',
                        'Refrigerator', 
                        'Stove and a lot more', 
                    ]"
                    buttonText="Get Sea Freight Quote"
                    buttonUrl="https://watopak.jashippers.com/register"
                    imageUrl="{{ asset('images/watopak-cargo-ship-night-busy-port.jpg') }}"
                    imageAlt="Sea Freight Service"
                    bgColor="gray"
                />
        
        </div>

                 
   </section>





            </div>
        </div>
 
    
    <!-- Customer Reviews Section -->
    <section class="pb-24 pt-12 relative overflow-hidden bg-gray-50 dark:bg-gradient-to-b dark:from-neutral-800 dark:to-neutral-900">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[conic-gradient(from_0deg_at_50%_50%,transparent_0deg,rgba(0,0,0,0.03)_45deg,transparent_90deg,rgba(0,0,0,0.03)_135deg,transparent_180deg,rgba(0,0,0,0.03)_225deg,transparent_270deg,rgba(0,0,0,0.03)_315deg,transparent_360deg)] dark:bg-[conic-gradient(from_0deg_at_50%_50%,transparent_0deg,rgba(255,255,255,0.02)_45deg,transparent_90deg,rgba(255,255,255,0.02)_135deg,transparent_180deg,rgba(255,255,255,0.02)_225deg,transparent_270deg,rgba(255,255,255,0.02)_315deg,transparent_360deg)] [background-size:60px_60px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-20"></div>
            <div aria-hidden="true" class="absolute bottom-0 right-0 w-[500px] h-[500px] rounded-full bg-gradient-to-br from-purple-100/30 to-blue-100/30 dark:from-purple-900/20 dark:to-blue-900/20 blur-[100px] animate-pulse-slow"></div>
        </div>
        
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-6xl relative z-10 pb-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="flex items-center justify-center mb-6">
                    <span class="px-6 py-2.5 bg-gradient-to-r from-theme_color_primary-100/15 to-theme_color_secondary-100/15 text-theme_color_secondary-100 dark:text-theme_color_primary-100 text-xs tracking-widest uppercase font-medium rounded-full border border-theme_color_secondary-100/15 dark:border-theme_color_primary-100/25 shadow-lg backdrop-blur-md animate-fade-in relative overflow-hidden group">
                        <span class="absolute inset-0 bg-gradient-to-r from-theme_color_primary-100/5 to-theme_color_secondary-100/5 translate-y-full group-hover:translate-y-0 transition-transform duration-700"></span>
                        <span class="relative">What Our Customers Say</span>
                    </span>
                </div>
                
                <h2 class="text-center relative mb-6">
                    <span class="block text-5xl md:text-6xl xl:text-7xl font-bold mb-6 text-gray-600 dark:text-white animate-gradient-x relative">
                        Customer Reviews
                        <span style="background: linear-gradient(90deg, var(--color-theme_color_primary-100) 0%, var(--color-theme_color_secondary-100) 50%, var(--color-theme_color_primary-100) 100%); 
                                background-size: 200% auto;
                                animation: shimmer 3s linear infinite;
                                opacity: 0.15;
                                filter: blur(20px);" 
                            class="absolute -bottom-4 left-0 w-full h-8 -z-10 rounded-full">
                        </span>
                    </span>
                </h2>
                
                <p class="text-md text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                    Hear what our satisfied customers have to say about their shipping experience with us.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Review 1 -->
                <div class="relative group" data-aos="fade-up" data-aos-delay="50">
                    <div class="absolute inset-0 bg-gradient-to-r from-theme_color_primary-100/20 to-theme_color_secondary-100/20 rounded-3xl blur-xl opacity-50 group-hover:opacity-100 transition-opacity duration-300 scale-95 group-hover:scale-105 -z-10"></div>
                    <div class="bg-white dark:bg-neutral-800/90 rounded-2xl p-8 shadow-xl border border-gray-100/80 dark:border-neutral-700/50 h-full flex flex-col transform hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-theme_color_primary-100/10 to-transparent rounded-bl-full -z-1"></div>
                        
                        <!-- Review Stars -->
                        <div class="flex mb-4">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        
                        <!-- Review Quote -->
                        <blockquote class="text-gray-700 dark:text-gray-300 italic mb-6 flex-grow">
                            "Amazing service! My packages always arrive on time and in perfect condition. The online tracking system makes it easy to know exactly when my items will arrive in Jamaica."
                        </blockquote>
                        
                        <!-- Customer Info -->
                        <div class="flex items-center mt-auto">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-theme_color_primary-100/30 shadow-lg">
                                <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Customer" class="w-full h-full object-cover">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-gray-800 dark:text-white">Sarah Johnson</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Kingston, Jamaica</p>
                            </div>
                        </div>
                        
                        <!-- Decorative Quote Mark -->
                        <div class="absolute top-4 right-4 text-5xl text-theme_color_primary-100/10 dark:text-theme_color_primary-100/5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Review 2 -->
                <div class="relative group" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute inset-0 bg-gradient-to-r from-theme_color_primary-100/20 to-theme_color_secondary-100/20 rounded-3xl blur-xl opacity-50 group-hover:opacity-100 transition-opacity duration-300 scale-95 group-hover:scale-105 -z-10"></div>
                    <div class="bg-white dark:bg-neutral-800/90 rounded-2xl p-8 shadow-xl border border-gray-100/80 dark:border-neutral-700/50 h-full flex flex-col transform hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-theme_color_primary-100/10 to-transparent rounded-bl-full -z-1"></div>
                        
                        <!-- Review Stars -->
                        <div class="flex mb-4">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        
                        <!-- Review Quote -->
                        <blockquote class="text-gray-700 dark:text-gray-300 italic mb-6 flex-grow">
                            "Watopak's premium service exceeded my expectations. My electronics shipment from New York to Kingston arrived in perfect condition within 3 days. Their white-glove delivery service is exceptional!"
                        </blockquote>
                        
                        <!-- Customer Info -->
                        <div class="flex items-center mt-auto">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-theme_color_primary-100/30 shadow-lg">
                                <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Customer" class="w-full h-full object-cover">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-gray-800 dark:text-white">Marcus Reid</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Montego Bay, Jamaica</p>
                            </div>
                        </div>
                        
                        <!-- Decorative Quote Mark -->
                        <div class="absolute top-4 right-4 text-5xl text-theme_color_primary-100/10 dark:text-theme_color_primary-100/5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Review 3 -->
                <div class="relative group" data-aos="fade-up" data-aos-delay="150">
                    <div class="absolute inset-0 bg-gradient-to-r from-theme_color_primary-100/20 to-theme_color_secondary-100/20 rounded-3xl blur-xl opacity-50 group-hover:opacity-100 transition-opacity duration-300 scale-95 group-hover:scale-105 -z-10"></div>
                    <div class="bg-white dark:bg-neutral-800/90 rounded-2xl p-8 shadow-xl border border-gray-100/80 dark:border-neutral-700/50 h-full flex flex-col transform hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-theme_color_primary-100/10 to-transparent rounded-bl-full -z-1"></div>
                        
                      
                        <div class="flex mb-4">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        
                     
                        <blockquote class="text-gray-700 dark:text-gray-300 italic mb-6 flex-grow">
                            "As a business owner, I rely on Watopak for my inventory imports. Their professional team and advanced tracking system give me complete confidence. The premium service is worth every penny."
                        </blockquote>
                        
                       
                        <div class="flex items-center mt-auto">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-theme_color_primary-100/30 shadow-lg">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Customer" class="w-full h-full object-cover">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-gray-800 dark:text-white">Natalie Brown</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Business Owner, Ocho Rios</p>
                            </div>
                        </div>
                        
               
                        <div class="absolute top-4 right-4 text-5xl text-theme_color_primary-100/10 dark:text-theme_color_primary-100/5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                            </svg>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    
    <!-- CTA Section with Parallax -->
    <section class="relative py-20 md:py-48 bg-fixed bg-center bg-cover overflow-hidden" style="background-image: url('{{ asset('images/wato-global-shipping-international-logistics-illustration.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>
        
        <!-- Animated Background Elements -->
        <div class="absolute top-1/4 left-10 w-96 h-96 rounded-full bg-gradient-to-r from-theme_color_primary-100/20 to-theme_color_secondary-100/20 blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 right-10 w-64 h-64 rounded-full bg-gradient-to-l from-theme_color_secondary-100/20 to-theme_color_primary-100/20 blur-3xl animate-pulse-slow"></div>
        
        <!-- Content -->
        <div class="container mx-auto px-4 relative z-10 text-center">
            <div class="max-w-3xl mx-auto">
                <div class="mb-8 inline-block" data-aos="fade-up">
                    <span class="px-5 py-2 bg-white/10 text-white text-xs tracking-widest uppercase font-medium rounded-full backdrop-blur-sm border border-white/20 inline-flex items-center">
                        <span class="w-2 h-2 rounded-full bg-theme_color_primary-100 mr-2 animate-pulse"></span>
                        Welcome to Watopak Logistics
                    </span>
                </div>
                
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6" data-aos="fade-up" data-aos-delay="100"> Are ready to Ship ?</h2>
                <p class="text-lg text-white/80 mb-10" data-aos="fade-up" data-aos-delay="200">Join Watopak Logistics for their fast and efficient shipping services from USA to Jamaica.</p>    
                <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="300">
                   
                      <a href="https://watopak.jashippers.com/register" class="hero-primary-btn group relative overflow-hidden bg-theme_color_secondary-100 text-white py-3 sm:py-4 px-6 sm:px-8 rounded-md shadow-2xl hover:shadow-theme_color_secondary-100/50 transition-all duration-500 uppercase tracking-wide text-sm inline-flex items-center justify-center">
                            <span class="relative z-10">Sign Up Now</span>
                            <div class="absolute inset-0 button-shine"></div>
                            <div class="absolute inset-0 button-expand"></div> 
                        </a>
              
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 border border-white text-base font-medium rounded-md text-white hover:bg-white/10 transition-all duration-300">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <x-cta-section />
    </main>

@push('scripts')
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    // Initialize timeline animation
    initTimelineProgress();
    
    // Initialize parallax effects
    initParallaxEffects();
});

function initTimelineProgress() {
    const timelineProgress = document.getElementById('timeline-progress');
    
    if (!timelineProgress) return;
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    timelineProgress.style.width = '100%';
                }, 500);
                observer.unobserve(entry.target);
            }
        });
    }, {
        root: null,
        rootMargin: '0px',
        threshold: 0.3
    });
    
    observer.observe(document.getElementById('how-it-works'));
}

function initParallaxEffects() {
    // Detect if the device is likely a mobile device or has reduced motion preference
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    
    // If user prefers reduced motion or is on mobile, don't apply parallax effects
    if (prefersReducedMotion || isMobile) {
        console.log('Skipping parallax effects due to device or user preference');
        return;
    }
    
    // Process the How It Works section icon parallax
    const parallaxElements = document.querySelectorAll('.parallax-element');
    if (parallaxElements.length > 0) {
        window.addEventListener('scroll', function() {
            parallaxElements.forEach(element => {
                const rect = element.getBoundingClientRect();
                const centerY = rect.top + rect.height / 2;
                const distanceFromCenter = centerY - window.innerHeight / 2;
                const speed = parseFloat(element.getAttribute('data-speed') || '-0.1');
                
                // Only apply effect when element is near viewport
                if (rect.top < window.innerHeight + 100 && rect.bottom > -100) {
                    element.style.transform = `translateY(${distanceFromCenter * speed}px)`;
                }
            });
        });
    }
    
    // Process the fixed background parallax (CTA section)
    const parallaxBackgrounds = document.querySelectorAll('.bg-fixed');
    if (parallaxBackgrounds.length > 0) {
        // No additional JS needed for bg-fixed as it's handled by CSS
        console.log('Fixed background parallax sections detected');
    }
    
    // Process the service image containers with subtle parallax
    const parallaxImageContainers = document.querySelectorAll('.parallax-image-container');
    if (parallaxImageContainers.length > 0) {
        window.addEventListener('scroll', function() {
            parallaxImageContainers.forEach(container => {
                const rect = container.getBoundingClientRect();
                const isInView = (
                    rect.top < window.innerHeight + 100 && 
                    rect.bottom > -100
                );
                
                if (isInView) {
                    const img = container.querySelector('img');
                    if (img) {
                        const viewportCenter = window.innerHeight / 2;
                        const elementCenter = rect.top + rect.height / 2;
                        const offset = (elementCenter - viewportCenter) * 0.05;
                        const speed = parseFloat(container.getAttribute('data-speed') || '0.1');
                        
                        img.style.transform = `translateY(${offset * speed}px) scale(1.1)`;
                    }
                }
            });
        });
    }
    
    // Trigger a scroll event to initialize positions
    window.dispatchEvent(new Event('scroll'));
}

// Animation for shimmer effect
@keyframes shimmer {
    0% { background-position: 0% 50%; }
    100% { background-position: 200% 50%; }
}
</script>
@endpush

<!-- Page Styles -->
@push('styles')
<style type="text/css">
/* Modern animations and effects for the How It Works section */
@keyframes pulse-slow {
    0%, 100% { opacity: 0.7; }
    50% { opacity: 0.3; }
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@@keyframes gradient-x {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@@keyframes fade-in {
    0% { opacity: 0; transform: translateY(10px); }
    100% { opacity: 1; transform: translateY(0); }
}

@@keyframes shine {
    0% {
        transform: translateX(-100%) skewX(-15deg);
    }
    100% {
        transform: translateX(200%) skewX(-15deg);
    }
}

@@keyframes expand {
    0% {
        opacity: 0;
        transform: scale(0.8);
    }
    50% {
        opacity: 0.5;
    }
    100% {
        opacity: 0;
        transform: scale(1.5);
    }
}

.button-shine {
    background: linear-gradient(
        to right,
        rgba(255, 255, 255, 0) 0%,
        rgba(255, 255, 255, 0.4) 50%,
        rgba(255, 255, 255, 0) 100%
    );
    opacity: 0;
    transform: translateX(-100%) skewX(-15deg);
}

.group:hover .button-shine {
    animation: shine 1.2s ease infinite;
    opacity: 1;
}

.button-expand {
    background: radial-gradient(
        ellipse at center,
        rgba(255, 255, 255, 0.2) 0%,
        rgba(255, 255, 255, 0) 80%
    );
    opacity: 0;
}

.group:hover .button-expand {
    animation: expand 1.5s ease-out infinite;
}

.animate-pulse-slow {
    animation: pulse-slow 8s ease-in-out infinite;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-gradient-x {
    background-size: 200% 100%;
    animation: gradient-x 15s ease infinite;
}

.animate-fade-in {
    animation: fade-in 1s ease-out forwards;
}

.animation-delay-300 {
    animation-delay: 300ms;
}

.animation-delay-600 {
    animation-delay: 600ms;
}

.animation-delay-900 {
    animation-delay: 900ms;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.timeline-item {
    backdrop-filter: blur(8px);
    transform-style: preserve-3d;
    will-change: transform;
}

.step-number {
    box-shadow: 0 10px 25px -5px rgba(var(--theme-color-primary-rgb), 0.3);
}

/* Glass effect for cards */
.glass-card {
    background: rgba(255, 255, 255, 1);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
}

.dark .glass-card {
    background: rgba(30, 30, 30, 0.7);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

/* Hover effects for interactive elements */
.hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px -5px rgba(var(--theme-color-primary-rgb), 0.2);
}

@@media (min-width: 768px) {
    .timeline-steps::before {
        content: '';
        position: absolute;
        top: 70px;
        left: 10%;
        right: 10%;
        height: 2px;
        background: linear-gradient(to right, 
            transparent 0%,
            var(--color-theme_color_secondary-100, rgba(222, 166, 31, 0.4)) 20%,
            var(--color-theme_color_secondary-100, rgba(222, 166, 31, 0.4)) 80%,
            transparent 100%
        );
        z-index: -1;
    }
}
</style>
@endpush

</x-layouts.guest_two>