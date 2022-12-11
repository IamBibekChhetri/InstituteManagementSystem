<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $fee = Fee::all();
        return view('admin.fee.index',compact('i','fee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::whereStatus('on')->get();
        return view('admin.fee.create',compact('course'));
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
            'amount' => ['required'],
            
        ]);

        $fee = Fee::create($request->all());
        return redirect()->route('fee.index')
            ->with('success','Fee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function show(Fee $fee)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function edit(Fee $fee)
    {
        $course = Course::whereStatus('on')->get();
        return view('admin.fee.edit',compact('fee','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fee $fee)
    {
        $validated = $request->validate([
            'amount' => ['required'],
            
        ]);

        $fee->update($request->all());
        return redirect()->route('fee.index')
            ->with('success','Fee Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fee $fee)
    {
        $fee->delete();
       
        return redirect()->route('fee.index')
                        ->with('success','Fee deleted successfully');
    }

         // ========================= Status Update Controller =================

         public function onStatus(Request $request, $id)
         {
             $status = Fee::find($id);
             $status-> status = 'on';
             $status->save();
             return redirect()->route('fee.index')
                 ->with('success','Status Active successfully.');
         }
     
         public function offStatus(Request $request, $id)
         {
             $status = Fee::find($id);
             $status-> status = 'off';
             $status->save();
             return redirect()->route('fee.index')
                 ->with('success','Status DeActive successfully.');
         }
}
