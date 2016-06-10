<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CurrencyRate extends Model
{
    protected $fillable = ['code', 'value', 'from'];

    public function scopeRates($query, Currency $currency, Carbon $when, $base = 'USD')
    {
        return $query->where('created_at', '>=', clone $when->startOfDay())
            ->where('created_at', '<=', $when->endOfDay())
            ->where('from', $base)
            ->where('code', $currency->code);
    }
}
