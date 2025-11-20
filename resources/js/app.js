import Alpine from 'alpinejs';
import axios from 'axios';

// Make Alpine and axios globally available
window.Alpine = Alpine;
window.axios = axios;

// Set default headers for axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Remove runtime font injection to reduce render-blocking

// Register new UI components
Alpine.data('timelineComponent', () => ({
    init() {
        // Add intersection observer for timeline items
        const timelineItems = document.querySelectorAll('.timeline-item');

        if (timelineItems.length) {
            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.3
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('timeline-item-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            timelineItems.forEach(item => {
                observer.observe(item);
            });
        }
    }
}));

Alpine.data('masonryGrid', () => ({
    init() {
        // Initialize masonry layout if needed
        const grids = document.querySelectorAll('.masonry-grid');

        if (grids.length) {
            // For future enhancement, could add masonry layout library
            console.log('Masonry grids initialized');
        }
    }
}));

Alpine.data('splitScreen', () => ({
    init() {
        // Add any initialization for split screen components
    },

    showSection(section) {
        // Hide all sections
        const sections = this.$el.querySelectorAll('.split-section');
        sections.forEach(s => s.classList.add('hidden'));

        // Show the selected section
        this.$el.querySelector(`.split-section-${section}`).classList.remove('hidden');
    }
}));

// Register scroll animations
Alpine.data('scrollAnimation', () => ({
    init() {
        const elements = document.querySelectorAll('[data-scroll-animation]');

        if (elements.length) {
            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const animation = entry.target.getAttribute('data-scroll-animation');
                        entry.target.classList.add(animation);
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            elements.forEach(el => {
                observer.observe(el);
            });
        }
    }
}));

// Register the carousel component
Alpine.data('carouselComponent', (config) => ({
    slides: config.slides || [],
    currentIndex: 0,
    interval: null,
    isPaused: false,
    isHovered: false,
    touchStartX: 0,
    touchEndX: 0,
    controlsVisible: false,
    controlsTimeout: null,
    slideDirection: 'right', // Track direction of slide for animation
    showControls: config.showControls !== undefined ? config.showControls : true,
    showIndicators: config.showIndicators !== undefined ? config.showIndicators : true,
    autoplayInterval: config.interval || 6000,

    init() {
        this.startAutoplay();
        this.announceSlide();

        // Create the live region for screen readers if it doesn't exist
        if (!document.getElementById('carousel-live-region')) {
            const liveRegion = document.createElement('div');
            liveRegion.id = 'carousel-live-region';
            liveRegion.className = 'sr-only';
            liveRegion.setAttribute('aria-live', 'polite');
            liveRegion.setAttribute('aria-atomic', 'true');
            document.body.appendChild(liveRegion);
        }
    },

    nextSlide() {
        this.slideDirection = 'right'; // Sliding to the right (current slide moves left)
        this.goToSlide((this.currentIndex + 1) % this.slides.length);
    },

    prevSlide() {
        this.slideDirection = 'left'; // Sliding to the left (current slide moves right)
        this.goToSlide((this.currentIndex - 1 + this.slides.length) % this.slides.length);
    },

    goToSlide(index) {
        // If no direction is set yet (like when indicators are clicked),
        // determine direction based on index change
        if (index !== this.currentIndex && this.slideDirection === '') {
            this.slideDirection = index > this.currentIndex ? 'right' : 'left';
        }

        this.currentIndex = index;
        this.announceSlide();
        this.resetAutoplay();
    },

    startAutoplay() {
        if (this.interval) {
            clearInterval(this.interval);
        }

        this.interval = setInterval(() => {
            if (!this.isPaused && !this.isHovered) {
                this.nextSlide();
            }
        }, this.autoplayInterval);
    },

    resetAutoplay() {
        clearInterval(this.interval);
        this.startAutoplay();
    },

    announceSlide() {
        const liveRegion = document.getElementById('carousel-live-region');
        if (liveRegion) {
            const currentSlide = this.slides[this.currentIndex];
            liveRegion.textContent = `Showing slide ${this.currentIndex + 1} of ${this.slides.length}: ${currentSlide.title || ''}`;
        }
    },

    handleTouchStart(event) {
        this.touchStartX = event.changedTouches[0].screenX;
    },

    handleTouchEnd(event) {
        this.touchEndX = event.changedTouches[0].screenX;
        this.handleSwipe();
    },

    handleSwipe() {
        const threshold = 50;
        const swipeDistance = this.touchEndX - this.touchStartX;

        if (swipeDistance > threshold) {
            this.prevSlide();
        } else if (swipeDistance < -threshold) {
            this.nextSlide();
        }
    },

    showControlsTemporarily() {
        // Only for mobile - temporarily show controls on touch
        if (window.innerWidth <= 767) {
            // Find and select all control buttons
            const controlButtons = this.$el.querySelectorAll('.fixed-carousel-control');

            // Show controls by adding a temporary class
            controlButtons.forEach(button => {
                button.classList.add('opacity-100');
            });

            // Clear existing timeout if there is one
            if (this.controlsTimeout) {
                clearTimeout(this.controlsTimeout);
            }

            // Hide controls after 2 seconds
            this.controlsTimeout = setTimeout(() => {
                controlButtons.forEach(button => {
                    button.classList.remove('opacity-100');
                });
            }, 2000);
        }
    }
}));

