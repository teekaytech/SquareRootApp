<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class SquareRootController extends Controller
{
    /**
     * Gets input and calculates it square root.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), ['input' => 'required|numeric']);

        if ($validator->fails()) { return response('Invalid tata type', 401); }

        return response(sqrt($request->input('input')), 200);
    }
}
