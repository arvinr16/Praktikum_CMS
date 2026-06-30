@extends('layouts.front')
@section('title', 'Articles — Elegance MOTORS')
@section('content')
<main class="relative z-10 pt-32 pb-section-gap">
    <header class="max-w-container-max mx-auto px-5 md:px-margin-desktop mb-16">
        <div class="flex flex-col gap-4">
            <span class="font-label-sm text-label-sm text-metallic-start tracking-[0.2em] uppercase">Insight &amp; Journal</span>
            <h1 class="font-headline-xl text-headline-xl md:text-display-lg max-w-3xl leading-tight text-primary">
                AUTOMOTIVE <br />EXCELLENCE
                <span class="text-outline">ARCHIVE</span>
            </h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-4">
                Konten editorial eksklusif seputar perawatan, ulasan teknis, dan
                panduan gaya hidup premium untuk komunitas otomotif elite Indonesia.
            </p>
        </div>
    </header>

    <section class="max-w-container-max mx-auto px-5 md:px-margin-desktop">
        @if($articles->isEmpty())
        <div class="glass-panel rounded-xl p-16 text-center text-on-surface-variant">
            Belum ada artikel yang dipublikasikan.
        </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
            @foreach($articles as $index => $article)
            <article class="{{ $index === 0 ? 'md:col-span-8' : 'md:col-span-4' }} group">
                <a href="{{ route('articles.show', $article->slug) }}"
                    class="tilt-card h-full bg-surface-container-low border border-outline-variant/20 rounded-xl overflow-hidden flex flex-col cursor-pointer">
                    <div class="relative {{ $index === 0 ? 'h-[400px]' : 'h-[240px]' }} overflow-hidden">
                        <img
                            alt="{{ $article->title }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="{{ Storage::url($article->image) }}" />
                        <div class="absolute top-6 left-6 flex gap-2">
                            <span class="font-label-sm text-label-sm bg-surface-container-highest px-3 py-1 text-primary border border-outline-variant/30 backdrop-blur-md">
                                {{ strtoupper($article->category->name) }}
                            </span>
                        </div>
                    </div>
                    <div class="p-{{ $index === 0 ? '8' : '6' }} flex flex-col flex-grow">
                        <div class="flex items-center gap-4 mb-4 font-label-sm text-label-sm text-outline">
                            <span>{{ $article->created_at->translatedFormat('d F Y') }}</span>
                        </div>
                        <h2 class="{{ $index === 0 ? 'font-headline-md text-headline-md' : 'font-headline-md text-[24px]' }} text-primary mb-4 group-hover:text-metallic-start transition-colors">
                            {{ $article->title }}
                        </h2>
                        <p class="text-on-surface-variant {{ $index === 0 ? 'mb-6 flex-grow' : 'text-sm line-clamp-3' }}">
                            {{ Str::limit(strip_tags($article->content), $index === 0 ? 180 : 110) }}
                        </p>
                        @if($index === 0)
                        <div class="flex items-center text-primary font-bold group-hover:translate-x-2 transition-transform">
                            READ ARTICLE
                            <span class="material-symbols-outlined ml-2">arrow_forward</span>
                        </div>
                        @endif
                    </div>
                </a>
            </article>
            @endforeach
        </div>

        <div class="mt-16 flex justify-center [&_a]:text-on-surface-variant [&_span]:text-on-surface-variant">
            {{ $articles->links() }}
        </div>
        @endif
    </section>
</main>
@endsection
