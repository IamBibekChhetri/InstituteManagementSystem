<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\course;
use App\Models\subject;
use App\Models\author;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $book = book::all();
        return view('admin.book.index',compact('i','book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batch = batch::whereStatus('on')->get();
        $course = course::whereStatus('on')->get();
        $subject = subject::whereStatus('on')->get();
        $author = author::whereStatus('on')->get();
        return view('admin.book.create',compact('batch','course','subject','author'));

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
            
            'name' => ['required', 'unique:books'],           
        ]);
        
        $book = book::create($request->all());
        return redirect()->route('book.index')
            ->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::find($id);
        $batch = batch::all();
        $course = course::all();
        $subject = subject::all();
        $author = author::all();
        return view('admin.book.edit',compact('batch','course','subject','author','book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        $book->update($request->all());
        return redirect()->route('book.index')
            ->with('success','Book Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        $book->delete();
       
        return redirect()->route('book.index')
                        ->with('success','Book deleted successfully');
    }

     // ========================= Status Update Controller =================

     public function onStatus(Request $request, $id)
     {
         $status = book::find($id);
         $status-> status = 'on';
         $status->save();
         return redirect()->route('book.index')
             ->with('success','Status Active successfully.');
     }
 
     public function offStatus(Request $request, $id)
     {
         $status = book::find($id);
         $status-> status = 'off';
         $status->save();
         return redirect()->route('book.index')
             ->with('success','Status DeActive successfully.');
     }
}
