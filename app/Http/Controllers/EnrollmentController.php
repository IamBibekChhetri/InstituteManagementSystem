<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Enrollment;
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
        $student = Student::all();
        $course = Course::all();
        $enrollment = Enrollment::all();
        return view('admin.enrollment.index',compact('enrollment','course','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::whereStatus('on')->get();
        $course = Course::whereStatus('on')->get();
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
        $validated = $request->validate([
            
            'course_id' => ['required'],
            'student_id' => ['required'],
            
        ]);
        $enrollment = Enrollment::create($request->all());
        return redirect()->route('enrollment.index')
            ->with('success','enrollment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::whereStatus('on')->get();
        $course = Course::whereStatus('on')->get();
        $enrollment = Enrollment::find($id);
        return view('admin.enrollment.edit',compact('student','course','enrollment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        $validated = $request->validate([
            
            'course_id' => ['required'],
            'student_id' => ['required'],
            
        ]);
        
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
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
       
        return redirect()->route('enrollment.index')
                        ->with('success','Enrollment deleted successfully');
    }
}
