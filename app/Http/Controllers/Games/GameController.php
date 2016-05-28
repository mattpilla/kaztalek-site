<?php

namespace App\Http\Controllers\Games;

use App\Http\Controllers\Controller;

class GameController extends Controller
{
    public function index()
    {
        return view('app.games.index');
    }
}
