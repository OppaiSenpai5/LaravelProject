<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimesController extends Controller
{
    public function add()
    {
        return view('anime/add-anime');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'episodes' => 'required',
            'duration' => 'required',
            'score' => 'required',
            'description' => 'required',
            'aired' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $anime = new Anime();

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $data = $request->only(['title', 'episodes', 'duration', 'score', 'description', 'aired']);
        $anime->fill($data);
        $anime->image = $imageName;
        $anime->save();
        return redirect('/animes');
    }

    public function edit(Anime $anime)
    {
        return view('anime/edit-anime', compact('anime'));
    }

    public function update(Request $request, Anime $anime)
    {
        if(isset($_POST['delete'])) {
            $anime->delete();
            return redirect('/animes');
        }
        else
        {
            $this->validate($request, [
                'title' => 'required',
                'episodes' => 'required',
                'duration' => 'required',
                'score' => 'required',
                'description' => 'required',
                'aired' => 'required',
                'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            if (isset($request->image)) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
            }

            $data = $request->only(['title', 'episodes', 'duration', 'score', 'description', 'aired']);
            $anime->fill($data);
            $anime->image = $imageName ?? $anime->image;
            $anime->save();
            return redirect('/animes');
        }
    }

    public function details(Anime $anime)
    {
        return view('anime/details-anime', compact('anime'));
    }
}
