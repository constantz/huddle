<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edumat extends Model
{
    protected $guarded = [
    
     ];

     public function subject()
     {
        return $this->belongsTo(Subject::class);
    }
    
    public function datalinks()
    {
       return $this->hasMany(Datalinks::class);
   }

}