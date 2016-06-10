<?php

namespace App\Http\Controllers\Api;

use App\CurrencyRate;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TodayController extends Controller
{
    public function index()
    {
        $rates = CurrencyRate::where('created_at', '>=', Carbon::today())->get();
        return response()->json(compact('rates'));
    }
}
