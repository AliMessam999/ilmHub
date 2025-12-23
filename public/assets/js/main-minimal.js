// Minimal main thread optimization
(function() {
    'use strict';
    
    // Critical functionality only
    const critical = {
        // Essential navigation
        nav: function() {
            const toggle = document.querySelector('.navbar-toggler');
            const collapse = document.querySelector('.navbar-collapse');
            if (toggle && collapse) {
                toggle.addEventListener('click', () => {
                    collapse.classList.toggle('show');
                });
            }
        },
        
        // Essential scroll behavior
        scroll: function() {
            let ticking = false;
            const header = document.querySelector('.navbar');
            
            function updateHeader() {
                if (window.scrollY > 100) {
                    header?.classList.add('scrolled');
                } else {
                    header?.classList.remove('scrolled');
                }
                ticking = false;
            }
            
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    requestAnimationFrame(updateHeader);
                    ticking = true;
                }
            });
        }
    };
    
    // Initialize critical features immediately
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            critical.nav();
            critical.scroll();
        });
    } else {
        critical.nav();
        critical.scroll();
    }
    
    // Lazy load non-critical features
    setTimeout(() => {
        // Load heavy features after initial render
        if (typeof Swiper !== 'undefined') {
            // Initialize sliders
            document.querySelectorAll('.swiper').forEach(el => {
                if (!el.swiper) {
                    new Swiper(el, {
                        loop: true,
                        autoplay: { delay: 5000 }
                    });
                }
            });
        }
    }, 100);
    
})();