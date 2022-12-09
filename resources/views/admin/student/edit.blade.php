@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body"><a href="{{asset('student')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                    <!-- .form -->
                    <form action="{{route('student.update',$student->id)}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <div class="row">
                        <legend>Student Manage</legend> <!-- .form-group -->
                        <div class="col-md-8 mb-3">
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

                      <!-- .form-group -->
                      <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-branch">branch:</label> 
                          <select id="select2-branch" class="form-control" name="branch_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($branch as $branchs)
                              <option value="{{$branchs->id}}">{{$branchs->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->


                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Student Name</label> 
                          <input type="text" class="form-control" id="tfDefault" name="name"  value="{{$student->name}}">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-4 mb-3">
                          <label class="col-form-label" for="selDefault">Gender</label> <select class="custom-select" id="selDefault" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                            
                          </select>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-4 mb-3">
                          <label class="col-form-label" for="tfDefault">Date Of Birth:</label> 
                          <input type="date" class="form-control" id="tfDefault" name="DOB" value="{{$student->DOB}}">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-4 mb-3">
                          <label class="col-form-label" for="tfDefault">Father Name</label> 
                          <input type="text" class="form-control" id="tfDefault" name="father"  value="{{$student->father}}">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Mother Name</label> 
                          <input type="text" class="form-control" id="tfDefault" name="mother"  value="{{$student->mother}}"> 
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Phone no</label> 
                          <input type="number" class="form-control" id="tfDefault" name="phone"  value="{{$student->phone}}">
                        </div><!-- /.form-group -->
                        

                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Address:</label> 
                          <input type="text" class="form-control" id="tfDefault" name="address"  value="{{$student->address}}">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">State</label> 
                          <input type="text" class="form-control" id="tfDefault" name="state"  value="{{$student->state}}">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">City</label> 
                          <input type="text" class="form-control" id="tfDefault" name="city"  value="{{$student->city}}">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">Zip Code</label> 
                          <input type="number" class="form-control" id="tfDefault" name="zipcode"  value="{{$student->zipcode}}">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">Nationality</label> 
                          <input type="text" class="form-control" id="tfDefault" name="nationality"  value="{{$student->nationality}}">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">Qualification</label> 
                          <input type="text" class="form-control" id="tfDefault" name="qualification"  value="{{$student->qualification}}">
                        </div><!-- /.form-group -->
                        
                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label for="tf3">Student Photo</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" name="photo">
                            <img src="../../public/image/{{ $student->photo }}" height="50px" width="50px" >
                            <label class="custom-file-label" for="tf3">Photo</label>
                          </div>
                        </div><!-- /.form-group -->

                        <div class="col-md-6 mb-3">
                            <label for="tf5">Email</label>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="" name="email"  value="{{$student->email}}">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                         <span>Password</span> <a href="#lbl5" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a><input type="password" class="form-control" id="lbl5" name="password">
                        </div><!-- /.form-group -->

                        

                      </div><!-- /.fieldset -->

                      <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                    </form><!-- /.form -->
                  </div><!-- /.card-body -->
                  <!-- .card-body -->
                </div>
</div>


@endsection 