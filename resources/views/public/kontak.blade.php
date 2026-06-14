@extends('public.layouts.app')

@section('title', 'Kontak — Lunova Digital Agency')

@section('content')

  <section class="section" style="padding-top: calc(var(--nav-h) + 4rem); min-height: 100vh;">
    <div class="custom-contact-grid">
      
      <div class="contact-left">
        <span class="custom-section-tag">Mari bicara</span>
        <h2 class="custom-contact-title">Siap membangun<br /><em>sesuatu yang hebat?</em></h2>
        <p class="custom-contact-sub">Tidak ada komitmen, hanya percakapan tentang tujuan Anda dan bagaimana kami bisa membantu.</p>
        
        <div class="custom-info-list">
          <div class="custom-info-item">
            <span class="custom-info-label">Email</span>
            <span class="custom-info-value">hello@lunova.id</span>
          </div>
          <div class="custom-info-item">
            <span class="custom-info-label">Lokasi</span>
            <span class="custom-info-value">Jakarta, Indonesia</span>
          </div>
          <div class="custom-info-item">
            <span class="custom-info-label">WhatsApp</span>
            <span class="custom-info-value">
              <a href="https://wa.me/6281234567890" target="_blank" class="wa-link">
                +62 812-3456-7890 
                <span class="wa-badge">Hubungi Cepat ↗</span>
              </a>
            </span>
          </div>
          <div class="custom-info-item">
            <span class="custom-info-label">Waktu respons</span>
            <span class="custom-info-value">Dalam 24 jam</span>
          </div>
        </div>

        <div class="map-container">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.026779435012!2d106.84880527585258!3d-6.260195393728373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3ba2fffffff%3A0x2db42958ff15bf0a!2sUHAMKA%20Kampus%20E%20-%20Fakultas%20Teknik!5e0!3m2!1sid!2sid!4v1718365200000!5m2!1sid!2sid" 
            width="100%" 
            height="230" 
            style="border:0; display: block;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <div class="contact-right">
        @if(session('success'))
          <div class="form-success" style="display: block; margin-bottom: 1.5rem;">
            ✓ {{ session('success') }}
          </div>
        @endif

        <form class="custom-contact-form" method="POST" action="{{ route('kontak.store') }}">
          @csrf
          <div class="custom-form-row">
            <div class="custom-form-group">
              <label for="nama">Nama lengkap</label>
              <input type="text" id="nama" name="nama" placeholder="Kelompok 10" required />
            </div>
            <div class="custom-form-group">
              <label for="email">Alamat email</label>
              <input type="email" id="email" name="email" placeholder="pinkeu@company.com" required />
            </div>
            <div class="custom-form-group">
              <label for="whatsapp">Nomor WhatsApp</label>
              <input type="tel" id="whatsapp" name="whatsapp" placeholder="08123456789" required />
            </div>
          </div>
          <div class="custom-form-group">
            <label for="subjek">Subjek</label>
            <input type="text" id="subjek" name="subjek" placeholder="Tentang apa ini?" />
          </div>
          <div class="custom-form-group">
            <label for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5" placeholder="Ceritakan tentang project, budget, atau apapun yang ada di pikiran Anda..." required></textarea>
          </div>
          <button type="submit" class="custom-form-submit">
            Kirim pesan →
          </button>
        </form>
      </div>

    </div>
  </section>

@endsection