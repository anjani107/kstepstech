@extends('layouts.app')

@section('title', 'ksteps Tech — Smart Business Management Software')

@section('content')

{{-- ═══════════════════════════════════════════
     HERO
═══════════════════════════════════════════ --}}
<section class="hero">
    <div class="container">
        <div class="hero__grid">

            {{-- Left --}}
            <div>
                <div class="hero__badge">India's #1 Business Software Suite</div>

                <h1 class="hero__title">
                    Powerful Software for<br>
                    <span>Growing Businesses</span>
                </h1>

                <p class="hero__sub">
                    ksteps Tech delivers ready-to-deploy management systems for schools,
                    clinics, real estate firms, and marketing teams — set up in days, not months.
                </p>

                <div class="hero__actions">
                    <a href="{{ route('products') }}" class="btn btn--gold">Explore Products →</a>
                    <a href="{{ route('contact') }}" class="btn btn--outline">Book a Free Demo</a>
                </div>

                <div class="hero__features">
                    <div class="hero__feat"><div class="hero__feat-dot"></div> Fast Setup</div>
                    <div class="hero__feat"><div class="hero__feat-dot"></div> 99.9% Uptime</div>
                    <div class="hero__feat"><div class="hero__feat-dot"></div> 24/7 Support</div>
                    <div class="hero__feat"><div class="hero__feat-dot"></div> WhatsApp Help</div>
                </div>
            </div>

            {{-- Right card --}}
            <div class="hero__card reveal">
                <p class="hero__card-title">Our Products at a Glance</p>

                <div class="hero__stat-grid">
                    <div class="hero__stat">
                        <div class="hero__stat-num">500+</div>
                        <div class="hero__stat-label">Businesses Served</div>
                    </div>
                    <div class="hero__stat">
                        <div class="hero__stat-num">4</div>
                        <div class="hero__stat-label">Core Products</div>
                    </div>
                    <div class="hero__stat">
                        <div class="hero__stat-num">99.9%</div>
                        <div class="hero__stat-label">Uptime SLA</div>
                    </div>
                    <div class="hero__stat">
                        <div class="hero__stat-num">24/7</div>
                        <div class="hero__stat-label">Support</div>
                    </div>
                </div>

                <div class="hero__products">
                    <div class="hero__product-item">
                        <div class="hero__product-icon" style="background:#e8f4fd;">🎓</div>
                        Classes Management System
                    </div>
                    <div class="hero__product-item">
                        <div class="hero__product-icon" style="background:#e8f8f0;">🏥</div>
                        Clinic Management System
                    </div>
                    <div class="hero__product-item">
                        <div class="hero__product-icon" style="background:#fef3e2;">🏠</div>
                        Real Estate Management System
                    </div>
                    <div class="hero__product-item">
                        <div class="hero__product-icon" style="background:#e8fdf0;">💬</div>
                        WhatsApp Marketing System
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     MARQUEE
═══════════════════════════════════════════ --}}
<div class="marquee" aria-hidden="true">
    <div class="marquee__track">
        <span>Classes Management</span>
        <span>Clinic Management</span>
        <span>Real Estate CRM</span>
        <span>WhatsApp Marketing</span>
        <span>Fast Deployment</span>
        <span>24/7 Support</span>
        <span>Data Migration</span>
        <span>Staff Training</span>
        <span>Classes Management</span>
        <span>Clinic Management</span>
        <span>Real Estate CRM</span>
        <span>WhatsApp Marketing</span>
        <span>Fast Deployment</span>
        <span>24/7 Support</span>
        <span>Data Migration</span>
        <span>Staff Training</span>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     PRODUCTS PREVIEW
