@extends('layouts.app')

@section('title', 'Services — ksteps Tech')
@section('description', 'Implementation, training, support, data migration, and custom development from ksteps Tech.')

@section('content')

{{-- PAGE HERO --}}
<section class="hero" style="padding: 70px 0 60px;">
    <div class="container">
        <p class="hero__eyebrow">Our Services</p>
        <h1 class="hero__title">We Do More Than<br>Just <em>Sell Software</em>.</h1>
        <p class="hero__sub">From setup to ongoing support, our team handles everything so you can focus on running your business — not managing technology.</p>
        <div style="margin-top:28px;">
            <a href="{{ route('contact') }}" class="btn btn--gold">Book a Free Consultation →</a>
        </div>
    </div>
</section>

{{-- SERVICES CARDS --}}
<section class="section section--light" style="padding-top:60px;">
    <div class="container">

        <div class="section__head reveal" style="margin-bottom:44px;">
            <p class="section__eyebrow">What We Offer</p>
            <h2 class="section__title">Six Ways We <span>Support You</span></h2>
            <p class="section__sub">Every service is included or available as an add-on — we never leave you alone with a piece of software.</p>
        </div>

        <div class="feat-grid reveal">
            @foreach ($services as $s)
                <div class="feat-card" style="text-align:left;">
                    <div class="feat-card__icon" style="margin-left:0;">{{ $s['icon'] }}</div>
                    <h3 class="feat-card__title">{{ $s['title'] }}</h3>
                    <p class="feat-card__desc">{{ $s['description'] }}</p>
                    <ul style="list-style:none; margin-top:14px;">
                        @foreach ($s['features'] as $f)
                            <li style="font-size:13px; font-weight:500; padding:4px 0; color:#555; display:flex; align-items:center; gap:7px;">
                                <span style="color:#f5a623; font-weight:800; font-size:11px;">✓</span> {{ $f }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

    </div>
</section>

{{-- HOW IT WORKS --}}
<section class="section">
    <div class="container">

        <div class="section__head reveal">
            <p class="section__eyebrow">How It Works</p>
            <h2 class="section__title">Up and Running <span>in 3 Steps</span></h2>
            <p class="section__sub">We keep onboarding fast and friction-free — your team is productive from the very first week.</p>
        </div>

        <div class="feat-grid reveal">
            <div class="feat-card">
                <div class="feat-card__icon">📞</div>
                <h3 class="feat-card__title">Step 1 — Tell Us Your Needs</h3>
                <p class="feat-card__desc">Book a free 30-minute discovery call. We listen, recommend the right product, and scope your requirements clearly.</p>
            </div>
            <div class="feat-card">
                <div class="feat-card__icon">🚀</div>
                <h3 class="feat-card__title">Step 2 — We Deploy &amp; Train</h3>
                <p class="feat-card__desc">Our team handles full setup, data migration, and hands-on training for your staff — typically within 7 days.</p>
            </div>
            <div class="feat-card">
                <div class="feat-card__icon">🤝</div>
                <h3 class="feat-card__title">Step 3 — We Support You, Always</h3>
                <p class="feat-card__desc">Dedicated 24/7 support via WhatsApp, phone, and email — we are your long-term technology partner.</p>
            </div>
        </div>

        <div style="text-align:center; margin-top:44px;">
            <a href="{{ route('contact') }}" class="btn btn--primary">Book a Free Consultation →</a>
        </div>

    </div>
</section>

{{-- STATS --}}
<div class="stats-bar">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-item__num">500+</div>
                <div class="stat-item__label">Businesses Served</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__num">7 Days</div>
                <div class="stat-item__label">Avg. Setup Time</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__num">99.9%</div>
                <div class="stat-item__label">Uptime SLA</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__num">24/7</div>
                <div class="stat-item__label">Support Coverage</div>
            </div>
        </div>
    </div>
</div>

@include('partials.social-strip')

@endsection
