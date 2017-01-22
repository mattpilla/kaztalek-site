<?php

namespace App\Http\Controllers\Misc;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Misc\Unlisted;

class UnlistedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vids = Unlisted::all();
        $videos = [];
        foreach ($vids as $vid) {
            $json = file_get_contents(
                'https://www.googleapis.com/youtube/v3/videos?id='
                . $vid->id
                . '&key='
                . env('YOUTUBE_API', '')
                . '&part=snippet,status'
            );
            $vidDetails = json_decode($json);
            if (!count($vidDetails->items)) {
                break;
            }
            $vidDetails = $vidDetails->items[0];
            $status = $vidDetails->status->privacyStatus;
            if ($status == 'unlisted') {
                array_push($videos, [
                    'url' => 'https://www.youtube.com/watch?v=' . $vid->id,
                    'img' => $vidDetails->snippet->thumbnails->default->url,
                    'title' => $vidDetails->snippet->title,
                    'author' => $vidDetails->snippet->channelTitle
                ]);
            }
        }
        return view('app.misc.unlisted', ['videos' => $videos]);
    }
}
