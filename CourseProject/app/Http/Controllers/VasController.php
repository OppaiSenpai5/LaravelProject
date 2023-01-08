<?php

namespace App\Http\Controllers;

use App\Models\Va;
use Illuminate\Http\Request;

class VasController extends Controller
{
    public function details(Va $va)
    {
        return view('va/details-va', compact('va'));
    }
}
