<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function show($slug)
{
    $division = Division::where('slug', $slug)
        ->with('programs','members','galleries') 
        ->firstOrFail();

    return view('show', compact('division'));
}

}
