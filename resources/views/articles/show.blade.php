@extends('layouts.front')
@section('title', $article->title . ' — Elegance MOTORS')
@section('content')
<main class="relative z-10 pt-32 pb-section-gap">
    <article class="max-w-3xl mx-auto px-5 md:px-margin-desktop">
        <div class="mb-8">
            <span class="font-label-sm text-label-sm text-metallic-start tracking-[0.2em] uppercase">
                {{ $article->category->name }}
            </span>
            <h1 class="font-headline-xl text-headline-xl md:text-display-lg text-primary mt-4 mb-6 leading-tight">
                {{ $article->title }}
            </h1>
            <div class="flex items-center gap-4 font-label-sm text-label-sm text-outline">
                <span>{{ $article->created_at->translatedFormat('d F Y') }}</span>
            </div>
        </div>

        <div class="relative rounded-xl overflow-hidden mb-12 aspect-video">
            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                class="w-full h-full object-cover" />
        </div>

        <div class="prose prose-invert max-w-none font-body-lg text-body-lg text-on-surface-variant leading-relaxed whitespace-pre-line">
            {{ $article->content }}
        </div>
    </article>

    <!-- Related navigation -->
    <section class="max-w-container-max mx-auto px-5 md:px-margin-desktop mt-section-gap">
        <div class="flex justify-between items-center border-t border-outline-variant/20 pt-10">
            <a href="{{ route('articles.index') }}" class="flex items-center gap-2 text-primary font-bold hover:text-metallic-start transition-colors">
                <span class="material-symbols-outlined">arrow_back</span>
                Kembali ke Semua Artikel
            </a>
        </div>
    </section>
</main>
@endsection
