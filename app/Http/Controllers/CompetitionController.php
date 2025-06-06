<?php

namespace App\Http\Controllers;

use App\Models\Competitions;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competitions::where('user_id', 1)->get();
        return view('competitions/index', compact('competitions'));
    }

    public function create() {
        return view('competitions.create');
    }

    public function store(Request $request) {
        $competition = new Competitions();
        $competition->name = $request->name;
        $competition->date = $request->date;
        $competition->session = $request->session;
        $competition->status = $request->status;
        $competition->user_id = 1;
        $competition->save();

        return redirect()->route('competitions.show', $competition);
    }

    public function show(Competitions $competition) {
        return view('competitions.show', compact('competition'));
    }

    public function edit(Competitions $competition) {
        return view('competitions.edit', compact('competition'));
    }

    public function update(Request $request, Competitions $competition) {
        $competition->name = $request->name;
        $competition->date = $request->date;
        $competition->session = $request->session;
        $competition->status = $request->status;
        $competition->save();

        return redirect()->route('competitions.show', $competition);
    }

    public function destroy(Competitions $competition) {
        $name = $competition->name;
        $competition->delete();

        return view('competitions.deleted', compact('name'));
    }
}
