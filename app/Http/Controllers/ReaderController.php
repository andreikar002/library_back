<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function index()
    {
        return response()->json(Reader::all());
    }

    public function store(Request $request)
    {
        Reader::create($request->all());

        return response()->json('Added reader');
    }
}
