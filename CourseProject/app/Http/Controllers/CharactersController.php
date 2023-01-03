<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function add()
    {
        return view('character/add-character');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'about' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'anime_id' => 'required|exists:animes,id',
            'va_id' => 'required|exists:vas,id',
        ]);

        $character = new Character();

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $data = $request->only(['name', 'about', 'anime_id', 'va_id']);
        $character->fill($data);
        $character->image = $imageName;
        $character->save();
        return redirect('/characters');
    }

    public function edit(Character $character)
    {
        return view('character/edit-character', compact('character'));
    }

    public function update(Request $request, Character $character)
    {
        if(isset($_POST['delete'])) {
            $character->delete();
            return redirect('/vas');
        }
        else
        {
            $this->validate($request, [
                'name' => 'required',
                'about' => 'required',
                'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'anime_id' => 'required|exists:animes,id',
                'va_id' => 'required|exists:vas,id',
            ]);

            if (isset($request->image)) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
            }

            $data = $request->only(['name', 'about', 'anime_id', 'va_id']);
            $character->fill($data);
            $character->image = $imageName ?? $character->image;
            $character->save();
            return redirect('/characters');
        }
    }
}
