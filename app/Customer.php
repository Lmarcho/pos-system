<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function sales()
    {
        return $this->hasMany(Sales::class);
    }
}
