<?php

namespace App\Http\Controllers;

use App\tblabout;
use Illuminate\Http\Request;
use DB;

class TblaboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = DB::table('tblabout')->first();
        return view('about', compact('about'));
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
     * @param  \App\tblabout  $tblabout
     * @return \Illuminate\Http\Response
     */
    public function show(tblabout $tblabout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tblabout  $tblabout
     * @return \Illuminate\Http\Response
     */
    public function edit(tblabout $tblabout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tblabout  $tblabout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tblabout $tblabout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tblabout  $tblabout
     * @return \Illuminate\Http\Response
     */
    public function destroy(tblabout $tblabout)
    {
        //
    }
}
