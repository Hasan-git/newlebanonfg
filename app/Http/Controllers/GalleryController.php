<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = DB::table('tblimagetypes')->where('ViewType', 1)->orderBy('Date', 'DESC')->paginate(9);

        return view('gallery', compact('gallery'));
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
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = DB::table('tblimagetypes')->where('TypeId', $id)->First();

        $pics = DB::table('tblgallery')->where([ ['Type', $types->Type], ['view', 1] ])->orderBy('GalleryId', 'DESC')->get();

        $recents = DB::table('tblimagetypes')->where([ ['ViewType', 1], ['Type', '!=', $types->Type] ])->orderBy('Date', 'DESC')->paginate(12);

        return view('pics', compact('pics', 'types', 'recents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
