<?php

namespace App\Http\Controllers;

use App\Datalinks;
use App\Edumat;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class DatalinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $datalinks=Datalinks::all();
     
        
        return view ('/edumatShow', compact('datalinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file= request('datalinks');
        Storage::disk('public')->put($file, 'Contents');
        Datalinks::create([
            'edumat_id' => request('edumat_id'),
            'datalinks' => request('datalinks')
        ]);

        return back();
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Datalinks  $datalinks
     * @return \Illuminate\Http\Response
     */
    public function show(Datalinks $datalinks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datalinks  $datalinks
     * @return \Illuminate\Http\Response
     */
    public function edit(Datalinks $datalinks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datalinks  $datalinks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datalinks $datalinks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datalinks  $datalinks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datalinks $datalink)
    {
        
        $file= $datalink->datalinks;
        Storage::disk('public')->delete($file, 'Contents');
        $datalink->delete();
      
        return back();
    }
}
