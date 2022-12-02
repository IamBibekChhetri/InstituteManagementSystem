<?php

namespace App\Http\Controllers;

use App\Models\author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i =1;
        $author = author::all();
        return view('admin.author.index',compact('i','author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.author.create');
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
            
            'name' => ['required', 'unique:authors'],
        ]);

        $author = author::create($request->all());
        return redirect()->route('author.index')
            ->with('success','Author created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(author $author)
    {
        return view('admin.author.show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(author $author)
    {
        return view('admin.author.edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, author $author)
    {
        $author->update($request->all());
        return redirect()->route('author.index')
            ->with('success','Author Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(author $author)
    {
        $author->delete();
       
        return redirect()->route('author.index')
                        ->with('success','Author deleted successfully');
    }

    // ================== Status Update Controller ================ 

    public function onStatus(Request $request, $id)
    {
        $status = author::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('author.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = author::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('author.index')
            ->with('success','Status DeActive successfully.');
    }
}
