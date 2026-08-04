@extends('layouts.app')

@section('title', 'Careers — ksteps Tech')
@section('description', 'Join ksteps Tech — open roles in engineering, design, and customer success.')

@section('content')

{{-- PAGE HERO --}}
<section class="hero" style="padding: 70px 0 60px;">
    <div class="container">
        <p class="hero__eyebrow">Careers</p>
        <h1 class="hero__title">Help Us Build Software<br><em>Businesses Rely On</em>.</h1>
        <p class="hero__sub">We're a small team building products used by 500+ schools, clinics, real estate teams, and retailers across India. Come build the next chapter with us.</p>
    </div>
</section>

{{-- VALUES --}}
<section class="section section--light" style="padding-top:60px;">
    <div class="container">
        <div class="section__head reveal">
            <p class="section__eyebrow">How We Work</p>
            <h2 class="section__title">What It's Like <span>On the Inside</span></h2>
        </div>
        <div class="feat-grid reveal">
            @foreach ($values as $value)
                <div class="feat-card">
                    <div class="feat-card__icon">{{ $value['icon'] }}</div>
                    <h3 class="feat-card__title">{{ $value['title'] }}</h3>
                    <p class="feat-card__desc">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- PERKS --}}
<section class="section">
    <div class="container">
        <div class="section__head reveal">
            <p class="section__eyebrow">Perks & Benefits</p>
            <h2 class="section__title">What You <span>Get</span></h2>
        </div>
        <div class="feat-grid reveal">
            @foreach ($perks as $perk)
                <div class="feat-card">
                    <div class="feat-card__icon">{{ $perk['icon'] }}</div>
                    <h3 class="feat-card__title">{{ $perk['title'] }}</h3>
                    <p class="feat-card__desc">{{ $perk['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- OPEN POSITIONS --}}
<section class="section section--light">
    <div class="container">
        <div class="section__head reveal">
            <p class="section__eyebrow">Open Positions</p>
            <h2 class="section__title">Current <span>Openings</span></h2>
            <p class="section__sub">Don't see a fit? We're always happy to hear from good people — send us your resume anyway.</p>
        </div>

        @if (count($openings))
            <div class="job-list reveal">
                @foreach ($openings as $job)
                    <div class="job-card">
                        <div>
                            <div class="job-card__title">{{ $job['title'] }}</div>
                            <div class="job-card__meta">
                                <span>{{ $job['department'] }}</span>
                                <span>{{ $job['location'] }}</span>
                                <span class="job-card__tag">{{ $job['type'] }}</span>
                            </div>
                        </div>
                        <a href="mailto:support@kstepstech.com?subject={{ urlencode('Application - ' . $job['title']) }}" class="btn btn--primary">Apply Now →</a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="no-openings reveal">
                <p>No open roles right now — but we're always open to meeting good people.</p>
                <a href="mailto:support@kstepstech.com?subject={{ urlencode('General Application') }}" class="btn btn--primary">Send Your Resume →</a>
            </div>
        @endif
    </div>
</section>

{{-- CTA --}}
<section class="cta-section">
    <div class="container">
        <h2 class="cta-section__title">Don't See the Right <span>Role</span>?</h2>
        <p class="cta-section__sub">We're a growing team — tell us what you're great at and we'll keep you in mind for what's next.</p>
        <div class="cta-section__actions">
            <a href="mailto:support@kstepstech.com?subject={{ urlencode('General Application') }}" class="btn btn--gold">Send Your Resume →</a>
            <a href="{{ route('about') }}" class="btn btn--outline">Learn About Us</a>
        </div>
    </div>
</section>

@include('partials.social-strip')

@endsection
