<?php

namespace App\Http\Controllers;

use App\Models\Archer;
use App\Models\Competition;
use App\Models\Game;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Log;

class MatchController extends Controller
{
    public function create(Competition $competition) {
        $archers = Archer::where('user_id', 1)->get();
        return view('matches.create', compact('competition', 'archers'));
    }

    public function store (Request $request) {
        $match = new Game();
        $match->opponent = $request->opponent;
        $match->archer1 = $request->archer1;
        $match->archer2 = $request->archer2;
        $match->archer3 = $request->archer3;
        $match->competition_id = $request->competition_id;
        $match->match_number = 1;
        $match->save();
        $competition = Competition::find($match->competition_id);

        return redirect()->route('competitions.display', $competition);
    }

    // private function getMatchNumber($, $opponent) {
    //     $match_number = DB::table('matches')->where('competition_id', $competition_id)
    //         ->where('opponent', $opponent)->max('match_number') ?: 0;
    //     Log::info('match_number ' . $match_number);
    //     return $match_number + 1;
    // }
}
