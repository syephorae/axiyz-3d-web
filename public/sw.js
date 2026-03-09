self.addEventListener('install', event => {
    console.log('Service Worker installed');
    event.waitUntil(
        caches.open('axiyz-cache-v1').then(cache => {
            return cache.addAll([
                '/',
                '/about',
                '/gallery',
                '/services',
                '/contact',
                '/manifest.json'
            ]);
        })
    );
});

self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request).then(response => {
            return response || fetch(event.request);
        }).catch(() => {
            return caches.match('/');
        })
    );
});
