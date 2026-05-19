<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    // Public - tampilkan halaman kontak
    public function index()
    {
        return view('public.kontak');
    }

    // Public - simpan pesan kontak
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'nullable',
            'pesan' => 'required',
        ]);

        Kontak::create($request->all());

        return redirect()->route('kontak')->with('success', 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.');
    }

    // Admin - lihat semua pesan masuk
    public function adminIndex()
    {
        $kontaks = Kontak::latest()->paginate(10);
        return view('admin.kontak.index', compact('kontaks'));
    }
}