═══════════════════════════════════════════ --}}
<section class="section section--light">
    <div class="container">

        <div class="section__head reveal">
            <p class="section__eyebrow">Our Products</p>
            <h2 class="section__title">Four Systems. <span>Endless Possibilities.</span></h2>
            <p class="section__sub">
                Each product is purpose-built for its industry — no bloat, no workarounds.
                Just the features your team actually needs, working from day one.
            </p>
        </div>

        <div class="prod-grid reveal">

            {{-- Classes --}}
            <div class="prod-card prod-card--edu">
                <div class="prod-card__head">
                    <div class="prod-card__icon-row">
                        <div class="prod-card__icon">🎓</div>
                    </div>
                    <div class="prod-card__cat">Education Software</div>
                    <h3 class="prod-card__name">Classes Management System</h3>
                    <p class="prod-card__desc">End-to-end platform for schools and coaching centres — from enrollment to exam results.</p>
                </div>
                <div class="prod-card__body">
                    <ul class="prod-card__features">
                        <li>Student enrollment &amp; profiles</li>
                        <li>Attendance tracking</li>
                        <li>Fee collection &amp; invoicing</li>
                        <li>Exam &amp; result management</li>
                        <li>Parent communication</li>
                        <li>Timetable management</li>
                    </ul>
                    <div class="prod-card__footer">
                        <div>
                            <!-- <div class="prod-card__price">₹12,999 <sub>one-time</sub></div>
                            <div class="prod-card__old">₹18,999</div> -->
                        </div>
                        <a href="https://wa.me/918693829219?text={{ urlencode('Hi! I want to know about Classes Management System') }}"
                           target="_blank" rel="noopener" class="btn btn--primary">Enquire →</a>
                    </div>
                </div>
            </div>

            {{-- Clinic --}}
            <div class="prod-card prod-card--health">
                <div class="prod-card__head">
                    <div class="prod-card__icon-row">
                        <div class="prod-card__icon">🏥</div>
                    </div>
                    <div class="prod-card__cat">Healthcare Software</div>
                    <h3 class="prod-card__name">Clinic Management System</h3>
                    <p class="prod-card__desc">Complete healthcare workflow — patient registration to prescriptions and billing.</p>
                </div>
                <div class="prod-card__body">
                    <ul class="prod-card__features">
                        <li>Patient records &amp; history</li>
                        <li>Appointment scheduling</li>
                        <li>Doctor &amp; staff management</li>
                        <li>Prescription generation</li>
                        <li>Lab reports &amp; results</li>
                        <li>Billing &amp; insurance</li>
                    </ul>
                    <div class="prod-card__footer">
                        <!-- <div>
                            <div class="prod-card__price">₹9,999 <sub>one-time</sub></div>
                        </div> -->
                        <a href="https://wa.me/918693829219?text={{ urlencode('Hi! I want to know about Clinic Management System') }}"
                           target="_blank" rel="noopener" class="btn btn--primary">Enquire →</a>
                    </div>
                </div>
            </div>

            {{-- Real Estate --}}
            <div class="prod-card prod-card--realty">
                <div class="prod-card__head">
                    <div class="prod-card__icon-row">
                        <div class="prod-card__icon">🏠</div>
                    </div>
                    <div class="prod-card__cat">Property Software</div>
                    <h3 class="prod-card__name">Real Estate Management System</h3>
                    <p class="prod-card__desc">Powerful CRM for dealers and builders — manage listings, leads, and close deals faster.</p>
                </div>
                <div class="prod-card__body">
                    <ul class="prod-card__features">
                        <li>Property listings &amp; search</li>
                        <li>Lead capture &amp; CRM</li>
                        <li>Deal pipeline management</li>
                        <li>Commission calculation</li>
                        <li>Document management</li>
                        <li>Sales reports &amp; insights</li>
                    </ul>
                    <div class="prod-card__footer">
                        <!-- <div>
                            <div class="prod-card__price">₹14,999 <sub>one-time</sub></div>
                            <div class="prod-card__old">₹20,999</div>
                        </div> -->
                        <a href="https://wa.me/918693829219?text={{ urlencode('Hi! I want to know about Real Estate Management System') }}"
                           target="_blank" rel="noopener" class="btn btn--primary">Enquire →</a>
                    </div>
                </div>
            </div>

            {{-- WhatsApp --}}
            <div class="prod-card prod-card--wa">
                <div class="prod-card__head">
                    <div class="prod-card__icon-row">
                        <div class="prod-card__icon">💬</div>
                        <span class="prod-card__badge">Most Popular</span>
                    </div>
                    <div class="prod-card__cat">Marketing Software</div>
                    <h3 class="prod-card__name">WhatsApp Marketing System</h3>
                    <p class="prod-card__desc">Send targeted campaigns at scale — with smart segmentation and real-time analytics.</p>
                </div>
                <div class="prod-card__body">
                    <ul class="prod-card__features">
                        <li>Bulk message broadcasting</li>
                        <li>Contact list management</li>
                        <li>Campaign scheduling</li>
                        <li>Template library</li>
                        <li>Delivery &amp; read analytics</li>
                        <li>Auto-reply bots</li>
                    </ul>
                    <div class="prod-card__footer">
                        <!-- <div>
                            <div class="prod-card__price">₹7,999 <sub>one-time</sub></div>
                        </div> -->
                        <a href="https://wa.me/918693829219?text={{ urlencode('Hi! I want to know about WhatsApp Marketing System') }}"
                           target="_blank" rel="noopener" class="btn btn--primary">Enquire →</a>
                    </div>
                </div>
            </div>

        </div>

        <div style="text-align:center; margin-top:44px;">
            <a href="{{ route('products') }}" class="btn btn--dark">View All Products →</a>
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════
     WHY KSTEPS
