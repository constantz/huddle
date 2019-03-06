<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use \App\Edumat;
use \App\Datalinks;

class EdumatsController extends Controller
{
    public function index(){

        $edumats=Edumat::all();
    
        
    
        return view('/edumat', compact('edumats'));
        }

    public function create()
    {
        return view('/edumatCreate', compact('edumats'));
    }

   
    public function store(Request $request)
    {
        
        Edumat::create([
            'subject_id' => request('subject_id'),
            'name' => request('name'),
            'content' =>request('content')
            ]);

            return redirect('/edumat');
    }

    
    public function show(Edumat $edumat)
    {
       
        return view('/edumatShow', compact('edumat', 'datalinks'));
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

            return redirect('/edumat');
    }
}