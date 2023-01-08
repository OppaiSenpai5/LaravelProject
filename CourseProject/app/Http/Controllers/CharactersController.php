<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function details(Character $character)
    {
        return view('character/details-character', compact('character'));
    }
}
