<?php

namespace App\Http\Controllers;

use App\Stock;
use App\FavoriteStock;
use App\Http\Requests;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        $favorites = FavoriteStock::all();
        return view('home', compact('stocks', 'favorites'));
    }
}
