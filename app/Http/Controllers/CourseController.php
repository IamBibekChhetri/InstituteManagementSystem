<?php

namespace App\Http\Controllers;


use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1 ;
        $course = Course::all();
        return view('admin.course.index',compact('i','course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
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
            
            'name' => ['required', 'unique:courses'],
            'code' => ['required', 'unique:courses'],
            'duration' => ['required'],
        ]);

        $course = Course::create($request->all());
        return redirect()->route('course.index')
            ->with('success','Course created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('admin.course.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            
            'name' => 'required|unique:courses,name,'.$course->id,
            'code' => 'required|unique:courses,code,'.$course->id,
            'duration' => ['required'],
        ]);

        $course->update($request->all());
        return redirect()->route('course.index')
            ->with('success','Course Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
       
        return redirect()->route('course.index')
           ->with('success','Course deleted successfully');
    }

    public function onStatus(Request $request, $id)
    {
        $status = Course::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('course.index')
            ->with('success','Course Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Course::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('course.index')
            ->with('success','Course DeActive successfully.');
    }
}
