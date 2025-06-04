<?php

namespace App\Http\Controllers;

use App\Models\Archers;
use App\Models\Divisions;
use Illuminate\Http\Request;

class ArcherController extends Controller
{
    public function index()
    {
        $archers = Archers::all(); //->where('status', 1);
        return view('archers', compact('archers'));
    }

    public function create() {
        $divisions = Divisions::all();
        return view('archers.create', compact('divisions'));
    }

    public function store(Request $request) {
        $archer = new Archers();
        $archer->userid = 1;
        $archer->name = $request->name;
        $archer->license = $request->license;
        $archer->division = $request->division;
        $archer->status = $request->status;
        $archer->save();

        return redirect()->route('archers.index');
    }

    public function show($id) {
        $archer = Archers::find($id);
        $division = Divisions::find($archer->division);
        return view('archers.show', compact('archer', 'division'));
    }
}
