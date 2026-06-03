@extends('layouts.app')

@section('title', 'Products — ksteps Tech')
@section('description', 'Classes, Clinic, Real Estate, and WhatsApp Marketing management systems by ksteps Tech.')

@section('content')

{{-- PAGE HERO --}}
<section class="hero" style="padding: 70px 0 60px;">
    <div class="container">
        <p class="hero__eyebrow">Our Products</p>
        <h1 class="hero__title">Software That <em>Works</em><br>Like Your Business Does.</h1>
        <p class="hero__sub">Four purpose-built systems — each tailored for its industry, ready to deploy, and backed by a team that stays with you long after go-live.</p>
        <div style="margin-top:28px; display:flex; gap:14px; flex-wrap:wrap;">
            <a href="{{ route('contact') }}" class="btn btn--gold">Book a Free Demo →</a>
            <a href="https://wa.me/918693829219?text={{ urlencode('Hi ksteps Tech! I want to enquire about your products.') }}"
               target="_blank" rel="noopener" class="btn btn--outline">Chat on WhatsApp</a>
        </div>
    </div>
</section>

{{-- PRODUCTS GRID --}}
<section class="section section--light" style="padding-top:60px;">
    <div class="container">

        <div class="section__head reveal" style="margin-bottom:44px;">
            <p class="section__eyebrow">All Products</p>
            <h2 class="section__title">Pick the Right System <span>for Your Industry</span></h2>
        </div>

        <div class="products reveal">
            @foreach ($products as $p)
                <article class="product product--{{ $p['color_class'] }}">
                    <div class="product__header">
                        <div class="product__cat-row">
                            <span class="product__cat">{{ $p['category'] }}</span>
                            @if (!empty($p['badge']))
                                <span class="product__badge">{{ $p['badge'] }}</span>
                            @endif
                        </div>
                        <h3 class="product__name">{{ $p['name'] }}</h3>
                        <p class="product__desc">{{ $p['description'] }}</p>
                    </div>
                    <div class="product__body">
                        @if (!empty($p['features']))
                            <ul class="product__features">
                                @foreach ($p['features'] as $f)
                                    <li>{{ $f }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <!-- <div class="product__price-row">
                            <div class="product__price">{{ $p['price'] }}</div>
                            @if (!empty($p['old_price']))
                                <div class="product__old">{{ $p['old_price'] }}</div>
                            @endif
                        </div> -->
                        <a href="https://wa.me/918693829219?text={{ urlencode('Hi ksteps Tech! I want to know more about: ' . $p['name']) }}"
                           target="_blank" rel="noopener"
                           class="btn btn--primary product__btn">
                            Enquire on WhatsApp →
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>

{{-- CUSTOM QUOTE --}}
<section class="cta-section">
    <div class="container">
        <h2 class="cta-section__title">Need Something <span>Custom?</span></h2>
        <p class="cta-section__sub">We build custom modules and integrations on top of any ksteps Tech product. Tell us what you need — scoped and quoted within 24 hours.</p>
        <div class="cta-section__actions">
            <a href="{{ route('contact') }}" class="btn btn--gold">Request a Custom Quote →</a>
            <a href="https://wa.me/918693829219?text={{ urlencode('Hi ksteps Tech! I need a custom software solution.') }}"
               target="_blank" rel="noopener" class="btn btn--outline">Chat on WhatsApp</a>
        </div>
    </div>
</section>

@include('partials.social-strip')

@endsection
