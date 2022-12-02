<?php

namespace App\Http\Controllers;

use App\Models\noticeboard;
use Illuminate\Http\Request;

class NoticeboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $noticeboard = noticeboard::all();
        return view('admin.noticeboard.index', compact('i','noticeboard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticeboard.create');
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
            
            'title' => ['required'],
            'priority' => ['required'],
            'start' => ['required'],
            'end' => ['required'],
        ]);

        $image = time().'.'.$request->file('attachement')->getClientOriginalExtension();
        move_uploaded_file($request->attachement, 'public/image/'.$image);
        $noticeboard= noticeboard::create($request->all());
        $noticeboard->attachement = $image;
        $noticeboard->save();        
        return redirect()->route('noticeboard.index')
            ->with('success','Noticeboard created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function show(noticeboard $noticeboard)
    {
        return view('admin.noticeboard.show',compact('noticeboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function edit(noticeboard $noticeboard)
    {
        return view('admin.noticeboard.edit',compact('noticeboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, noticeboard $noticeboard)
    {
        if ($request->hasFile('attachement')){
            $imageName = time().'.'.$request->file('attachement')->getClientOriginalExtension();
        unlink('public/image/'.$noticeboard->attachement);
        move_uploaded_file($request->attachement, 'public/image/'.$imageName); 
            
            $noticeboard-> attachement = $imageName;
            
        }
            $noticeboard -> title = $request->get('title');
            $noticeboard -> priority = $request->get('priority');
            $noticeboard -> status = $request->get('status');
       
            $noticeboard->save();
            
            return redirect()->route('noticeboard.index')
                ->with('success','Noticeboard Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(noticeboard $noticeboard)
    {
        $noticeboard->delete();
       
        return redirect()->route('noticeboard.index')
                        ->with('success','Noticeboard deleted successfully');
    }
    

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = noticeboard::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('noticeboard.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = noticeboard::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('noticeboard.index')
            ->with('success','Status DeActive successfully.');
    }
}
