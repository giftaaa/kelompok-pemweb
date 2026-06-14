@extends('public.layouts.app')

@section('title', 'Layanan — Lunova Digital Agency')

@section('content')

  <!-- PAGE HEADER -->
  <section class="hero" style="min-height: 50vh;">
    <div class="hero-inner">
      <div class="hero-badge">
        <span class="badge-dot"></span>
        Layanan Kami
      </div>
      <h1 class="hero-title">
        Solusi digital untuk<br />
        <em>setiap kebutuhan bisnis.</em>
      </h1>
      <p class="hero-sub">
        Kami menyediakan layanan digital lengkap mulai dari desain, pengembangan, hingga pemasaran untuk membantu bisnis Anda tumbuh.
      </p>
    </div>
  </section>

  <!-- LAYANAN UTAMA -->
  <section class="section">
    <div class="section-header">
      <div>
        <span class="section-tag">Apa yang kami tawarkan</span>
        <h2 class="section-title">Layanan unggulan<br />kami</h2>
      </div>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-num">01</div>
        <div class="service-body">
          <h3>Web Design & Development</h3>
          <p>Website profesional, modern, dan responsif yang mengubah pengunjung menjadi pelanggan. Dari landing page hingga web app skala enterprise.</p>
        </div>
        <div class="service-arrow">↗</div>
      </div>
      <div class="service-card">
        <div class="service-num">02</div>
        <div class="service-body">
          <h3>Mobile App Development</h3>
          <p>Aplikasi iOS dan Android dengan UX yang intuitif, arsitektur bersih, dan performa tinggi. Native maupun cross-platform sesuai kebutuhan.</p>
        </div>
        <div class="service-arrow">↗</div>
      </div>
      <div class="service-card">
        <div class="service-num">03</div>
        <div class="service-body">
          <h3>Digital Marketing</h3>
          <p>Strategi pemasaran digital berbasis data melalui SEO, Google Ads, Social Media Marketing, dan Content Marketing untuk hasil yang terukur.</p>
        </div>
        <div class="service-arrow">↗</div>
      </div>
      <div class="service-card">
        <div class="service-num">04</div>
        <div class="service-body">
          <h3>Brand Identity</h3>
          <p>Logo, panduan brand, dan sistem visual yang membuat bisnis Anda langsung dikenali dan diingat oleh target audiens.</p>
        </div>
        <div class="service-arrow">↗</div>
      </div>
    </div>
  </section>

  <!-- KENAPA PILIH KAMI -->
  <!-- OPTIMALISASI: Ditambahkan transisi kelenturan warna background & border-top/bottom dinamis -->
  <section style="background: var(--gray-100); padding: 6rem 0; border-top: 1px solid var(--gray-200); border-bottom: 1px solid var(--gray-200); transition: background 0.3s ease, border-color 0.3s ease;">
    <div class="section" style="padding-top: 0; padding-bottom: 0;">
      <div class="section-header">
        <div>
          <span class="section-tag">Keunggulan kami</span>
          <h2 class="section-title">Mengapa memilih<br />Lunova?</h2>
        </div>
      </div>
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
        
        <!-- OPTIMALISASI: Ditambahkan transisi kelenturan warna pada semua box keunggulan -->
        <div style="background: var(--white); border-radius: var(--radius-lg); padding: 2rem; border: 1px solid var(--gray-200); transition: background 0.3s ease, border-color 0.3s ease;">
          <div style="font-size: 2rem; margin-bottom: 1rem;">⚡</div>
          <h4 style="font-size: 16px; font-weight: 500; margin-bottom: 0.5rem;">Pengerjaan Cepat</h4>
          <p style="font-size: 14px; color: var(--gray-600); font-weight: 300; line-height: 1.7;">Kami berkomitmen menyelesaikan project tepat waktu tanpa mengorbankan kualitas.</p>
        </div>

        <div style="background: var(--white); border-radius: var(--radius-lg); padding: 2rem; border: 1px solid var(--gray-200); transition: background 0.3s ease, border-color 0.3s ease;">
          <div style="font-size: 2rem; margin-bottom: 1rem;">🎯</div>
          <h4 style="font-size: 16px; font-weight: 500; margin-bottom: 0.5rem;">Hasil Terukur</h4>
          <p style="font-size: 14px; color: var(--gray-600); font-weight: 300; line-height: 1.7;">Setiap keputusan kami berbasis data untuk memastikan ROI yang maksimal bagi bisnis Anda.</p>
        </div>

        <div style="background: var(--white); border-radius: var(--radius-lg); padding: 2rem; border: 1px solid var(--gray-200); transition: background 0.3s ease, border-color 0.3s ease;">
          <div style="font-size: 2rem; margin-bottom: 1rem;">🤝</div>
          <h4 style="font-size: 16px; font-weight: 500; margin-bottom: 0.5rem;">Support 24/7</h4>
          <p style="font-size: 14px; color: var(--gray-600); font-weight: 300; line-height: 1.7;">Tim kami siap membantu kapanpun Anda membutuhkan, bahkan setelah project selesai.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section">
    <div class="contact-wrap" style="grid-template-columns: 1fr; text-align: center; gap: 2rem;">
      <div>
        <span class="section-tag light">Mulai sekarang</span>
        <h2 class="cta-title">Siap memulai<br /><em>project bersama kami?</em></h2>
        <p class="cta-sub">Konsultasi gratis, tanpa komitmen. Ceritakan kebutuhan bisnis Anda.</p>
        <a href="{{ route('kontak') }}" class="btn btn-light" style="margin: 0 auto;">Hubungi Kami →</a>
      </div>
    </div>
  </section>

@endsection