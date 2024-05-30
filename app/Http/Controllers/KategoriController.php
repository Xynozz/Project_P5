<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kategori = kategori::orderBy('id', 'desc')->get();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        $kategori = kategori::all();
        return view('kategori.create', compact('kategori'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required',
        ]);

        $kategori = new kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'data berhasil ditambahkan');

    }

    public function show($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('kategori.show', compact('kategori'));

    }

    public function edit($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
        'nama_kategori' => 'required',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;

        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'data berhasil diubah');

    }

    public function destroy($id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'data berhasil dihapus!');

    }
}
