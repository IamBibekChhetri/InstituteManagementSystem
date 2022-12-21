<?php

namespace App\Http\Controllers;

use App\Models\Noticeboard;
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
        $noticeboard = Noticeboard::all();
        return view('admin.noticeboard.index',compact('i','noticeboard'));
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
            'attachment' => ['required'],
            'start' => ['required'],
            'end' => ['required'],
        ]);
        $store_attachements = array();
        $noticeboard = new Noticeboard();
        foreach($request->attachement as $imageName => $imageItem){
        $image = time().'.'.$imageItem->getClientOriginalExtension();
        sleep(1);
        array_push($attachements, $image);
        move_uploaded_file($imageItem, 'public/image/noticeboard/'.$image);
    }
        $noticeboard->attachement = $attachements;
        $noticeboard -> title = $request->get('title');
        $noticeboard -> priority = $request->get('priority');
        $noticeboard -> description = $request->get('description');
        $noticeboard -> start = $request->get('start');
        $noticeboard -> end = $request->get('end');
        $noticeboard -> status = $request->get('status');

        $noticeboard->save();
        return redirect()->route('noticeboard.index')
            ->with('success','Noticeboard created successfully.');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function show(Noticeboard $noticeboard)
    {
        return view('admin.noticeboard.show',compact('noticeboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticeboard $noticeboard)
    {
        return view('admin.noticeboard.edit',compact('noticeboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticeboard $noticeboard)
    {
        $validated = $request->validate([
            
            'title' => ['required'],
            'priority' => ['required'],
            'start' => ['required'],
            'end' => ['required'],
        ]);
        if ($request->hasFile('attachement')){
            $imageName = time().'.'.$request->file('attachement')->getClientOriginalExtension();
            if($noticeboard->attachment!=""){
                if (file_exists('public/image/noticeboard/'.$noticeboard->attachment)){
                    unlink('public/image/noticeboard/'.$noticeboard->attachement);
                }
            }       
        move_uploaded_file($request->attachement, 'public/image/noticeboard/'.$imageName); 
            
            $noticeboard-> attachement = $imageName;
            
       
            $noticeboard -> title = $request->get('title');
            $noticeboard -> priority = $request->get('priority');
            $noticeboard -> description = $request->get('description');
            $noticeboard -> start = $request->get('start');
            $noticeboard -> end = $request->get('end');
        }
        else{
            $noticeboard -> title = $request->get('title');
            $noticeboard -> priority = $request->get('priority');
            $noticeboard -> description = $request->get('description');
            $noticeboard -> start = $request->get('start');
            $noticeboard -> end = $request->get('end');
        }
            $noticeboard->save();
            
            return redirect()->route('noticeboard.index')
                ->with('success','Noticeboard Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticeboard  $noticeboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticeboard $noticeboard)
    {
        $noticeboard->delete();
       
        return redirect()->route('noticeboard.index')
                        ->with('success','Noticeboard deleted successfully');
    }
    

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Noticeboard::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('noticeboard.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Noticeboard::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('noticeboard.index')
            ->with('success','Status DeActive successfully.');
    }
}