═══════════════════════════════════════════ --}}
<section class="section">
    <div class="container">

        <div class="section__head reveal">
            <p class="section__eyebrow">Why ksteps Tech</p>
            <h2 class="section__title">Built for the <span>Real World</span></h2>
            <p class="section__sub">
                We don't build generic software and hope it fits. Every ksteps Tech product is designed
                around how your industry actually works — so your team is productive from day one.
            </p>
        </div>

        <div class="feat-grid reveal">

            <div class="feat-card">
                <div class="feat-card__icon">⚡</div>
                <h3 class="feat-card__title">Fast Deployment</h3>
                <p class="feat-card__desc">Get up and running in days, not months. We handle setup, data migration, and staff training end-to-end — so you don't have to.</p>
            </div>

            <div class="feat-card">
                <div class="feat-card__icon">🔒</div>
                <h3 class="feat-card__title">Secure &amp; Reliable</h3>
                <p class="feat-card__desc">Enterprise-grade security, daily automated backups, and a 99.9% uptime SLA — your business data is always protected and available.</p>
            </div>

            <div class="feat-card">
                <div class="feat-card__icon">🤝</div>
                <h3 class="feat-card__title">Real Human Support</h3>
                <p class="feat-card__desc">Dedicated 24/7 support via WhatsApp, phone, and email — real people who know your system inside out. No bots, no ticket queues.</p>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     SERVICES TABS
