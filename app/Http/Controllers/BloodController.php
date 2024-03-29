<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use Illuminate\Http\Request;
use App\Http\Requests\BloodRequest;
class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blood = Blood::orderBy('id', 'desc')->get();
      
        return view('admin.blood.index',['blood'=>$blood]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blood.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BloodRequest $request)
    {
        //
        $blood = Blood::create($request->all());
     
        return redirect()->route('blood.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function show(Blood $blood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function edit(Blood $blood)
    {
        //
        return view('admin.blood.edit',[
            'edit' => $blood
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function update(BloodRequest $request, Blood $blood)
    {
        //
        $blood->update($request->all());
       
        
        return redirect()->route('blood.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blood $blood)
    {
        //
        $blood->delete();
        return redirect()->route('blood.index')->with('status','Data deleted successfully!');
    }
}
