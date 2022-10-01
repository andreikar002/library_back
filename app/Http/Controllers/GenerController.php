<?php

namespace App\Http\Controllers;

use App\Models\Gener;
use Illuminate\Http\Request;

class GenerController extends Controller
{
    public function index()
    {
        return response()->json(Gener::all());
    }

    public function store(Request $request)
    {
        Gener::create($request->all());

        return response()->json('Added gener');
    }
}
