<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seasons = DB::table('tblleague')->orderBy('League', 'DESC')->First();

        (!empty($seasons)) ? $seasons = $seasons : $seasons = 'Null';

        $homematch = DB::table('tblmatches')
            ->where([['Degree', 'Division 1'], ['League', $seasons->League], ['home', 1], ['score', Null] ])
            ->orderBy('MatchDate', 'ASC')
            ->orderBy('MatchTime', 'ASC')
            ->First();

        (!empty($homematch)) ? $homematch = $homematch : $homematch = 'Null';

        if($homematch != 'Null') {
            $team1 = DB::table('tblteams')->where('TeamName', $homematch->Team1)->First();
            $team2 = DB::table('tblteams')->where('TeamName', $homematch->Team2)->First();
        }

        (!empty($team1)) ? $team1 = $team1 : $team1 = 'Null';
        (!empty($team2)) ? $team2 = $team2 : $team2 = 'Null';

        $matches = DB::table('tblmatches')
            ->where([['Degree', 'Division 1'], ['League', $seasons->League], ['score', Null] ])
            ->orderBy('MatchDate', 'ASC')
            ->orderBy('MatchTime', 'ASC')
            ->paginate(6);

        (!empty($matches)) ? $matches = $matches : $matches = 'Null';

        $results = DB::table('tblmatches')
            ->where([['Degree', 'Division 1'], ['League', $seasons->League], ['score', '!=', Null] ])
            ->orderBy('MatchDate', 'DESC')
            ->orderBy('MatchTime', 'DESC')
            ->paginate(6);

        (!empty($results)) ? $results = $results : $results = 'Null';

        $news = DB::table('tblarticle')->where('view', 1)->orderBy('ArticleId', 'DESC')->paginate(9);

        (!empty($news)) ? $news = $news : $news = 'Null';

        $ranks = DB::table('tblclubstats')
            ->select(DB::raw('sum(points) as points, sum(goalsDiff) as diff, club, League'))
            ->where('League', $seasons->League)
            ->orderBy('points', 'DESC')
            ->orderBy('diff', 'DESC')
            ->groupBy('club', 'League')
            ->get();

        (!empty($ranks)) ? $ranks = $ranks : $ranks = 'Null';

        $scores = DB::table('tblplayerstats')
            ->select(DB::raw('sum(goals) as goals, player, League'))
            ->where([ ['League', $seasons->League], ['goals', '>', 0] ])
            ->orderBy('goals', 'DESC')
            ->groupBy('player', 'League')
            ->paginate(3);

        $assists = DB::table('tblplayerstats')
            ->select(DB::raw('sum(assists) as assists, player, League'))
            ->where([ ['League', $seasons->League], ['assists', '>', 0] ])
            ->orderBy('assists', 'DESC')
            ->groupBy('player', 'League')
            ->paginate(3);

        (!empty($scores)) ? $scores = $scores : $scores = 'Null';
        (!empty($assists)) ? $assists = $assists : $assists = 'Null';

        $poll = DB::table('polls')->orderBy('id', 'DESC')->First();

        return view('home', compact('seasons', 'homematch', 'team1', 'team2', 'matches', 'results', 'news', 'ranks', 'scores', 'assists', 'poll'));
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
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
