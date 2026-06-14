@extends('public.layouts.app')

@section('title', 'Lunova — Digital Agency')

@section('content')

  <section class="hero">
    <div class="hero-inner">
      <div class="hero-badge">
        <span class="badge-dot"></span>
        Tersedia untuk project baru
      </div>
      <h1 class="hero-title">
        Kami membangun<br />pengalaman digital yang
        <em>benar-benar bekerja.</em>
      </h1>
      <p class="hero-sub">
        Digital agency full-service yang membantu brand berkembang melalui strategi, desain, dan teknologi yang membuat perbedaan nyata.
      </p>
      <div class="hero-actions">
        <a href="{{ route('kontak') }}" class="btn btn-dark">Mulai Project →</a>
        <a href="{{ route('layanan') }}" class="btn btn-outline">Lihat Layanan</a>
      </div>
    </div>
    <div class="hero-marquee-wrap">
      <div class="hero-marquee">
        <span>Web Design</span><span class="dot">·</span>
        <span>Branding</span><span class="dot">·</span>
        <span>Development</span><span class="dot">·</span>
        <span>Digital Marketing</span><span class="dot">·</span>
        <span>Mobile Apps</span><span class="dot">·</span>
        <span>UX Strategy</span><span class="dot">·</span>
        <span>Web Design</span><span class="dot">·</span>
        <span>Branding</span><span class="dot">·</span>
        <span>Development</span><span class="dot">·</span>
        <span>Digital Marketing</span><span class="dot">·</span>
        <span>Mobile Apps</span><span class="dot">·</span>
        <span>UX Strategy</span><span class="dot">·</span>
      </div>
    </div>
  </section>

  <section class="stats">
    <div class="stat-item">
      <div class="stat-num" data-target="87">0</div>
      <div class="stat-label">Project selesai</div>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item">
      <div class="stat-num" data-target="2">0</div>
      <div class="stat-label">Tahun pengalaman</div>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item">
      <div class="stat-num" data-target="96">0</div>
      <div class="stat-label">Kepuasan klien %</div>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item">
      <div class="stat-num" data-target="3">0</div>
      <div class="stat-label">Anggota tim</div>
    </div>
  </section>

  <section class="section" id="services">
    <div class="section-header">
      <div>
        <span class="section-tag">Apa yang kami lakukan</span>
        <h2 class="section-title">Layanan untuk<br />pertumbuhan bisnis</h2>
      </div>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-num">01</div>
        <div class="service-body">
          <h3>Web Design &amp; Development</h3>
          <p>Website yang indah, berkinerja tinggi, dan mengubah pengunjung menjadi pelanggan. Dari landing page hingga web app skala besar.</p>
        </div>
        <div class="service-arrow">↗</div>
      </div>
      <div class="service-card">
        <div class="service-num">02</div>
        <div class="service-body">
          <h3>Brand Identity</h3>
          <p>Logo, panduan, dan sistem visual yang membuat brand Anda langsung dikenali dan diingat secara mendalam.</p>
        </div>
        <div class="service-arrow">↗</div>
      </div>
      <div class="service-card">
        <div class="service-num">03</div>
        <div class="service-body">
          <h3>Digital Marketing</h3>
          <p>Kampanye berbasis data melalui SEO, iklan berbayar, dan media sosial yang menempatkan Anda di depan audiens yang tepat.</p>
        </div>
        <div class="service-arrow">↗</div>
      </div>
      <div class="service-card">
        <div class="service-num">04</div>
        <div class="service-body">
          <h3>Mobile App Development</h3>
          <p>Aplikasi iOS dan Android dengan UX yang mulus, arsitektur bersih, dan performa handal dalam skala besar.</p>
        </div>
        <div class="service-arrow">↗</div>
      </div>
    </div>
  </section>

  <section class="section" id="berita">
    <div class="section-header">
      <div>
        <span class="section-tag">Update terbaru</span>
        <h2 class="section-title">Berita & Pengumuman</h2>
      </div>
      <a href="{{ route('berita.index') }}" class="btn btn-outline">Lihat semua →</a>
    </div>
    <div class="work-grid">
      @forelse($beritas ?? [] as $berita)
      <div class="work-card {{ $loop->first ? 'work-card--wide' : '' }}">
        <div class="work-thumb" style="background: var(--gray-100); transition: background 0.3s ease;">
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
          <a href="{{ route('berita.show', $berita->slug) }}" class="work-link">Baca selengkapnya →</a>
        </div>
      </div>
      @empty
      <div style="grid-column: span 2; text-align: center; color: var(--gray-600); padding: 3rem 0;">
        <p>Belum ada berita tersedia.</p>
      </div>
      @endforelse
    </div>
  </section>

  <section class="section" id="process">
    <div class="section-header">
      <div>
        <span class="section-tag">Cara kami bekerja</span>
        <h2 class="section-title">Proses kami</h2>
      </div>
    </div>
    <div class="process-list">
      <div class="process-item open">
        <button class="process-toggle" aria-expanded="true">
          <span class="process-num">01</span>
          <span class="process-name">Riset &amp; Strategi</span>
          <span class="process-chevron">+</span>
        </button>
        <div class="process-body">
          <p>Kami mendalami tujuan bisnis, audiens, dan kompetitor Anda untuk membangun fondasi strategis yang kuat sebelum pekerjaan desain atau pengembangan dimulai.</p>
        </div>
      </div>
      <div class="process-item">
        <button class="process-toggle" aria-expanded="false">
          <span class="process-num">02</span>
          <span class="process-name">Desain &amp; Prototipe</span>
          <span class="process-chevron">+</span>
        </button>
        <div class="process-body">
          <p>Wireframe, mockup, dan prototipe interaktif — Anda melihat persis apa yang akan didapatkan sebelum satu baris kode pun ditulis.</p>
        </div>
      </div>
      <div class="process-item">
        <button class="process-toggle" aria-expanded="false">
          <span class="process-num">03</span>
          <span class="process-name">Pengembangan &amp; Testing</span>
          <span class="process-chevron">+</span>
        </button>
        <div class="process-body">
          <p>Kode bersih dan skalabel dengan stack modern. Setiap fitur melalui pengujian QA yang ketat di berbagai perangkat dan browser sebelum sampai ke pengguna.</p>
        </div>
      </div>
      <div class="process-item">
        <button class="process-toggle" aria-expanded="false">
          <span class="process-num">04</span>
          <span class="process-name">Launch &amp; Pertumbuhan</span>
          <span class="process-chevron">+</span>
        </button>
        <div class="process-body">
          <p>Kami menangani deployment, memantau performa pasca-launch, dan tetap menjadi mitra pertumbuhan jangka panjang Anda.</p>
        </div>
      </div>
    </div>
  </section>

@endsection