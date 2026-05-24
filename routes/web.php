<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;

// ===== PUBLIC ROUTES =====
Route::get('/', function () {
    $beritas = \App\Models\Berita::latest()->take(3)->get();
    return view('public.home', compact('beritas'));
})->name('home');

Route::get('/about', function () {
    return view('public.about');
})->name('about');

Route::get('/layanan', function () {
    return view('public.layanan');
})->name('layanan');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// ===== ADMIN ROUTES =====
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        $totalBerita = \App\Models\Berita::count();
        $totalKontak = \App\Models\Kontak::count();
        $beritas = \App\Models\Berita::latest()->take(5)->get();
        return view('admin.dashboard', compact('totalBerita', 'totalKontak', 'beritas'));
    })->name('dashboard');

    Route::get('/kontak', [KontakController::class, 'adminIndex'])->name('kontak.index');

    Route::get('/berita', [BeritaController::class, 'adminIndex'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
});

require __DIR__.'/auth.php';