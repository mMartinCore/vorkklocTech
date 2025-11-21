<!-- About Page -->
<x-layouts.guest_two :active="'about'">
    <!-- Page Banner -->
    <x-page-banner 
        title="About <span class='text-theme_color_primary-100 '>VorkklocTech</span>"
        subtitle="Custom Software Development. Increase Efficiency And Productivity."
        backgroundImage=""
        breadcrumbs='[{"name": "Home", "url": "/"}, {"name": "About", "url": "/pages/about"}]'
    />

    <!-- Main Content -->
    <main class="pt-16 px-2 md:px-32  bg-gray-50 dark:bg-neutral-900 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(45deg,transparent_24%,rgba(0,0,0,0.05)_25%,rgba(0,0,0,0.05)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.05)_75%,rgba(0,0,0,0.05)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(0,0,0,0.05)_25%,rgba(0,0,0,0.05)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.05)_75%,rgba(0,0,0,0.05)_76%,transparent_77%)] dark:bg-[linear-gradient(45deg,transparent_24%,rgba(255,255,255,0.03)_25%,rgba(255,255,255,0.03)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.03)_75%,rgba(255,255,255,0.03)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(255,255,255,0.03)_25%,rgba(255,255,255,0.03)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.03)_75%,rgba(255,255,255,0.03)_76%,transparent_77%)] [background-size:40px_40px] [mask-image:radial-gradient(ellipse_80%_80%_at_50%_50%,#000_60%,transparent_100%)] opacity-25"></div>
            <div aria-hidden="true" class="absolute top-20 -right-40 w-[600px] h-[600px] rounded-full bg-gradient-to-br from-blue-100/30 to-purple-100/30 dark:from-blue-900/20 dark:to-purple-900/20 blur-[120px] animate-pulse-slow"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <!-- Hero Section -->
            <section class="relative py-20 overflow-hidden">
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="w-full lg:w-1/2" data-aos="fade-right">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-8">
                            Building Custom Digital Solutions for <span class="text-theme_color_primary-100">Business Growth</span>
                        </h1>
                        <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                            VorkklocTech is a specialized software development and consultancy firm dedicated to one core mission: building custom digital solutions that increase efficiency and productivity for businesses. We design and develop tailored websites, web applications, APIs, and mobile apps that solve specific operational challenges and drive growth.
                        </p>
                        <!-- <div class="flex flex-wrap gap-6">
                            <div class="bg-white dark:bg-neutral-800 rounded-lg p-4 shadow-lg">
                                <div class="text-2xl font-bold text-theme_color_primary-100">5000+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Packages Delivered</div>
                            </div>
                            <div class="bg-white dark:bg-neutral-800 rounded-lg p-4 shadow-lg">
                                <div class="text-2xl font-bold text-theme_color_primary-100">98%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Customer Satisfaction</div>
                            </div>
                            <div class="bg-white dark:bg-neutral-800 rounded-lg p-4 shadow-lg">
                                <div class="text-2xl font-bold text-theme_color_primary-100">24/7</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Customer Support</div>
                            </div>
                        </div> -->
                    </div>
                    <div class="w-full lg:w-1/2" data-aos="fade-left">
                        <div class="relative rounded-2xl shadow-xl w-full aspect-square bg-gradient-to-br from-blue-600/20 via-cyan-500/20 to-purple-600/20 overflow-hidden">
                            <!-- Abstract Tech Pattern -->
                            <div class="absolute inset-0 opacity-30">
                                <div class="absolute inset-0" style="background-image: 
                                    linear-gradient(30deg, transparent 40%, rgba(59, 130, 246, 0.1) 50%, transparent 60%),
                                    linear-gradient(60deg, transparent 40%, rgba(6, 182, 212, 0.1) 50%, transparent 60%);
                                    background-size: 100px 100px, 80px 80px;"></div>
                            </div>
                            <!-- Geometric Shapes -->
                            <div class="absolute top-10 left-10 w-32 h-32 border-2 border-cyan-400/30 rounded-lg rotate-45"></div>
                            <div class="absolute bottom-10 right-10 w-24 h-24 border-2 border-blue-400/30 rounded-full"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 border-2 border-purple-400/20 rounded-lg rotate-12"></div>
                            <!-- Logo -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <img src="{{ asset('images/logo-no-text.png') }}" alt="VorkklocTech" class="w-32 h-32 opacity-50">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mission & Vision -->
            <section class="py-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="bg-white dark:bg-neutral-800 rounded-2xl p-8 shadow-xl" data-aos="fade-up">
                        <div class="w-16 h-16 bg-gradient-to-br from-theme_color_primary-100 to-theme_color_secondary-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M12,6A6,6 0 0,0 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12A6,6 0 0,0 12,6M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8Z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Our Mission</h3>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        To build custom digital solutions that increase efficiency and productivity for businesses. We design and develop tailored websites, web applications, APIs, and mobile apps that solve specific operational challenges and drive growth. Our approach combines innovative technology with a deep understanding of business needs to deliver software that works harder, so your business can work smarter. </p>
                    </div>
                    <div class="bg-white dark:bg-neutral-800 rounded-2xl p-8 shadow-xl" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-16 h-16 bg-gradient-to-br from-theme_color_secondary-100 to-theme_color_accent-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M21,9V7L15,1V3H9V1L3,7V9H1V11H3V16L1,18V20H3V22H5V20H7V18L5,16V11H7V9H1V7L7,1H9V3H15V1H17L23,7V9H21Z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Our Vision</h3>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        To be the leading custom software development firm that businesses trust to transform their operations through innovative technology. We envision a future where every business has access to custom software solutions that streamline processes, eliminate inefficiencies, and deliver transparent, measurable results. Whether we're building a custom inventory management system for a client or our own on-demand delivery platform, our approach remains the same: engineer software that works harder, so businesses can work smarter.  </p>
                    </div>
                </div>
            </section>

            <!-- Company Story -->
            <section class="py-20">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-8" data-aos="fade-up">
                        The VorkklocTech Story
                    </h2>
                    <div class="prose max-w-none text-gray-700 dark:text-gray-300" data-aos="fade-up" data-aos-delay="100">
                        <p class="text-lg leading-relaxed mb-6">
                            VorkklocTech was founded with a clear vision: to build custom software solutions that solve real business problems. We recognized that off-the-shelf software often falls short of meeting specific operational needs, and businesses deserve tailored solutions that truly fit their unique requirements.
                        </p>
                        <p class="text-lg leading-relaxed mb-6">
                            Our flagship product, <strong>Courier-App</strong>, is the ultimate demonstration of our expertise. We didn't just observe the inefficiencies in the local delivery market—we used our own software development principles to build the solution. This platform embodies our core belief: that the right technology should streamline complex processes, eliminate wasted time, and deliver transparent, measurable results.
                        </p>
                        <p class="text-lg leading-relaxed mb-6">
                            Whether we're building a custom inventory management system for a client or our own on-demand delivery platform, our approach remains the same. We develop websites that drive growth, expand reach, and boost revenue. We engineer software that works harder, so your business—and ours—can work smarter.
                        </p>
                        <p class="text-lg leading-relaxed">
                            Today, VorkklocTech stands as a testament to the power of custom software development, combining technical expertise, business acumen, and a commitment to excellence that has made us the trusted choice for businesses seeking to transform their operations through technology.
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </main>
    
            <!-- Call to Action -->
            <x-cta-section 
                buttonUrl="{{ route('contact') }}"
                buttonText="Get Started"
                title="Ready to Transform Your Business?"
                subtitle="Let us develop custom software solutions that increase efficiency and productivity for your business."
            />
</x-layouts.guest_two> 