// Register existing Alpine data components
Alpine.data('heroCarousel', () => ({
    activeSlide: 0,
    slides: null,
    dots: null,
    interval: null,
    isPaused: false,
    isHovered: false,
    touchStartX: 0,
    touchEndX: 0,

    init() {
        this.slides = document.querySelectorAll('.hero-slide');
        this.dots = document.querySelectorAll('.hero-dot');

        // Start the slideshow
        this.startSlideShow();

        // Setup keyboard navigation
        this.$el.setAttribute('tabindex', '0');
        this.$el.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                this.prevSlide();
            } else if (e.key === 'ArrowRight') {
                this.nextSlide();
            }
        });

        // Setup touch events for mobile swipe
        this.$el.addEventListener('touchstart', (e) => {
            this.touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        this.$el.addEventListener('touchend', (e) => {
            this.touchEndX = e.changedTouches[0].screenX;
            this.handleSwipe();
        }, { passive: true });
    },

    nextSlide() {
        this.resetSlideShow();
        this.changeSlide(this.activeSlide + 1);
    },

    prevSlide() {
        this.resetSlideShow();
        this.changeSlide(this.activeSlide - 1);
    },

    goToSlide(index) {
        this.resetSlideShow();
        this.changeSlide(index);
    },

    changeSlide(index) {
        // Reset current slide
        this.slides[this.activeSlide].classList.remove('active');
        this.dots[this.activeSlide].classList.remove('active');
        this.dots[this.activeSlide].setAttribute('aria-current', 'false');

        // Calculate the new index (handling wrapping)
        this.activeSlide = index;
        if (this.activeSlide < 0) this.activeSlide = this.slides.length - 1;
        if (this.activeSlide >= this.slides.length) this.activeSlide = 0;

        // Activate the new slide
        this.slides[this.activeSlide].classList.add('active');
        this.dots[this.activeSlide].classList.add('active');
        this.dots[this.activeSlide].setAttribute('aria-current', 'true');

        // Announce slide change for screen readers
        this.announceSlide();
    },

    announceSlide() {
        const liveRegion = document.getElementById('carousel-live-region');
        if (liveRegion) {
            liveRegion.textContent = `Showing slide ${this.activeSlide + 1} of ${this.slides.length}`;
        }
    },

    handleSwipe() {
        const threshold = 100; // Minimum distance required for swipe
        const swipeDistance = this.touchEndX - this.touchStartX;

        if (swipeDistance > threshold) {
            // Swiped right, go to previous slide
            this.prevSlide();
        } else if (swipeDistance < -threshold) {
            // Swiped left, go to next slide
            this.nextSlide();
        }
    },

    startSlideShow() {
        if (this.interval) clearInterval(this.interval);

        this.interval = setInterval(() => {
            if (!this.isPaused && !this.isHovered) {
                this.changeSlide(this.activeSlide + 1);
            }
        }, 6000); // 6 seconds per slide for better readability
    },

    resetSlideShow() {
        clearInterval(this.interval);
        this.startSlideShow();
    },

    pauseSlideShow() {
        this.isPaused = true;
    },

    resumeSlideShow() {
        this.isPaused = false;
    },

    handleMouseEnter() {
        this.isHovered = true;
    },

    handleMouseLeave() {
        this.isHovered = false;
    }
}));

