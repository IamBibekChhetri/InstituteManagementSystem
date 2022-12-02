<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\course;
use App\Models\subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $subject = subject::all();
        return view('admin.subject.index', compact('i','subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batch = batch::whereStatus('on')->get();
        $course = course::whereStatus('on')->get();
        return view('admin.subject.create',compact('batch','course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $validated = $request->validate([
            
        'name' => ['required' ],        
    ]);
    
        $subject = subject::create($request->all());
        return redirect()->route('subject.index')
            ->with('success','Subject created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $subject)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $subject)
    {
        $batch = batch::whereStatus('on')->get();
        $course = course::whereStatus('on')->get();
        return view('admin.subject.edit',compact('subject','batch','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject $subject)
    {
        $subject->update($request->all());
        return redirect()->route('subject.index')
            ->with('success','Subject Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject $subject)
    {
        $subject->delete();
       
        return redirect()->route('subject.index')
                        ->with('success','Subject deleted successfully');
    }

     // ========================= Status Update Controller =================

     public function onStatus(Request $request, $id)
     {
         $status = subject::find($id);
         $status-> status = 'on';
         $status->save();
         return redirect()->route('subject.index')
             ->with('success','Status Active successfully.');
     }
 
     public function offStatus(Request $request, $id)
     {
         $status = subject::find($id);
         $status-> status = 'off';
         $status->save();
         return redirect()->route('subject.index')
             ->with('success','Status DeActive successfully.');
     }
}
