<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Course;
use App\Models\Batch;
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
        $batch = Batch::all();
        return view('admin.batch.index',compact('i','batch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = Branch::whereStatus('on')->get();
        $course = Course::whereStatus('on')->get();
        return view('admin.batch.create',compact('course','branch'));
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
            'branch_id' => ['required'],
            'course_id' => ['required'],
            'name' => ['required', 'unique:batches'],
            'code' => ['required', 'unique:batches'],            
        ]);
        $batch = Batch::create($request->all());
        return redirect()->route('batch.index')
            ->with('success','Batch created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Batch $batch)
    {
        $course = Course::all();
        return view('admin.batch.store',compact('batch','course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(Batch $batch)
    {
        $course = Course::whereStatus('on')->get();
        $branch = Branch::whereStatus('on')->get();
        return view('admin.batch.edit',compact('batch','course','branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batch $batch)
    {
        $validated = $request->validate([
            'name' => ['required', 'unique:batches,name'. $this->route('batches')],
            'code' => ['required', 'unique:batches,code'. $this->route('batches')],            
        ]);
        
        $batch->update($request->all());
        return redirect()->route('batch.index')
            ->with('success','Batch Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        $batch->delete();
       
        return redirect()->route('batch.index')
                        ->with('success','Batch deleted successfully');
    }

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Batch::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('batch.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Batch::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('batch.index')
            ->with('success','Status DeActive successfully.');
    }
}
