<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $payment = Payment::all();
        return view('admin.payment.index', compact('i','payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::whereStatus('on')->get();
        return view('admin.payment.create',compact('student'));
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
            
            'student_id' => ['required' ],
            'payed' => ['required' ],
            'payment' => ['required' ],
            'transaction' => ['required'],
        ]);
        
        $payment = Payment::create($request->all());
        return redirect()->route('payment.index')
            ->with('success','Payment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        $student = Student::all();
        return view('admin.payment.show',compact('payment','student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $student = Student::whereStatus('on')->get();
        return view('admin.payment.edit',compact('payment','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $validated = $request->validate([
            'payed' => ['required' ],
            'payment' => ['required' ],
            'transaction' => ['required'],
        ]);
        
        $payment->update($request->all());
        return redirect()->route('payment.index')
            ->with('success','Payment Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
       
        return redirect()->route('payment.index')
            ->with('success','Payment deleted successfully');
    }

    
    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Payment::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('payment.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Payment::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('payment.index')
            ->with('success','Status DeActive successfully.');
    }
}
