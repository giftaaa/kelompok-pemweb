@extends('admin.layouts.app')

@section('title', 'Dashboard — Lunova Admin')

@section('content')

<div class="admin-header">
  <h1 class="admin-title">Dashboard</h1>
  <a href="{{ route('admin.berita.create') }}" class="btn btn-dark">+ Tambah Berita</a>
</div>

{{-- Stats --}}
<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2rem;">
  <div class="stat-card">
    <p style="font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--gray-400); margin-bottom: 0.5rem;">Total Berita</p>
    <div class="stat-num">{{ $totalBerita }}</div>
  </div>
  <div class="stat-card">
    <p style="font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--gray-400); margin-bottom: 0.5rem;">Pesan Masuk</p>
    <div class="stat-num">{{ $totalKontak }}</div>
  </div>
  <div class="stat-card">
    <p style="font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--gray-400); margin-bottom: 0.5rem;">Admin</p>
    <div class="stat-num">1</div>
  </div>
</div>

{{-- Berita Terbaru --}}
<div class="admin-card">
  <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
    <h3 style="font-size: 16px; font-weight: 500;">Berita Terbaru</h3>
    <a href="{{ route('admin.berita.index') }}" style="font-size: 13px; color: var(--blue);">Lihat semua →</a>
  </div>
  <table class="admin-table">
    <thead>
      <tr>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse($beritas as $berita)
      <tr>
        <td style="color: var(--black); font-weight: 400;">{{ Str::limit($berita->judul, 50) }}</td>
        <td><span class="badge badge-green">{{ $berita->kategori }}</span></td>
        <td>{{ $berita->created_at->format('d M Y') }}</td>
        <td>
          <a href="{{ route('admin.berita.edit', $berita->id) }}" style="font-size: 13px; color: var(--blue); margin-right: 1rem;">Edit</a>
          <form method="POST" action="{{ route('admin.berita.destroy', $berita->id) }}" style="display:inline;">
            @csrf @method('DELETE')
            <button type="submit" style="font-size: 13px; color: #e53e3e; background: none; border: none; cursor: pointer;" onclick="return confirm('Hapus berita ini?')">Hapus</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="4" style="text-align: center; padding: 2rem; color: var(--gray-400);">Belum ada berita</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>

@endsection