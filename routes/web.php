<?php
use App\Models\Division;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $divisions = Division::all();
    return view('home', compact('divisions'));
});

Route::get('/tes', function(){
    return view('tes');
});
