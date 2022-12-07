<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $instructor = Instructor::all();
        return view('admin.instructor.index',compact('i','instructor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.instructor.create');
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
            
            'name' => ['required', ],
            'age' => ['required', ],
            'address' => ['required', ],
            'email' => ['required', ],
            'photo' => ['required', ],
            'phone' => ['required', 'unique:instructors'],

        ]);


        $image = time().'.'.$request->file('photo')->getClientOriginalExtension();
        move_uploaded_file($request->photo, 'public/image/'.$image);
        $instructor= Instructor::create($request->all());
        $instructor->photo = $image;
        $instructor->save();
        return redirect()->route('instructor.index')
            ->with('success','Instructor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {

        return view('admin.instructor.edit',compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        $validated = $request->validate([
            
            'name' => ['required', ],
            'age' => ['required', ],
            'address' => ['required', ],
            'email' => ['required', ],
            'phone' => ['required', 'unique:instructors'],

        ]);
        if ($request->hasFile('photo')){
            $imageName = time().'.'.$request->file('photo')->getClientOriginalExtension();
        unlink('public/image/'.$instructor->photo);
        move_uploaded_file($request->photo, 'public/image/'.$imageName); 
            
            $instructor-> photo = $imageName;
            
        }
         
            $instructor-> name = $request->get('name');
            $instructor-> address = $request->get('address');
            $instructor-> age = $request->get('age');
            $instructor-> phone = $request->get('phone');
            $instructor-> email = $request->get('email');
            $instructor-> status = $request->get('status');
       
       
            $instructor->save();
            
            return redirect()->route('instructor.index')
                ->with('success','Instructor Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
       
        return redirect()->route('instructor.index')
                        ->with('success','Instructor deleted successfully');
    }


    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Instructor::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('instructor.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Instructor::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('instructor.index')
            ->with('success','Status DeActive successfully.');
    }
}
