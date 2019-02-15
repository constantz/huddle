<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_subject extends Model
{
    protected $table = "users_subjects";
    protected $fillable = ['user_id', 'subject_id', 'passed'];
    
    public function subject()
       {
        return $this->belongsTo(Subject::class);
        
       }
    public function user()
       {
        
        return $this->belongsTo(User::class);
       }
       
       
}
