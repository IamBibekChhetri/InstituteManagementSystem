<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $student = Student::all();
        return view('admin.student.index',compact('i','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = Branch::whereStatus('on')->get();
        return view('admin.student.create',compact('branch'));
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
            
            'branch_id' => ['required' ],
            'name' => ['required' ],
            'gender' => ['required' ],
            'father' => ['required' ],
            'mother' => ['required' ],
            'address' => ['required' ],
            'state' => ['required' ],
            'city' => ['required' ],
            'photo' => ['required' ],
            'qualification' => ['required' ],
            'email' => ['required' ],
            'password' => ['required' ],
            'phone' => ['required', 'unique:students'],
        ]);
        
        $image = time().'.'.$request->file('photo')->getClientOriginalExtension();
        move_uploaded_file($request->photo, 'public/image/'.$image);
        $student= Student::create($request->all());
        $student->photo = $image;
        $student->save();
        
        return redirect()->route('student.index')
            ->with('success','Student created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $branch = Branch::whereStatus('on')->get();
        return view('admin.student.edit',compact('student','branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            
            'branch_id' => ['required' ],
            'name' => ['required' ],
            'gender' => ['required' ],
            'father' => ['required' ],
            'mother' => ['required' ],
            'address' => ['required' ],
            'state' => ['required' ],
            'city' => ['required' ],
            'qualification' => ['required' ],
            'email' => ['required' ],
            'password' => ['required' ],
            'phone' => ['required', 'unique:students'],
        ]);

        if ($request->hasFile('photo')){
            $imageName = time().'.'.$request->file('photo')->getClientOriginalExtension();
        unlink('public/image/'.$student->photo);
        move_uploaded_file($request->photo, 'public/image/'.$imageName); 
            
            $student-> photo = $imageName;
            
        }
            $student-> branch_id = $request -> get('branch_id');
            $student-> name = $request -> get('name');
            $student-> gender = $request -> get('gender');
            $student-> DOB = $request -> get('DOB');
            $student-> father = $request -> get('father');
            $student-> mother = $request -> get('mother');
            $student-> address = $request -> get('address');
            $student-> state = $request -> get('state');
            $student-> city = $request -> get('city');
            $student-> zipcode = $request -> get('zipcode');
            $student-> nationality = $request -> get('nationality');
            $student-> phone = $request -> get('phone');
            $student-> qualification = $request -> get('qualification');
            $student-> email = $request -> get('email');
            $student-> status = $request -> get('status');
            $student->save();
            
            return redirect()->route('student.index')
                ->with('success','Student Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
       
        return redirect()->route('student.index')
            ->with('success','Student deleted successfully');
    }
        
    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Student::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('student.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Student::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('student.index')
            ->with('success','Status DeActive successfully.');
    }
}
