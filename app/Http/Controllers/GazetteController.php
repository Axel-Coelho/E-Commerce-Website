<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class GazetteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gazette');
    }
}
