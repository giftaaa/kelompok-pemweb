<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Admin — Lunova')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet" />
  <style>
    .admin-wrap { display: flex; min-height: 100vh; }
    .sidebar {
      width: 240px; min-height: 100vh;
      background: var(--black);
      padding: 2rem 1.5rem;
      position: fixed; top: 0; left: 0;
      display: flex; flex-direction: column;
      gap: 0.5rem;
    }
    .sidebar-logo {
      font-size: 18px; font-weight: 500;
      color: var(--white); margin-bottom: 2rem;
      display: block;
    }
    .sidebar-logo span { color: var(--blue); }
    .sidebar-label {
      font-size: 11px; text-transform: uppercase;
      letter-spacing: 1px; color: rgba(255,255,255,0.3);
      margin: 1rem 0 0.5rem; padding: 0 0.75rem;
    }
    .sidebar-link {
      display: flex; align-items: center; gap: 0.75rem;
      padding: 0.6rem 0.75rem; border-radius: var(--radius-sm);
      color: rgba(255,255,255,0.6); font-size: 14px;
      transition: all 0.2s; font-weight: 400;
    }
    .sidebar-link:hover, .sidebar-link.active {
      background: rgba(255,255,255,0.08);
      color: var(--white);
    }
    .sidebar-bottom {
      margin-top: auto; padding-top: 1.5rem;
      border-top: 1px solid rgba(255,255,255,0.1);
    }
    .admin-main {
      margin-left: 240px; flex: 1;
      padding: 2.5rem; background: var(--gray-100);
      min-height: 100vh;
    }
    .admin-header {
      display: flex; justify-content: space-between;
      align-items: center; margin-bottom: 2rem;
    }
    .admin-title {
      font-family: 'DM Serif Display', serif;
      font-size: 28px; font-weight: 400; letter-spacing: -0.5px;
    }
    .admin-card {
      background: var(--white); border-radius: var(--radius-lg);
      border: 1px solid var(--gray-200); padding: 1.5rem;
      margin-bottom: 1.5rem;
    }
    .stat-card {
      background: var(--white); border-radius: var(--radius-lg);
      border: 1px solid var(--gray-200); padding: 1.5rem;
    }
    .stat-card .stat-num {
      font-family: 'DM Serif Display', serif;
      font-size: 36px; letter-spacing: -1px; line-height: 1;
    }
    .admin-table { width: 100%; border-collapse: collapse; }
    .admin-table th {
      font-size: 11px; text-transform: uppercase;
      letter-spacing: 1px; color: var(--gray-400);
      padding: 0.75rem 1rem; text-align: left;
      border-bottom: 1px solid var(--gray-200);
    }
    .admin-table td {
      padding: 1rem; font-size: 14px;
      border-bottom: 1px solid var(--gray-200);
      color: var(--gray-600);
    }
    .admin-table tr:last-child td { border-bottom: none; }
    .admin-table tr:hover td { background: var(--gray-100); }
    .badge {
      display: inline-block; padding: 3px 10px;
      border-radius: 100px; font-size: 11px; font-weight: 500;
    }
    .badge-green { background: #E8F5E9; color: #2E7D32; }
    .alert-success {
      background: #E8F5E9; color: #2E7D32;
      padding: 1rem 1.25rem; border-radius: var(--radius-sm);
      font-size: 14px; margin-bottom: 1.5rem;
      border: 1px solid #C8E6C9;
    }
  </style>
  @yield('styles')
</head>
<body>
<div class="admin-wrap">

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <a href="{{ route('admin.dashboard') }}" class="sidebar-logo">lu<span>nova</span></a>

    <span class="sidebar-label">Menu</span>
    <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
      📊 Dashboard
    </a>
    <a href="{{ route('admin.berita.index') }}" class="sidebar-link {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
      📰 Berita
    </a>
    <a href="{{ route('admin.kontak.index') }}" class="sidebar-link {{ request()->routeIs('admin.kontak.*') ? 'active' : '' }}">
      📩 Pesan Masuk
    </a>

    <div class="sidebar-bottom">
      <a href="{{ route('home') }}" class="sidebar-link">🌐 Lihat Website</a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="sidebar-link" style="width:100%; background:none; border:none; cursor:pointer; text-align:left;">
          🚪 Logout
        </button>
      </form>
    </div>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="admin-main">
    @yield('content')
  </main>

</div>
<script src="{{ asset('js/script.js') }}"></script>
@yield('scripts')
</body>
</html>