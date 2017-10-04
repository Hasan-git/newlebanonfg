<?php

namespace App\Http\Controllers;

use App\tblclubstat;
use Illuminate\Http\Request;
use DB;

class TblclubstatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\tblclubstat  $tblclubstat
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
        $clubs = DB::table('tblteams')
            ->select(DB::raw('TeamName, division, history, established, stadium, coach, president'))
            ->where('TeamId', $Id)
            ->First();

        $perf = DB::table('tblclubstats')
            ->select(DB::raw('count(club) as matches, sum(win) as wins, sum(lose) as loses, sum(draw) as draws, sum(cleanSheet) as clean, club'))
            ->where('club', $clubs->TeamName)
            ->groupBy('club')
            ->First();

        $clubstats = DB::table('tblclubstats')
            ->select(DB::raw('count(club) as matches, sum(win) as win, sum(lose) as lose, sum(draw) as draw, sum(goalsFor) as goalsFor, sum(goalsAgainst) as goalsAgainst, sum(cleanSheet) as cleanSheet, sum(saves) as saves, sum(assists) as assists, sum(yellowCards) as yellowCards, sum(redCards) as redCards, sum(shots) as shots, sum(offsides) as offsides, club, League'))
            ->where('club', $clubs->TeamName)
            ->orderBy('League', 'DESC')
            ->groupBy('club', 'League')
            ->get();

        $players = DB::table('tblplayer')->where('club', $clubs->TeamName)->orderBy('PlayerName', 'ASC')->get();

        $matches = DB::table('tblmatches')->where('Team1', $clubs->TeamName)->orWhere('Team2', $clubs->TeamName)->orderBy('MatchDate', 'DESC')->get();

        (!empty($perf)) ? $perf = $perf : $perf = 'Null';
        (!empty($clubstats)) ? $clubstats = $clubstats : $clubstats = 'Null';
        (!empty($players)) ? $players = $players : $players = 'Null';
        (!empty($matches)) ? $matches = $matches : $matches = 'Null';

        return view('clubstats', compact('clubstats', 'perf', 'clubs', 'players', 'matches'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tblclubstat  $tblclubstat
     * @return \Illuminate\Http\Response
     */
    public function edit(tblclubstat $tblclubstat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tblclubstat  $tblclubstat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tblclubstat $tblclubstat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tblclubstat  $tblclubstat
     * @return \Illuminate\Http\Response
     */
    public function destroy(tblclubstat $tblclubstat)
    {
        //
    }
}
