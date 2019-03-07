<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $table = "subjects";
    protected $fillable = ['name'];
    
    public function users_subject()
     {
        return $this->hasMany(Users_subject::class);
    }
	
	public function timetable()
     {
        return $this->hasMany(Timetable::class);
    }

    public function edumat()
     {
        return $this->hasMany(Edumat::class);
    }
}