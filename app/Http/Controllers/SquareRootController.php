<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquareRootController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->validate($request, ['input' => 'required', 'integer']);
        return sqrt($request->input('input'));
    }
}
