<?php

namespace App\Http\Controllers;

use App\Rank;
use Illuminate\Http\Request;
use DB;

class RankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $season = DB::table('tblleague')->orderBy('League', 'DESC')->First();

        $ranks = DB::table('tblclubstats')
            ->select(DB::raw('count(club) as matches, sum(win) as win, sum(lose) as lose, sum(draw) as draw, sum(goalsFor) as goalsFor, sum(goalsAgainst) as goalsAgainst, sum(points) as points, sum(goalsDiff) as diff, club, League'))
            ->where('League', $season->League)
            ->orderBy('points', 'DESC')
            ->orderBy('diff', 'DESC')
            ->groupBy('club', 'League')
            ->get();

        $goals = DB::table('tblplayerstats')
            ->select(DB::raw('sum(goals) as goals, player, League'))
            ->where('League', $season->League)
            ->orderBy('goals', 'DESC')
            ->groupBy('player', 'League')
            ->paginate(6);

        $assists = DB::table('tblplayerstats')
            ->select(DB::raw('sum(assists) as assists, player, League'))
            ->where('League', $season->League)
            ->orderBy('assists', 'DESC')
            ->groupBy('player', 'League')
            ->paginate(6);

        (!empty($ranks)) ? $ranks = $ranks : $ranks = 'Null';
        (!empty($goals)) ? $goals = $goals : $goals = 'Null';
        (!empty($assists)) ? $assists = $assists : $assists = 'Null';

        return view('ranks', compact('ranks', 'season', 'goals', 'assists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function show(Rank $rank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function edit(Rank $rank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rank $rank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rank $rank)
    {
        //
    }
}
