<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Jenis;
use App\Models\Photo;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get(),
            'photos' => Photo::orderBy('id', 'desc')->limit(5)->get(),
            'jenis' => Jenis::orderBy('id', 'desc')->get(),
        ]);
    }

    public function berita()
    {
        return view('berita.berita', [
            'artikel' => Blog::orderBy('id', 'desc')->get(),
        ]);
    }

    public function foto()
    {
        return view('foto.foto', [
            'photos' => Photo::orderBy('id', 'desc')->get(),
        ]);
    }

    public function detail($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikel' => $artikel,
        ]);
    }
}
