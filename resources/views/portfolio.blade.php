@extends('layouts.app')

@section('title', 'Portfolio — ksteps Tech')
@section('description', 'Real case studies from schools, clinics, real estate teams, and retailers who use ksteps Tech products.')

@section('content')

{{-- PAGE HERO --}}
<section class="hero" style="padding: 70px 0 60px;">
    <div class="container">
        <p class="hero__eyebrow">Our Work</p>
        <h1 class="hero__title">Real Results for<br><em>Real Businesses</em>.</h1>
        <p class="hero__sub">A look at how schools, clinics, real estate teams, and retailers use our products to run their day-to-day operations — with the numbers to show for it.</p>
    </div>
</section>

{{-- CASE STUDIES --}}
<section class="section section--light" style="padding-top:60px;">
    <div class="container">
        <div class="portfolio-grid reveal">
            @foreach ($projects as $project)
                <div class="portfolio-card portfolio-card--{{ $project['category'] }}">
                    <div class="portfolio-card__cover">
                        <span class="portfolio-card__badge">{{ $project['badge'] }}</span>
                        {{ $project['icon'] }}
                    </div>
                    <div class="portfolio-card__body">
                        <div class="portfolio-card__client">{{ $project['client'] }}</div>
                        <h3 class="portfolio-card__title">{{ $project['title'] }}</h3>
                        <p class="portfolio-card__desc">{{ $project['description'] }}</p>
                        <div class="portfolio-card__results">
                            @foreach ($project['results'] as $result)
                                <div>
                                    <div class="portfolio-card__result-num">{{ $result['num'] }}</div>
                                    <div class="portfolio-card__result-label">{{ $result['label'] }}</div>
                                </div>
                            @endforeach
                        </div>
                        <div class="portfolio-card__tags">
                            @foreach ($project['tags'] as $tag)
                                <span class="portfolio-card__tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="cta-section">
    <div class="container">
        <h2 class="cta-section__title">Want Results Like <span>These</span>?</h2>
        <p class="cta-section__sub">Tell us about your business and we'll show you exactly which product fits — with a free, no-obligation demo.</p>
        <div class="cta-section__actions">
            <a href="{{ route('contact') }}" class="btn btn--gold">Book a Free Demo →</a>
            <a href="{{ route('products') }}" class="btn btn--outline">View Our Products</a>
        </div>
    </div>
</section>

@include('partials.social-strip')

@endsection
