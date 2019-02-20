<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Timetable;
use App\Subject;

class TimetableindexController extends Controller
{
	 public function index()
    {
		$timetable = Timetable::get();
		
		$subject = Subject::all();
		
		return view('timetableindex', ['timetable' => $timetable, 'subject' => $subject]);
    }
}
