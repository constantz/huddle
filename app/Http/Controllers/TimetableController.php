<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Timetable;

class TimetableController extends Controller
{
	 public function index()
    {
    	$timetable = Timetable::get();

    	return view('timetable', ['timetables' => $timetable]);
    }
}
