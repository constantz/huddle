<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdumatsController extends Controller
{
    public function edumat(){

        $edumats = \App\Edumat::all();
    
        
    
        return view('users/edumat', compact('edumats'));
        }
}
