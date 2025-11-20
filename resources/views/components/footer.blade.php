<!-- Enhanced Footer Component -->
<!-- Progress bar for scroll -->
<!-- <div class="progress-bar" id="scrollProgress"></div> -->

<!-- Back to Top Button with Enhanced Design -->
<button id="backToTop" class="fixed bottom-6 right-6 bg-gradient-to-r from-secondary-500 to-secondary-600 hover:from-secondary-600 hover:to-secondary-700 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-2xl shadow-secondary-500/25 transform transition-all duration-300 opacity-0 translate-y-10 z-50 hover:scale-110 group">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 group-hover:-translate-y-1 transition-transform duration-300">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
    </svg>
    <!-- Animated ring -->
    <div class="absolute inset-0 rounded-full border-2 border-white/20 scale-110 opacity-0 group-hover:opacity-100 group-hover:scale-125 transition-all duration-300"></div>
</button>

<!-- Enhanced Footer -->
<footer class="relative bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900 text-white pt-24 pb-8 overflow-hidden footer-enhanced">
    <!-- Advanced Background Elements -->
    <div class="absolute inset-0">
        <!-- Gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/30"></div>
        
        <!-- Animated mesh pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:32px_32px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)] animate-pulse-slow"></div>
        
        <!-- Floating orbs -->
        <div class="absolute top-20 right-20 w-32 h-32 rounded-full bg-gradient-to-r from-primary-500/20 to-secondary-500/20 blur-2xl animate-float"></div>
        <div class="absolute bottom-32 left-20 w-24 h-24 rounded-full bg-gradient-to-r from-secondary-500/15 to-primary-500/15 blur-xl animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 w-20 h-20 rounded-full bg-gradient-to-r from-blue-500/10 to-purple-500/10 blur-lg animate-pulse-slow" style="animation-delay: 1s;"></div>
        
        <!-- Wave pattern -->
        <div class="absolute top-0 left-0 w-full h-20 overflow-hidden">
            <svg class="absolute top-0 w-full h-full" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-white/5"></path>
            </svg>
        </div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
      

        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- Enhanced Company Info -->
            <div class="lg:col-span-1">
                <div class="flex items-start mb-8">
                    <div class="relative group">
                        <img src="{{ asset('images/Watopak-logo.png') }}" alt="Watopak Logistics Logo" class="h-16 w-16 rounded-xl shadow-lg transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/20 to-secondary-500/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="ml-4 flex flex-col">
                        <span class="font-bold text-2xl text-white">Watopak</span>
                        <span class="font-semibold text-secondary-400 text-sm tracking-wider uppercase">Logistics Services</span>
                        <span class="text-gray-400 italic text-sm mt-1">Premium. Secure. Reliable</span>
                    </div>
                </div>
                
                <p class="text-gray-300 mb-8 leading-relaxed">
                    Delivering premium shipping services from the USA to Jamaica with exceptional care, cutting-edge technology, and unwavering professionalism.
                </p>
                
                <!-- Enhanced Social Media Links -->
                <div class="flex space-x-4">
                    <a href="https://wa.me/18763889648?text=Hello%2C%20I'm%20contacting%20you%20from%20the%20Watopak%20website" target="_blank" 
                       class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center hover:scale-110 hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 group">
                        <i class="fab fa-facebook-f text-white text-lg group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                    <a href="https://www.instagram.com/watopak_logistics" target="_blank" 
                       class="w-12 h-12 bg-gradient-to-r from-pink-500 to-purple-600 rounded-xl flex items-center justify-center hover:scale-110 hover:shadow-lg hover:shadow-pink-500/25 transition-all duration-300 group">
                        <i class="fab fa-instagram text-white text-lg group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                    <a href="https://wa.me/18763889648" target="_blank" 
                       class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center hover:scale-110 hover:shadow-lg hover:shadow-green-500/25 transition-all duration-300 group">
                        <i class="fab fa-whatsapp text-white text-lg group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                    <a href="https://twitter.com/watopak_logistics" target="_blank" 
                       class="w-12 h-12 bg-gradient-to-r from-blue-400 to-cyan-500 rounded-xl flex items-center justify-center hover:scale-110 hover:shadow-lg hover:shadow-blue-400/25 transition-all duration-300 group">
                        <i class="fab fa-twitter text-white text-lg group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
            
            <!-- Enhanced Quick Links -->
            <div>
                <h3 class="font-bold text-xl mb-8 relative inline-block group">
                    Quick Links
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-gradient-to-r from-primary-400 to-secondary-400 group-hover:w-full transition-all duration-300"></span>
                </h3>
                <ul class="space-y-6">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-all duration-300 font-medium text-sm uppercase tracking-wider flex items-center group">
                            <div class="w-2 h-2 bg-secondary-400 rounded-full mr-4 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-2 transition-transform duration-300">Home</span>
                        </a>
                    </li> 
                    <li>
                        <a href="{{ route('rates') }}" class="text-gray-300 hover:text-white transition-all duration-300 font-medium text-sm uppercase tracking-wider flex items-center group">
                            <div class="w-2 h-2 bg-secondary-400 rounded-full mr-4 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-2 transition-transform duration-300">Our Rates</span>
                        </a>
                    </li> 
                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-all duration-300 font-medium text-sm uppercase tracking-wider flex items-center group">
                            <div class="w-2 h-2 bg-secondary-400 rounded-full mr-4 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-2 transition-transform duration-300">Contact Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-all duration-300 font-medium text-sm uppercase tracking-wider flex items-center group">
                            <div class="w-2 h-2 bg-secondary-400 rounded-full mr-4 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-2 transition-transform duration-300">About Us</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Enhanced Legal Links -->
            <div>
                <h3 class="font-bold text-xl mb-8 relative inline-block group">
                    Legal & Support
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-gradient-to-r from-primary-400 to-secondary-400 group-hover:w-full transition-all duration-300"></span>
                </h3>
                <ul class="space-y-6">
                    <li>
                        <a href="{{ route('privacy') }}" class="text-gray-300 hover:text-white transition-all duration-300 font-medium text-sm uppercase tracking-wider flex items-center group">
                            <div class="w-2 h-2 bg-secondary-400 rounded-full mr-4 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-2 transition-transform duration-300">Privacy Policy</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('term-condition') }}" class="text-gray-300 hover:text-white transition-all duration-300 font-medium text-sm uppercase tracking-wider flex items-center group">
                            <div class="w-2 h-2 bg-secondary-400 rounded-full mr-4 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-2 transition-transform duration-300">Terms & Conditions</span>
                        </a>
                    </li>
                    
                </ul>
                
                <!-- Trust Badges -->
                <!-- <div class="mt-8 space-y-4">
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl backdrop-blur-sm">
                        <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold text-sm">SSL Secured</p>
                            <p class="text-gray-400 text-xs">256-bit encryption</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl backdrop-blur-sm">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold text-sm">Licensed Carrier</p>
                            <p class="text-gray-400 text-xs">Fully insured</p>
                        </div>
                    </div>
                </div> -->
            </div>
            
            <!-- Enhanced Contact Info -->
            <div>
                <h3 class="font-bold text-xl mb-8 relative inline-block group">
                    Get In Touch
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-gradient-to-r from-primary-400 to-secondary-400 group-hover:w-full transition-all duration-300"></span>
                </h3>
                <ul class="space-y-6">
                    <li class="flex items-start group">
                        <div class="w-12 h-12 bg-gradient-to-r from-secondary-500 to-secondary-600 rounded-xl p-3 mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="text-white font-semibold">Main Office</p>
                            <p class="text-gray-300 text-sm leading-relaxed">Shop #2, Watopak Street<br>Watopak, Jamaica</p>
                        </div>
                    </li>
                    <li class="flex items-start group">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl p-3 mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-phone-alt text-white"></i>
                        </div>
                        <div>
                            <p class="text-white font-semibold">Call Us</p>
                            <a href="tel:+18763889648" class="text-gray-300 hover:text-secondary-400 transition-colors duration-300">
                                +1 (876) 388-9648
                            </a>
                        </div> 
                    </li>
                    <li class="flex items-start group">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl p-3 mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <i class="fab fa-whatsapp text-white"></i>
                        </div>
                        <div>
                            <p class="text-white font-semibold">WhatsApp</p>
                            <a href="https://wa.me/18763889648?text=Hello%2C%20I'm%20contacting%20you%20from%20the%20Watopak%20website" target="_blank" class="text-gray-300 hover:text-green-400 transition-colors duration-300">
                                Chat with us instantly
                            </a>
                        </div>
                    </li>
                    <li class="flex items-start group">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl p-3 mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <p class="text-white font-semibold">Email Support</p>
                            <a href="mailto:info@watopak.com" class="text-gray-300 hover:text-secondary-400 transition-colors duration-300">
                                info@watopak.com
                            </a>
                        </div>
                    </li>
                </ul>
                
                <!-- Business Hours -->
                <div class="mt-8 p-4 bg-white/5 rounded-xl backdrop-blur-sm">
                    <h4 class="text-white font-semibold mb-3 flex items-center gap-2">
                        <svg class="w-5 h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Business Hours
                    </h4>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-300">Mon - Fri:</span>
                            <span class="text-white">8:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300">Saturday:</span>
                            <span class="text-white">9:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300">Sunday:</span>
                            <span class="text-white">Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <!-- Enhanced Bottom Footer -->
        <div class="border-t border-gray-700/50 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex flex-col md:flex-row items-center gap-4">
                    <p class="text-gray-400 text-sm">
                        &copy; {{ date('Y') }} Watopak Logistics. All Rights Reserved.
                    </p>
                    <!-- <div class="flex items-center gap-2">
                        <span class="text-gray-500 text-xs">Made with</span>
                        <svg class="w-4 h-4 text-red-500 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-500 text-xs">in Jamaica</span>
                    </div> -->
                </div>
                
           
            </div>
        </div>
    </div>
