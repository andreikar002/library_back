<?php

namespace App\Http\Controllers;

use App\Models\Shelf;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function index()
    {
        return response()->json(Shelf::all());
    }

    public function store(Request $request)
    {
        Shelf::create($request->all());

        return response()->json('Added shelf');
    }
}
