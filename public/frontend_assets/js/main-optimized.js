// Performance optimized main.js - reduces forced reflows
(function ($) {
    "use strict";

    // Batch DOM operations to prevent forced reflows
    let pendingUpdates = [];
    let isUpdateScheduled = false;

    function batchUpdate(fn) {
        pendingUpdates.push(fn);
        if (!isUpdateScheduled) {
            isUpdateScheduled = true;
            requestAnimationFrame(() => {
                pendingUpdates.forEach(fn => fn());
                pendingUpdates = [];
                isUpdateScheduled = false;
            });
        }
    }

    // Optimized scroll handler with throttling
    let scrollTimeout;
    function throttledScroll(callback, delay = 16) {
        return function() {
            if (scrollTimeout) return;
            scrollTimeout = setTimeout(() => {
                callback.apply(this, arguments);
                scrollTimeout = null;
            }, delay);
        };
    }

    // Cache DOM elements to avoid repeated queries
    const domCache = {
        window: $(window),
        body: $('body'),
        header: $('.header-area'),
        backToTop: $('#tj-back-to-top')
    };

    // Optimized sticky menu with cached values
    let lastScrollTop = 0;
    let headerHeight = 0;
    
    function stickyMenu($targetMenu, $toggleClass) {
        const st = domCache.window.scrollTop();
        
        batchUpdate(() => {
            if (st > 500) {
                if (st > lastScrollTop) {
                    $targetMenu.removeClass($toggleClass);
                } else {
                    $targetMenu.addClass($toggleClass);
                }
            } else {
                $targetMenu.removeClass($toggleClass);
            }
            lastScrollTop = st;
        });
    }

    // Optimized scroll event handler
    domCache.window.on("scroll", throttledScroll(function() {
        if (domCache.header.length) {
            stickyMenu($(".header-sticky"), "sticky");
        }
        
        // Optimized back to top functionality
        if (domCache.backToTop.length) {
            const scrollTop = document.documentElement.scrollTop;
            const calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrollValue = Math.round((scrollTop / calcHeight) * 100);
            
            batchUpdate(() => {
                domCache.backToTop.css(
                    "background",
                    `conic-gradient(var(--tj-color-theme-primary) ${scrollValue}%, var(--tj-color-common-white) ${scrollValue}%)`
                );
                
                if (scrollTop > 100) {
                    domCache.backToTop.addClass("active");
                } else {
                    domCache.backToTop.removeClass("active");
                }
            });
        }
    }));

    // Optimized GSAP ScrollTrigger configuration
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);
        
        // Reduce ScrollTrigger refresh rate
        ScrollTrigger.config({
            autoRefreshEvents: "visibilitychange,DOMContentLoaded,load,resize",
            refreshPriority: -1
        });

        // Optimized ScrollSmoother
        if ($("#smooth-wrapper").length && $("#smooth-content").length) {
            gsap.config({
                nullTargetWarn: false,
                force3D: true
            });

            ScrollSmoother.create({
                smooth: 1.2, // Reduced from 1.5
                effects: true,
                smoothTouch: 0.1,
                ignoreMobileResize: true,
                normalizeScroll: true
            });
        }
    }

    // Optimized Swiper initialization with intersection observer
    function initOptimizedSwiper(selector, config) {
        const elements = document.querySelectorAll(selector);
        
        elements.forEach(element => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !element.swiper) {
                        element.swiper = new Swiper(element, config);
                    }
                });
            }, { rootMargin: '50px' });
            
            observer.observe(element);
        });
    }

    // Optimized client slider with lazy initialization
    document.addEventListener("DOMContentLoaded", function () {
        if ($(".client-slider").length > 0) {
            initOptimizedSwiper(".client-slider", {
                slidesPerView: "auto",
                spaceBetween: 0,
                freemode: true,
                centeredSlides: true,
                loop: true,
                speed: 3000, // Reduced from 5000
                allowTouchMove: false,
                autoplay: {
                    delay: 1,
                    disableOnInteraction: false,
                },
                observer: true,
                observeParents: true
            });
        }
    });

    // Optimized progress bar controller
    const progressBarController = () => {
        const progressContainers = document.querySelectorAll(".tj-progress");
        
        if (progressContainers?.length) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const progressContainer = entry.target;
                        const targetedProgressBar = progressContainer.querySelector(".tj-progress-bar");
                        const completedPercent = parseInt(targetedProgressBar.getAttribute("data-percent")) || 0;
                        
                        batchUpdate(() => {
                            targetedProgressBar.style.transition = "width 1.5s ease-out";
                            targetedProgressBar.style.width = `${completedPercent}%`;
                        });
                        
                        observer.unobserve(progressContainer);
                    }
                });
            }, { threshold: 0.3 });
            
            progressContainers.forEach(container => observer.observe(container));
        }
    };

    // Initialize optimized components
    $(window).on("load", function () {
        const tjPreloader = $(".tj-preloader");
        if (tjPreloader?.length) {
            setTimeout(() => {
                tjPreloader.removeClass("is-loading").addClass("is-loaded");
                setTimeout(() => {
                    tjPreloader.fadeOut(400);
                    progressBarController();
                }, 500);
            }, 1500); // Reduced from 2000
        } else {
            progressBarController();
        }
    });

    // Optimized resize handler
    let resizeTimeout;
    domCache.window.on('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            if (typeof ScrollTrigger !== 'undefined') {
                ScrollTrigger.refresh();
            }
        }, 250);
    });

})(jQuery);