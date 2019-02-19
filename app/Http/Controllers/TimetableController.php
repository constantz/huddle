<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Timetable;

class TimetableController extends Controller
{
	public function index()
    {
		$timetables = [];
		$data = Timetable::all();
		if($data->count()){
			foreach ($data as $key => $value) {
				$timetables[] = Calendar::timetable(
					$value->title,
					true,
					new \DateTime($value->start_time),
					new \DateTime($value->end_time.' +1 day')
				);
			}
		}
	$calendar = Calendar::addTimetables($timetables); 
	return view('viewtimetable', compact('calendar'));
    }
}
