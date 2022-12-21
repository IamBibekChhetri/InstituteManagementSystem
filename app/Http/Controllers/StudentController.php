<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Faculty;
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
        $faculty = Faculty::whereStatus('on')->get();
        $batch = Batch::whereStatus('on')->get();
        $branch = Branch::whereStatus('on')->get();
        return view('admin.student.create',compact('branch','faculty','batch'));
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
            'fatherName' => ['required' ],
            'motherName' => ['required' ],
            't_state' => ['required' ],
            't_city' => ['required' ],
            'qualification' => ['required' ],
            'password' => ['required' ],
            'email' => ['required','unique:students' ],
            'phone' => ['required', 'unique:students'],
            
        ]);
        
        $student= new Student();
        if ($request->hasFile('photo')){
        $image = time().'.'.$request->file('photo')->getClientOriginalExtension();
        move_uploaded_file($request->photo, 'public/image/student/'.$image);
        $student->photo = $image;
        $student -> branch_id = $request->get('branch_id');
        $student -> faculty_id = $request->get('faculty_id');
        $student -> batch_id = $request->get('batch_id');
        $student -> name = $request->get('name');
        $student -> gender = $request->get('gender');
        $student -> qualification = $request->get('qualification');
        $student -> status = $request->get('status');
        $student -> email = $request->get('email');
        $student -> password = bcrypt($request->get('password'));
        $student -> DOB = $request->get('DOB');
        $student -> phone = $request->get('phone');

        $student -> fatherName = $request->get('fatherName');
        $student -> fatherEmail = $request->get('fatherEmail');
        $student -> fatherPhone = $request->get('fatherPhone');
        $student -> fatherOccupation = $request->get('fatherOccupation');
        $student -> fatherOffice = $request->get('fatherOffice');
        $student -> fatherDesignation = $request->get('fatherDesignation');

        $student -> motherName = $request->get('motherName');
        $student -> motherEmail = $request->get('motherEmail');
        $student -> motherPhone = $request->get('motherPhone');
        $student -> motherOccupation = $request->get('motherOccupation');
        $student -> motherOffice = $request->get('motherOffice');
        $student -> motherDesignation = $request->get('motherDesignation');

        $student -> t_country = $request->get('t_country');
        $student -> t_state = $request->get('t_state');
        $student -> t_city = $request->get('t_city');
        $student -> t_zipcode = $request->get('t_zipcode');
        $student -> t_nationality = $request->get('t_nationality');

        $student -> p_country = $request->get('p_country');
        $student -> p_state = $request->get('p_state');
        $student -> p_city = $request->get('p_city');
        $student -> p_zipcode = $request->get('p_zipcode');
        $student -> p_nationality = $request->get('p_nationality');
        }

        else{

            $student -> branch_id = $request->get('branch_id');
            $student -> faculty_id = $request->get('faculty_id');
            $student -> batch_id = $request->get('batch_id');
            $student -> name = $request->get('name');
            $student -> gender = $request->get('gender');
            $student -> qualification = $request->get('qualification');
            $student -> status = $request->get('status');
            $student -> email = $request->get('email');
            $student -> password = bcrypt($request->get('password'));
            $student -> DOB = $request->get('DOB');
            $student -> phone = $request->get('phone');
    
            $student -> fatherName = $request->get('fatherName');
            $student -> fatherEmail = $request->get('fatherEmail');
            $student -> fatherPhone = $request->get('fatherPhone');
            $student -> fatherOccupation = $request->get('fatherOccupation');
            $student -> fatherOffice = $request->get('fatherOffice');
            $student -> fatherDesignation = $request->get('fatherDesignation');
    
            $student -> motherName = $request->get('motherName');
            $student -> motherEmail = $request->get('motherEmail');
            $student -> motherPhone = $request->get('motherPhone');
            $student -> motherOccupation = $request->get('motherOccupation');
            $student -> motherOffice = $request->get('motherOffice');
            $student -> motherDesignation = $request->get('motherDesignation');
    
            $student -> t_country = $request->get('t_country');
            $student -> t_state = $request->get('t_state');
            $student -> t_city = $request->get('t_city');
            $student -> t_zipcode = $request->get('t_zipcode');
            $student -> t_nationality = $request->get('t_nationality');
    
            $student -> p_country = $request->get('p_country');
            $student -> p_state = $request->get('p_state');
            $student -> p_city = $request->get('p_city');
            $student -> p_zipcode = $request->get('p_zipcode');
            $student -> p_nationality = $request->get('p_nationality');
        }
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
        //
    }

    
    public function changePassword(Request $request, $id){
        
        $student = Student::find($id);
        $student-> password = bcrypt($request->get('password'));
        $student->save();
        return redirect()->route('student.index')
         ->with([
            'icon' => 'success',
            'message' => 'Password changed successfully'
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $faculty = Faculty::whereStatus('on')->get();
        $batch = Batch::whereStatus('on')->get();
        $branch = Branch::whereStatus('on')->get();
        return view('admin.student.edit',compact('student','branch','faculty','batch'));
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
            'name' => ['required' ],
            'gender' => ['required' ],
            'fatherName' => ['required' ],
            'motherName' => ['required' ],
            't_state' => ['required' ],
            't_city' => ['required' ],
            'qualification' => ['required' ],
            'email' => 'required|unique:students,email,' .$student->id ,
            'phone' => 'required|unique:students,phone,'.$student->id,
        ]);
        if ($request->hasFile('photo')){
            $imageName = time().'.'.$request->file('photo')->getClientOriginalExtension();
            if($student->photo!=""){
                if (file_exists('public/image/student/'.$student->photo)){
                unlink('public/image/student/'.$student->photo);
                }
            }
        move_uploaded_file($request->photo, 'public/image/student/'.$imageName); 
            
            $student-> photo = $imageName;
            
        
        $student -> branch_id = $request->get('branch_id');
        $student -> faculty_id = $request->get('faculty_id');
        $student -> batch_id = $request->get('batch_id');
        $student -> name = $request->get('name');
        $student -> gender = $request->get('gender');
        $student -> qualification = $request->get('qualification');
        $student -> email = $request->get('email');
        $student -> DOB = $request->get('DOB');
        $student -> phone = $request->get('phone');

        $student -> fatherName = $request->get('fatherName');
        $student -> fatherEmail = $request->get('fatherEmail');
        $student -> fatherPhone = $request->get('fatherPhone');
        $student -> fatherOccupation = $request->get('fatherOccupation');
        $student -> fatherOffice = $request->get('fatherOffice');
        $student -> fatherDesignation = $request->get('fatherDesignation');

        $student -> motherName = $request->get('motherName');
        $student -> motherEmail = $request->get('motherEmail');
        $student -> motherPhone = $request->get('motherPhone');
        $student -> motherOccupation = $request->get('motherOccupation');
        $student -> motherOffice = $request->get('motherOffice');
        $student -> motherDesignation = $request->get('motherDesignation');

        $student -> t_country = $request->get('t_country');
        $student -> t_state = $request->get('t_state');
        $student -> t_city = $request->get('t_city');
        $student -> t_zipcode = $request->get('t_zipcode');
        $student -> t_nationality = $request->get('t_nationality');

        $student -> p_country = $request->get('p_country');
        $student -> p_state = $request->get('p_state');
        $student -> p_city = $request->get('p_city');
        $student -> p_zipcode = $request->get('p_zipcode');
        $student -> p_nationality = $request->get('p_nationality');
        }
        else{
            $student -> branch_id = $request->get('branch_id');
            $student -> faculty_id = $request->get('faculty_id');
            $student -> batch_id = $request->get('batch_id');
            $student -> name = $request->get('name');
            $student -> gender = $request->get('gender');
            $student -> qualification = $request->get('qualification');
            $student -> email = $request->get('email');
            $student -> DOB = $request->get('DOB');
            $student -> phone = $request->get('phone');
    
            $student -> fatherName = $request->get('fatherName');
            $student -> fatherEmail = $request->get('fatherEmail');
            $student -> fatherPhone = $request->get('fatherPhone');
            $student -> fatherOccupation = $request->get('fatherOccupation');
            $student -> fatherOffice = $request->get('fatherOffice');
            $student -> fatherDesignation = $request->get('fatherDesignation');
    
            $student -> motherName = $request->get('motherName');
            $student -> motherEmail = $request->get('motherEmail');
            $student -> motherPhone = $request->get('motherPhone');
            $student -> motherOccupation = $request->get('motherOccupation');
            $student -> motherOffice = $request->get('motherOffice');
            $student -> motherDesignation = $request->get('motherDesignation');
    
            $student -> t_country = $request->get('t_country');
            $student -> t_state = $request->get('t_state');
            $student -> t_city = $request->get('t_city');
            $student -> t_zipcode = $request->get('t_zipcode');
            $student -> t_nationality = $request->get('t_nationality');
    
            $student -> p_country = $request->get('p_country');
            $student -> p_state = $request->get('p_state');
            $student -> p_city = $request->get('p_city');
            $student -> p_zipcode = $request->get('p_zipcode');
            $student -> p_nationality = $request->get('p_nationality');
        }
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
