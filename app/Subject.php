<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function users_subject()
     {
        return $this->hasMany(Users_subject::class);
    }
}
