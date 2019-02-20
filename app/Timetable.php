<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{   
    protected $table = "timetable";
    protected $fillable = ['date','start_time','end_time', 'subject_id', 'group_id'];
	
	public function subject()
    {
       return $this->belongsTo(Subject::class);
	}
}
