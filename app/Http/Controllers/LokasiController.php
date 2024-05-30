<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $lokasi = Lokasi::orderBy('id', 'desc')->get();
        return view('lokasi.index', compact('lokasi'));
    }

    public function create()
    {
        $lokasi = Lokasi::all();
        return view('lokasi.create', compact('lokasi'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lokasi' => 'required',
        ]);

        $lokasi = new Lokasi();
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->save();

        return redirect()->route('lokasi.index')->with('success', 'data berhasil ditambahkan');

    }

    public function show($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        return view('lokasi.show', compact('lokasi'));

    }

    public function edit($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        return view('lokasi.edit', compact('lokasi'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_lokasi' => 'required',
        ]);

        $lokasi = Lokasi::findOrFail($id);
        $lokasi->nama_lokasi = $request->nama_lokasi;

        $lokasi->save();

        return redirect()->route('lokasi.index')->with('success', 'data berhasil diubah');

    }

    public function destroy($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi->delete();

        return redirect()->route('lokasi.index')->with('success', 'data berhasil dihapus!');

    }
}