═══════════════════════════════════════════ --}}
<section class="section section--light">
    <div class="container">

        <div class="section__head reveal">
            <p class="section__eyebrow">Our Services</p>
            <h2 class="section__title">We Do More Than <span>Sell Software</span></h2>
            <p class="section__sub">
                From setup to ongoing support — our team handles everything so you can focus on running your business, not managing technology.
            </p>
        </div>

        <div class="tabs reveal">
            <div class="tabs__nav">
                <button class="tabs__btn is-active" data-tab="tab-impl">Implementation</button>
                <button class="tabs__btn" data-tab="tab-train">Staff Training</button>
                <button class="tabs__btn" data-tab="tab-migrate">Data Migration</button>
                <button class="tabs__btn" data-tab="tab-support">24/7 Support</button>
                <button class="tabs__btn" data-tab="tab-custom">Custom Development</button>
            </div>

            <div class="tabs__panels">

                <div class="tabs__panel is-active" id="tab-impl">
                    <div>
                        <p class="tabs__content-eyebrow">Service 01</p>
                        <h3 class="tabs__content-title">Implementation &amp; Setup</h3>
                        <p class="tabs__content-desc">Complete deployment of your chosen system — configured to your workflows, data, and team structure. We go live with you, not just hand over a login.</p>
                        <ul class="tabs__feature-list">
                            <li>Cloud or on-premise server setup</li>
                            <li>Custom configuration for your workflows</li>
                            <li>User accounts and role permissions</li>
                            <li>Go-live support and monitoring</li>
                            <li>Post-launch bug fixing included</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn--primary">Get Started →</a>
                    </div>
                    <div class="tabs__visual">
                        <div class="tabs__visual-icon">🛠️</div>
                        <p class="tabs__visual-text">Ready in 7 Days</p>
                        <p class="tabs__visual-sub">Average deployment time for any KSteps product</p>
                    </div>
                </div>

                <div class="tabs__panel" id="tab-train">
                    <div>
                        <p class="tabs__content-eyebrow">Service 02</p>
                        <h3 class="tabs__content-title">Staff Training</h3>
                        <p class="tabs__content-desc">Hands-on training sessions for your entire team — online or on-site — so everyone is confident and productive from day one.</p>
                        <ul class="tabs__feature-list">
                            <li>Role-based training sessions</li>
                            <li>Live walkthrough with Q&amp;A</li>
                            <li>Video tutorial library access</li>
                            <li>Printed training manual</li>
                            <li>Refresher sessions as needed</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn--primary">Book Training →</a>
                    </div>
                    <div class="tabs__visual">
                        <div class="tabs__visual-icon">📚</div>
                        <p class="tabs__visual-text">Your Team, Confident</p>
                        <p class="tabs__visual-sub">All staff trained before go-live, guaranteed</p>
                    </div>
                </div>

                <div class="tabs__panel" id="tab-migrate">
                    <div>
                        <p class="tabs__content-eyebrow">Service 03</p>
                        <h3 class="tabs__content-title">Data Migration</h3>
                        <p class="tabs__content-desc">We safely migrate all your existing data from spreadsheets, legacy systems, or other software — zero data loss, zero downtime.</p>
                        <ul class="tabs__feature-list">
                            <li>Excel / CSV / Google Sheets import</li>
                            <li>Legacy software migration</li>
                            <li>Data cleaning and mapping</li>
                            <li>Full data verification report</li>
                            <li>Rollback option included</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn--primary">Migrate My Data →</a>
                    </div>
                    <div class="tabs__visual">
                        <div class="tabs__visual-icon">🔄</div>
                        <p class="tabs__visual-text">Zero Data Loss</p>
                        <p class="tabs__visual-sub">Every record migrated, verified, and confirmed</p>
                    </div>
                </div>

                <div class="tabs__panel" id="tab-support">
                    <div>
                        <p class="tabs__content-eyebrow">Service 04</p>
                        <h3 class="tabs__content-title">24/7 Support</h3>
                        <p class="tabs__content-desc">Dedicated support via WhatsApp, phone, and email — real humans who know your system inside out. No bots, no long wait times.</p>
                        <ul class="tabs__feature-list">
                            <li>WhatsApp helpdesk (instant replies)</li>
                            <li>Phone and email support</li>
                            <li>Remote desktop assistance</li>
                            <li>Priority bug fixes</li>
                            <li>Monthly software updates</li>
                        </ul>
                        <a href="https://wa.me/918693829219?text={{ urlencode('Hi ksteps Tech! I need support.') }}"
                           target="_blank" rel="noopener" class="btn btn--primary">Chat Now →</a>
                    </div>
                    <div class="tabs__visual">
                        <div class="tabs__visual-icon">🎧</div>
                        <p class="tabs__visual-text">Always Available</p>
                        <p class="tabs__visual-sub">Average response time under 10 minutes</p>
                    </div>
                </div>

                <div class="tabs__panel" id="tab-custom">
                    <div>
                        <p class="tabs__content-eyebrow">Service 05</p>
                        <h3 class="tabs__content-title">Custom Development</h3>
                        <p class="tabs__content-desc">Need a feature built specifically for your business? Our team handles custom modules, integrations, and extensions on top of any KSteps product.</p>
                        <ul class="tabs__feature-list">
                            <li>Custom module development</li>
                            <li>Third-party API integration</li>
                            <li>Payment gateway integration</li>
                            <li>White-label options available</li>
                            <li>Scalable architecture</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn--primary">Request a Quote →</a>
                    </div>
                    <div class="tabs__visual">
                        <div class="tabs__visual-icon">⚙️</div>
                        <p class="tabs__visual-text">Built for You</p>
                        <p class="tabs__visual-sub">Custom features scoped and quoted in 24 hours</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════
     STATS BAR