Alpine.data('imageSlider', () => ({
    activeSlide: 0,
    slides: null,
    dots: null,
    interval: null,

    init() {
        this.slides = document.querySelectorAll('.slide');
        this.dots = document.querySelectorAll('.slider-dot');

        // Start the slideshow
        this.startSlideShow();

        // Add event listeners for navigation
        document.getElementById('prevSlide')?.addEventListener('click', () => {
            this.resetSlideShow();
            this.changeSlide(this.activeSlide - 1);
        });

        document.getElementById('nextSlide')?.addEventListener('click', () => {
            this.resetSlideShow();
            this.changeSlide(this.activeSlide + 1);
        });

        // Add event listeners for dots
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                this.resetSlideShow();
                this.changeSlide(index);
            });
        });
    },

    changeSlide(index) {
        // Reset current slide
        this.slides[this.activeSlide].classList.remove('active');
        this.dots[this.activeSlide].classList.remove('active');

        // Calculate the new index (handling wrapping)
        this.activeSlide = index;
        if (this.activeSlide < 0) this.activeSlide = this.slides.length - 1;
        if (this.activeSlide >= this.slides.length) this.activeSlide = 0;

        // Activate the new slide
        this.slides[this.activeSlide].classList.add('active');
        this.dots[this.activeSlide].classList.add('active');
    },

    startSlideShow() {
        this.interval = setInterval(() => {
            this.changeSlide(this.activeSlide + 1);
        }, 5000);
    },

    resetSlideShow() {
        clearInterval(this.interval);
        this.startSlideShow();
    }
}));

Alpine.data('testimonials', () => ({
    activeSlide: 1,
}));

// Initialize Alpine
Alpine.start();

// Initialize AOS (Animate on Scroll) when the DOM is loaded
document.addEventListener('DOMContentLoaded', function () {
    // Native lazy-loading for images
    document.querySelectorAll('img:not([loading])').forEach(img => {
        img.setAttribute('loading', 'lazy');
        img.setAttribute('decoding', 'async');
    });
    // Initialize all components
    initHeaderScroll();
    initMagneticButtons();
    initBackToTop();
    // initScrollProgress(); // Disabled scroll progress bar
    initCounters();
    generateParticles();
    initSplitTextAnimations();

    // Initialize AOS (Animate on Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    }

    // Start Alpine
    Alpine.start();
});

function adjustHeaderSpacer() {
    const header = document.getElementById('mainHeader');
    const spacer = document.getElementById('headerSpacer');
    const heroCarousel = document.getElementById('hero-carousel');

    if (header && spacer) {
        // Get the computed styles to include any borders, padding, etc.
        const headerStyles = window.getComputedStyle(header);

        // Calculate the total height including padding, border
        const borderBottom = parseFloat(headerStyles.borderBottomWidth) || 0;
        const paddingBottom = parseFloat(headerStyles.paddingBottom) || 0;

        // Get the current height of the header plus all extras
        const headerHeight = Math.ceil(
            header.offsetHeight +
            (parseFloat(headerStyles.marginBottom) || 0)
        );

        // Apply the height to the spacer
        spacer.style.height = `${headerHeight}px`;

        // Set CSS variable for header height
        document.documentElement.style.setProperty('--header-height', `${headerHeight}px`);

        // Special handling for hero carousel section
        if (heroCarousel) {
            // If we're on the landing page with a hero carousel, don't add spacer
            // This creates a seamless look with the header directly above carousel
            if (window.location.pathname === '/' || window.location.pathname === '/home') {
                spacer.style.display = 'none';
            } else {
                spacer.style.display = 'block';
            }
        }

        // Update scroll offsets for navigation
        updateScrollOffsets(headerHeight);
    }
}

