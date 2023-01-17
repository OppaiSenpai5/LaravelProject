<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use Orchid\Filters\Filter;

class AnimesController extends Controller
{
    public function details(Anime $anime)
    {
        return view('anime/details-anime', compact('anime'));
    }

    public function list()
    {
        $animes = Anime::filters()->defaultSort('id')->paginate();

        return view('anime/animes', compact('animes'));
    }
}
