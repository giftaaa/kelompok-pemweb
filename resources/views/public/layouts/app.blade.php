<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Lunova — Digital Agency')</title>
  <link rel="icon" type="image/png" href="{{ asset('images/logo_lunova.png') }}">
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

  <!-- CHATBOT BUBBLE -->
  <div id="chat-bubble" onclick="toggleChat()" style="
    position: fixed; bottom: 2rem; right: 2rem;
    width: 56px; height: 56px; border-radius: 50%;
    background: #1a1a1a; color: white;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer; z-index: 9999;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    font-size: 24px; transition: transform 0.2s;">
    💬
  </div>

  <div id="chat-box" style="
    display: none; position: fixed; bottom: 6rem; right: 2rem;
    width: 340px; height: 480px; background: white;
    border-radius: 16px; box-shadow: 0 8px 40px rgba(0,0,0,0.15);
    z-index: 9998; flex-direction: column; overflow: hidden;
    border: 1px solid #e8e8e2; font-family: 'DM Sans', sans-serif;">

    <!-- Header -->
    <div style="background: #1a1a1a; padding: 1rem 1.25rem; display: flex; align-items: center; gap: 0.75rem;">
      <div style="width: 36px; height: 36px; background: #378ADD; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 16px;">🌙</div>
      <div>
        <div style="color: white; font-size: 14px; font-weight: 500;">Luna</div>
        <div style="color: rgba(255,255,255,0.5); font-size: 11px;">AI Assistant Lunova</div>
      </div>
    </div>

    <!-- Messages -->
    <div id="chat-messages" style="flex: 1; overflow-y: auto; padding: 1rem; display: flex; flex-direction: column; gap: 0.75rem; background: #fafaf8;">
      <div style="background: white; border: 1px solid #e8e8e2; border-radius: 12px 12px 12px 4px; padding: 0.75rem 1rem; font-size: 13px; color: #1a1a1a; max-width: 85%; line-height: 1.6;">
        Halo! Saya Luna, AI Assistant dari Lunova 🌙 Ada yang bisa saya bantu?
      </div>
    </div>

    <!-- Input -->
    <div style="padding: 0.75rem; border-top: 1px solid #e8e8e2; display: flex; gap: 0.5rem; background: white;">
      <input id="chat-input" type="text" placeholder="Ketik pesan..." onkeypress="if(event.key==='Enter') sendMessage()"
        style="flex: 1; border: 1px solid #e8e8e2; border-radius: 100px; padding: 8px 14px; font-size: 13px; font-family: 'DM Sans', sans-serif; outline: none; color: #1a1a1a;" />
      <button onclick="sendMessage()" style="background: #1a1a1a; color: white; border: none; border-radius: 50%; width: 36px; height: 36px; cursor: pointer; font-size: 16px;">→</button>
    </div>
  </div>

<script>
  function toggleChat() {
    const box = document.getElementById('chat-box');
    const bubble = document.getElementById('chat-bubble');
    if (box.style.display === 'none' || box.style.display === '') {
      box.style.display = 'flex';
      bubble.innerHTML = '✕';
      document.getElementById('chat-input').focus();
    } else {
      box.style.display = 'none';
      bubble.innerHTML = '💬';
    }
  }

  function addMessage(text, isUser) {
    const messages = document.getElementById('chat-messages');
    const div = document.createElement('div');
    div.style.cssText = isUser
      ? 'background: #1a1a1a; color: white; border-radius: 12px 12px 4px 12px; padding: 0.75rem 1rem; font-size: 13px; max-width: 85%; align-self: flex-end; line-height: 1.6;'
      : 'background: white; border: 1px solid #e8e8e2; border-radius: 12px 12px 12px 4px; padding: 0.75rem 1rem; font-size: 13px; color: #1a1a1a; max-width: 85%; line-height: 1.6;';
    div.textContent = text;
    messages.appendChild(div);
    messages.scrollTop = messages.scrollHeight;
  }

  function addTyping() {
    const messages = document.getElementById('chat-messages');
    const div = document.createElement('div');
    div.id = 'typing-indicator';
    div.style.cssText = 'background: white; border: 1px solid #e8e8e2; border-radius: 12px 12px 12px 4px; padding: 0.75rem 1rem; font-size: 13px; color: #6b6b63; max-width: 85%;';
    div.textContent = 'Luna sedang mengetik...';
    messages.appendChild(div);
    messages.scrollTop = messages.scrollHeight;
  }

  function sendMessage() {
    const input = document.getElementById('chat-input');
    const text = input.value.trim().toLowerCase();
    if (!text) return;

    // 1. Tampilkan pesan user
    addMessage(input.value.trim(), true);
    input.value = '';
    addTyping();

    // simulator AI
    let reply = "Maaf, Luna belum memahami pertanyaan itu. Luna bisa membantu menjelaskan tentang Layanan Lunova, Profil Tim, atau Kontak kami! 🌙";

    if (text.includes('halo') || text.includes('hai') || text.includes('p ') || text.includes('pagi') || text.includes('siang') || text.includes('malam')) {
      reply = "Halo! Saya Luna, AI Assistant dari Lunova Digital Agency. Ada yang bisa saya bantu hari ini? 🌙";
    } 
    else if (text.includes('layanan') || text.includes('jasa') || text.includes('bikin web') || text.includes('service')) {
      reply = "Lunova menyediakan layanan full-service digital modern, meliputi: Web Design & Development, Mobile App Development, Digital Marketing, dan Brand Identity. Kamu butuh layanan yang mana?";
    } 
    else if (text.includes('tim') || text.includes('anggota') || text.includes('siapa aja') || text.includes('orang') || text.includes('founder')) {
      reply = "Lunova digerakkan oleh 3 orang bertalenta hebat: Muhammad Affan selaku CEO & Founder, Gifta Ananda Aghnaa selaku Lead Designer, dan M. Zaky Aulia Hilmi S. selaku Lead Developer! ✨";
    } 
    else if (text.includes('kontak') || text.includes('email') || text.includes('hubungi')) {
      reply = "Kamu bisa menghubungi tim Lunova secara resmi melalui email hello@lunova.id atau klik tombol 'Hubungi Kami' di bagian atas halaman navbar web ini ya!";
    } 
    else if (text.includes('kuliah') || text.includes('tugas') || text.includes('matkul') || text.includes('pemweb')) {
      reply = "Betul sekali! Website Lunova Company Profile ini merupakan mahakarya proyek kelompok kami untuk tugas mata kuliah Pemrograman Web. Keren kan? 😎";
    }
    else if (text.includes('alamat') || text.includes('lokasi') || text.includes('kantor') || text.includes('dimana')) {
      reply = "Lunova Digital Agency berbasis di Jakarta, Indonesia. Untuk saat ini kami melayani klien secara remote maupun meeting langsung!";
    }

    // 3. Efek animasi loading mengetik buatan (0.8 detik) agar terasa realistik seperti AI asli
    setTimeout(() => {
      document.getElementById('typing-indicator')?.remove();
      addMessage(reply, false);
    }, 800);
  }
</script>

</body>
</html>