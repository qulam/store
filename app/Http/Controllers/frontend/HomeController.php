<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\http\controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/index');
    }
}
