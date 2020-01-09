<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function sales()
    {
        return $this->hasMany(Sales::class);
    }
}
