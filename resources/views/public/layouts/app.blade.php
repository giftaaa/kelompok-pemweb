<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Lunova — Digital Agency')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet" />
  @yield('styles')
</head>
<body>

  <!-- NAV -->
  <nav class="nav">
    <a href="{{ route('home') }}" class="nav-logo">lu<span>nova</span></a>
    <ul class="nav-links">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('layanan') }}">Layanan</a></li>
      <li><a href="{{ route('berita.index') }}">Berita</a></li>
      <li><a href="{{ route('kontak') }}">Kontak</a></li>
    </ul>
    <a href="{{ route('kontak') }}" class="nav-cta">Hubungi Kami</a>
    <button class="nav-burger" aria-label="Toggle menu">
      <span></span><span></span>
    </button>
  </nav>

  @yield('content')

  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-top">
      <div class="footer-brand">
        <span class="nav-logo">lu<span>nova</span></span>
        <p>A full-service digital agency creating experiences that move the needle.</p>
      </div>
      <div class="footer-links">
        <div class="footer-col">
          <span class="footer-col-title">Layanan</span>
          <a href="{{ route('layanan') }}">Web Design</a>
          <a href="{{ route('layanan') }}">Development</a>
          <a href="{{ route('layanan') }}">Branding</a>
          <a href="{{ route('layanan') }}">Marketing</a>
        </div>
        <div class="footer-col">
          <span class="footer-col-title">Perusahaan</span>
          <a href="{{ route('about') }}">About</a>
          <a href="{{ route('berita.index') }}">Berita</a>
          <a href="{{ route('kontak') }}">Kontak</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Lunova. All rights reserved.</span>
      <span>hello@lunova.id</span>
    </div>
  </footer>

  <script src="{{ asset('js/script.js') }}"></script>
  @yield('scripts')
</body>
</html>