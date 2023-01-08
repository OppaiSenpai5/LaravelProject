<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimesController extends Controller
{
    public function details(Anime $anime)
    {
        return view('anime/details-anime', compact('anime'));
    }
}
