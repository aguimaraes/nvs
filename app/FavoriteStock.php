<?php

namespace App;

use App\Stock;
use Illuminate\Database\Eloquent\Model;

class FavoriteStock extends Model
{
    protected $fillable = ['stock'];

    public function stock()
    {
        return $this->hasOne(Stock::class, 'acronym', 'stock');
    }
}
