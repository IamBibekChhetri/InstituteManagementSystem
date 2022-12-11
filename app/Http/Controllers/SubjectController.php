<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Subject;
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
        $subject = Subject::all();
        return view('admin.subject.index', compact('i','subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batch = Batch::whereStatus('on')->get();
        $course = Course::whereStatus('on')->get();
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
            
        'batch_id' => ['required' ],        
        'course_id' => ['required' ],        
        'name' => ['required' ],        
    ]);
    
        $subject = Subject::create($request->all());
        return redirect()->route('subject.index')
            ->with('success','Subject created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        $batch = Batch::whereStatus('on')->get();
        $course = Course::whereStatus('on')->get();
        return view('admin.subject.edit',compact('subject','batch','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $validated = $request->validate([     
            'name' => ['required' ],        
        ]);
        
        $subject->update($request->all());
        return redirect()->route('subject.index')
            ->with('success','Subject Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
       
        return redirect()->route('subject.index')
                        ->with('success','Subject deleted successfully');
    }

     // ========================= Status Update Controller =================

     public function onStatus(Request $request, $id)
     {
         $status = Subject::find($id);
         $status-> status = 'on';
         $status->save();
         return redirect()->route('subject.index')
             ->with('success','Status Active successfully.');
     }
 
     public function offStatus(Request $request, $id)
     {
         $status = Subject::find($id);
         $status-> status = 'off';
         $status->save();
         return redirect()->route('subject.index')
             ->with('success','Status DeActive successfully.');
     }
}
