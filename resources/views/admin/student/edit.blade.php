@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                 
                    <!-- .form -->
                    <form action="{{route('student.update',$student->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <h3>Student Manage</h3> <!-- .form-group -->
                      <div class="row page-section">

                      <div class="col-md-12 mb-3">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">

                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="select2-branch">branch:</label> 
                          <select id="select2-branch" class="form-control" name="branch_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($branch as $branchs)
                              <option value="{{$branchs->id}}">{{$branchs->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->


                      <!-- .form-group -->
                      <div class="form-group">
                          <label class="control-label" for="select2-faculty">Faculty:</label> 
                          <select id="select2-faculty" class="form-control" name="faculty_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($faculty as $facultys)
                              <option value="{{$facultys->id}}">{{$facultys->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->



                      <!-- .form-group -->
                      <div class="form-group">
                          <label class="control-label" for="select2-batch">Batch:</label> 
                          <select id="select2-batch" class="form-control" name="batch_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($batch as $batchs)
                              <option value="{{$batchs->id}}">{{$batchs->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->


                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Student Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Student Name" name="name">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label" for="selDefault">Gender</label> 
                          <abbr title="Required">*</abbr>
                          <select class="custom-select" id="selDefault" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                            
                          </select>
                        </div><!-- /.form-group -->

                        
                        
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Qualification</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Qualification" name="qualification">
                        </div><!-- /.form-group -->
                        
                        
                        <div class="form-group">                            
                            <span>Is Active:</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
                        </div><!-- /.form-group -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <!-- .form-group -->
                         <div class="form-group">
                          <label for="tf3">Student Photo</label>
                          <abbr title="Required">*</abbr>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" name="photo"> <label class="custom-file-label" for="tf3">Photo</label>
                          </div>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <span>Email</span>
                            <abbr title="Required">*</abbr>
                            <input type="email" class="form-control" id="fl1" placeholder="Enter Email address" required="" name="email">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-flex justify-content-between" for="lbl5"><span>Password</span> <a href="#lbl5" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a></label> <input type="password" class="form-control"  id="lbl5" name="password" placeholder="Enter Password">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Date Of Birth:</label> 
                          <abbr title="Required">*</abbr>
                          <input type="date" class="form-control" id="tfDefault"  name="DOB">
                        </div><!-- /.form-group -->

                         
                         <!-- .form-group -->
                         <div class="form-group">
                          <label for="tf2">Phone No:</label> <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control"  name="phone" placeholder="Enter Student Phone NO">
                          </div>
                        </div><!-- /.form-group -->
                        
                  
                      </div>
                      </div>
                <hr>
                <div class="row page-section">
                      <div class="col-md-6 col-sm-6 col-xs-12">

                      <h3>Father Information</h3>
                    <!-- .form-group -->
                    <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Father Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Father Name" name="father">
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <span>Email</span>
                            <abbr title="Required">*</abbr>
                            <input type="email" class="form-control" id="fl1" placeholder="Enter Email address" required="" name="fatherEmail">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="form-group">
                          <label for="tf2">Phone No:</label> <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control"  name="fatherPhone" placeholder="Enter Father Phone No">
                          </div>
                        </div><!-- /.form-group -->
                        
                    <!-- .form-group -->
                    <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Occupation</label> 
                          
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Father Occupation" name="fatherOccupation">
                        </div><!-- /.form-group -->



                    <!-- .form-group -->
                    <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Office Name</label> 
                          
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Office Name" name="fatherOffice">
                        </div><!-- /.form-group -->



                    <!-- .form-group -->
                    <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Designation</label> 
                          
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Designation" name="fatherDesignation">
                        </div><!-- /.form-group -->


                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <h3>Mother Information</h3>
                        
                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Mother Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="mother" placeholder="Enter Mother Name">
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <span>Email</span>
                            <abbr title="Required">*</abbr>
                            <input type="email" class="form-control" id="fl1" placeholder="Enter Email address" required="" name="motherEmail">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="form-group">
                          <label for="tf2">Phone No:</label> <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control"  name="motherPhone" placeholder="Enter Mother Phone No">
                          </div>
                        </div><!-- /.form-group -->
                        
                    <!-- .form-group -->
                    <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Occupation</label> 
                          
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Mother Occupation" name="motherOccupation">
                        </div><!-- /.form-group -->



                    <!-- .form-group -->
                    <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Office Name</label> 
                          
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Office Name" name="motherOffice">
                        </div><!-- /.form-group -->



                    <!-- .form-group -->
                    <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Designation</label> 
                          
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Designation" name="motherDesignation">
                        </div><!-- /.form-group -->


                      </div>
                      </div><!-- /.row -->
                     
                   
                      <hr>

                      <div class="row page-section">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                    <h3>Temprory Address</h3>

                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">State</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter State" name="state">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">City</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter city" name="city">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Zip Code</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Zip Code" name="zipcode">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Nationality</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Nationality" name="nationality">
                        </div><!-- /.form-group -->


                    </div>

                     <div class="col-md-6 col-sm-6 col-xs-12">
                    <h3>Permanent Address</h3>
                    
                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">State</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter State" name="state">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">City</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter city" name="city">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Zip Code</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Zip Code" name="zipcode">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Nationality</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Nationality" name="nationality">
                        </div><!-- /.form-group -->


                    </div>
                      </div>
                      <div class="form-actions">
                        <div class="card-body"><a href="{{url('student')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  </div><!-- /.card-body -->
                  <!-- .card-body -->
                </div>
</div>


@endsection 