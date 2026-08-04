<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ksteps Tech ') — Smart Systems for Modern Businesses</title>
    <meta name="description" content="@yield('description', 'ksteps Tech  builds powerful management systems for schools, clinics, real estate firms, and marketing teams.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    @yield('head')
</head>
<body class="page-{{ Route::currentRouteName() ?? 'home' }}">

    <!-- Announcement bar -->
    <div class="topbar">
        <div class="container topbar__inner">
            <span>WhatsApp Marketing System v2.0 now live</span>
            <span class="topbar__dot">●</span>
            <span>Limited offer: <strong>30% off</strong> implementation fees this month</span>
            <span class="topbar__dot">●</span>
            <span>Call us: <strong>+91 86938 29219</strong></span>
        </div>
    </div>

    <!-- Navigation -->
    <header class="nav">
        <div class="container nav__inner">
            <a href="{{ route('home') }}" class="logo">
                <span class="logo__mark">K</span>
                <div>
                    <span class="logo__text">StepsTech</span>
                    <span class="logo__sub">Smart · Reliable · Affordable</span>
                </div>
            </a>

            <nav class="nav__links" id="navLinks">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'is-active' : '' }}">Services</a>
                <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'is-active' : '' }}">Products</a>
                <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'is-active' : '' }}">Portfolio</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'is-active' : '' }}">About Us</a>
                <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') || request()->routeIs('blog.show') ? 'is-active' : '' }}">Blog</a>
                <a href="{{ route('careers') }}" class="{{ request()->routeIs('careers') ? 'is-active' : '' }}">Careers</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'is-active' : '' }}">Contact</a>
            </nav>

            <div class="nav__right">
                <div class="nav__phone">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                    +91 86938 29219
                </div>
                <div class="nav__cta">
                    <a href="{{ route('contact') }}" class="btn btn--gold">Book a Demo</a>
                    <button class="nav__toggle" aria-label="Toggle menu" id="navToggle">
                        <span></span><span></span><span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Page content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__grid">

                <div class="footer__brand">
                    <div class="footer__logo">ksteps Tech </div>
                    <p>We build powerful, affordable management software for schools, clinics, real estate firms, and marketing teams — deployed and supported by a team that stays with you.</p>
                    <form class="newsletter" onsubmit="event.preventDefault(); this.querySelector('button').textContent='Done ✓';">
                        <input type="email" placeholder="Get product updates…" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>

                <div class="footer__col">
                    <h4>Products</h4>
                    <a href="{{ route('products') }}">Classes Management</a>
                    <a href="{{ route('products') }}">Clinic Management</a>
                    <a href="{{ route('products') }}">Real Estate System</a>
                    <a href="{{ route('products') }}">WhatsApp Marketing</a>
                </div>

                <div class="footer__col">
                    <h4>Company</h4>
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('services') }}">Services</a>
                    <a href="{{ route('portfolio') }}">Portfolio</a>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('blog') }}">Blog</a>
                    <a href="{{ route('careers') }}">Careers</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>

                <div class="footer__col">
                    <h4>Contact</h4>
                    <div class="footer__contact-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                        <span>+91 86938 29219</span>
                    </div>
                    <div class="footer__contact-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <span>support@kstepstech.com</span>
                    </div>
                    <div class="footer__contact-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>Mon–Sat · 9:00–19:00 IST</span>
                    </div>
                    <div class="footer__social">
                        <a href="https://instagram.com/kstepssoftware" target="_blank" rel="noopener" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor"/></svg>
                        </a>
                        <a href="https://youtube.com/@kstepssoftware" target="_blank" rel="noopener" aria-label="YouTube">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2.5" y="5.5" width="19" height="13" rx="3"/><path d="M10 9.5v5l5-2.5z" fill="currentColor"/></svg>
                        </a>
                        <a href="https://wa.me/918693829219" target="_blank" rel="noopener" aria-label="WhatsApp">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3.5 20.5l1.4-4.6A8.5 8.5 0 1 1 8.7 19.6L3.5 20.5z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <span>© {{ date('Y') }} ksteps Tech . All rights reserved. Built in India.</span>
            <span>+91 86938 29219 &nbsp;·&nbsp; hello@kstepssoftware.com</span>
        </div>
    </footer>

    <!-- Floating WhatsApp button -->
    <a href="https://wa.me/918693829219?text=Hi%20KSteps%20Software%2C%20I%27d%20like%20to%20know%20more"
       target="_blank" rel="noopener"
       class="float-wa" aria-label="Chat on WhatsApp">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>

    <script>
        const t = document.getElementById('navToggle');
        const l = document.getElementById('navLinks');
        if (t) t.addEventListener('click', () => l.classList.toggle('is-open'));

        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        function animateCount(el) {
            const target = parseFloat(el.dataset.count);
            const decimals = parseInt(el.dataset.decimals || '0', 10);
            const suffix = el.dataset.suffix || '';
            if (prefersReducedMotion || isNaN(target)) { el.textContent = target.toFixed(decimals) + suffix; return; }
            const duration = 1200;
            const start = performance.now();
            function tick(now) {
                const p = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - p, 3);
                el.textContent = (target * eased).toFixed(decimals) + suffix;
                if (p < 1) requestAnimationFrame(tick);
            }
            requestAnimationFrame(tick);
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('is-visible');
                    e.target.querySelectorAll('[data-count]').forEach(animateCount);
                    observer.unobserve(e.target);
                }
            });
        }, { threshold: 0.12 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Tabs
        document.querySelectorAll('.tabs__btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const tabs = btn.closest('.tabs');
                tabs.querySelectorAll('.tabs__btn').forEach(b => b.classList.remove('is-active'));
                tabs.querySelectorAll('.tabs__panel').forEach(p => p.classList.remove('is-active'));
                btn.classList.add('is-active');
                tabs.querySelector('#' + btn.dataset.tab).classList.add('is-active');
            });
        });
    </script>

    @yield('scripts')
</body>
</html>
