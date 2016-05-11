<?php

namespace App\Http\Controllers\MM;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoogleDocController extends Controller
{
    public function action()
    {
        return view('app.mm.actions');
    }

    public function scene()
    {
        return view('app.mm.scenes');
    }
}
