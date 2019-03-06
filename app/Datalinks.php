<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datalinks extends Model
{
    protected $guarded = [
    
    ];


    public function edumat()
     {
        return $this->belongsTo(Edumat::class);
    }
}
