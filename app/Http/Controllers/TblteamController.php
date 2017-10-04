<?php

namespace App\Http\Controllers;

use App\tblteam;
use Illuminate\Http\Request;
use DB;

class TblteamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = DB::table('tblteams')->where('division', 1)->get();
        return view('clubs', compact('clubs'));

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
     * @param  \App\tblteam  $tblteam
     * @return \Illuminate\Http\Response
     */
    public function show(tblteam $TeamId)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tblteam  $tblteam
     * @return \Illuminate\Http\Response
     */
    public function edit(tblteam $tblteam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tblteam  $tblteam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tblteam $tblteam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tblteam  $tblteam
     * @return \Illuminate\Http\Response
     */
    public function destroy(tblteam $tblteam)
    {
        //
    }
}
