<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquareRootController extends Controller
{
    /**
     * Gets input and calculates it square root.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $val = $request->input('input');
        if(is_int(intval($val))) { return response(sqrt($val), 200); }
        else { return response('Invalid tata type', 401); }
    }
}
