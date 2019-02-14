<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_subject extends Model
{
<<<<<<< HEAD
    protected $table = "users_subjects";
	protected $fillable = ['user_id', 'subject_id', 'passed'];
=======
    public function subject()
       {
        return $this->belongsTo(Subject::class);
       } 
>>>>>>> 330a018f143da1327ce100c8ab00ef720e2a6ad0
}
