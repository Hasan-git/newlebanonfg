<?php

namespace App\Http\Controllers;

use App\matchstat;
use Illuminate\Http\Request;
use DB;

class MatchstatController extends Controller
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
     * @param  \App\matchstat  $matchstat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $match = DB::table('tblmatches')->where('MatchId', $id)->First();

        $team1 = DB::table('tblclubstats')->where([ ['club', $match->Team1], ['matchId', $id] ])->First();

        $team2 = DB::table('tblclubstats')->where([ ['club', $match->Team2], ['matchId', $id] ])->First();

        return view('matchstats', compact('match', 'team1', 'team2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\matchstat  $matchstat
     * @return \Illuminate\Http\Response
     */
    public function edit(matchstat $matchstat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\matchstat  $matchstat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matchstat $matchstat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\matchstat  $matchstat
     * @return \Illuminate\Http\Response
     */
    public function destroy(matchstat $matchstat)
    {
        //
    }
}
