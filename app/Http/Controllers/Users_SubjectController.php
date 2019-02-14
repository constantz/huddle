<?php

//niet gebruiken maar UsersSubjectController.php
namespace App\Http\Controllers;

use App\Users_subject;
use App\User;
use Illuminate\Http\Request;

class UsersSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usersSubjects = Users_subject::all();
        
        return view('/users/students', compact('usersSubjects'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $us = new Users_subject();
        $us->user_id = Auth::user()->id;
        $us->subject_id = Auth::subject()->id;
        $us->passed = 1;

        $us->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users_subject  $usersubject
     * @return \Illuminate\Http\Response
     */
    public function show(Users_subject $usersubject)
    {
        $us = Users_subject::where('id', "*")->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users_subject  $usersubject
     * @return \Illuminate\Http\Response
     */
    public function edit(Users_subject $usersubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users_subject  $usersubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users_subject $usersubject)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users_subject  $usersubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users_subject $usersubject)
    {
        //
    }
}
