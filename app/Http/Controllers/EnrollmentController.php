<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\student;
use App\Models\enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = student::all();
        $course = course::all();
        $enrollment = enrollment::all();
        return view('admin.enrollment.index',compact('enrollment','course','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = student::whereStatus('on')->get();
        $course = course::whereStatus('on')->get();
        return view('admin.enrollment.create',compact('student','course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enrollment = enrollment::create($request->all());
        return redirect()->route('enrollment.index')
            ->with('success','enrollment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::whereStatus('on')->get();
        $course = course::whereStatus('on')->get();
        $enrollment = enrollment::find($id);
        return view('admin.enrollment.edit',compact('student','course','enrollment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enrollment $enrollment)
    {
        if ($request->hasFile('photo')){
            $imageName = time().'.'.$request->file('photo')->getClientOriginalExtension();
        unlink('public/image/'.$student->photo);
        move_uploaded_file($request->photo, 'public/image/'.$imageName); 
            
            $enrollment-> photo = $imageName;
            
        }
        $enrollment-> course_id = $request->get('course_id');
        $enrollment-> course_id = $request->get('course_id');
        $enrollment-> student_id = $request->get('student_id');
        $enrollment-> student_id = $request->get('student_id');
        $enrollment-> student_id = $request->get('student_id');
        $enrollment-> student_id = $request->get('student_id');

        $enrollment->save();
            
            return redirect()->route('enrollment.index')
                ->with('success','Enrollment Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(enrollment $enrollment)
    {
        $enrollment->delete();
       
        return redirect()->route('enrollment.index')
                        ->with('success','Enrollment deleted successfully');
    }
}
