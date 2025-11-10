<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Halaman Daftar Berita (Index)
     */
    public function index()
    {
        $news = News::latest()->paginate(9); // Berita utama (kiri)
        
        // Ambil 5 berita untuk sidebar (kanan)
        $recent_posts = News::latest()->take(5)->get(); 
        
        return view('news.index', compact('news', 'recent_posts'));
    }

    /**
     * Halaman Detail Berita (Show)
     */
    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail(); // Berita utama (kiri)
        
        // Ambil 5 berita LAINNYA untuk sidebar (kanan)
        $recent_posts = News::where('id', '!=', $news->id)
                            ->latest()
                            ->take(5)
                            ->get();
        
        return view('news.show', compact('news', 'recent_posts'));
    }
}