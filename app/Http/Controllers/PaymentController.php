<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\payment;
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
        $payment = payment::all();
        return view('admin.payment.index', compact('i','payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = student::whereStatus('on')->get();
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
            
            'payed' => ['required' ],
            'payment' => ['required' ],
            'transaction' => ['required', 'unique:payments'],
        ]);
        
        $payment = payment::create($request->all());
        return redirect()->route('payment.index')
            ->with('success','Payment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        $student = student::all();
        return view('admin.payment.show',compact('payment','student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        $student = student::whereStatus('on')->get();
        return view('admin.payment.edit',compact('payment','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        $payment->update($request->all());
        return redirect()->route('payment.index')
            ->with('success','Payment Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        $payment->delete();
       
        return redirect()->route('payment.index')
            ->with('success','Payment deleted successfully');
    }

    
    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = payment::find($id);
        $status-> status = 'on';
        $status->save();
        return redirect()->route('payment.index')
            ->with('success','Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = payment::find($id);
        $status-> status = 'off';
        $status->save();
        return redirect()->route('payment.index')
            ->with('success','Status DeActive successfully.');
    }
}
