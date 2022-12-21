<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Author;
use App\Models\Book;
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
        $book = Book::all();
        return view('admin.book.index',compact('i','book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batch = Batch::whereStatus('on')->get();
        $course = Course::whereStatus('on')->get();
        $subject = Subject::whereStatus('on')->get();
        $author = Author::whereStatus('on')->get();
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
            'batch_id' => ['required'],
            'course_id' => ['required'],
            'subject_id' => ['required'],
            'author_id' => ['required'],
            'name' => ['required'],
            'published' => ['required'],
            'details' => ['required'],
        ]);
        
        $book = Book::create($request->all());
        return redirect()->route('book.index')
            ->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $batch = Batch::all();
        $course = Course::all();
        $subject = Subject::all();
        $author = Author::all();
        return view('admin.book.edit',compact('batch','course','subject','author','book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'published' => ['required'],
            'details' => ['required'],
        ]);
        
        $book->update($request->all());
        return redirect()->route('book.index')
            ->with('success','Book Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
       
        return redirect()->route('book.index')
                        ->with('success','Book deleted successfully');
    }

     // ========================= Status Update Controller =================

     public function onStatus(Request $request, $id)
     {
         $status = Book::find($id);
         $status-> status = 'on';
         $status->save();
         return redirect()->route('book.index')
             ->with('success','Status Active successfully.');
     }
 
     public function offStatus(Request $request, $id)
     {
         $status = Book::find($id);
         $status-> status = 'off';
         $status->save();
         return redirect()->route('book.index')
             ->with('success','Status DeActive successfully.');
     }
}
