@extends('admin.layouts.app')

@section('title', 'Tambah Berita — Lunova Admin')

@section('content')

<div class="admin-header">
  <h1 class="admin-title">Tambah Berita</h1>
  <a href="{{ route('admin.berita.index') }}" class="btn btn-outline">← Kembali</a>
</div>

<div class="admin-card">
  <form method="POST" action="{{ route('admin.berita.store') }}" enctype="multipart/form-data">
    @csrf

    <div style="display: flex; flex-direction: column; gap: 1.5rem;">

      <div class="form-group" style="display: flex; flex-direction: column; gap: 6px;">
        <label style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gray-600); font-weight: 400;">Judul Berita</label>
        <input type="text" name="judul" placeholder="Masukkan judul berita..." required
          style="border: 1px solid var(--gray-200); border-radius: var(--radius-sm); padding: 12px 14px; font-size: 14px; font-family: 'DM Sans', sans-serif; outline: none; background: var(--white); color: var(--black);"
          value="{{ old('judul') }}" />
        @error('judul')<p style="font-size: 12px; color: #e53e3e;">{{ $message }}</p>@enderror
      </div>

      <div class="form-group" style="display: flex; flex-direction: column; gap: 6px;">
        <label style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gray-600); font-weight: 400;">Kategori</label>
        <select name="kategori"
          style="border: 1px solid var(--gray-200); border-radius: var(--radius-sm); padding: 12px 14px; font-size: 14px; font-family: 'DM Sans', sans-serif; outline: none; background: var(--white); color: var(--black);">
          <option value="berita">Berita</option>
          <option value="pengumuman">Pengumuman</option>
          <option value="update">Update</option>
        </select>
      </div>

      <div class="form-group" style="display: flex; flex-direction: column; gap: 6px;">
        <label style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gray-600); font-weight: 400;">Isi Berita</label>
        <textarea name="isi" rows="10" placeholder="Tulis isi berita di sini..." required
          style="border: 1px solid var(--gray-200); border-radius: var(--radius-sm); padding: 12px 14px; font-size: 14px; font-family: 'DM Sans', sans-serif; outline: none; background: var(--white); resize: vertical; color: var(--black);">{{ old('isi') }}</textarea>
        @error('isi')<p style="font-size: 12px; color: #e53e3e;">{{ $message }}</p>@enderror
      </div>

      <div class="form-group" style="display: flex; flex-direction: column; gap: 6px;">
        <label style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gray-600); font-weight: 400;">Gambar (opsional)</label>
        <input type="file" name="gambar" accept="image/*"
          style="border: 1px solid var(--gray-200); border-radius: var(--radius-sm); padding: 12px 14px; font-size: 14px; font-family: 'DM Sans', sans-serif; background: var(--white); color: var(--black);" />
        @error('gambar')<p style="font-size: 12px; color: #e53e3e;">{{ $message }}</p>@enderror
      </div>

      <div style="display: flex; gap: 1rem;">
        <button type="submit" class="btn btn-dark">Simpan Berita</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-outline">Batal</a>
      </div>

    </div>
  </form>
</div>

@endsection