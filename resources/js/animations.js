/**
 * Watopak Enhanced Animations System
 * Professional scroll-triggered animations with performance optimization
 * Based on NewReadme.md Phase 2 strategy
 */

// Animation Registry
class WatopakAnimations {
    constructor() {
        this.gsap = null;
        this.scrollTrigger = null;
        this.prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        this.isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        this.isInitialized = false;

        this.init();
    }

    init() {
        // Wait for GSAP to be available
        if (typeof gsap !== 'undefined') {
            this.gsap = gsap;
            this.scrollTrigger = ScrollTrigger;
            this.setupAnimations();
            this.isInitialized = true;
        } else {
            // Retry after a short delay
            setTimeout(() => this.init(), 100);
        }
    }

    setupAnimations() {
        if (this.prefersReducedMotion) {
            console.log('Reduced motion preference detected - skipping animations');
            return;
        }

        // Register ScrollTrigger plugin
        this.gsap.registerPlugin(this.scrollTrigger);

        // Initialize animation sets
        this.initMaritimeElements();
        this.initCardAnimations();
        this.initButtonEnhancements();
        this.initLoadingStates();
        // this.initScrollProgress();
    }

    initMaritimeElements() {
        // Enhanced scroll-triggered animations for maritime elements
        const maritimeElements = document.querySelectorAll('.maritime-element, .maritime-card');

        if (maritimeElements.length === 0) return;

        maritimeElements.forEach((element, index) => {
            this.gsap.fromTo(element,
                {
                    y: 50,
                    opacity: 0,
                    scale: 0.95
                },
                {
                    y: 0,
                    opacity: 1,
                    scale: 1,
                    duration: 1.2,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: element,
                        start: "top 80%",
                        end: "bottom 20%",
                        toggleActions: "play none none reverse",
                        markers: false // Set to true for debugging
                    },
                    delay: index * 0.1 // Stagger effect
                }
            );
        });
    }

    initCardAnimations() {
        // Enhanced card hover animations
        const cards = document.querySelectorAll('.maritime-card');

        cards.forEach(card => {
            // Hover animation timeline
            const hoverTl = this.gsap.timeline({ paused: true });

            hoverTl.to(card, {
                y: -8,
                scale: 1.02,
                boxShadow: "0 20px 40px rgba(59, 130, 246, 0.15)",
                duration: 0.3,
                ease: "power2.out"
            });

            card.addEventListener('mouseenter', () => {
                if (!this.isMobile && !this.prefersReducedMotion) {
                    hoverTl.play();
                }
            });

            card.addEventListener('mouseleave', () => {
                if (!this.isMobile && !this.prefersReducedMotion) {
                    hoverTl.reverse();
                }
            });
        });
    }

    initButtonEnhancements() {
        // Enhanced button interactions
        const buttons = document.querySelectorAll('.professional-button');

        buttons.forEach(button => {
            // Click animation
            button.addEventListener('click', (e) => {
                if (this.prefersReducedMotion) return;

                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = button.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.cssText = "position: absolute; width: " + size + "px; height: " + size + "px; left: " + x + "px; top: " + y + "px; background: radial-gradient(circle, rgba(255,255,255,0.6) 0%, transparent 70%); border-radius: 50%; pointer-events: none; transform: scale(0); z-index: 1000;";

                button.style.position = 'relative';
                button.appendChild(ripple);

                this.gsap.to(ripple, {
                    scale: 4,
                    opacity: 0,
                    duration: 0.6,
                    ease: "power2.out",
                    onComplete: () => ripple.remove()
                });
            });

            // Focus enhancement
            button.addEventListener('focus', () => {
                if (!this.prefersReducedMotion) {
                    this.gsap.to(button, {
                        scale: 1.02,
                        duration: 0.2,
                        ease: "power2.out"
                    });
                }
            });

            button.addEventListener('blur', () => {
                if (!this.prefersReducedMotion) {
                    this.gsap.to(button, {
                        scale: 1,
                        duration: 0.2,
                        ease: "power2.out"
                    });
                }
            });
        });
    }

    initLoadingStates() {
        // Progressive enhancement for loading states
        const loadingElements = document.querySelectorAll('.loading-fade-in');

        loadingElements.forEach((element, index) => {
            // Set initial state
            this.gsap.set(element, { opacity: 0, y: 20 });

            // Animate in when in viewport
            this.gsap.to(element, {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: "power3.out",
                delay: index * 0.1,
                scrollTrigger: {
                    trigger: element,
                    start: "top 90%",
                    toggleActions: "play none none none"
                }
            });
        });
    }

    initScrollProgress() {
        // Professional scroll progress indicator
        const progressBar = document.createElement('div');
        progressBar.className = 'progress-bar-enhanced fixed top-0 left-0 w-full z-50';
        progressBar.innerHTML = '<div class="progress-bar-fill w-0 h-1"></div>';
        document.body.appendChild(progressBar);

        const progressFill = progressBar.querySelector('.progress-bar-fill');

        this.scrollTrigger.create({
            trigger: "body",
            start: "top top",
            end: "bottom bottom",
            onUpdate: self => {
                const progress = self.progress * 100;
                this.gsap.to(progressFill, {
                    width: `${progress}%`,
                    duration: 0.3,
                    ease: "power2.out"
                });
            }
        });
    }

    // Utility method to add micro-interactions
    addMicroBounce(element) {
        if (this.prefersReducedMotion) return;

        this.gsap.to(element, {
            scale: 1.05,
            duration: 0.1,
            ease: "power2.out",
            yoyo: true,
            repeat: 1
        });
    }

    addMicroShake(element) {
        if (this.prefersReducedMotion) return;

        this.gsap.to(element, {
            x: [-5, 5, -5, 5, 0],
            duration: 0.4,
            ease: "power2.inOut"
        });
    }

    // Performance optimization: cleanup method
    destroy() {
        if (this.scrollTrigger) {
            this.scrollTrigger.getAll().forEach(trigger => trigger.kill());
        }
        this.isInitialized = false;
    }

    // Refresh animations (useful for dynamic content)
    refresh() {
        if (this.scrollTrigger) {
            this.scrollTrigger.refresh();
        }
    }
}

