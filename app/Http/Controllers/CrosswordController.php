<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Crossword;
use Illuminate\Http\Request;

class CrosswordController extends Controller
{

    public function getObjectByDate(Request $request)
    {
        $request->validate([
            'date' => 'required|date_format:Y-m-d',
        ]);

        $date = $request->input('date');
        $object = Crossword::where('date', $date)->first();

        if (!$object) {
            return response()->json(['message' => 'Object not found'], 404);
        }

        return view('crossword', compact('object'));
    }

    public function store(Request $request)
    {
        Crossword::create([
            'answer' => $request->input('answer'),
            'clue' => $request->input('clue'),
            'length' => $request->input('length'),
            'date' => now(),
            'direction' => $request->input('direction'),
        ]);

        return redirect('/add')->with('success', 'Crossword clue created successfully.');
    }

}
