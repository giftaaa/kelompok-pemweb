@extends('admin.layouts.app')

@section('title', 'Pesan Masuk — Lunova Admin')

@section('content')

<div class="admin-header">
  <h1 class="admin-title">Pesan Masuk</h1>
</div>

@if(session('success'))
  <div class="alert-success">✓ {{ session('success') }}</div>
@endif

<div class="admin-card">
  <table class="admin-table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Subjek</th>
        <th>Pesan</th>
        <th>Tanggal</th>
        <th style="text-align: center;">Aksi / Balas</th>
      </tr>
    </thead>
    <tbody>
      @forelse($kontaks as $kontak)
      <tr>
        <td style="color: var(--black); font-weight: 400;">{{ $kontak->nama }}</td>
        <td>{{ $kontak->email }}</td>
        <td>{{ $kontak->subjek ?? '-' }}</td>
        <td>
          <span style="cursor: pointer; border-bottom: 1px dashed var(--gray-400);" onclick="showMessageModal('{{ addslashes($kontak->nama) }}', '{{ addslashes($kontak->pesan) }}')">
            {{ Str::limit($kontak->pesan, 45) }} 
            <small style="color: var(--blue); font-size: 11px;">(Detail)</small>
          </span>
        </td>
        <td>{{ $kontak->created_at->format('d M Y') }}</td>
        
        <!-- BAGIAN YANG DIUBAH: TOMBOL EMAIL & WA DINAMIS -->
        <td style="text-align: center;">
          <div style="display: flex; gap: 6px; justify-content: center; align-items: center;">
            <!-- BALAS VIA EMAIL -->
            <a href="mailto:{{ $kontak->email }}?subject=Re: {{ urlencode($kontak->subjek ?? 'Tanggapan dari Lunova Digital Agency') }}&body=Halo {{ urlencode($kontak->nama) }},%0D%0A%0D%0A" 
               class="btn-action-email" title="Balas via Email">
               ✉ Email
            </a>
            
            <!-- BALAS VIA WHATSAPP -->
            @if(!empty($kontak->whatsapp))
              @php
                $noWaClean = preg_replace('/[^0-9]/', '', $kontak->whatsapp);
                if (strpos($noWaClean, '0') === 0) {
                    $noWaClean = '62' . substr($noWaClean, 1);
                }
              @endphp
              <a href="https://wa.me/{{ $noWaClean }}?text=Halo%20{{ urlencode($kontak->nama) }},%20kami%20dari%20Lunova%20Digital%20Agency%20ingin%20menanggapi%20pesan%20Anda..." 
                 target="_blank" class="btn-action-wa" title="Hubungi via WhatsApp">
                 💬 WA
              </a>
            @else
              <button class="btn-action-wa" style="background: var(--gray-400) !important; cursor: not-allowed; border: none; padding: 6px 12px; border-radius: 6px; color: white; font-size: 12px;" disabled title="Nomor tidak tersedia">💬 WA</button>
            @endif
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="6" style="text-align: center; padding: 3rem; color: var(--gray-400);">
          Belum ada pesan masuk.
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>

  @if($kontaks->hasPages())
  <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--gray-200);">
    {{ $kontaks->links() }}
  </div>
  @endif
</div>

<!-- MODAL POP-UP UNTUK MEMBACA PESAN SECARA UTUH -->
<div id="messageModal" class="custom-admin-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); backdrop-filter: blur(4px); z-index: 9999; justify-content: center; align-items: center;">
  <div style="background: var(--white); padding: 2rem; border-radius: 12px; width: 100%; max-width: 500px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border: 1px solid var(--gray-200);">
    <h3 id="modalSender" style="font-family: 'DM Serif Display', serif; font-size: 20px; color: var(--black); margin-bottom: 1rem; border-bottom: 1px solid var(--gray-200); padding-bottom: 0.5rem;">Isi Pesan</h3>
    <p id="modalContent" style="font-size: 14px; color: var(--gray-600); line-height: 1.6; white-space: pre-line; max-height: 300px; overflow-y: auto; margin-bottom: 1.5rem; padding-right: 5px; font-weight: 300;"></p>
    <div style="text-align: right;">
      <button onclick="closeMessageModal()" style="background: var(--black); color: var(--white); border: none; padding: 8px 20px; border-radius: 100px; font-size: 13px; cursor: pointer; font-weight: 500;">Tutup</button>
    </div>
  </div>
</div>

<!-- LOGIKA MODAL POP-UP -->
<script>
  function showMessageModal(sender, message) {
    document.getElementById('modalSender').innerText = 'Pesan dari: ' + sender;
    document.getElementById('modalContent').innerText = message;
    document.getElementById('messageModal').style.display = 'flex';
  }

  function closeMessageModal() {
    document.getElementById('messageModal').style.display = 'none';
  }

  window.onclick = function(event) {
    let modal = document.getElementById('messageModal');
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  }
</script>

@endsection