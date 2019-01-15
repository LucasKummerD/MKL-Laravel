<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $guarded = [];

    public function records() 
    {
        return $this->hasOne(Products::class);
    }
}