// Throttle function to limit how often a function runs during rapid events like scrolling
function throttle(func, limit) {
    let inThrottle;
    return function () {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Update scroll offset values for page navigation
function updateScrollOffsets(headerHeight) {
    const navLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');

    navLinks.forEach(link => {
        // Store the header height as a data attribute for use in click handlers
        link.setAttribute('data-offset', headerHeight);
    });
}

// Magnetic buttons effect
function initMagneticButtons() {
    const magneticButtons = document.querySelectorAll('.magnetic-button');

    magneticButtons.forEach(button => {
        button.addEventListener('mousemove', function (e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            // Apply a subtle transform based on mouse position
            this.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.05)`;
        });

        button.addEventListener('mouseleave', function () {
            this.style.transform = 'translate(0, 0) scale(1)';
        });
    });
}

// Back to top button
function initBackToTop() {
    const backToTopBtn = document.getElementById('backToTop');
    if (!backToTopBtn) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 300) {
            backToTopBtn.classList.remove('opacity-0', 'translate-y-10');
            backToTopBtn.classList.add('opacity-100', 'translate-y-0');
        } else {
            backToTopBtn.classList.add('opacity-0', 'translate-y-10');
            backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
        }
    });

    backToTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Scroll progress bar
function initScrollProgress() {
    const progressBar = document.getElementById('scrollProgress');
    if (!progressBar) return;

    window.addEventListener('scroll', function () {
        const windowScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (windowScroll / height) * 100;

        progressBar.style.transform = `scaleX(${scrolled / 100})`;
    });
}

// Counter animations
function initCounters() {
    // Counter values
    const counters = [
        { id: 'customerCount', target: 2500, increment: 25 },
        { id: 'packageCount', target: 15000, increment: 150 },
        { id: 'countryCount', target: 20, increment: 1 }
    ];

    // Animate each counter when scrolled into view
    const counterSection = document.getElementById('about');

    if (!counterSection) return;

    let animated = false;

    window.addEventListener('scroll', function () {
        const sectionTop = counterSection.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (sectionTop < windowHeight * 0.75 && !animated) {
            animated = true;

            counters.forEach(counter => {
                animateCounter(counter.id, counter.target, counter.increment);
            });
        }
    });

    function animateCounter(id, target, increment) {
        const element = document.getElementById(id);
        if (!element) return;

        let current = 0;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = current.toLocaleString();
        }, 30);
    }
}

// Generate particles for background
function generateParticles() {
    const particlesContainer = document.getElementById('particles');
    if (!particlesContainer) return;

    for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        // Random position, size and animation delay
        const size = Math.random() * 10 + 5;
        const left = Math.random() * 100;
        const top = Math.random() * 100;
        const delay = Math.random() * 5;

        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${left}%`;
        particle.style.top = `${top}%`;
        particle.style.animationDelay = `${delay}s`;

        particlesContainer.appendChild(particle);
    }
}

// Split text animations with GSAP
function initSplitTextAnimations() {
    const splitText = document.querySelector('.split-text');
    const splitTextP = document.querySelector('.split-text-p');

    if (splitText) {
        // Initialize GSAP and ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Create animation for main heading
        const text = splitText.textContent;
        splitText.innerHTML = '';

        for (let i = 0; i < text.length; i++) {
            const span = document.createElement('span');
            span.textContent = text[i] === ' ' ? '\u00A0' : text[i];
            span.style.opacity = '0';
            span.style.display = 'inline-block';
            span.style.transform = 'translateY(20px)';
            splitText.appendChild(span);
        }

        const chars = splitText.querySelectorAll('span');

        gsap.to(chars, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.03,
            ease: "power2.out",
            delay: 0.5
        });
    }

    if (splitTextP) {
        // Animate paragraph with a slight delay
        gsap.from(splitTextP, {
            opacity: 0,
            y: 20,
            duration: 1,
            delay: 1.2,
            ease: "power2.out"
        });
    }

    // Add parallax effect to the hero background
    const heroBg = document.getElementById('heroBg');
    if (heroBg) {
        window.addEventListener('scroll', function () {
            const scroll = window.scrollY;
            heroBg.style.transform = `translateY(${scroll * 0.5}px)`;
        });
    }
}

// Header scroll effects
function initHeaderScroll() {
    const header = document.getElementById('mainHeader');

    if (!header) return;

    // Initial adjustment
    adjustHeaderSpacer();

    // Throttled adjustment during scroll
    const throttledAdjust = throttle(adjustHeaderSpacer, 100);

    window.addEventListener('scroll', function () {
        if (window.scrollY > 20) {
            if (!header.classList.contains('scrolled')) {
                header.classList.add('scrolled');
                // Recalculate header height after class change causes visual changes
                setTimeout(adjustHeaderSpacer, 50);
            }
        } else {
            if (header.classList.contains('scrolled')) {
                header.classList.remove('scrolled');
                // Recalculate header height after class change causes visual changes
                setTimeout(adjustHeaderSpacer, 50);
            }
        }

        // Check for header size changes during scroll
        throttledAdjust();

        // Update active nav link based on scroll position
        updateActiveNavLink();
    });

    // Initialize the active state of navigation links
    updateActiveNavLink();

    // Resize observer to detect any size changes to the header
    if (window.ResizeObserver) {
        const resizeObserver = new ResizeObserver(throttledAdjust);
        resizeObserver.observe(header);
    }

    // Also recalculate on window resize for good measure
    window.addEventListener('resize', throttledAdjust);

    // Add click event to navigation links for smooth scrolling
    const navLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Get the header height from the data attribute, with a default if not set
                const headerHeight = parseInt(this.getAttribute('data-offset') || header.offsetHeight);
                // Add extra padding to ensure content is fully visible
                const extraPadding = 24; // Increased from 20 to 24 for better spacing
                const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight - extraPadding;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Update active navigation link based on scroll position
function updateActiveNavLink() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    const headerHeight = document.getElementById('mainHeader')?.offsetHeight || 0;

    let currentSection = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop - headerHeight - 100; // Extra offset for better UX
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute('id');

        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            currentSection = '#' + sectionId;
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        const href = link.getAttribute('href');

        if (href === currentSection) {
            link.classList.add('active');
        }
    });
}
