<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function progress()
    {
        return view('progress');
    }

    public function students()
    {
        return view('students');
    }
}