</footer>

<!-- Enhanced Footer Component Scripts -->
<script>
    // Initialize enhanced footer features
    document.addEventListener('DOMContentLoaded', function() {
        initEnhancedBackToTop();
        initEnhancedScrollProgress();
        initNewsletterForm();
        initFooterAnimations();
    });

    // Enhanced back to top button
    function initEnhancedBackToTop() {
        const backToTopBtn = document.getElementById('backToTop');
        if (!backToTopBtn) return;
        
        let isVisible = false;
        
        window.addEventListener('scroll', function() {
            const scrollTop = window.scrollY;
            const shouldShow = scrollTop > 400;
            
            if (shouldShow && !isVisible) {
                backToTopBtn.classList.remove('opacity-0', 'translate-y-10');
                backToTopBtn.classList.add('opacity-100', 'translate-y-0');
                isVisible = true;
            } else if (!shouldShow && isVisible) {
                backToTopBtn.classList.add('opacity-0', 'translate-y-10');
                backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
                isVisible = false;
            }
        });
        
        backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Enhanced scroll progress bar
    function initEnhancedScrollProgress() {
        const progressBar = document.getElementById('scrollProgress');
        if (!progressBar) return;
        
        let ticking = false;
        
        function updateProgress() {
            const windowScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = Math.min((windowScroll / height) * 100, 100);
            
            progressBar.style.transform = `scaleX(${scrolled / 100})`;
            
            // Change color based on progress
            if (scrolled < 25) {
                progressBar.style.background = 'linear-gradient(to right, #ef4444, #f97316)';
            } else if (scrolled < 50) {
                progressBar.style.background = 'linear-gradient(to right, #f97316, #eab308)';
            } else if (scrolled < 75) {
                progressBar.style.background = 'linear-gradient(to right, #eab308, #22c55e)';
            } else {
                progressBar.style.background = 'linear-gradient(to right, #22c55e, #10b981)';
            }
            
            ticking = false;
        }
        
        function requestProgressTick() {
            if (!ticking) {
                requestAnimationFrame(updateProgress);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestProgressTick, { passive: true });
    }
    
 
    
    // Newsletter form functionality
    function initNewsletterForm() {
        const newsletterForm = document.getElementById('newsletterForm');
        if (!newsletterForm) return;
        
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = this.querySelector('input[type="email"]');
            const submitBtn = this.querySelector('button[type="submit"]');
            const statusMsg = document.getElementById('newsletterStatus');
            
            if (!emailInput || !submitBtn || !statusMsg) return;
            
            // Validate email
            const email = emailInput.value.trim();
            if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
                statusMsg.textContent = 'Please enter a valid email address.';
                statusMsg.classList.remove('text-green-500');
                statusMsg.classList.add('text-red-500');
                return;
            }
            
            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Subscribing...';
            
            // Simulate API call (replace with actual API call)
            setTimeout(() => {
                // Success state
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Subscribe';
                emailInput.value = '';
                
                statusMsg.textContent = 'Thank you for subscribing!';
                statusMsg.classList.remove('text-red-500');
                statusMsg.classList.add('text-green-500');
                
                // Hide message after 5 seconds
                setTimeout(() => {
                    statusMsg.textContent = '';
                }, 5000);
            }, 1500);
        });
    }
    
    // Footer animations
    function initFooterAnimations() {
        // Animate elements when they come into view
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
                }
            });
        }, observerOptions);
        
        // Observe footer sections
        document.querySelectorAll('footer > div > div > div').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            observer.observe(section);
        });
        
        // Add hover effects to social media links
        document.querySelectorAll('footer a[class*="bg-gradient"]').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.1) rotate(5deg)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
            });
        });
    }
