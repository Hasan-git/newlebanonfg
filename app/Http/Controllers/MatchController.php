<?php

namespace App\Http\Controllers;

use App\match;
use Illuminate\Http\Request;
use DB;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seasons = DB::table('tblleague')->orderBy('League', 'DESC')->First();

        $matches = DB::table('tblmatches')
            ->where([['Degree', 'Division 1'], ['League', $seasons->League] ])
            ->orderBy('MatchDate', 'DESC')
            ->orderBy('MatchTime', 'DESC')
            ->paginate(12);

        return view('matches', compact('types', 'seasons', 'matches'));
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
     * @param  \App\match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(match $match)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(match $match)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, match $match)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(match $match)
    {
        //
    }
}
