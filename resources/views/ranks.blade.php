
@extends('layout.master')

@section('title','LFG - Ranks')

@section('body')

        <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Rank Tables</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="/">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="">Rank Tables</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <div class="point-table-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="point-table-area">
                        <div class="point-title-area">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th width="20%" scope="row">{{$season->League}}</th>
                                    <th width="10%" class="text-center">Plays</th>
                                    <th width="10%" class="text-center">Win</th>
                                    <th width="10%" class="text-center">Draw</th>
                                    <th width="10%" class="text-center">Lose</th>
                                    <th width="10%" class="text-center">For</th>
                                    <th width="10%" class="text-center">Against</th>
                                    <th width="10%" class="text-center">Goal dif.</th>
                                    <th width="10%" class="text-center">Points</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="point-itmes">
                            <table class="table table-striped-inverse point-table">
                                <tbody>
                                @if($ranks != 'Null')
                                  @foreach($ranks as $rank)
                                    <tr>
                                        <th data-th="Group A" width="20%" scope="row">
                                            <img src="images/flag2.png" alt="" />
                                            <span>{{$rank->club}}</span>
                                        </th>
                                        <td data-th="Playered" width="10%" class="text-center">{{$rank->matches}}</td>
                                        <td data-th="Win" width="10%" class="text-center">{{$rank->win}}</td>
                                        <td data-th="Draw" width="10%" class="text-center">{{$rank->draw}}</td>
                                        <td data-th="Lose" width="10%" class="text-center">{{$rank->lose}}</td>
                                        <td data-th="For" width="10%" class="text-center">{{$rank->goalsFor}}</td>
                                        <td data-th="Against" width="10%" class="text-center">{{$rank->goalsAgainst}}</td>
                                        <td data-th="Goal dif." width="10%" class="text-center">{{$rank->diff}}</td>
                                        <td data-th="Points" width="10%" class="text-center">{{$rank->points}}</td>
                                    </tr>
                                  @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div class="point-table-button text-center">
                                <a href="/matches">View Matches <i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="point-table-area col-sm-6">
                        <div class="point-title-area">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th width="20%" scope="row">Scorrer</th>
                                    <th width="10%" class="text-center">Goals</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="point-itmes">
                            <table class="table table-striped-inverse point-table">
                                <tbody>
                                @if($goals != 'Null')
                                  @foreach($goals as $goal)
                                    @if($goal->goals > 0)
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/players/{{$goal->player}}.png" alt="" width="40" height="40" />
                                                <span>{{$goal->player}}</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">{{$goal->goals}}</td>
                                        </tr>
                                    @endif
                                  @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div class="point-table-button text-center">
                                <a href="">View All <i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="point-table-area col-sm-6">
                        <div class="point-title-area">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th width="20%" scope="row">Assester</th>
                                    <th width="10%" class="text-center">Assists</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="point-itmes">
                            <table class="table table-striped-inverse point-table">
                                <tbody>
                                @if($assists != 'Null')
                                  @foreach($assists as $assist)
                                    @if($assist->assists > 0)
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/players/{{$assist->player}}.png" alt="" width="40" height="40" />
                                                <span>{{$assist->player}}</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">{{$assist->assists}}</td>
                                        </tr>
                                    @endif
                                  @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div class="point-table-button text-center">
                                <a href="">View All <i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection