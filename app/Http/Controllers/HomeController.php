<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portafolio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolios = Portafolio::orderBy('id', 'DESC')->get();
        return view('welcome', ['portafolios' => $portafolios]);
    }
}
