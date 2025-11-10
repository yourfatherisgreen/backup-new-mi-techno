<?php
use Illuminate\Support\Facades\Route;
use App\Models\Division;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\NewsController; // <-- Pastikan ini ada
use App\Models\News; // <-- Pastikan ini ada

// GANTI ROUTE '/' KAMU DENGAN INI:
Route::get('/', function () {
    $divisions = Division::all();
    $latest_news = News::latest()->take(5)->get(); 
    return view('home', compact('divisions', 'latest_news'));
})->name('home');


Route::get('/tes', function(){
    return view('tes');
});

Route::get('/divisions/{slug}', [DivisionController::class, 'show'])
    ->name('divisions.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');