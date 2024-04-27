<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function submit(Request $request)
    {
        $speed = $request->speed;
        Video::create([
            'speed' =>$speed,
        ]);
        return response()->json(['status'=>200,'speed'=>$speed]);
    }
}
