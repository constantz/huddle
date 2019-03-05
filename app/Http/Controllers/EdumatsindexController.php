<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdumatsindexController extends Controller
{
    public function edumat(){
        dd('hoi');

        $edumats = \App\Edumat::all();
    
        
    
        return view('users/edumatindex', compact('edumats'));
        }
}
