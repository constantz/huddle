<?php

namespace App\Http\Controllers;

use App\Users_subject;
use App\User;
use App\Subject;
use Illuminate\Http\Request;
use Session;

class UsersSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersSubjects = Users_subject::all();
        
            return view('/users/students', compact('usersSubjects')); 
    }

    public function indexteacher()
    {  
        $usersSubjects = Users_subject::all();

        $user = User::all();

            return view('/users/studentsindex', compact('usersSubjects', 'user'));
    }

    public function indexdelete()
    {  
            return view('/users/userSubjectDelete', compact('usersSubjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
     {
        Users_subject::create([
            'user_id' => request('user_id'),
            'subject_id' => request('subject_id'),
            'passed'=> 0
            ]);
           
                return redirect()->action('UsersSubjectController@indexteacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Subject $subject)
    {
        $subjects = Subject::all();

            return view('/users/usersSubjectCreate', compact( 'id', 'subjects'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users_subject $usersSubject)
    {
        $usersSubject->update([
            'passed' => request()->has('passed')
        ]);

            return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responsename="submit"
     */
    public function destroy(users_subject $usersSubject)
    {
        $usersSubject->delete();
        
            return back();
    }
}