═══════════════════════════════════════════ --}}
<div class="stats-bar">
    <div class="container">
        <div class="stats-grid reveal">
            <div class="stat-item">
                <div class="stat-item__num">500+</div>
                <div class="stat-item__label">Businesses Served</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__num">4</div>
                <div class="stat-item__label">Core Products</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__num">99.9%</div>
                <div class="stat-item__label">Uptime SLA</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__num">24/7</div>
                <div class="stat-item__label">Customer Support</div>
            </div>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════ --}}
<section class="section">
    <div class="container">

        <div class="section__head reveal">
            <p class="section__eyebrow">Client Reviews</p>
            <h2 class="section__title">What Our <span>Clients Say</span></h2>
            <p class="section__sub">
                Businesses across India trust ksteps Tech to run their operations every day.
            </p>
        </div>

        <div class="testi-grid reveal">

            <div class="testi-card">
                <div class="testi-card__stars">★★★★★</div>
                <p class="testi-card__text">The Classes Management System completely transformed how we run our coaching centre. Fee collection, attendance, and results — all in one place. The team set it up in less than a week!</p>
                <div class="testi-card__author">
                    <div class="testi-card__avatar">R</div>
                    <div>
                        <div class="testi-card__name">Rajesh Sharma</div>
                        <div class="testi-card__company">Director, Bright Future Academy</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-card__stars">★★★★★</div>
                <p class="testi-card__text">We switched from paper registers to the Clinic Management System and the difference is incredible. Patient history, prescriptions, billing — everything is instant. Support team is always available on WhatsApp.</p>
                <div class="testi-card__author">
                    <div class="testi-card__avatar">P</div>
                    <div>
                        <div class="testi-card__name">Dr. Priya Mehta</div>
                        <div class="testi-card__company">Owner, Mehta Multispeciality Clinic</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-card__stars">★★★★★</div>
                <p class="testi-card__text">The WhatsApp Marketing System helped us reach 5,000 customers in one click. Campaign analytics are brilliant — we can see who read the message and who responded. ROI is excellent.</p>
                <div class="testi-card__author">
                    <div class="testi-card__avatar">A</div>
                    <div>
                        <div class="testi-card__name">Amit Patel</div>
                        <div class="testi-card__company">CEO, Patel Real Estate Group</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     CTA
═══════════════════════════════════════════ --}}
<section class="cta-section">
    <div class="container">
        <h2 class="cta-section__title">
            Ready to <span>Transform</span> Your Business?
        </h2>
        <p class="cta-section__sub">
            Join 500+ businesses across India already running on ksteps Tech.
            Book a free demo today — no commitment, no credit card.
        </p>
        <div class="cta-section__actions">
            <a href="{{ route('contact') }}" class="btn btn--gold">Book a Free Demo →</a>
            <a href="https://wa.me/918693829219?text={{ urlencode('Hi ksteps Tech! I want to book a free demo.') }}"
               target="_blank" rel="noopener" class="btn btn--outline">
                <svg viewBox="0 0 24 24" fill="currentColor" style="width:16px;height:16px"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Chat on WhatsApp
            </a>
            <a href="{{ route('products') }}" class="btn btn--outline">View All Products</a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     CONNECT STRIP
═══════════════════════════════════════════ --}}
@include('partials.social-strip')

@endsection
