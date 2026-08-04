@extends('layouts.app')

@section('title', $post['title'] . ' — ksteps Tech Blog')
@section('description', $post['excerpt'])

@section('content')

{{-- POST HERO --}}
<section class="hero" style="padding: 70px 0 60px;">
    <div class="container">
        <div class="post">
            <p class="hero__eyebrow">{{ $post['category'] }}</p>
            <h1 class="hero__title" style="font-size: clamp(28px, 4.5vw, 48px);">{{ $post['title'] }}</h1>
            <div class="post__meta">
                <span>{{ $post['author'] }}</span>
                <span>·</span>
                <span>{{ \Illuminate\Support\Carbon::parse($post['date'])->format('F j, Y') }}</span>
                <span>·</span>
                <span>{{ $post['read_time'] }}</span>
            </div>
        </div>
    </div>
</section>

{{-- BODY --}}
<section class="section section--light" style="padding-top:60px;">
    <div class="container">
        <div class="post reveal">
            <a href="{{ route('blog') }}" class="post__back">← Back to Blog</a>

            <div class="post__body">
                @foreach ($post['body'] as $block)
                    @if ($block['type'] === 'p')
                        <p>{{ $block['text'] }}</p>
                    @elseif ($block['type'] === 'h2')
                        <h2>{{ $block['text'] }}</h2>
                    @elseif ($block['type'] === 'ul')
                        <ul>
                            @foreach ($block['items'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </div>

            <div class="post__tags">
                @foreach ($post['tags'] as $tag)
                    <span class="post__tag">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>

@if ($related->isNotEmpty())
<section class="section">
    <div class="container">
        <div class="section__head reveal">
            <p class="section__eyebrow">Keep Reading</p>
            <h2 class="section__title">Related <span>Articles</span></h2>
        </div>
        <div class="blog-grid reveal">
            @foreach ($related as $item)
                <article class="blog-card">
                    <div class="blog-card__cover">{{ $item['icon'] }}</div>
                    <div class="blog-card__body">
                        <div class="blog-card__meta">
                            <span class="blog-card__cat">{{ $item['category'] }}</span>
                            <span>·</span>
                            <span>{{ $item['read_time'] }}</span>
                        </div>
                        <h3 class="blog-card__title">
                            <a href="{{ route('blog.show', $item['slug']) }}">{{ $item['title'] }}</a>
                        </h3>
                        <p class="blog-card__excerpt">{{ $item['excerpt'] }}</p>
                        <a href="{{ route('blog.show', $item['slug']) }}" class="blog-card__link">Read Article →</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

@include('partials.social-strip')

@endsection
