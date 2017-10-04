<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::table('tblarticle')->where('view', 1)->orderBy('Date', 'DESC')->paginate(12);

        $lebanese = DB::table('tblarticle')->where([ ['type', 'Lebanese'], ['view', 1] ])->orderBy('Date', 'DESC')->paginate(12);

        $nations = DB::table('tblarticle')->where([ ['type', 'International'], ['view', 1] ])->orderBy('Date', 'DESC')->paginate(12);

        return view('news', compact('articles', 'lebanese', 'nations'));
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
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = DB::table('tblarticle')->where('ArticleId', $id)->First();

        $latests = DB::table('tblarticle')->where('view', 1)->orderBy('Date', 'DESC')->paginate(4);

        return view('single', compact('article', 'latests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
