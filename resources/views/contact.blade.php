@extends('layouts.app')

@section('title', 'Contact — ksteps Tech')
@section('description', 'Get in touch with ksteps Tech — book a demo, request a quote, or ask a question.')

@section('content')

{{-- PAGE HERO --}}
<section class="hero" style="padding: 70px 0 60px;">
    <div class="container">
        <p class="hero__eyebrow">Contact Us</p>
        <h1 class="hero__title">Let's Talk About<br><em>Your Business</em>.</h1>
        <p class="hero__sub">Book a free demo, request a custom quote, or just ask a question — we reply within a few hours, usually faster.</p>
    </div>
</section>

{{-- CONTACT FORM --}}
<section class="section section--light" style="padding-top:60px;">
    <div class="container">
        <div class="contact-grid reveal">

            <div class="contact-info">
                <h3>Other Ways to Reach Us</h3>
                <ul>
                    <li>
                        <small>WhatsApp</small>
                        <strong><a href="https://wa.me/918693829219" target="_blank" rel="noopener">+91 86938 29219</a></strong>
                    </li>
                    <li>
                        <small>Email</small>
                        <strong><a href="mailto:support@kstepstech.com">support@kstepstech.com</a></strong>
                    </li>
                    <li>
                        <small>Instagram</small>
                        <strong><a href="https://instagram.com/kstepstech" target="_blank" rel="noopener">@kstepstech</a></strong>
                    </li>
                    <li>
                        <small>YouTube</small>
                        <strong><a href="https://youtube.com/@kstepstech" target="_blank" rel="noopener">@kstepstech</a></strong>
                    </li>
                    <li>
                        <small>Business Hours</small>
                        <strong>Mon–Sat · 9:00–19:00 </strong>
                    </li>
                </ul>

                <div style="margin-top:32px; padding:24px; background:var(--bg-light2); border-radius:12px; border-left:4px solid var(--gold);">
                    <p style="font-size:14px; font-weight:700; color:var(--dark); margin-bottom:6px;">Fastest response?</p>
                    <p style="font-size:13.5px; color:var(--muted); line-height:1.6;">Send us a WhatsApp — we typically reply within 10 minutes during business hours.</p>
                    <a href="https://wa.me/918693829219?text={{ urlencode('Hi ksteps Tech! I want to book a free demo.') }}"
                       target="_blank" rel="noopener"
                       class="btn btn--primary" style="margin-top:14px; display:inline-flex;">
                        Open WhatsApp →
                    </a>
                </div>
            </div>

            <div>
                @if (session('success'))
                    <div class="alert">{{ session('success') }}</div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="form">
                    @csrf
                    <h3 style="font-size:20px; font-weight:700; margin-bottom:24px; color:var(--dark);">Send Us a Message</h3>
                    <div class="form__cols">
                        <div class="form__row">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Rahul Sharma" required>
                            @error('name') <div class="error">{{ $message }}</div> @enderror
                        </div>
                        <div class="form__row">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="you@company.com" required>
                            @error('email') <div class="error">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form__row">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}" placeholder="e.g. Demo request for Clinic Management System" required>
                        @error('subject') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <div class="form__row">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="5" placeholder="Tell us about your business and what you need..." required>{{ old('message') }}</textarea>
                        @error('message') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn--primary">Send Message →</button>
                </form>
            </div>

        </div>
    </div>
</section>

@include('partials.social-strip')

@endsection
