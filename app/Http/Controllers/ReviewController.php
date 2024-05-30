<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $review = Review::orderBy('id', 'desc')->get();
        return view('review.index', compact('review'));

    }

    public function create()
    {
        $review = Review::all();
        return view('review.create', compact('review'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'coment' => 'required',
        ]);

        $review = new Review();
        $review->username = $request->username;
        $review->coment = $request->coment;
        $review->save();

        return redirect()->route('review.index')->with('success', 'data berhasil ditambahkan');

    }

    public function show($id)
    {
        $review = Review::findOrFail($id);
        return view('review.show', compact('review'));

    }

    public function edit($id)
    {
        $review = review::findOrFail($id);
        return view('review.edit', compact('review'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'username' => 'required',
            'coment' => 'required',
        ]);

        $review = Review::findOrFail($id);
        $review->username = $request->username;
        $review->coment = $request->coment;
        $review->save();

        return redirect()->route('review.index')->with('success', 'data berhasil diubah!');

    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('review.index')->with('success', 'data berhasil dihapus!');

    }
}
