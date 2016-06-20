<?php

namespace App\Http\Controllers;

use App\FavoriteStock;
use App\Http\Requests;
use Illuminate\Http\Request;

class FavoriteStockController extends Controller
{

    public function add(Request $request)
    {
        $exists = FavoriteStock::where(['stock' => $request->get('acronym')])->exists();
        if ($exists) {
            return redirect()->back()->withSuccess('Already favorited!');
        }
        FavoriteStock::create(['stock' => $request->get('acronym')]);
        return redirect()->back()->withSuccess('Stock favorited!');
    }
}
