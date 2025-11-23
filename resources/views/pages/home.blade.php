<x-layouts.guest_two :active="'home'">
  
    <!-- Spacer to compensate for fixed header height -->
    <div class="header-spacer" id="headerSpacer" aria-hidden="true"></div>
    
    <!-- Main Content for Skip Link -->
    <main id="main-content" role="main">
    
    <!-- Hero Section -->
    <x-hero-section 
        headline1="Custom Software Development"
        headline2="Transform Your Business with Tailored Solutions"
        description="We design and develop custom websites, web applications, mobile apps, and APIs that solve specific business challenges and drive growth. <span class='text-theme_color_accent-100'>Professional service, guaranteed results.</span>"
        ctaButtonText="Get Started"
        ctaButtonUrl="#contact"
        secondaryButtonText="Our Services"
        secondaryButtonUrl="#features"
        heroImage="images/logo-no-text.png"
        badgeText="VorkklocTech - Custom Software Solutions"
    />
    <!-- Statistics Section -->
    <section class="py-16 md:py-24 relative overflow-hidden bg-white dark:bg-slate-900">
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-6xl">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                <div class="text-center p-6 rounded-2xl bg-white dark:bg-slate-800 shadow-lg border border-slate-200 dark:border-slate-700" data-aos="fade-up">
                    <div class="text-4xl md:text-5xl font-bold text-blue-600 dark:text-blue-400 mb-2">Custom</div>
                    <div class="text-sm md:text-base text-slate-600 dark:text-slate-300">Solutions Built</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white dark:bg-slate-800 shadow-lg border border-slate-200 dark:border-slate-700" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl md:text-5xl font-bold text-cyan-600 dark:text-cyan-400 mb-2">Modern</div>
                    <div class="text-sm md:text-base text-slate-600 dark:text-slate-300">Tech Stack</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white dark:bg-slate-800 shadow-lg border border-slate-200 dark:border-slate-700" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl md:text-5xl font-bold text-blue-600 dark:text-blue-400 mb-2">100%</div>
                    <div class="text-sm md:text-base text-slate-600 dark:text-slate-300">Client Focused</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white dark:bg-slate-800 shadow-lg border border-slate-200 dark:border-slate-700" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl md:text-5xl font-bold text-cyan-600 dark:text-cyan-400 mb-2">24/7</div>
                    <div class="text-sm md:text-base text-slate-600 dark:text-slate-300">Support Available</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Unique Value Propositions Section -->
    <section class="py-20 md:py-24 relative overflow-hidden bg-slate-50 dark:bg-slate-800/50" id="value-propositions">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(45deg,transparent_24%,rgba(59,130,246,0.02)_25%,rgba(59,130,246,0.02)_26%,transparent_27%,transparent_74%,rgba(6,182,212,0.02)_75%,rgba(6,182,212,0.02)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(6,182,212,0.02)_25%,rgba(6,182,212,0.02)_26%,transparent_27%,transparent_74%,rgba(59,130,246,0.02)_75%,rgba(59,130,246,0.02)_76%,transparent_77%)] dark:bg-[linear-gradient(45deg,transparent_24%,rgba(59,130,246,0.03)_25%,rgba(59,130,246,0.03)_26%,transparent_27%,transparent_74%,rgba(6,182,212,0.03)_75%,rgba(6,182,212,0.03)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(6,182,212,0.03)_25%,rgba(6,182,212,0.03)_26%,transparent_27%,transparent_74%,rgba(59,130,246,0.03)_75%,rgba(59,130,246,0.03)_76%,transparent_77%)] [background-size:40px_40px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-6xl relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="flex items-center justify-center mb-6">
                    <span class="px-6 py-2.5 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 text-blue-600 dark:text-cyan-400 text-xs tracking-widest uppercase font-medium rounded-full border border-blue-500/20 dark:border-cyan-500/30 shadow-lg backdrop-blur-md">
                        Why Choose Us
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-slate-900 dark:text-white">
                    What Makes Us Different
                </h2>
                <p class="text-lg sm:text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    We don't just build software—we engineer solutions that increase efficiency, eliminate wasted time, and deliver measurable results for your business.
                </p>
            </div>
            
            <!-- Value Propositions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Value Prop 1: Efficiency Focus -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Increase Efficiency</h3>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        Our custom software solutions streamline complex processes, eliminate wasted time, and automate repetitive tasks so your team can focus on what matters most.
                    </p>
                </div>

                <!-- Value Prop 2: Tailored Solutions -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Tailored to Your Needs</h3>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        Every solution is custom-built to solve your specific operational challenges. No one-size-fits-all approach—we design software that fits your unique business requirements.
                    </p>
                </div>

                <!-- Value Prop 3: Measurable Results -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Measurable Results</h3>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        We deliver transparent, measurable results. Track your productivity gains, time savings, and ROI with software that provides clear insights into your business performance.
                    </p>
                </div>

                <!-- Value Prop 4: Problem-Solving Focus -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="50">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Solve Real Problems</h3>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        We identify and solve specific operational challenges that hold your business back. Our solutions address real pain points, not just theoretical improvements.
                    </p>
                </div>

                <!-- Value Prop 5: Productivity Boost -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="150">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Boost Productivity</h3>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        Our software works harder so your business works smarter. Automate workflows, reduce manual tasks, and empower your team to achieve more with less effort.
                    </p>
                </div>

                <!-- Value Prop 6: Growth-Driven -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="250">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Drive Growth</h3>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        We develop websites and applications that expand your reach, boost revenue, and take your business to the next level. Technology that grows with you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="py-20 md:py-24 relative overflow-hidden bg-white dark:bg-slate-900" id="services-overview">
        <!-- Section Divider -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-200 dark:via-blue-800 to-transparent"></div>
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(45deg,transparent_24%,rgba(59,130,246,0.02)_25%,rgba(59,130,246,0.02)_26%,transparent_27%,transparent_74%,rgba(6,182,212,0.02)_75%,rgba(6,182,212,0.02)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(6,182,212,0.02)_25%,rgba(6,182,212,0.02)_26%,transparent_27%,transparent_74%,rgba(59,130,246,0.02)_75%,rgba(59,130,246,0.02)_76%,transparent_77%)] dark:bg-[linear-gradient(45deg,transparent_24%,rgba(59,130,246,0.03)_25%,rgba(59,130,246,0.03)_26%,transparent_27%,transparent_74%,rgba(6,182,212,0.03)_75%,rgba(6,182,212,0.03)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(6,182,212,0.03)_25%,rgba(6,182,212,0.03)_26%,transparent_27%,transparent_74%,rgba(59,130,246,0.03)_75%,rgba(59,130,246,0.03)_76%,transparent_77%)] [background-size:40px_40px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-6xl relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="flex items-center justify-center mb-6">
                    <span class="px-6 py-2.5 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 text-blue-600 dark:text-cyan-400 text-xs tracking-widest uppercase font-medium rounded-full border border-blue-500/20 dark:border-cyan-500/30 shadow-lg backdrop-blur-md">
                        Our Services
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-slate-900 dark:text-white">
                    What We Offer
                </h2>
                <p class="text-lg sm:text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    From custom websites to mobile apps and APIs, we provide comprehensive software development services tailored to your business needs.
                </p>
            </div>
            
            <!-- Services Overview Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Service 1: Web Development -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Custom Websites</h3>
                            <p class="text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                                Professional websites that drive growth, expand reach, and boost revenue. Responsive, modern, and optimized for performance.
                            </p>
                            <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Responsive Design</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>SEO Optimized</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Fast Performance</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Web Applications -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Web Applications</h3>
                            <p class="text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                                Scalable web applications that solve specific business challenges. From inventory management to customer portals and more.
                            </p>
                            <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Custom Functionality</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>User Management</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Scalable Architecture</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Mobile Apps -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="50">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Mobile Applications</h3>
                            <p class="text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                                Native and cross-platform mobile apps for Android that engage users and take your business to the next level.
                            </p>
                            <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Android Development</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Cross-Platform</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>App Store Ready</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Service 4: API Development -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">API Development</h3>
                            <p class="text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                                RESTful APIs and seamless third-party integrations that connect your systems and enable smooth data flow.
                            </p>
                            <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>RESTful APIs</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>System Integration</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Third-Party Connections</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Features Section -->
    <section class="py-24 md:py-24 relative overflow-hidden bg-slate-50 dark:bg-slate-800/50" id="features">
        <!-- Section Divider -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-200 dark:via-blue-800 to-transparent"></div>
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(45deg,transparent_24%,rgba(59,130,246,0.03)_25%,rgba(59,130,246,0.03)_26%,transparent_27%,transparent_74%,rgba(6,182,212,0.03)_75%,rgba(6,182,212,0.03)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(6,182,212,0.03)_25%,rgba(6,182,212,0.03)_26%,transparent_27%,transparent_74%,rgba(59,130,246,0.03)_75%,rgba(59,130,246,0.03)_76%,transparent_77%)] dark:bg-[linear-gradient(45deg,transparent_24%,rgba(59,130,246,0.05)_25%,rgba(59,130,246,0.05)_26%,transparent_27%,transparent_74%,rgba(6,182,212,0.05)_75%,rgba(6,182,212,0.05)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(6,182,212,0.05)_25%,rgba(6,182,212,0.05)_26%,transparent_27%,transparent_74%,rgba(59,130,246,0.05)_75%,rgba(59,130,246,0.05)_76%,transparent_77%)] [background-size:40px_40px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-30"></div>
            <div aria-hidden="true" class="absolute -top-96 -right-40 w-[800px] h-[800px] rounded-full bg-gradient-to-br from-blue-500/20 to-cyan-500/20 dark:from-blue-600/30 dark:to-cyan-600/30 blur-[150px] animate-pulse-slow"></div>
         </div>
        
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-6xl relative z-10">
            <div class="relative mb-16 max-w-3xl mx-auto text-center" data-aos="fade-up">
                <div class="flex items-center justify-center mb-6">
                    <span class="px-6 py-2.5 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 text-blue-600 dark:text-cyan-400 text-xs tracking-widest uppercase font-medium rounded-full border border-blue-500/20 dark:border-cyan-500/30 shadow-lg backdrop-blur-md">
                        Powerful Features
                    </span>
                </div>
                
                <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold mb-6 text-slate-900 dark:text-white">
                    Comprehensive Software Development Services
                </h2>
                <p class="text-lg sm:text-xl text-slate-600 dark:text-slate-300 max-w-2xl mx-auto leading-relaxed">
                    From web applications to mobile apps and APIs, we deliver solutions that drive your business forward.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">
                <!-- Feature 1: Custom Web Development -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Custom Web Development</h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-4">Build responsive, scalable websites and web applications tailored to your business needs using modern frameworks and technologies.</p>
                    <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Responsive & Mobile-First</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>E-commerce & Enterprise</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Modern Tech Stack</li>
                    </ul>
                </div>

                <!-- Feature 2: Mobile App Development -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Mobile App Development</h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-4">Native and cross-platform mobile applications for Android and web that engage users and drive business results.</p>
                    <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Android & Cross-Platform</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Cross-Platform Solutions</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>App Store Deployment</li>
                    </ul>
                </div>

                <!-- Feature 3: API Development & Integration -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">API Development & Integration</h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-4">RESTful APIs and seamless third-party integrations that connect your systems and enable data flow.</p>
                    <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>RESTful APIs</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>System Integration</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Third-Party Integrations</li>
                    </ul>
                </div>

                <!-- Feature 4: Enterprise Solutions -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="50">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Enterprise Solutions</h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-4">Scalable enterprise software solutions with advanced security, compliance, and integration capabilities for large organizations.</p>
                    <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Scalable Architecture</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Advanced Security</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Compliance Ready</li>
                    </ul>
                </div>

                <!-- Feature 5: Cloud Solutions -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Cloud Solutions</h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-4">Deploy and manage your applications on cloud platforms with automated scaling, monitoring, and maintenance.</p>
                    <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Cloud Deployment</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Auto-Scaling & Load Balancing</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>24/7 Monitoring</li>
                    </ul>
                </div>

                <!-- Feature 6: Maintenance & Support -->
                <div class="group relative p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Maintenance & Support</h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-4">Ongoing maintenance, updates, and technical support to keep your software running smoothly and securely.</p>
                    <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Regular Updates & Patches</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Bug Fixes & Troubleshooting</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Performance Optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Development Process Section -->
    <section class="py-24 md:py-24 relative overflow-hidden bg-white dark:bg-slate-900" id="process">
        <!-- Section Divider -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-200 dark:via-blue-800 to-transparent"></div>
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(45deg,transparent_24%,rgba(59,130,246,0.03)_25%,rgba(59,130,246,0.03)_26%,transparent_27%,transparent_74%,rgba(6,182,212,0.03)_75%,rgba(6,182,212,0.03)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(6,182,212,0.03)_25%,rgba(6,182,212,0.03)_26%,transparent_27%,transparent_74%,rgba(59,130,246,0.03)_75%,rgba(59,130,246,0.03)_76%,transparent_77%)] [background-size:40px_40px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-7xl relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="flex items-center justify-center mb-6">
                    <span class="px-6 py-2.5 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 text-blue-600 dark:text-cyan-400 text-xs tracking-widest uppercase font-medium rounded-full border border-blue-500/20 dark:border-cyan-500/30 shadow-lg backdrop-blur-md">
                        Our Development Process
                    </span>
                </div>
                
                <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold mb-6 text-slate-900 dark:text-white">
                    How We Build Your Solution
                </h2>
                
                <p class="max-w-3xl mx-auto text-lg text-slate-600 dark:text-slate-300 leading-relaxed">
                    From concept to deployment, we follow a proven process to deliver custom software solutions that drive your business forward.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1: Discovery -->
                <div class="relative p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 text-white text-2xl font-bold">
                        1
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Discovery</h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-4">We analyze your business needs, understand your challenges, and define clear objectives for your custom software solution.</p>
                    <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Requirements Analysis</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Technical Planning</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Project Roadmap</li>
                    </ul>
                </div>

                <!-- Step 2: Development -->
                <div class="relative p-8 bg-gradient-to-br from-blue-600 to-cyan-600 rounded-2xl shadow-2xl border-2 border-blue-500 transform scale-105 hover:scale-110 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center mb-6 text-white text-2xl font-bold">
                        2
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Development</h3>
                    <p class="text-blue-100 mb-4">Our expert team builds your custom solution using modern technologies, following best practices and agile methodologies.</p>
                    <ul class="space-y-2 text-sm text-blue-100">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Agile Development</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Code Quality Assurance</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Regular Updates</li>
                    </ul>
                </div>

                <!-- Step 3: Deployment -->
                <div class="relative p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 text-white text-2xl font-bold">
                        3
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Deployment</h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-4">We deploy your solution, provide training, and offer ongoing support to ensure your success.</p>
                    <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Cloud Deployment</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Team Training</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Ongoing Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>





            </div>
        </div>
 
    
    <!-- Customer Reviews Section -->
    <section class="pb-24 pt-12 relative overflow-hidden bg-slate-50 dark:bg-slate-800/50">
        <!-- Section Divider -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-200 dark:via-blue-800 to-transparent"></div>
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[conic-gradient(from_0deg_at_50%_50%,transparent_0deg,rgba(59,130,246,0.02)_45deg,transparent_90deg,rgba(6,182,212,0.02)_135deg,transparent_180deg,rgba(59,130,246,0.02)_225deg,transparent_270deg,rgba(6,182,212,0.02)_315deg,transparent_360deg)] dark:bg-[conic-gradient(from_0deg_at_50%_50%,transparent_0deg,rgba(59,130,246,0.04)_45deg,transparent_90deg,rgba(6,182,212,0.04)_135deg,transparent_180deg,rgba(59,130,246,0.04)_225deg,transparent_270deg,rgba(6,182,212,0.04)_315deg,transparent_360deg)] [background-size:60px_60px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-20"></div>
            <div aria-hidden="true" class="absolute bottom-0 right-0 w-[500px] h-[500px] rounded-full bg-gradient-to-br from-blue-500/20 to-cyan-500/20 dark:from-blue-600/30 dark:to-cyan-600/30 blur-[100px] animate-pulse-slow"></div>
        </div>
        
        <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-6xl relative z-10 pb-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="flex items-center justify-center mb-6">
                    <span class="px-6 py-2.5 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 text-blue-600 dark:text-cyan-400 text-xs tracking-widest uppercase font-medium rounded-full border border-blue-500/20 dark:border-cyan-500/30 shadow-lg backdrop-blur-md">
                        Customer Success Stories
                    </span>
                </div>
                
                <h2 class="text-center relative mb-6">
                    <span class="block text-5xl md:text-6xl xl:text-7xl font-bold mb-6 text-slate-900 dark:text-white relative">
                        What Our Customers Say
                    </span>
                </h2>
                
                <p class="text-md text-slate-600 dark:text-slate-300 leading-relaxed mb-8">
                    We're here to help transform your business with custom software solutions tailored to your needs.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Review 1 -->
                <div class="relative group" data-aos="fade-up" data-aos-delay="50">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 rounded-3xl blur-xl opacity-50 group-hover:opacity-100 transition-opacity duration-300 scale-95 group-hover:scale-105 -z-10"></div>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-xl border border-slate-200 dark:border-slate-700 h-full flex flex-col transform hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-blue-500/10 to-transparent rounded-bl-full -z-1"></div>
                        
                        <!-- Review Stars -->
                        <div class="flex mb-4">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        
                        <!-- Review Quote -->
                        <blockquote class="text-slate-700 dark:text-slate-300 italic mb-6 flex-grow">
                            "VorkklocTech transformed our business operations with a custom inventory management system. The team was professional, responsive, and delivered exactly what we needed. Our efficiency has increased by 40%!"
                        </blockquote>
                        
                        <!-- Customer Info -->
                        <div class="flex items-center mt-auto">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-blue-500/30 shadow-lg">
                                <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Customer" class="w-full h-full object-cover">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-slate-800 dark:text-white">Sarah Johnson</h4>
                                <p class="text-sm text-slate-500 dark:text-slate-400">CEO, Tech Solutions Inc.</p>
                            </div>
                        </div>
                        
                        <!-- Decorative Quote Mark -->
                        <div class="absolute top-4 right-4 text-5xl text-blue-500/10 dark:text-blue-500/5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Review 2 -->
                <div class="relative group" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 rounded-3xl blur-xl opacity-50 group-hover:opacity-100 transition-opacity duration-300 scale-95 group-hover:scale-105 -z-10"></div>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-xl border border-slate-200 dark:border-slate-700 h-full flex flex-col transform hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-blue-500/10 to-transparent rounded-bl-full -z-1"></div>
                        
                        <!-- Review Stars -->
                        <div class="flex mb-4">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        
                        <!-- Review Quote -->
                        <blockquote class="text-slate-700 dark:text-slate-300 italic mb-6 flex-grow">
                            "The mobile app VorkklocTech developed for us has revolutionized how we serve our customers. It's fast, intuitive, and has significantly improved our customer engagement. Highly recommended!"
                        </blockquote>
                        
                        <!-- Customer Info -->
                        <div class="flex items-center mt-auto">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-blue-500/30 shadow-lg">
                                <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Customer" class="w-full h-full object-cover">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-slate-800 dark:text-white">Marcus Reid</h4>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Founder, Digital Services Co.</p>
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
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 rounded-3xl blur-xl opacity-50 group-hover:opacity-100 transition-opacity duration-300 scale-95 group-hover:scale-105 -z-10"></div>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-xl border border-slate-200 dark:border-slate-700 h-full flex flex-col transform hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-blue-500/10 to-transparent rounded-bl-full -z-1"></div>
                        
                      
                        <div class="flex mb-4">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        
                     
                        <blockquote class="text-slate-700 dark:text-slate-300 italic mb-6 flex-grow">
                            "The enterprise API solution VorkklocTech built for us streamlined our operations across multiple departments. Their technical expertise and attention to detail are outstanding. We've seen a 50% improvement in system integration efficiency."
                        </blockquote>
                        
                       
                        <div class="flex items-center mt-auto">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-blue-500/30 shadow-lg">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Customer" class="w-full h-full object-cover">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-slate-800 dark:text-white">Lisa Rodriguez</h4>
                                <p class="text-sm text-slate-500 dark:text-slate-400">CTO, Enterprise Solutions Group</p>
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
    
    <!-- FAQ Section -->
    <div class="relative">
        <!-- Section Divider -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-200 dark:via-blue-800 to-transparent"></div>
        <x-faq-section 
            title="Frequently Asked Questions"
            subtitle="Find answers to common questions about our software development services"
        />
    </div>
    
    <!-- CTA Section -->
    <section class="relative py-20 md:py-32 overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-slate-950">
        <!-- Tech Pattern Background -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0" style="background-image: 
                linear-gradient(30deg, transparent 40%, rgba(59, 130, 246, 0.1) 50%, transparent 60%),
                linear-gradient(60deg, transparent 40%, rgba(6, 182, 212, 0.1) 50%, transparent 60%);
                background-size: 100px 100px, 80px 80px;"></div>
        </div>
        
        <!-- Animated Background Elements -->
        <div class="absolute top-1/4 left-10 w-96 h-96 rounded-full bg-gradient-to-r from-blue-500/20 to-cyan-500/20 blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 right-10 w-64 h-64 rounded-full bg-gradient-to-l from-cyan-500/20 to-blue-500/20 blur-3xl animate-pulse-slow"></div>
        
        <!-- Content -->
        <div class="container mx-auto px-4 relative z-10 text-center">
            <div class="max-w-3xl mx-auto">
                <div class="mb-8 inline-block" data-aos="fade-up">
                    <span class="px-5 py-2 bg-white/10 text-white text-xs tracking-widest uppercase font-medium rounded-full backdrop-blur-sm border border-white/20 inline-flex items-center">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 mr-2 animate-pulse"></span>
                        Ready to Transform Your Business?
                    </span>
                </div>
                
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6" data-aos="fade-up" data-aos-delay="100">Let's Build Your Custom Software Solution</h2>
                <p class="text-lg text-white/80 mb-10" data-aos="fade-up" data-aos-delay="200">Get a free consultation and discover how our custom software development services can drive your business forward.</p>    
                <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="300">
                   
                      <a href="{{ route('contact') }}" class="hero-primary-btn group relative overflow-hidden bg-cyan-500 hover:bg-cyan-600 text-white py-3 sm:py-4 px-6 sm:px-8 rounded-md shadow-2xl hover:shadow-cyan-500/50 transition-all duration-500 uppercase tracking-wide text-sm inline-flex items-center justify-center">
                            <span class="relative z-10">Start Your Project</span>
                            <div class="absolute inset-0 button-shine"></div>
                            <div class="absolute inset-0 button-expand"></div> 
                        </a>
              
                    <a href="#features" class="inline-flex items-center justify-center px-8 py-4 border border-white/30 text-base font-medium rounded-md text-white hover:bg-white/10 transition-all duration-300">
                        Explore Our Services
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
    
    observer.observe(document.getElementById('process'));
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