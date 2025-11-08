<?php
use Illuminate\Support\Facades\Route;
use App\Models\Division;
use App\Http\Controllers\DivisionController;


Route::get('/', function () {
    $divisions = Division::all();
    return view('home', compact('divisions'));
})->name('home');


Route::get('/tes', function(){
    return view('tes');
});

Route::get('/divisions/{slug}', [DivisionController::class, 'show'])
    ->name('divisions.show');

