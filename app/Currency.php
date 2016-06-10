<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $primaryKey = 'code';

    public $incrementing = false;

    protected $fillable = ['name', 'code'];
}
