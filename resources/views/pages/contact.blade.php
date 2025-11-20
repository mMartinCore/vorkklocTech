<x-layouts.guest_two :active="'contact'">
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <!-- Hero Banner Section -->
    <x-page-banner 
        title="Contact Us" 
        subtitle=" " 
    />
    
    <!-- Contact Details Section -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(45deg,transparent_24%,rgba(0,0,0,0.05)_25%,rgba(0,0,0,0.05)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.05)_75%,rgba(0,0,0,0.05)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(0,0,0,0.05)_25%,rgba(0,0,0,0.05)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.05)_75%,rgba(0,0,0,0.05)_76%,transparent_77%)] dark:bg-[linear-gradient(45deg,transparent_24%,rgba(255,255,255,0.03)_25%,rgba(255,255,255,0.03)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.03)_75%,rgba(255,255,255,0.03)_76%,transparent_77%),linear-gradient(-45deg,transparent_24%,rgba(255,255,255,0.03)_25%,rgba(255,255,255,0.03)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.03)_75%,rgba(255,255,255,0.03)_76%,transparent_77%)] [background-size:40px_40px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-30"></div>
            <div aria-hidden="true" class="absolute top-40 -right-40 w-[600px] h-[600px] rounded-full bg-gradient-to-br from-blue-100/40 to-purple-100/40 dark:from-blue-900/30 dark:to-purple-900/30 blur-[120px] animate-pulse-slow"></div>
            <div aria-hidden="true" class="absolute bottom-0 left-0 w-[500px] h-[500px] rounded-full bg-gradient-to-br from-purple-100/30 to-blue-100/30 dark:from-purple-900/20 dark:to-blue-900/20 blur-[100px] animate-pulse-slow"></div>
        </div>
        
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Get in <span class="text-theme_color_primary-100">Touch</span> With Us</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">We're here to answer your questions and help with all your shipping needs. Reach out to us today.</p>
            </div>

            <section class="py-12 bg-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(90deg,transparent_24%,rgba(0,0,0,0.04)_25%,rgba(0,0,0,0.04)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.04)_75%,rgba(0,0,0,0.04)_76%,transparent_77%),linear-gradient(0deg,transparent_24%,rgba(0,0,0,0.04)_25%,rgba(0,0,0,0.04)_26%,transparent_27%,transparent_74%,rgba(0,0,0,0.04)_75%,rgba(0,0,0,0.04)_76%,transparent_77%)] dark:bg-[linear-gradient(90deg,transparent_24%,rgba(255,255,255,0.02)_25%,rgba(255,255,255,0.02)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.02)_75%,rgba(255,255,255,0.02)_76%,transparent_77%),linear-gradient(0deg,transparent_24%,rgba(255,255,255,0.02)_25%,rgba(255,255,255,0.02)_26%,transparent_27%,transparent_74%,rgba(255,255,255,0.02)_75%,rgba(255,255,255,0.02)_76%,transparent_77%)] [background-size:30px_30px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-25"></div>
        </div>
        
       
    </section>
            
            <div class="flex flex-col lg:flex-row gap-12 max-w-6xl mx-auto">
                <!-- Contact Form -->
                <div class="lg:w-7/12" data-aos="fade-right" data-aos-duration="1000">
                      
                    <form action="{{ route('send_email') }}" method="post" class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                        @csrf
                        <input type="hidden" class="g-recaptcha" name="recaptcha_token" id="recaptcha_token"> 
                        
                        <!-- Form Background Elements -->
                        <div class="absolute -top-10 -right-10 w-40 h-40 bg-theme_color_primary-100 rounded-full opacity-20"></div>
                        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-theme_color_primary-100 rounded-full opacity-20"></div>

                        @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md" role="alert">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm leading-5 font-medium">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-md" role="alert">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm leading-5 font-medium">{{ session('error') }}</p>
                                </div>
                         </div>
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-md" role="alert">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm leading-5 font-medium">Please check the form below for errors</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                                <span class="bg-gradient-to-r from-theme_color_primary-100 to-theme_color_primary-100 text-white p-2 rounded-lg mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                </span>
                                Send Us a Message
                            </h3>
                        </div>
                        
                        @error('recaptcha_token')
                            <p class="mt-1 text-red-500 text-sm underline text-center">{{ $message }}</p>
                        @enderror
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg> 
                                    </div>
                                    <input type="text" id="name" name="name" required value="{{ old('name') }}" class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-theme_color_primary-100 focus:border-theme_color_primary-100 transition-all duration-300" placeholder="Tell us you name">
                                </div>
                                @error('name')
                                <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                        </svg>
                                    </div>
                                    <input type="email" id="email" name="email" required value="{{ old('email') }}" class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-theme_color_primary-100 focus:border-theme_color_primary-100 transition-all duration-300" placeholder="What's your email">
                                </div>
                                @error('email')
                                <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute top-3 left-0 pl-3 flex items-start pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <textarea id="message" name="message" rows="5" required class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-theme_color_primary-100 focus:border-theme_color_primary-100 transition-all duration-300" placeholder="Enter your message">{{ old('message') }}</textarea>
                                </div>
                                @error('message')
                                <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <button type="submit" class="hero-primary-btn  w-full group relative overflow-hidden bg-theme_color_secondary-100 text-white py-3 px-6 rounded-md shadow-xl hover:shadow-theme_color_secondary-100/50 transition-all duration-500 uppercase tracking-wide text-sm inline-flex items-center justify-center">
                                <span class="flex items-center justify-center">
                                    <span class="relative z-10">Send Message</span>
                                    <div class="absolute inset-0 button-shine"></div>
                                    <div class="absolute inset-0 button-expand"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" transform="rotate(90 10 10)" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="lg:w-5/12" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                    <div class="bg-white rounded-2xl p-8 shadow-xl h-full relative overflow-hidden border border-gray-100">
                        <!-- Background Pattern -->
                        <!-- <div class="absolute inset-0 bg-[url('/images/pattern-light.svg')] opacity-5"></div> -->
                        
                        <!-- Decorative Elements -->
                        <div class="absolute -top-20 -right-20 w-40 h-40 bg-theme_color_primary-100 rounded-full filter blur-3xl"></div>
                        <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-theme_color_primary-100 rounded-full filter blur-3xl"></div>
                        
                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-gray-800 mb-8 flex items-center">
                                <span class="bg-gradient-to-r from-theme_color_primary-100 to-theme_color_primary-100 text-white p-2 rounded-lg mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                Contact Information
                            </h3>
                            
                                <div class="relative mx-auto mb-12 overflow-hidden rounded-xl shadow-md">
                                    <!-- Skewed background element similar to page-banner -->
                                    <div class="absolute inset-0 bg-gradient-to-r from-gray-100 to-gray-200 transform -skew-y-2 origin-top-right"></div>
                                    
                                    <!-- Content container with shadow effect -->
                                    <div class="relative z-10 py-6 px-4">
                                        <h4 class="text-center text-lg font-semibold text-gray-800 mb-4">Connect With Us</h4>
                                        <div class="flex justify-center space-x-6">
                                            <a href="https://web.facebook.com/watopak.com" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white w-12 h-12 rounded-full flex items-center justify-center transition-colors duration-300 shadow-lg hover:-translate-y-1">
                                                <i class="fab fa-facebook-f text-lg"></i>
                                            </a>
                                            <a href="https://www.instagram.com/watopak_logistics" target="_blank" class="bg-gradient-to-r from-purple-500 via-pink-500 to-orange-500 text-white w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 shadow-lg hover:-translate-y-1">
                                                <i class="fab fa-instagram text-lg"></i>
                                            </a>
                                            <a href="https://wa.me/18765559800?text=Hello%2C%20I'm%20contacting%20you%20from%20the%20Watopak%20website" target="_blank" class="bg-green-600 hover:bg-green-700 text-white w-12 h-12 rounded-full flex items-center justify-center transition-colors duration-300 shadow-lg hover:-translate-y-1">
                                                <i class="fab fa-whatsapp text-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <div class="space-y-8">
                                <div class="flex items-start">
                                <div class="bg-gradient-to-r from-theme_color_primary-100 to-theme_color_primary-100 p-3 rounded-lg shadow-lg mr-4 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>

 

                                    <div>
                                        <h4 class="text-xl font-semibold text-gray-800 mb-1"> Location</h4>
                                        <p class="text-gray-600">123 Commerce Plaza, Spanish Town Road<br>Kingston, Jamaica</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-gradient-to-r from-theme_color_primary-100 to-theme_color_primary-100 p-3 rounded-lg shadow-lg mr-4 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-gray-800 mb-1">Email</h4>
                                        <a href="mailto:info@watopak.com" class="text-gray-600 hover:text-theme_color_primary-100 transition-colors">info@watopak.com</a>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                <div class="bg-gradient-to-r from-theme_color_primary-100 to-theme_color_primary-100 p-3 rounded-lg shadow-lg mr-4 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-gray-800 mb-1">Phone #</h4>
                                        <p class="text-gray-600">+1 (876) 555-9800</p>
                                    </div>
                                </div>
                                
                              
                                <div class="flex items-start">
                                    <div class="bg-gradient-to-r from-theme_color_primary-100 to-theme_color_primary-100 p-3 rounded-lg shadow-lg mr-4 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-gray-800 mb-1">Opening Hours</h4>
                                        <p class="text-gray-600">Monday - Friday: 9AM - 5PM</p>
                                        <p class="text-gray-600">Saturday: 10AM - 5PM</p>
                                        <p class="text-gray-600">Sunday: Closed</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
    <!-- FAQ Section -->
    <!-- 
    <section class="py-20 bg-gray-50 dark:bg-gradient-to-b dark:from-neutral-800 dark:to-neutral-900 relative overflow-hidden">
    Decorative Elements   <div class="absolute inset-0">
            <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[linear-gradient(60deg,transparent_33%,rgba(0,0,0,0.03)_33%,rgba(0,0,0,0.03)_66%,transparent_66%),linear-gradient(-60deg,transparent_33%,rgba(0,0,0,0.03)_33%,rgba(0,0,0,0.03)_66%,transparent_66%)] dark:bg-[linear-gradient(60deg,transparent_33%,rgba(255,255,255,0.02)_33%,rgba(255,255,255,0.02)_66%,transparent_66%),linear-gradient(-60deg,transparent_33%,rgba(255,255,255,0.02)_33%,rgba(255,255,255,0.02)_66%,transparent_66%)] [background-size:35px_60px] [mask-image:radial-gradient(ellipse_70%_70%_at_50%_50%,#000_70%,transparent_100%)] opacity-20"></div>
            <div aria-hidden="true" class="absolute bottom-0 right-0 w-[500px] h-[500px] rounded-full bg-gradient-to-br from-purple-100/30 to-blue-100/30 dark:from-purple-900/20 dark:to-blue-900/20 blur-[100px] animate-pulse-slow"></div>
            <div aria-hidden="true" class="absolute top-40 left-0 w-[600px] h-[600px] rounded-full bg-gradient-to-br from-blue-100/40 to-purple-100/40 dark:from-blue-900/30 dark:to-purple-900/30 blur-[120px] animate-pulse-slow"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Frequently Asked <span class="text-theme_color_primary-100">Questions</span></h2>
                    <p class="text-gray-600 max-w-3xl mx-auto">Find quick answers to common questions about our services.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <div class="bg-white dark:bg-neutral-800/90 rounded-2xl p-6 shadow-xl border border-gray-100/80 dark:border-neutral-700/50 hover:-translate-y-2 transition-all duration-300">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3 flex items-center">
                            <span class="text-theme_color_primary-100 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            How do I get started with Watopak Logistics?
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                                Getting started is easy! Simply register on our website to receive your personal USA mailbox address. Once you have your address, you can start shopping from your favorite US retailers and ship to your Watopak mailbox. We'll handle the rest and deliver your packages directly to your doorstep in Jamaica.
                            </p>
                    </div>
                    
                   
                    <div class="bg-white dark:bg-neutral-800/90 rounded-2xl p-6 shadow-xl border border-gray-100/80 dark:border-neutral-700/50 hover:-translate-y-2 transition-all duration-300">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center">
                            <span class="text-theme_color_primary-100 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            What are your shipping rates?
                        </h3>
                        <p class="text-gray-600 ml-8">Our rates are based on package weight and dimensions. Please visit our Rates page for detailed pricing information. We offer competitive rates for both air and sea freight options.</p>
                    </div>
                    
                   
                    <div class="bg-white dark:bg-neutral-800/90 rounded-2xl p-6 shadow-xl border border-gray-100/80 dark:border-neutral-700/50 hover:-translate-y-2 transition-all duration-300">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center">
                            <span class="text-theme_color_primary-100 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            How long does shipping take?
                        </h3>
                        <p class="text-gray-600 ml-8">Air freight typically takes 3-5 business days once your package reaches our US facility. Sea freight can take 2-4 weeks depending on the schedule. Customs clearance may add 1-3 days.</p>
                    </div>
                    
                    
                    <div class="bg-white dark:bg-neutral-800/90 rounded-2xl p-6 shadow-xl border border-gray-100/80 dark:border-neutral-700/50 hover:-translate-y-2 transition-all duration-300">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center">
                            <span class="text-theme_color_primary-100 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            Do you provide tracking for packages?
                        </h3>
                        <p class="text-gray-600 ml-8">Yes, we provide tracking information for all shipments so you can monitor your package's journey from our US facility to your doorstep in Jamaica.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CTA Section -->
    <x-cta-section 
        buttonUrl="https://watopak.jashippers.com/register"
        buttonText="Get Started Today" 
        title="Ready to Start Shipping?" 
        description="Join thousands of satisfied customers who trust Watopak Logistics for their USA to Jamaica shipping needs. Get your USA mailbox address today!"
    />

    @push('scripts')
    <!-- Google reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get form and button
            const form = document.querySelector('form');
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            
            form.addEventListener('submit', function(event) {
                // Only prevent default if we don't have a token yet
                if (!document.getElementById('recaptcha_token').value) {
                    event.preventDefault();
                    
                    // Show loading animation
                    submitBtn.innerHTML = '<span class="flex items-center justify-center"><span>Sending...</span><svg class="animate-spin ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg></span>';
                    
                    // Get reCAPTCHA token
                    grecaptcha.ready(function() {
                        grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'contact'})
                            .then(function(token) {
                                // Set the token value
                                document.getElementById('recaptcha_token').value = token;
                                
                                // Now submit the form programmatically
                                form.submit();
                            })
                            .catch(function(error) {
                                console.error('reCAPTCHA error:', error);
                                submitBtn.innerHTML = originalBtnText;
                                alert('Error with reCAPTCHA verification. Please try again.');
                            });
                    });
                }
                // If we already have a token, let the form submit naturally
            });
        });
    </script>
    @endpush
</x-layouts.guest_two>
