@extends('admin.layouts.app')

@section('title', 'Edit Berita — Lunova Admin')

@section('content')

<div class="admin-header">
  <h1 class="admin-title">Edit Berita</h1>
  <a href="{{ route('admin.berita.index') }}" class="btn btn-outline">← Kembali</a>
</div>

<div class="admin-card">
  <form method="POST" action="{{ route('admin.berita.update', $berita->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div style="display: flex; flex-direction: column; gap: 1.5rem;">

      <div class="form-group" style="display: flex; flex-direction: column; gap: 6px;">
        <label style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gray-600); font-weight: 400;">Judul Berita</label>
        <input type="text" name="judul" required
          style="border: 1px solid var(--gray-200); border-radius: var(--radius-sm); padding: 12px 14px; font-size: 14px; font-family: 'DM Sans', sans-serif; outline: none; background: var(--white);"
          value="{{ old('judul', $berita->judul) }}" />
        @error('judul')<p style="font-size: 12px; color: #e53e3e;">{{ $message }}</p>@enderror
      </div>

      <div class="form-group" style="display: flex; flex-direction: column; gap: 6px;">
        <label style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gray-600); font-weight: 400;">Kategori</label>
        <select name="kategori"
          style="border: 1px solid var(--gray-200); border-radius: var(--radius-sm); padding: 12px 14px; font-size: 14px; font-family: 'DM Sans', sans-serif; outline: none; background: var(--white);">
          <option value="berita" {{ $berita->kategori == 'berita' ? 'selected' : '' }}>Berita</option>
          <option value="pengumuman" {{ $berita->kategori == 'pengumuman' ? 'selected' : '' }}>Pengumuman</option>
          <option value="update" {{ $berita->kategori == 'update' ? 'selected' : '' }}>Update</option>
        </select>
      </div>

      <div class="form-group" style="display: flex; flex-direction: column; gap: 6px;">
        <label style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gray-600); font-weight: 400;">Isi Berita</label>
        <textarea name="isi" rows="10" required
          style="border: 1px solid var(--gray-200); border-radius: var(--radius-sm); padding: 12px 14px; font-size: 14px; font-family: 'DM Sans', sans-serif; outline: none; background: var(--white); resize: vertical;">{{ old('isi', $berita->isi) }}</textarea>
        @error('isi')<p style="font-size: 12px; color: #e53e3e;">{{ $message }}</p>@enderror
      </div>

      <div class="form-group" style="display: flex; flex-direction: column; gap: 6px;">
        <label style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gray-600); font-weight: 400;">Gambar</label>
        @if($berita->gambar)
        <div style="margin-bottom: 0.75rem;">
          <img src="{{ asset('storage/'.$berita->gambar) }}" style="height: 120px; border-radius: var(--radius-sm); object-fit: cover;">
          <p style="font-size: 12px; color: var(--gray-400); margin-top: 0.5rem;">Gambar saat ini. Upload baru untuk mengganti.</p>
        </div>
        @endif
        <input type="file" name="gambar" accept="image/*"
          style="border: 1px solid var(--gray-200); border-radius: var(--radius-sm); padding: 12px 14px; font-size: 14px; font-family: 'DM Sans', sans-serif; background: var(--white);" />
        @error('gambar')<p style="font-size: 12px; color: #e53e3e;">{{ $message }}</p>@enderror
      </div>

      <div style="display: flex; gap: 1rem;">
        <button type="submit" class="btn btn-dark">Update Berita</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-outline">Batal</a>
      </div>

    </div>
  </form>
</div>

@endsection