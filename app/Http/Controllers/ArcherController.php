<?php

namespace App\Http\Controllers;

use App\Models\Archers;
use App\Models\Divisions;
use Illuminate\Http\Request;

class ArcherController extends Controller
{
    public function index()
    {
        $archers = Archers::with('division')->where('user_id', 1)->get();
        return view('archers', compact('archers'));
    }

    public function create() {
        $divisions = Divisions::all();
        return view('archers.create', compact('divisions'));
    }

    public function store(Request $request) {
        $archer = new Archers();
        $archer->user_id = 1;
        $archer->name = $request->name;
        $archer->surname = $request->surname;
        $archer->license = $request->license;
        $archer->division_id = $request->division;
        $archer->status = $request->status;
        $archer->save();

        return redirect()->route('archers.show', $archer);
    }

    public function show($id) {
        $archer = Archers::find($id);
        return view('archers.show', compact('archer'));
    }

    public function edit($id) {
        $archer = Archers::find($id);
        $divisions = Divisions::all();
        return view('archers.edit', compact('archer', 'divisions'));
    }

    public function update(Request $request, $id) {
        $archer = Archers::find($id);

        $archer->name = $request->name;
        $archer->surname = $request->surname;
        $archer->license = $request->license;
        $archer->division_id = $request->division;
        $archer->status = $request->status;
        $archer->save();

        return redirect()->route('archers.show', $archer);
    }

    public function destroy($id) {
        $archer = Archers::find($id);
        $name = $archer->name;
        $archer->delete();

        return view('archers.deleted', compact('name'));
    }
}
