<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $batch = batch::all();
        return view('admin.batch.index',compact('i','batch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = course::whereStatus('on')->get();
        return view('admin.batch.create',compact('course'));
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
            
            'name' => ['required', 'unique:batches'],
            'code' => ['required', 'unique:batches'],
        ]);
        $batch = batch::create($request->all());
        return redirect()->route('batch.index')
            ->with('success','Batch created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(batch $batch)
    {
        $course = course::all();
        return view('admin.batch.store',compact('batch','course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(batch $batch)
    {
        $course = course::all();
        return view('admin.batch.edit',compact('batch','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, batch $batch)
    {
        $batch->update($request->all());
        return redirect()->route('batch.index')
            ->with('success','Batch Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(batch $batch)
    {
        $batch->delete();
       
        return redirect()->route('batch.index')
                        ->with('success','Batch deleted successfully');
    }

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = batch::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('batch.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = batch::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('batch.index')
            ->with('success','Status DeActive successfully.');
    }
}
