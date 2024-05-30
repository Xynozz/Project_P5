<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\destinasi;
use App\Models\lokasi;
use App\Models\kategori;
use Illuminate\Http\Request;

class FrontController extends Controller
{
     public function Destinasi()
    {
        $destinasi = Destinasi::latest()->get();
        $lokasi = Lokasi::all();
        $kategori = Kategori::all();
        $review = Review::all();
        return view('welcome', compact( 'destinasi','lokasi','kategori','review'));
    }

    public function preview($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('preview', compact('destinasi'));
    }
}
