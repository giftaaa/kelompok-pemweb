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
      </tr>
    </thead>
    <tbody>
      @forelse($kontaks as $kontak)
      <tr>
        <td style="color: var(--black); font-weight: 400;">{{ $kontak->nama }}</td>
        <td>{{ $kontak->email }}</td>
        <td>{{ $kontak->subjek ?? '-' }}</td>
        <td>{{ Str::limit($kontak->pesan, 60) }}</td>
        <td>{{ $kontak->created_at->format('d M Y') }}</td>
      </tr>
      @empty
      <tr>
        <td colspan="5" style="text-align: center; padding: 3rem; color: var(--gray-400);">
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

@endsection