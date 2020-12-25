<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Line extends Controller
{
    //
    function index(){
        $res = 'successs!!';
        $statusCode = 200;
        return response()->json($res, $statusCode, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }
}
