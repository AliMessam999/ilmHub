// CSS loading optimization
(function() {
    // Polyfill for browsers that don't support preload
    const supportsPreload = function() {
        const link = document.createElement('link');
        const relList = link.relList;
        if (!relList || !relList.supports) return false;
        return relList.supports('preload');
    };

    if (!supportsPreload()) {
        // Fallback: load CSS normally for older browsers
        const links = document.querySelectorAll('link[rel="preload"][as="style"]');
        links.forEach(link => {
            link.rel = 'stylesheet';
        });
    }

    // Load non-critical CSS after page load
    window.addEventListener('load', function() {
        setTimeout(() => {
            const deferredCSS = [
                '{{ url("css/main-thread-optimizations.css") }}'
            ];
            
            deferredCSS.forEach(href => {
                const link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = href;
                document.head.appendChild(link);
            });
        }, 100);
    });
})();