</script>

<style>
    /* Enhanced Footer Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(3deg); }
    }
    
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.4; }
        50% { opacity: 0.8; }
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-float {
        animation: float 8s ease-in-out infinite;
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 6s ease-in-out infinite;
    }
    
    /* Enhanced Progress Bar */
    .progress-bar {
        position: fixed;
        top: 0;
        left: 0;
        height: 4px;
        width: 100%;
        background: linear-gradient(to right, #ef4444, #f97316);
        transform-origin: left;
        transform: scaleX(0);
        z-index: 9999;
        transition: background 0.3s ease;
        box-shadow: 0 2px 4px rgba(239, 68, 68, 0.3);
    }
    
    /* Enhanced Footer Background */
    .footer-enhanced {
        position: relative;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }
    
    /* Glassmorphism effects */
    .backdrop-blur-lg {
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
    }
    
    /* Custom scrollbar for footer */
    footer ::-webkit-scrollbar {
        width: 6px;
    }
    
    footer ::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
    }
    
    footer ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #ef4444, #f97316);
        border-radius: 3px;
    }
    
    footer ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #dc2626, #ea580c);
    }
    
    /* Enhanced focus styles */
    footer a:focus-visible,
    footer button:focus-visible,
    footer input:focus-visible,
    footer select:focus-visible {
        outline: 2px solid #ef4444;
        outline-offset: 2px;
        border-radius: 8px;
    }
    
    /* Responsive enhancements */
    @media (max-width: 768px) {
        .footer-enhanced {
            background-attachment: scroll;
        }
        
        footer .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }
    
    /* Loading animation for form */
    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }
    
    .animate-spin {
        animation: spin 1s linear infinite;
    }
    
    /* Hover effects for trust badges */
    footer .bg-white\/5:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-2px);
        transition: all 0.3s ease;
    }
</style>