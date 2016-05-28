<?php

namespace App\Http\Controllers\Games;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class DungeonController extends Controller
{
    public function index()
    {
        return view('app.games.dungeon');
    }

    public function download()
    {
        $path = storage_path('app/games/Dungeon1.2.7z');
        $filename = 'Dungeon1.2.7z';
        $headers = ['Content-Type: application/x-7z-compressed'];
        return Response::download($path, $filename, $headers);
    }
}
