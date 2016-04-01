<?php

namespace App\Http\Controllers\Games;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class CafdeController extends Controller
{
    public function index()
    {
        return view('app.games.cafde');
    }

    public function download()
    {
    	$path = storage_path('app/games/Cafde.7z');
    	$filename = 'Cafde.7z';
    	$headers = ['Content-Type: application/x-7z-compressed'];
    	return Response::download($path, $filename, $headers);
    }
}
