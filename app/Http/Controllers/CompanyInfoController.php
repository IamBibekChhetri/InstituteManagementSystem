<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = CompanyInfo::all();
        return view('admin.companyInfo.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyInfo $companyInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = CompanyInfo::find($id);
        return view('admin.companyInfo.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyInfo $company)
    {
        $validated = $request->validate([
            
            'cname' => ['required'],           
            'rname' => ['required'],           
            'photo' => ['required'],           
            'address' => ['required'],           
            'phone' => ['required', 'unique:company_infos'],           
            'pan' => ['required', 'unique:company_infos'],           
            'email' => ['required', 'unique:company_infos'],           
        ]);

        if ($request->hasFile('photo')){
            $imageName = time().'.'.$request->file('photo')->getClientOriginalExtension();
        unlink('public/image/'.$company->photo);
        move_uploaded_file($request->photo, 'public/image/'.$imageName); 
            
            $company-> photo = $imageName;
            
        }
                $company->photo = $imageName;
                $company-> name = $request -> get('name');
                $company-> email = $request -> get('email');
                $company-> address = $request -> get('address');
                $company-> phone = $request -> get('phone');
                $company->save();
            return redirect()->route('profile.index')
                ->with('success','Profile Updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyInfo $companyInfo)
    {
        //
    }
}
