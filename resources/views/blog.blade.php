@extends('layouts.app')

@section('title', 'Blog — ksteps Tech')
@section('description', 'Practical guides on school management, clinic digitisation, WhatsApp marketing, and real estate CRMs from ksteps Tech.')

@section('content')

{{-- PAGE HERO --}}
<section class="hero" style="padding: 70px 0 60px;">
    <div class="container">
        <p class="hero__eyebrow">Blog</p>
        <h1 class="hero__title">Insights for Running<br><em>a Sharper Business</em>.</h1>
        <p class="hero__sub">Practical guides on schools, clinics, real estate, and WhatsApp marketing — written from what we've learned deploying software for 500+ businesses.</p>
    </div>
</section>

{{-- POSTS --}}
<section class="section section--light" style="padding-top:60px;">
    <div class="container">
        <div class="blog-grid reveal">
            @foreach ($posts as $post)
                <article class="blog-card">
                    <div class="blog-card__cover">{{ $post['icon'] }}</div>
                    <div class="blog-card__body">
                        <div class="blog-card__meta">
                            <span class="blog-card__cat">{{ $post['category'] }}</span>
                            <span>·</span>
                            <span>{{ \Illuminate\Support\Carbon::parse($post['date'])->format('M j, Y') }}</span>
                            <span>·</span>
                            <span>{{ $post['read_time'] }}</span>
                        </div>
                        <h3 class="blog-card__title">
                            <a href="{{ route('blog.show', $post['slug']) }}">{{ $post['title'] }}</a>
                        </h3>
                        <p class="blog-card__excerpt">{{ $post['excerpt'] }}</p>
                        <a href="{{ route('blog.show', $post['slug']) }}" class="blog-card__link">Read Article →</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

@include('partials.social-strip')

@endsection
