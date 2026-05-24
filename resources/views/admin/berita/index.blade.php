@extends('admin.layouts.app')

@section('title', 'Kelola Berita — Lunova Admin')

@section('content')

<div class="admin-header">
  <h1 class="admin-title">Kelola Berita</h1>
  <a href="{{ route('admin.berita.create') }}" class="btn btn-dark">+ Tambah Berita</a>
</div>

@if(session('success'))
  <div class="alert-success">✓ {{ session('success') }}</div>
@endif

<div class="admin-card">
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
        <td style="color: var(--black); font-weight: 400;">{{ Str::limit($berita->judul, 60) }}</td>
        <td><span class="badge badge-green">{{ $berita->kategori }}</span></td>
        <td>{{ $berita->created_at->format('d M Y') }}</td>
        <td>
          <a href="{{ route('berita.show', $berita->slug) }}" target="_blank" style="font-size: 13px; color: var(--gray-600); margin-right: 1rem;">Lihat</a>
          <a href="{{ route('admin.berita.edit', $berita->id) }}" style="font-size: 13px; color: var(--blue); margin-right: 1rem;">Edit</a>
          <form method="POST" action="{{ route('admin.berita.destroy', $berita->id) }}" style="display:inline;">
            @csrf @method('DELETE')
            <button type="submit" style="font-size: 13px; color: #e53e3e; background: none; border: none; cursor: pointer;" onclick="return confirm('Hapus berita ini?')">Hapus</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="4" style="text-align: center; padding: 3rem; color: var(--gray-400);">
          Belum ada berita. <a href="{{ route('admin.berita.create') }}" style="color: var(--blue);">Tambah sekarang →</a>
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>

  {{-- Pagination --}}
  @if($beritas->hasPages())
  <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--gray-200);">
    {{ $beritas->links() }}
  </div>
  @endif
</div>

@endsection