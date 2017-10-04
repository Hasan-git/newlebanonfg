<?php

namespace App\Http\Controllers;

use App\tblplayerstat;
use Illuminate\Http\Request;
use DB;

class TblplayerstatController extends Controller
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
     * @param  \App\tblplayerstat  $tblplayerstat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = DB::table('tblplayer')->where('PlayerId', $id)->First();

//        $player = DB::table('tblplayerstats')->where('player', $player->PlayerName)->First();

        $perfs = DB::table('tblplayerstats')
            ->select(DB::raw('count(player) as matches, sum(starter) as starter, sum(subin) as subin, sum(subout) as subout, sum(goals) as goals, player, League'))
            ->where('player', $player->PlayerName)
            ->orderBy('League', 'DESC')
            ->groupBy('player', 'League')
            ->First();

        $goals = DB::table('tblplayerstats')
            ->select(DB::raw('sum(goals) as goals, League'))
            ->orderBy('League', 'DESC')
            ->groupBy('League')
            ->First();

        $stats = DB::table('tblplayerstats')
            ->select(DB::raw('count(player) as matches, sum(starter) as starter, sum(subin) as subin, sum(subout) as subout, sum(goals) as goals, sum(minutesPlayed) as minutes, sum(assists) as assists, sum(yellowCard) as yellow, sum(redCard) as red, player, League'))
            ->where('player', $player->PlayerName)
            ->orderBy('League', 'DESC')
            ->groupBy('player', 'League')
            ->get();

        (!empty($perfs)) ? $perfs = $perfs : $perfs = 'Null';
        (!empty($goals)) ? $goals = $goals : $goals = 'Null';
        (!empty($stats)) ? $stats = $stats : $stats = 'Null';

        return view('playerstats', compact('player', 'perfs', 'goals', 'stats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tblplayerstat  $tblplayerstat
     * @return \Illuminate\Http\Response
     */
    public function edit(tblplayerstat $tblplayerstat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tblplayerstat  $tblplayerstat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tblplayerstat $tblplayerstat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tblplayerstat  $tblplayerstat
     * @return \Illuminate\Http\Response
     */
    public function destroy(tblplayerstat $tblplayerstat)
    {
        //
    }
}
