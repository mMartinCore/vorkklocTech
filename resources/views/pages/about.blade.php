<!-- About Page -->
<x-layouts.guest_two :active="'about'">
    <!-- Page Banner -->
    <x-page-banner 
        title="About <span class='text-theme_color_primary-100 '>Watopak</span> Logistics"
        subtitle="Your Premier Shipping Partner from USA to Jamaica"
        backgroundImage="{{ asset('images/wato-global-shipping-logistics-hero.jpg') }}"
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
                            Elevating Shipping Excellence from <span class="text-theme_color_primary-100">USA to Jamaica</span>
                        </h1>
                        <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                            We handle your packages with unmatched care and precision, ensuring they are delivered safely to you.
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
                        <img src="{{ asset('images/wato-pak-delivery-service-personnel-transferring-package-from-truck.jpg') }}" alt="Watopak Logistics team" class="rounded-2xl shadow-xl w-full">
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
                        To revolutionize international shipping by connecting Jamaican customers with their favorite USA retailers. We do this by providing a premium, secure, and reliable logistics service powered by innovative technology and a commitment to exceptional customer care. </p>
                    </div>
                    <div class="bg-white dark:bg-neutral-800 rounded-2xl p-8 shadow-xl" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-16 h-16 bg-gradient-to-br from-theme_color_secondary-100 to-theme_color_accent-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M21,9V7L15,1V3H9V1L3,7V9H1V11H3V16L1,18V20H3V22H5V20H7V18L5,16V11H7V9H1V7L7,1H9V3H15V1H17L23,7V9H21Z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Our Vision</h3>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        We strive to become the top premium shipping service in Jamaica. We'll achieve this by setting new standards for international logistics, using advanced technology, protecting the environment, and committing to excellent customer service.  </p>
                    </div>
                </div>
            </section>

            <!-- Company Story -->
            <!-- <section class="py-20">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-8" data-aos="fade-up">
                        The Watopak Story
                    </h2>
                    <div class="prose max-w-none text-gray-700 dark:text-gray-300" data-aos="fade-up" data-aos-delay="100">
                        <p class="text-lg leading-relaxed mb-6">
                            Watopak Logistics was founded with a revolutionary vision: to transform the way Jamaicans access the global marketplace. We recognized that online shopping from USA retailers shouldn't be limited by geographical boundaries or complicated shipping processes.
                        </p>
                        <p class="text-lg leading-relaxed mb-6">
                            Our journey began when our founders experienced firsthand the challenges of international shipping - delayed packages, hidden fees, and unreliable service. They envisioned a solution that would provide Jamaican customers with their own premium USA mailbox address, coupled with white-glove delivery service that treats every package as if it were their own.
                        </p>
                        <p class="text-lg leading-relaxed">
                            Today, Watopak Logistics stands as a testament to innovation in logistics, combining advanced tracking technology, professional customer service, and a commitment to excellence that has made us the trusted choice for thousands of satisfied customers across Jamaica.
                        </p>
                    </div>
                </div>
            </section> -->

        </div>
    </main>
    
            <!-- Call to Action -->
            <x-cta-section 
                buttonUrl="https://watopak.jashippers.com/register"
                buttonText="Join Watopak Today"
                title="Get started with Watopak Logistics"
                subtitle=" Save time and money with our service "
            />
</x-layouts.guest_two> 