<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function sales()
    {
        return $this->hasMany(Sales::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }

    //table name
    protected $table   ='stocks';
    // primary key 
    public $primaryKey  ='id';
    // timestamps
    public $timestamps  =true;
    

}
