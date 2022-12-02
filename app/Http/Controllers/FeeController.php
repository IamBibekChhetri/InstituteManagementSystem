<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\fee;
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
        $fee = fee::all();
        return view('admin.fee.index',compact('i','fee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = course::whereStatus('on')->get();
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
            
            'amount' => ['required'],
            
        ]);

        $fee = fee::create($request->all());
        return redirect()->route('fee.index')
            ->with('success','Fee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function show(fee $fee)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function edit(fee $fee)
    {
        $course = course::whereStatus('on')->get();
        return view('admin.fee.edit',compact('fee','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fee $fee)
    {
        $fee->update($request->all());
        return redirect()->route('fee.index')
            ->with('success','Fee Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function destroy(fee $fee)
    {
        $fee->delete();
       
        return redirect()->route('fee.index')
                        ->with('success','Fee deleted successfully');
    }

         // ========================= Status Update Controller =================

         public function onStatus(Request $request, $id)
         {
             $status = fee::find($id);
             $status-> status = 'on';
             $status->save();
             return redirect()->route('fee.index')
                 ->with('success','Status Active successfully.');
         }
     
         public function offStatus(Request $request, $id)
         {
             $status = fee::find($id);
             $status-> status = 'off';
             $status->save();
             return redirect()->route('fee.index')
                 ->with('success','Status DeActive successfully.');
         }
}
