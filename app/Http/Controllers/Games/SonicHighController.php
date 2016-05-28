<?php

namespace App\Http\Controllers\Games;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class SonicHighController extends Controller
{
    public function index()
    {
        return view('app.games.sonichighschool');
    }

    public function download()
    {
        $path = storage_path('app/games/SonicHighSchool.7z');
        $filename = 'Sonic High School.7z';
        $headers = ['Content-Type: application/x-7z-compressed'];
        return Response::download($path, $filename, $headers);
    }
}
