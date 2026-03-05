// GSAP ScrollTrigger Performance Optimizations
(function() {
    'use strict';

    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        return;
    }

    // Optimize ScrollTrigger configuration
    ScrollTrigger.config({
        // Reduce refresh frequency
        autoRefreshEvents: "visibilitychange,DOMContentLoaded,load",
        // Batch updates
        refreshPriority: -1,
        // Reduce precision for better performance
        ignoreMobileResize: true
    });

    // Batch ScrollTrigger updates
    let scrollTriggerBatch = [];
    let batchTimeout;

    function batchScrollTriggerUpdate(fn) {
        scrollTriggerBatch.push(fn);
        
        if (batchTimeout) clearTimeout(batchTimeout);
        
        batchTimeout = setTimeout(() => {
            ScrollTrigger.batch(scrollTriggerBatch, {
                onEnter: (elements) => {
                    elements.forEach(el => {
                        if (el._gsapScrollTrigger) {
                            el._gsapScrollTrigger();
                        }
                    });
                },
                start: "top bottom-=100",
                end: "bottom top+=100",
                refreshPriority: -1
            });
            scrollTriggerBatch = [];
        }, 16);
    }

    // Optimized ScrollTrigger creation
    function createOptimizedScrollTrigger(element, config) {
        const optimizedConfig = {
            ...config,
            // Use transform instead of changing layout properties
            invalidateOnRefresh: false,
            // Reduce update frequency
            refreshPriority: -1,
            // Batch updates
            fastScrollEnd: true,
            // Prevent layout thrashing
            anticipatePin: 1
        };

        return ScrollTrigger.create(optimizedConfig);
    }

    // Optimize existing ScrollTrigger animations
    function optimizeScrollAnimations() {
        // Service stack optimization
        const serviceStack = document.querySelectorAll(".service-stack");
        if (serviceStack.length > 0) {
            ScrollTrigger.matchMedia({
                "(min-width: 992px)": function() {
                    serviceStack.forEach(item => {
                        gsap.set(item, { force3D: true });
                        
                        createOptimizedScrollTrigger(item, {
                            trigger: item,
                            start: "top top",
                            pin: true,
                            pinSpacing: false,
                            onUpdate: self => {
                                const progress = self.progress;
                                gsap.set(item, {
                                    opacity: 1 - progress * 0.1,
                                    scale: 1 - progress * 0.1,
                                    y: progress * 50,
                                    force3D: true
                                });
                            }
                        });
                    });
                }
            });
        }

        // Optimize scroll slider
        const scrollSlider = document.querySelector(".tj-scroll-slider");
        if (scrollSlider?.children?.length) {
            ScrollTrigger.matchMedia({
                "(min-width: 768px)": function() {
                    const panels = gsap.utils.toArray(".tj-scroll-slider-item");
                    
                    gsap.set(panels, { force3D: true });
                    
                    gsap.to(panels, {
                        xPercent: -100 * (panels.length - 1),
                        force3D: true,
                        ease: "none",
                        scrollTrigger: {
                            trigger: scrollSlider,
                            start: "top+=50 top",
                            pin: true,
                            scrub: 0.5, // Reduced from 1
                            end: () => "+=" + scrollSlider.offsetWidth,
                            invalidateOnRefresh: false,
                            refreshPriority: -1
                        }
                    });
                }
            });
        }

        // Optimize progress animations
        const progressItems = document.querySelectorAll(".tj-progress-item");
        if (progressItems.length > 0) {
            const progressWrapper = document.querySelector(".tj-progress-wrapper");
            
            if (progressWrapper) {
                let lastActiveIndex = -1;
                
                ScrollTrigger.create({
                    trigger: progressWrapper,
                    start: "top top",
                    end: "bottom bottom",
                    scrub: 0.5,
                    refreshPriority: -1,
                    onUpdate: self => {
                        const progress = self.progress;
                        const activeIndex = Math.round(progress * (progressItems.length - 1));
                        
                        // Only update if index changed
                        if (activeIndex !== lastActiveIndex) {
                            requestAnimationFrame(() => {
                                progressItems.forEach((item, index) => {
                                    item.classList.toggle("active", index === activeIndex);
                                });
                            });
                            lastActiveIndex = activeIndex;
                        }
                    }
                });
            }
        }
    }

    // Initialize optimizations when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', optimizeScrollAnimations);
    } else {
        optimizeScrollAnimations();
    }

    // Debounced refresh on resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            ScrollTrigger.refresh();
        }, 300);
    });

    // Cleanup on page unload
    window.addEventListener('beforeunload', () => {
        ScrollTrigger.killAll();
    });

})();