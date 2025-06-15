<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Game;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::where('user_id', 1)->get();
        return view('competitions/index', compact('competitions'));
    }

    public function create() {
        return view('competitions.create');
    }

    public function store(Request $request) {
        $competition = new Competition();
        $competition->name = $request->name;
        $competition->date = $request->date;
        $competition->session = $request->session;
        $competition->status = $request->status;
        $competition->user_id = 1;
        $competition->save();

        return redirect()->route('competitions.show', $competition);
    }

    public function show(Competition $competition) {
        return view('competitions.show', compact('competition'));
    }

    public function edit(Competition $competition) {
        return view('competitions.edit', compact('competition'));
    }

    public function update(Request $request, Competition $competition) {
        $competition->name = $request->name;
        $competition->date = $request->date;
        $competition->session = $request->session;
        $competition->status = $request->status;
        $competition->save();

        return redirect()->route('competitions.show', $competition);
    }

    public function destroy(Competition $competition) {
        $name = $competition->name;
        $competition->delete();

        return view('competitions.deleted', compact('name'));
    }

    public function display (Competition $competition) {
        $matches = Game::where('competition_id', $competition->id)->get();
        return view('competitions.display', compact('competition', 'matches'));
    }
}
