@extends('layouts.app')

@section('title', 'About — ksteps Tech')
@section('description', 'The story, mission, and values behind ksteps Tech.')

@section('content')

{{-- PAGE HERO --}}
<section class="hero" style="padding: 70px 0 60px;">
    <div class="container">
        <p class="hero__eyebrow">About Us</p>
        <h1 class="hero__title">We Build Software That<br><em>Solves Real Problems</em>.</h1>
        <p class="hero__sub">Founded in 2021, ksteps Tech started with one mission — make powerful management software accessible to every Indian business, regardless of size.</p>
    </div>
</section>

{{-- STORY --}}
<section class="section section--light" style="padding-top:60px;">
    <div class="container">
        <div class="about-grid reveal">
            <div class="about__big">
                Founded in <strong>2021</strong>, ksteps Tech started with a single mission — make powerful management software accessible to every Indian business, regardless of size.
            </div>
            <div class="about__body">
                <p>We saw businesses managing students on paper, clinics losing patient records, real estate agents juggling leads in WhatsApp chats — and we knew there had to be a better way.</p>
                <p>Today, ksteps Tech powers over 500 businesses across India with four core products: a Classes Management System, Clinic Management System, Real Estate Management System, and WhatsApp Marketing System.</p>
                <p>Every product is built in India, for India — with the workflows, languages, and payment methods your business actually uses.</p>
                <div style="margin-top:24px; display:flex; gap:12px; flex-wrap:wrap;">
                    <a href="{{ route('products') }}" class="btn btn--primary">View Our Products →</a>
                    <a href="{{ route('contact') }}" class="btn btn--ghost">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- STATS --}}
<div class="stats-bar">
    <div class="container">
        <div class="stats-grid reveal">
            <div class="stat-item">
                <div class="stat-item__num">2021</div>
                <div class="stat-item__label">Year Founded</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__num">500+</div>
                <div class="stat-item__label">Businesses Served</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__num">4</div>
                <div class="stat-item__label">Core Products</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__num">24/7</div>
                <div class="stat-item__label">Support</div>
            </div>
        </div>
    </div>
</div>

{{-- VALUES --}}
<section class="section">
    <div class="container">
        <div class="section__head reveal">
            <p class="section__eyebrow">What We Stand For</p>
            <h2 class="section__title">Three Things We <span>Won't Compromise</span> On</h2>
            <p class="section__sub">Every product decision, every support ticket, every feature — it passes through these three filters first.</p>
        </div>
        <div class="feat-grid reveal">
            <div class="feat-card">
                <div class="feat-card__icon">💡</div>
                <h3 class="feat-card__title">Simplicity First</h3>
                <p class="feat-card__desc">Powerful software doesn't have to be complicated. We strip away every feature your team doesn't need — leaving only what matters.</p>
            </div>
            <div class="feat-card">
                <div class="feat-card__icon">🔒</div>
                <h3 class="feat-card__title">Reliability Always</h3>
                <p class="feat-card__desc">Your business can't afford downtime. We maintain a 99.9% uptime SLA, daily automated backups, and proactive monitoring.</p>
            </div>
            <div class="feat-card">
                <div class="feat-card__icon">🤝</div>
                <h3 class="feat-card__title">Human Support</h3>
                <p class="feat-card__desc">No ticket queues, no bots. A real person answers your WhatsApp message — usually within minutes, day or night.</p>
            </div>
        </div>
    </div>
</section>

{{-- TIMELINE --}}
<section class="section section--light">
    <div class="container">
        <div class="section__head reveal">
            <p class="section__eyebrow">Our Journey</p>
            <h2 class="section__title">A Short <span>Timeline</span></h2>
        </div>
        <ul class="timeline reveal">
            <li>
                <div class="timeline__year">2021</div>
                <div class="timeline__title">ksteps Tech Founded</div>
                <div class="timeline__desc">Started with a small team and one product — the Classes Management System.</div>
            </li>
            <li>
                <div class="timeline__year">2022</div>
                <div class="timeline__title">Clinic Management System Launched</div>
                <div class="timeline__desc">Expanded into healthcare, onboarding 50+ clinics in the first quarter.</div>
            </li>
            <li>
                <div class="timeline__year">2023</div>
                <div class="timeline__title">Real Estate &amp; WhatsApp Products</div>
                <div class="timeline__desc">Launched two new products and crossed 200 active business clients.</div>
            </li>
            <li>
                <div class="timeline__year">2024</div>
                <div class="timeline__title">v2.0 Platform Upgrade</div>
                <div class="timeline__desc">Rebuilt all four products on a unified cloud platform with new analytics and mobile apps.</div>
            </li>
            <li>
                <div class="timeline__year">Today</div>
                <div class="timeline__title">500+ Businesses and Growing</div>
                <div class="timeline__desc">Serving schools, hospitals, real estate firms, and marketing agencies across India.</div>
            </li>
        </ul>
    </div>
</section>

@include('partials.social-strip')

@endsection
