<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\http\controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend/main');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
