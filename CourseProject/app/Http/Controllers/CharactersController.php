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

    public function list()
    {
        $characters = Character::filters()->defaultSort('id')->paginate(100);

        return view('character/characters', compact('characters'));
    }
}
