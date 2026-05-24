@extends('public.layouts.app')

@section('title', $berita->judul . ' — Lunova')

@section('content')

  <!-- ARTIKEL -->
  <section class="hero" style="min-height: 40vh;">
    <div class="hero-inner">
      <div class="hero-badge">
        <span class="badge-dot"></span>
        {{ $berita->kategori }}
      </div>
      <h1 class="hero-title" style="font-size: clamp(28px, 5vw, 52px);">
        {{ $berita->judul }}
      </h1>
      <p style="font-size: 14px; color: rgba(255,255,255,0.4);">
        {{ $berita->created_at->format('d M Y') }}
      </p>
    </div>
  </section>

  <section class="section" style="max-width: 700px;">
    @if($berita->gambar)
    <img src="{{ asset('storage/'.$berita->gambar) }}"
         style="width:100%; border-radius: var(--radius-lg); margin-bottom: 3rem; object-fit: cover; max-height: 400px;">
    @endif

    <div style="font-size: 16px; color: var(--gray-600); line-height: 1.9; font-weight: 300;">
      {!! nl2br(e($berita->isi)) !!}
    </div>

    <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--gray-200);">
      <a href="{{ route('berita.index') }}" class="btn btn-outline">← Kembali ke Berita</a>
    </div>
  </section>

@endsection