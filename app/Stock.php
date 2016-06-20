<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $primaryKey = 'acronym';

    public $incrementing = false;

    protected $fillable = ['acronym', 'name'];
}
