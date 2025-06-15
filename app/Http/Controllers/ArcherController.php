<?php

namespace App\Http\Controllers;

use App\Models\Archer;
use App\Models\Division;
use Illuminate\Http\Request;

class ArcherController extends Controller
{
    public function index()
    {
        $archers = Archer::with('division')->where('user_id', 1)->get();
        return view('archers.index', compact('archers'));
    }

    public function create() {
        $divisions = Division::all();
        return view('archers.create', compact('divisions'));
    }

    public function store(Request $request) {
        $archer = new Archer();
        $archer->user_id = 1;
        $archer->name = $request->name;
        $archer->surname = $request->surname;
        $archer->license = $request->license;
        $archer->division_id = $request->division;
        $archer->status = $request->status;
        $archer->save();

        return redirect()->route('archers.show', $archer);
    }

    public function show(Archer $archer) {
        return view('archers.show', compact('archer'));
    }

    public function edit(Archer $archer) {
        $divisions = Division::all();
        return view('archers.edit', compact('archer', 'divisions'));
    }

    public function update(Request $request, Archer $archer) {
        $archer->name = $request->name;
        $archer->surname = $request->surname;
        $archer->license = $request->license;
        $archer->division_id = $request->division;
        $archer->status = $request->status;
        $archer->save();

        return redirect()->route('archers.show', $archer);
    }

    public function destroy(Archer $archer) {
        $name = $archer->name;
        $archer->delete();

        return view('archers.deleted', compact('name'));
    }
}
