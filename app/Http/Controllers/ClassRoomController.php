<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\ClassName;
use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classroom = ClassRoom::all();
        return view('admin.classroom.index',compact('classroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batch =  Batch::whereStatus('on')->get();
        $instructor =  Instructor::whereStatus('on')->get();
        $student =  Student::whereStatus('on')->get();
        $classname =  ClassName::whereStatus('on')->get();
        return view('admin.classroom.create',compact('batch','instructor','student','classname'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classroom = ClassRoom::create($request->all());
        return redirect()->route('classroom.index')
         ->with('success','Class Room created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function show(ClassRoom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassRoom $classroom)
    {
        $batch =  Batch::whereStatus('on')->get();
        $instructor =  Instructor::whereStatus('on')->get();
        $student =  Student::whereStatus('on')->get();
        $classname =  ClassName::whereStatus('on')->get();
        return view('admin.classroom.edit',compact('batch','classroom','instructor','student','classname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassRoom $classroom)
    {
        $classroom->update($request->all());
        return redirect()->route('classroom.index')
            ->with('success','Class Room Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassRoom $classroom)
    {
        $classroom->delete();
       
        return redirect()->route('classroom.index')
            ->with('success','Class Room deleted successfully');
    }

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = ClassRoom::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('classroom.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = ClassRoom::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('classroom.index')
            ->with('success','Status DeActive successfully.');
    }
}
