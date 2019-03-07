<?php

namespace App\Http\Controllers;

use App\Internetlink;
use App\Edumat;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class InternetlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internetlinks=Internetlink::all();
     
        
        return view ('/edumatShow', compact('internetlinks'));
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
        Internetlink::create([
            'edumat_id' => request('edumat_id'),
            'url'=> request('url')
        ]);

        return back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Internetlink  $internetlink
     * @return \Illuminate\Http\Response
     */
    public function show(internetlink $internetlink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Internetlink  $internetlink
     * @return \Illuminate\Http\Response
     */
    public function edit(internetlink $internetlink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Internetlink  $internetlink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, internetlink $internetlink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Internetlink  $internetlink
     * @return \Illuminate\Http\Response
     */
    public function destroy(internetlink $internetlink)
    {
        $internetlink->delete();

        return back();
    }
}
