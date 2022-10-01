<?php

namespace App\Http\Controllers;

use App\Models\DataOfIssue;
use Illuminate\Http\Request;

class DataOfIssueController extends Controller
{
    public function index()
    {
        return response()->json(DataOfIssue::all());
    }

    public function store(Request $request)
    {
        DataOfIssue::create($request->all());

        return response()->json('Added data of issue');
    }
}
