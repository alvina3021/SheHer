<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artikel;


class ArtikelController extends Controller
{
    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal' => 'required|date',
        ]);

        // Simpan file gambar
        $path = $request->file('thumbnail')->store('thumbnails', 'public');

    Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'thumbnail' => $path,
            'tanggal' => $request->tanggal,
        ]);
    // Redirect ke halaman index artikel
    return redirect()->route('artikel.index')->with('success', 'Artikel berhasil disimpan.');
    }

    public function index()
    {
        $artikels = \App\Models\Artikel::all();
        return view('artikel.index', compact('artikels'));
    }
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }
}
