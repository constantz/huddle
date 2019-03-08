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
				$timetable = Timetable::orderBy('date')->get();
			
				$subject = Subject::all();
			
						return view('timetable', ['timetable' => $timetable, 'subject' => $subject]);
		}
		
		public function create()
		{
				$subjects = Subject::all();

						return view('createtimetable', ['subjects' => $subjects]);
		}

		public function store()
		{

				Timetable::create([
						'date' => request('date'),
						'start_time' => request('start_time'),
						'end_time' => request('end_time'),
						'subject_id' => request('subject_id'),
						'group_id' => 1
				]);

						return redirect('/timetable');	
		}

		public function edit(Timetable $timetable)
		{
				$subjects = Subject::all();

						return view('edittimetable', ['timetable' => $timetable, 'subjects' => $subjects]);
		}

		public function update(Timetable $timetable)
		{
				$timetable->date = request('date');
				$timetable->start_time = request('start_time');
				$timetable->end_time = request('end_time');
				$timetable->subject_id = request('subject_id');
				$timetable->group_id = 1;
				$timetable->save();
			
						return redirect('/timetable');
		}

		public function destroy(Timetable $timetable) 
		{

				$timetable->delete();

						return redirect('/timetable');
		}

}
