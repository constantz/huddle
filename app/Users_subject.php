<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_subject extends Model
{
    public function subject()
       {
        return $this->belongsTo(Subject::class);
       } 
}
