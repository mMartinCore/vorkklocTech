@props([
    'title' => 'Frequently Asked Questions',
    'subtitle' => 'Find answers to common questions about our software development services',
    'faqs' => []
])

@php
// Default FAQs if none provided
$defaultFaqs = [
    [
        'question' => 'What services do you offer?',
        'answer' => 'We offer comprehensive custom software development services including web applications, mobile apps (Android & Cross-Platform), API development, enterprise solutions, cloud deployment, and ongoing maintenance & support.'
    ],
    [
        'question' => 'How long does it take to develop a custom software solution?',
        'answer' => 'Development timelines vary based on project complexity. A simple web application typically takes 4-8 weeks, while enterprise solutions may take 3-6 months. We provide detailed timelines during our initial consultation after understanding your requirements.'
    ],
    [
        'question' => 'What technologies do you use?',
        'answer' => 'We work with modern technologies including Laravel, Livewire, React, Vue.js, Node.js, Python, Docker, Kubernetes, PostgreSQL, MySQL, and MongoDB. We choose the best tech stack based on your project requirements.'
    ],
    [
        'question' => 'Do you provide ongoing support and maintenance?',
        'answer' => 'Yes, we offer comprehensive maintenance and support packages including regular updates, bug fixes, security patches, performance optimization, and technical support. We ensure your software continues to run smoothly and securely.'
    ],
    [
        'question' => 'Can you work with our existing systems?',
        'answer' => 'Absolutely! We specialize in API development and system integration. We can integrate new solutions with your existing infrastructure, databases, and third-party services to create seamless workflows.'
    ],
    [
        'question' => 'What is your development process?',
        'answer' => 'We follow an agile development methodology: 1) Discovery & Planning - understanding your needs and creating a roadmap, 2) Development - building your solution with regular updates, 3) Deployment - launching your software and providing training. We maintain transparent communication throughout the process.'
    ],
    [
        'question' => 'How much does custom software development cost?',
        'answer' => 'Project costs depend on scope, complexity, and requirements. We provide detailed quotes after understanding your needs. We offer flexible engagement models including fixed-price projects and hourly rates. Contact us for a free consultation and quote.'
    ],
    [
        'question' => 'Do you provide source code and documentation?',
        'answer' => 'Yes, you own the source code and all intellectual property. We provide complete source code with your project. Comprehensive documentation, deployment guides, and knowledge transfer sessions are available as additional services at an extra cost to ensure your team can maintain and extend the solution.'
    ]
];

$faqs = !empty($faqs) ? $faqs : $defaultFaqs;
@endphp

<section class="py-20 md:py-24 relative overflow-hidden bg-white dark:bg-slate-900" id="faq">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(45deg,transparent_24%,rgba(59,130,246,0.02)_25%,rgba(59,130,246,0.02)_26%,transparent_27%,transparent_74%,rgba(6,182,212,0.02)_75%,rgba(6,182,212,0.02)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(6,182,212,0.02)_25%,rgba(6,182,212,0.02)_26%,transparent_27%,transparent_74%,rgba(59,130,246,0.02)_75%,rgba(59,130,246,0.02)_76%,transparent_77%)] dark:bg-[linear-gradient(45deg,transparent_24%,rgba(59,130,246,0.03)_25%,rgba(59,130,246,0.03)_26%,transparent_27%,transparent_74%,rgba(6,182,212,0.03)_75%,rgba(6,182,212,0.03)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(6,182,212,0.03)_25%,rgba(6,182,212,0.03)_26%,transparent_27%,transparent_74%,rgba(59,130,246,0.03)_75%,rgba(59,130,246,0.03)_76%,transparent_77%)] [background-size:40px_40px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-30"></div>
        <div aria-hidden="true" class="absolute -top-96 -right-40 w-[800px] h-[800px] rounded-full bg-gradient-to-br from-blue-100/20 to-cyan-100/20 dark:from-blue-900/20 dark:to-cyan-900/20 blur-[150px] animate-pulse-slow"></div>
    </div>
    
    <div class="container mx-auto px-4 md:px-8 xl:px-4 max-w-4xl relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="flex items-center justify-center mb-6">
                <span class="px-6 py-2.5 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 text-blue-600 dark:text-cyan-400 text-xs tracking-widest uppercase font-medium rounded-full border border-blue-500/20 dark:border-cyan-500/30 shadow-lg backdrop-blur-md">
                    FAQ
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-slate-900 dark:text-white">
                {{ $title }}
            </h2>
            <p class="text-lg sm:text-xl text-slate-600 dark:text-slate-300 max-w-2xl mx-auto leading-relaxed">
                {{ $subtitle }}
            </p>
        </div>
        
        <!-- FAQ Accordion -->
        <div class="space-y-4" x-data="{ openIndex: null }">
            @foreach($faqs as $index => $faq)
            <div 
                class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden"
                data-aos="fade-up"
                data-aos-delay="{{ $index * 50 }}"
            >
                <button
                    @click="openIndex = openIndex === {{ $index }} ? null : {{ $index }}"
                    class="w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset group"
                    :class="openIndex === {{ $index }} ? 'bg-slate-50 dark:bg-slate-700/50' : ''"
                >
                    <h3 class="text-lg sm:text-xl font-semibold text-slate-900 dark:text-white pr-8 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                        {{ $faq['question'] }}
                    </h3>
                    <svg 
                        class="w-6 h-6 text-slate-500 dark:text-slate-400 flex-shrink-0 transition-transform duration-300"
                        :class="openIndex === {{ $index }} ? 'rotate-180 text-blue-600 dark:text-blue-400' : ''"
                        fill="none" 
                        stroke="currentColor" 
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                
                <div 
                    x-show="openIndex === {{ $index }}"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-screen"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 max-h-screen"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="px-6 pb-5 overflow-hidden"
                >
                    <div class="pt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Contact CTA -->
        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="400">
            <p class="text-slate-600 dark:text-slate-300 mb-4">
                Still have questions? We're here to help!
            </p>
            <a 
                href="{{ route('contact') }}" 
                class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
            >
                Contact Us
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

