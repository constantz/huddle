<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use \App\Edumat;
use \App\Datalinks;
use \App\Internetlink;
use \App\Subject;

class EdumatsController extends Controller
{
    public function index()
    {
        $edumats=Edumat::all();

            return view('/edumat', compact('edumats'));
    }

    public function create()
    {   
        $subjects = Subject::all();
        return view('/edumatCreate', ['subjects' => $subjects], compact('edumats'));
    }

   
    public function store(Request $request)
    {
        Edumat::create([
            'subject_id' => request('subject_id'),
            'name' => request('name'),
            'content' =>request('content')
            ]);

            return redirect('/subjects');
    }

    
    public function show(Edumat $edumat)
    {
            return view('/edumatShow', compact('edumat', 'datalinks', 'internetlink'));
    }

    
    public function edit(Edumat $edumat)
    {
            return view('/edumatEdit', compact('edumat'));
    }

    
    public function update(Request $request, Edumat $edumat)
    {
        $edumat->update([
            'subject_id' => request('subject_id'),
            'name' => request('name'),
            'content' =>request('content')
            ]);

            return redirect('/edumat');
    }

      
    public function destroy(Edumat $edumat)
    {
        $edumat->delete();

            return back();
    }
}