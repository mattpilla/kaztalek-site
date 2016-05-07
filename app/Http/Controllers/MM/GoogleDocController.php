<?php

namespace App\Http\Controllers\MM;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoogleDocController extends Controller
{
    public function scene()
    {
        return view('app.mm.scenes');
    }
}
