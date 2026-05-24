@extends('public.layouts.app')

@section('title', 'Kontak — Lunova Digital Agency')

@section('content')

  <!-- CTA / CONTACT SECTION -->
  <section class="cta-section" id="contact" style="min-height: 100vh; display: flex; align-items: center;">
    <div class="contact-wrap" style="width: 100%; max-width: 900px; margin: 0 auto;">
      <div class="contact-left">
        <span class="section-tag light">Mari bicara</span>
        <h2 class="cta-title">Siap membangun<br /><em>sesuatu yang hebat?</em></h2>
        <p class="cta-sub">Tidak ada komitmen, hanya percakapan tentang tujuan Anda dan bagaimana kami bisa membantu.</p>
        <div class="contact-info-list">
          <div class="contact-info-item">
            <span class="contact-info-label">Email</span>
            <span class="contact-info-value">hello@lunova.id</span>
          </div>
          <div class="contact-info-item">
            <span class="contact-info-label">Lokasi</span>
            <span class="contact-info-value">Jakarta, Indonesia</span>
          </div>
          <div class="contact-info-item">
            <span class="contact-info-label">Waktu respons</span>
            <span class="contact-info-value">Dalam 24 jam</span>
          </div>
        </div>
      </div>

      <div class="contact-right">
        @if(session('success'))
          <div class="form-success" style="display: block; margin-bottom: 1.5rem;">
            ✓ {{ session('success') }}
          </div>
        @endif

        <form class="contact-form" method="POST" action="{{ route('kontak.store') }}">
          @csrf
          <div class="form-row">
            <div class="form-group">
              <label for="nama">Nama lengkap</label>
              <input type="text" id="nama" name="nama" placeholder="John Doe" required />
            </div>
            <div class="form-group">
              <label for="email">Alamat email</label>
              <input type="email" id="email" name="email" placeholder="john@company.com" required />
            </div>
          </div>
          <div class="form-group">
            <label for="subjek">Subjek</label>
            <input type="text" id="subjek" name="subjek" placeholder="Tentang apa ini?" />
          </div>
          <div class="form-group">
            <label for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5" placeholder="Ceritakan tentang project, budget, atau apapun yang ada di pikiran Anda..." required></textarea>
          </div>
          <button type="submit" class="form-submit">
            Kirim pesan →
          </button>
        </form>
      </div>
    </div>
  </section>

@endsection