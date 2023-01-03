<?php

namespace App\Http\Controllers;

use App\Models\Va;
use Illuminate\Http\Request;

class VasController extends Controller
{
    public function add()
    {
        return view('va/add-va');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'about' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $va = new Va();

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $data = $request->only(['name', 'about']);
        $va->fill($data);
        $va->image = $imageName;
        $va->save();
        return redirect('/vas');
    }

    public function edit(Va $va)
    {
        return view('va/edit-va', compact('va'));
    }

    public function update(Request $request, Va $va)
    {
        if(isset($_POST['delete'])) {
            $va->delete();
            return redirect('/vas');
        }
        else
        {
            $this->validate($request, [
                'name' => 'required',
                'about' => 'required',
                'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            if (isset($request->image)) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
            }

            $data = $request->only(['name', 'about']);
            $va->fill($data);
            $va->image = $imageName ?? $va->image;
            $va->save();
            return redirect('/vas');
        }
    }
}
