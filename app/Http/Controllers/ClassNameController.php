<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\ClassName;
use Illuminate\Http\Request;

class ClassNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $classname = ClassName::all();
        return view('admin.classname.index',compact('i','classname'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch =  Branch::whereStatus('on')->get();
        return view('admin.classname.create',compact('branch'));
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
           
            'name' => ['required'],
            'branch_id' => ['required'],
           
        ]);

        $classname = ClassName::create($request->all());
        return redirect()->route('classname.index')
            ->with('success','Class created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassName  $className
     * @return \Illuminate\Http\Response
     */
    public function show(ClassName $classname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassName  $className
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassName $classname)
    {
        $branch =  Branch::whereStatus('on')->get();
        return view('admin.classname.edit',compact('classname','branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassName  $className
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassName $classname)
    {
        $validated = $request->validate([
           
            'name' => ['required'],
            'branch_id' => ['required'],
           
        ]);
        
        $classname->update($request->all());
        return redirect()->route('classname.index')
            ->with('success','Class Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassName  $className
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassName $classname)
    {
        $classname->delete();
       
        return redirect()->route('classname.index')
            ->with('success','Class deleted successfully');
    }
// ============================= Status Update Controller ================================

     public function onStatus(Request $request, $id)
     {
         $status = ClassName::find($id);
         $status-> status = 'on';
         $status->save();
         return redirect()->route('classname.index')
             ->with('success','Status Active successfully.');
     }
 
     public function offStatus(Request $request, $id)
     {
         $status = ClassName::find($id);
         $status-> status = 'off';
         $status->save();
         return redirect()->route('classname.index')
             ->with('success','Status DeActive successfully.');
     }
 }

