// Swiper Performance Optimizations
(function() {
    'use strict';

    if (typeof Swiper === 'undefined') {
        return;
    }

    // Default optimized Swiper configuration
    const optimizedSwiperDefaults = {
        // Performance optimizations
        updateOnWindowResize: false,
        watchOverflow: false,
        watchSlidesProgress: false,
        watchSlidesVisibility: false,
        
        // Reduce DOM queries
        observer: false,
        observeParents: false,
        observeSlideChildren: false,
        
        // GPU acceleration
        cssMode: false,
        
        // Reduce calculations
        roundLengths: true,
        
        // Optimize touch handling
        touchRatio: 1,
        touchAngle: 45,
        
        // Reduce reflows
        preventInteractionOnTransition: true,
        
        // Optimize autoplay
        autoplay: {
            disableOnInteraction: false,
            pauseOnMouseEnter: false
        }
    };

    // Intersection Observer for lazy Swiper initialization
    function createLazySwiperObserver() {
        const swiperElements = document.querySelectorAll('[data-swiper-lazy]');
        
        if (swiperElements.length === 0) return;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.swiper) {
                    const element = entry.target;
                    const config = JSON.parse(element.dataset.swiperConfig || '{}');
                    
                    // Merge with optimized defaults
                    const finalConfig = { ...optimizedSwiperDefaults, ...config };
                    
                    // Initialize Swiper
                    element.swiper = new Swiper(element, finalConfig);
                    
                    // Stop observing this element
                    observer.unobserve(element);
                }
            });
        }, {
            rootMargin: '50px',
            threshold: 0.1
        });
        
        swiperElements.forEach(el => observer.observe(el));
    }

    // Optimized client slider
    function initOptimizedClientSlider() {
        const clientSliders = document.querySelectorAll('.client-slider');
        
        clientSliders.forEach(slider => {
            if (slider.swiper) return; // Already initialized
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const swiper = new Swiper(slider, {
                            ...optimizedSwiperDefaults,
                            slidesPerView: "auto",
                            spaceBetween: 0,
                            freeMode: {
                                enabled: true,
                                sticky: false,
                                momentumBounce: false
                            },
                            centeredSlides: true,
                            loop: true,
                            speed: 3000,
                            allowTouchMove: false,
                            autoplay: {
                                delay: 1,
                                disableOnInteraction: false,
                                reverseDirection: false
                            },
                            // Optimize for continuous scrolling
                            freeModeMomentum: false,
                            freeModeSticky: false
                        });
                        
                        // Pause autoplay when not visible
                        const visibilityObserver = new IntersectionObserver((entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    swiper.autoplay.start();
                                } else {
                                    swiper.autoplay.stop();
                                }
                            });
                        }, { threshold: 0.5 });
                        
                        visibilityObserver.observe(slider);
                        observer.unobserve(slider);
                    }
                });
            }, { rootMargin: '100px' });
            
            observer.observe(slider);
        });
    }

    // Optimized project slider
    function initOptimizedProjectSlider() {
        const projectSliders = document.querySelectorAll('.project-slider');
        
        projectSliders.forEach(slider => {
            if (slider.swiper) return;
            
            const swiper = new Swiper(slider, {
                ...optimizedSwiperDefaults,
                slidesPerView: 3,
                spaceBetween: 30,
                centeredSlides: true,
                loop: true,
                speed: 1200, // Reduced from 1500
                autoplay: {
                    delay: 4000, // Reduced from 6000
                    disableOnInteraction: false
                },
                pagination: {
                    el: ".swiper-pagination-area",
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '"></span>';
                    }
                },
                breakpoints: {
                    0: { slidesPerView: 1.2, spaceBetween: 15 },
                    576: { slidesPerView: 1.7, spaceBetween: 20 },
                    768: { slidesPerView: 2, spaceBetween: 20 },
                    992: { slidesPerView: 2 },
                    1024: { slidesPerView: 2.2 },
                    1400: { slidesPerView: 2.31 }
                }
            });
        });
    }

    // Optimized testimonial slider
    function initOptimizedTestimonialSlider() {
        const testimonialSliders = document.querySelectorAll('.testimonial-slider');
        
        testimonialSliders.forEach(slider => {
            if (slider.swiper) return;
            
            const swiper = new Swiper(slider, {
                ...optimizedSwiperDefaults,
                slidesPerView: 3,
                spaceBetween: 28,
                centeredSlides: true,
                loop: true,
                speed: 1200,
                autoplay: {
                    delay: 2500, // Reduced from 3000
                    disableOnInteraction: false
                },
                navigation: {
                    nextEl: ".slider-next",
                    prevEl: ".slider-prev"
                },
                pagination: {
                    el: ".swiper-pagination-area",
                    clickable: true
                },
                breakpoints: {
                    0: { slidesPerView: 1.2, spaceBetween: 15, centeredSlides: false },
                    576: { slidesPerView: 1.3, spaceBetween: 20, centeredSlides: false },
                    768: { slidesPerView: 1.4, spaceBetween: 20, centeredSlides: false },
                    992: { slidesPerView: 3 },
                    1200: { slidesPerView: 3 }
                }
            });
        });
    }

    // Batch initialize all optimized sliders
    function initAllOptimizedSliders() {
        requestAnimationFrame(() => {
            initOptimizedClientSlider();
            initOptimizedProjectSlider();
            initOptimizedTestimonialSlider();
            createLazySwiperObserver();
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAllOptimizedSliders);
    } else {
        initAllOptimizedSliders();
    }

    // Cleanup on page unload
    window.addEventListener('beforeunload', () => {
        document.querySelectorAll('.swiper-container').forEach(slider => {
            if (slider.swiper) {
                slider.swiper.destroy(true, true);
            }
        });
    });

})();