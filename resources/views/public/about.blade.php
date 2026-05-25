@extends('public.layouts.app')

@section('title', 'About — Lunova Digital Agency')

@section('content')

  <!-- PAGE HEADER -->
  <section class="hero" style="min-height: 50vh;">
    <div class="hero-inner">
      <div class="hero-badge">
        <span class="badge-dot"></span>
        Tentang Kami
      </div>
      <h1 class="hero-title">
        Kami adalah tim yang<br />
        <em>passionate</em> soal digital.
      </h1>
      <p class="hero-sub">
        Lunova adalah digital agency full-service yang berfokus membantu bisnis berkembang di era digital melalui solusi kreatif dan teknologi terkini.
      </p>
    </div>
  </section>

  <!-- PROFIL PERUSAHAAN -->
  <section class="section">
    <div class="section-header">
      <div>
        <span class="section-tag">Siapa kami</span>
        <h2 class="section-title">Profil Perusahaan</h2>
      </div>
    </div>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
      <div>
        <p style="font-size: 16px; color: var(--gray-600); line-height: 1.8; margin-bottom: 1.5rem; font-weight: 300;">
          Lunova didirikan dengan visi sederhana: membantu bisnis Indonesia bersaing di era digital global. Kami percaya bahwa setiap bisnis, besar maupun kecil, berhak mendapatkan kehadiran digital yang kuat dan profesional.
        </p>
        <p style="font-size: 16px; color: var(--gray-600); line-height: 1.8; font-weight: 300;">
          Dengan tim yang berpengalaman di bidang desain, teknologi, dan pemasaran digital, kami telah membantu lebih dari 120 klien mewujudkan impian digital mereka.
        </p>
      </div>
      <div style="background: var(--gray-100); border-radius: var(--radius-lg); padding: 3rem; text-align: center;">
        <img src="{{ asset('images/logo_lunova.png') }}" alt="Lunova Logo" style="width: 150px; margin: 0 auto 1rem;">
        <h3 style="font-family: 'DM Serif Display', serif; font-size: 24px; margin-bottom: 0.5rem;">Lunova</h3>
        <p style="color: var(--gray-600); font-size: 14px;">Digital Agency · Jakarta, Indonesia</p>
      </div>
    </div>
  </section>

  <!-- VISI & MISI -->
  <section style="background: var(--gray-100); padding: 6rem 0;">
    <div class="section" style="padding-top: 0; padding-bottom: 0;">
      <div class="section-header">
        <div>
          <span class="section-tag">Arah kami</span>
          <h2 class="section-title">Visi & Misi</h2>
        </div>
      </div>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
        <div style="background: var(--white); border-radius: var(--radius-lg); padding: 2.5rem; border: 1px solid var(--gray-200);">
          <div style="font-size: 2rem; margin-bottom: 1rem;">🎯</div>
          <h3 style="font-size: 20px; font-weight: 500; margin-bottom: 1rem; letter-spacing: -0.3px;">Visi</h3>
          <p style="color: var(--gray-600); font-size: 15px; line-height: 1.75; font-weight: 300;">
            Menjadi digital agency terpercaya di Indonesia yang mendorong transformasi digital bisnis lokal menuju standar global, menciptakan dampak nyata bagi setiap klien yang kami layani.
          </p>
        </div>
        <div style="background: var(--white); border-radius: var(--radius-lg); padding: 2.5rem; border: 1px solid var(--gray-200);">
          <div style="font-size: 2rem; margin-bottom: 1rem;">💡</div>
          <h3 style="font-size: 20px; font-weight: 500; margin-bottom: 1rem; letter-spacing: -0.3px;">Misi</h3>
          <ul style="color: var(--gray-600); font-size: 15px; line-height: 2; font-weight: 300; list-style: none; padding: 0;">
            <li>→ Memberikan solusi digital berkualitas tinggi</li>
            <li>→ Membangun hubungan jangka panjang dengan klien</li>
            <li>→ Terus berinovasi mengikuti perkembangan teknologi</li>
            <li>→ Memberdayakan bisnis lokal di era digital</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- TIM KAMI -->
  <section class="section">
    <div class="section-header">
      <div>
        <span class="section-tag">Orang-orang di balik Lunova</span>
        <h2 class="section-title">Tim Kami</h2>
      </div>
    </div>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
      
      <div style="border: 1px solid var(--gray-200); border-radius: var(--radius-lg); overflow: hidden; transition: transform 0.2s, box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 16px 40px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
        <div style="height: 200px; background: linear-gradient(135deg, #EAF3DE, #C8E6C9); display: flex; align-items: center; justify-content: center;">
          <img src="/images/affan.png" alt="Muhammad Affan" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 1.5rem;">
          <h4 style="font-size: 16px; font-weight: 500; margin-bottom: 4px;">Muhammad Affan</h4>
          <p style="font-size: 13px; color: var(--blue); margin-bottom: 0.75rem;">CEO & Founder</p>
          <p style="font-size: 13px; color: var(--gray-600); font-weight: 300; line-height: 1.6;">Berpengalaman dalam strategi digital dan pengembangan bisnis.</p>
        </div>
      </div>

      <div style="border: 1px solid var(--gray-200); border-radius: var(--radius-lg); overflow: hidden; transition: transform 0.2s, box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 16px 40px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
        <div style="height: 200px; background: linear-gradient(135deg, #E6F1FB, #BBDEFB); display: flex; align-items: center; justify-content: center;">
          <img src="/images/gifta.png" alt="Gifta Ananda Aghnaa" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 1.5rem;">
          <h4 style="font-size: 16px; font-weight: 500; margin-bottom: 4px;">Gifta Ananda Aghnaa</h4>
          <p style="font-size: 13px; color: var(--blue); margin-bottom: 0.75rem;">Lead Designer</p>
          <p style="font-size: 13px; color: var(--gray-600); font-weight: 300; line-height: 1.6;">Spesialis UI/UX dengan passion dalam menciptakan pengalaman visual yang memukau.</p>
        </div>
      </div>

      <div style="border: 1px solid var(--gray-200); border-radius: var(--radius-lg); overflow: hidden; transition: transform 0.2s, box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 16px 40px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
        <div style="height: 200px; background: linear-gradient(135deg, #FAEEDA, #FFE0B2); display: flex; align-items: center; justify-content: center;">
          <img src="/images/zaky.png" alt="M. Zaky Aulia Hilmi S." style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 1.5rem;">
          <h4 style="font-size: 16px; font-weight: 500; margin-bottom: 4px;">M. Zaky Aulia Hilmi S.</h4>
          <p style="font-size: 13px; color: var(--blue); margin-bottom: 0.75rem;">Lead Developer</p>
          <p style="font-size: 13px; color: var(--gray-600); font-weight: 300; line-height: 1.6;">Full-stack developer dengan keahlian dalam Laravel, React, dan teknologi cloud.</p>
        </div>
      </div>

    </div>
  </section>

@endsection