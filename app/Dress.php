<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    //

    // Collegamento a quale tabella andarsi a riferire (regola inglese della s)
    // protected $table = 'abbigliamento';

    protected $fillable = ['name', 'color', 'description', 'size', 'price', 'season'];
}
