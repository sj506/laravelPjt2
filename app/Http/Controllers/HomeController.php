<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('boards')->get();;
        // $data = array(
        // 'title' => $data->title,
        // 'ctnt' => $data->ctnt
        // );
        return view('home', compact('data'));
        // return response()->json($data);
    }

    public function main() 
    {
        return view('welcome');
    }
}
