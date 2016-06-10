<?php

namespace App\Http\Controllers\Api;

use App\CurrencyRate;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class RateController extends Controller
{
    public function index($currency, $when = null)
    {
        $when = Carbon::parse($when);
        $data = CurrencyRate::rates($currency, $when)
            ->latest()
            ->get();
        return response()->json(compact('data'));
    }
}
