<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Timetable;
use App\Subject;

class TimetableController extends Controller
{
	 public function index()
    {
		$timetable = Timetable::get();
		
		$subject = Subject::all();
		
		return view('timetable', ['timetable' => $timetable, 'subject' => $subject]);
    }
}
