<?php

namespace App\Http\Controllers;

use App\Diskusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->only('edit'); // try
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Diskusi::all();
        return view('forum.index')->with('diskusi',$data);
    }
}
