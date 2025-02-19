<?php

namespace App\Http\Controllers;

use App\Models\BulletinBoard;
use App\Models\Information;
use App\Models\Notice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $all_information = Information::latest()->get();
        $all_boards = BulletinBoard::latest()->get();
        $all_notices = Notice::latest()->get();
        return view('home', compact('all_information', 'all_boards', 'all_notices'));
    }

}
