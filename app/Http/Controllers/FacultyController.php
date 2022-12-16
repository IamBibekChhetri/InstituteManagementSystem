<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $faculty = Faculty::all();
        return view('admin.faculty.index',compact('i','faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch =  Branch::whereStatus('on')->get();
        return view('admin.faculty.create',compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faculty = Faculty::create($request->all());
        return redirect()->route('faculty.index')
            ->with('success','Faculty created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        $branch =  Branch::whereStatus('on')->get();
        return view('admin.faculty.edit',compact('branch','faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        $faculty->update($request->all());
        return redirect()->route('faculty.index')
            ->with('success','Faculty Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();       
        return redirect()->route('faculty.index')
            ->with('success','Class deleted successfully');
    }

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Faculty::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('faculty.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Faculty::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('faculty.index')
            ->with('success','Status DeActive successfully.');
    }
}