// Professional form validation enhancements
class WatopakFormEnhancements {
    constructor() {
        this.init();
    }

    init() {
        this.enhanceFormInputs();
        this.addValidationFeedback();
    }

    enhanceFormInputs() {
        const inputs = document.querySelectorAll('.form-input-enhanced');

        inputs.forEach(input => {
            // Real-time validation feedback
            input.addEventListener('input', this.validateInput.bind(this));
            input.addEventListener('blur', this.validateInput.bind(this));
            input.addEventListener('focus', this.onInputFocus.bind(this));
        });
    }

    validateInput(e) {
        const input = e.target;
        const isValid = input.checkValidity();

        // Remove existing validation classes
        input.classList.remove('success', 'error');

        if (input.value.length > 0) {
            if (isValid) {
                input.classList.add('success');
                this.showValidationMessage(input, 'Valid input', 'success');
            } else {
                input.classList.add('error');
                this.showValidationMessage(input, input.validationMessage, 'error');
            }
        }
    }

    onInputFocus(e) {
        const input = e.target;
        input.classList.remove('error');
        this.clearValidationMessage(input);
    }

    showValidationMessage(input, message, type) {
        this.clearValidationMessage(input);

        const messageEl = document.createElement('div');
        messageEl.className = `validation-message text-sm mt-1 ${type === 'error' ? 'text-red-600' : 'text-green-600'}`;
        messageEl.textContent = message;
        messageEl.setAttribute('role', 'alert');
        messageEl.setAttribute('aria-live', 'polite');

        input.parentNode.appendChild(messageEl);

        // Animate in
        if (window.watopakAnimations && !window.watopakAnimations.prefersReducedMotion) {
            gsap.fromTo(messageEl,
                { opacity: 0, y: -10 },
                { opacity: 1, y: 0, duration: 0.3, ease: "power2.out" }
            );
        }
    }

    clearValidationMessage(input) {
        const existingMessage = input.parentNode.querySelector('.validation-message');
        if (existingMessage) {
            existingMessage.remove();
        }
    }

    addValidationFeedback() {
        // Add form submission enhancement
        const forms = document.querySelectorAll('form');

        forms.forEach(form => {
            form.addEventListener('submit', this.onFormSubmit.bind(this));
        });
    }

    onFormSubmit(e) {
        const form = e.target;
        const inputs = form.querySelectorAll('.form-input-enhanced');
        let hasErrors = false;

        inputs.forEach(input => {
            if (!input.checkValidity()) {
                hasErrors = true;
                input.classList.add('error');
                this.showValidationMessage(input, input.validationMessage, 'error');

                // Shake animation for errors
                if (window.watopakAnimations) {
                    window.watopakAnimations.addMicroShake(input);
                }
            }
        });

        if (hasErrors) {
            e.preventDefault();
            // Focus first error field
            const firstError = form.querySelector('.form-input-enhanced.error');
            if (firstError) {
                firstError.focus();
            }
        }
    }
}

// Initialize on DOM ready
document.addEventListener('DOMContentLoaded', function () {
    // Initialize animations system
    window.watopakAnimations = new WatopakAnimations();

    // Initialize form enhancements
    window.watopakFormEnhancements = new WatopakFormEnhancements();

    // Add utility methods to global scope for component access
    window.addMicroBounce = (element) => {
        if (window.watopakAnimations) {
            window.watopakAnimations.addMicroBounce(element);
        }
    };

    window.addMicroShake = (element) => {
        if (window.watopakAnimations) {
            window.watopakAnimations.addMicroShake(element);
        }
    };

    console.log('Watopak Enhanced Animations System initialized successfully');
});

// Handle page transitions and dynamic content
window.addEventListener('beforeunload', function () {
    if (window.watopakAnimations) {
        window.watopakAnimations.destroy();
    }
});

// Refresh animations when content changes (for SPA behavior)
window.addEventListener('watopak:refresh-animations', function () {
    if (window.watopakAnimations) {
        window.watopakAnimations.refresh();
    }
});

// Export for module systems
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { WatopakAnimations, WatopakFormEnhancements };
} 