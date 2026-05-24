@extends('public.layouts.app')

@section('title', 'Berita — Lunova Digital Agency')

@section('content')

  <!-- PAGE HEADER -->
  <section class="hero" style="min-height: 40vh;">
    <div class="hero-inner">
      <div class="hero-badge">
        <span class="badge-dot"></span>
        Update Terbaru
      </div>
      <h1 class="hero-title">
        Berita &<br />
        <em>Pengumuman</em>
      </h1>
      <p class="hero-sub">
        Ikuti perkembangan terbaru dari Lunova — insight, update project, dan pengumuman penting.
      </p>
    </div>
  </section>

  <!-- DAFTAR BERITA -->
  <section class="section">
    <div class="work-grid">
      @forelse($beritas as $berita)
      <div class="work-card {{ $loop->first ? 'work-card--wide' : '' }}">
        <div class="work-thumb" style="background: #EAF3DE;">
          @if($berita->gambar)
            <img src="{{ asset('storage/'.$berita->gambar) }}" style="width:100%; height:100%; object-fit:cover;">
          @else
            <div class="work-thumb-inner">
              <div style="font-size: 3rem;">📰</div>
            </div>
          @endif
        </div>
        <div class="work-info">
          <span class="work-tag">{{ $berita->kategori }} · {{ $berita->created_at->format('d M Y') }}</span>
          <h3 class="work-title">{{ $berita->judul }}</h3>
          <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 0.75rem; font-weight: 300;">{{ Str::limit($berita->isi, 100) }}</p>
          <a href="{{ route('berita.show', $berita->slug) }}" class="work-link">Baca selengkapnya →</a>
        </div>
      </div>
      @empty
      <div style="grid-column: span 2; text-align: center; color: var(--gray-600); padding: 5rem 0;">
        <div style="font-size: 3rem; margin-bottom: 1rem;">📭</div>
        <p>Belum ada berita tersedia.</p>
      </div>
      @endforelse
    </div>

    {{-- Pagination --}}
    @if($beritas->hasPages())
    <div style="margin-top: 3rem; display: flex; justify-content: center; gap: 0.5rem;">
      {{ $beritas->links() }}
    </div>
    @endif
  </section>

@endsection