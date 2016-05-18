@extends('master')

@section('title', 'Dungeon')

@section('content')
    <div class="row">
        <div id="dungeon-banner" class="col-xs-12">
            <h2>Dungeon</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 game-info">
            <img src="/images/games/dungeon/git2.png" class="pull-left" />
            <a href="/games/dungeon/download" class="btn btn-lg btn-primary-ghost pull-right">Download</a>
            <h3>Dungeon</h3>
            <p>
                As the name suggests, <strong>Dungeon</strong> is a game that revolves around escaping a small dungeon. Unlike what you may expect, there are no enemies here. Rather, you'll find the act of escaping to be a puzzling matter. There's 2 items hidden throughout the dungeon. Use them to help complete your quest! You may find yourself visiting each room more than once...
            </p>
            <p>
                Move around with the arrow keys, interact with objects with the <strong>Z</strong> key, use the stick with <strong>X</strong>, and use the magnet with <strong>C</strong>.
            </p>
            <p>
                This Zelda-inspired project was made in a month, and finished in December 2012. The game is short; a first playthrough may take around 20 to 30 minutes.
            </p>
            <div class="requirements">
                <h4>Requirements:</h4>
                <span class="require">OS:</span> Windows <em>(Probably no older than XP)</em><br>
                <span class="require">Dependencies:</span> Java <em>(Sorry)</em><br>
                <span class="require">Space:</span> 6MB <em>(If you're on this page, you have enough room)</em>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="screen-holder">
                <img src="/images/games/dungeon/screen2.JPG" />
            </div>
        </div>
    </div>
@endsection
