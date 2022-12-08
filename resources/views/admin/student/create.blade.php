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
                    <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                          <label class="col-form-label" for="tfDefault">Student Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Student Name" name="name">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="selDefault">Gender</label> 
                          <abbr title="Required">*</abbr>
                          <select class="custom-select" id="selDefault" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                            
                          </select>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">Date Of Birth:</label> 
                          <abbr title="Required">*</abbr>
                          <input type="date" class="form-control" id="tfDefault"  name="DOB">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-4 mb-3">
                          <label class="col-form-label" for="tfDefault">Father Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Father Name" name="father">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-4 mb-3">
                          <label class="col-form-label" for="tfDefault">Mother Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="mother" placeholder="Enter Mother Name">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-4 mb-3">
                          <label for="tf2">Phone No:</label> <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control"  name="phone" placeholder="Enter Student Phone NO">
                          </div>
                        </div><!-- /.form-group -->
                        
                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Address:</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Student Address" name="address">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">State</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter State" name="state">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">City</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter city" name="city">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">Zip Code</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Zip Code" name="zipcode">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">Nationality</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Nationality" name="nationality">
                        </div><!-- /.form-group -->


                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label class="col-form-label" for="tfDefault">Qualification</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Qualification" name="qualification">
                        </div><!-- /.form-group -->
                        
                         <!-- .form-group -->
                         <div class="col-md-3 mb-3">
                          <label for="tf3">Student Photo</label>
                          <abbr title="Required">*</abbr>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" name="photo"> <label class="custom-file-label" for="tf3">Photo</label>
                          </div>
                        </div><!-- /.form-group -->

                        <div class="col-md-6 mb-3">
                          <div class="form-label-group">
                            <span>Email</span>
                            <abbr title="Required">*</abbr>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="" name="email">
                          </div>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="d-flex justify-content-between" for="lbl5"><span>Password</span> <a href="#lbl5" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a></label> <input type="password" class="form-control"  id="lbl5" name="password">
                        </div><!-- /.form-group -->

                        <div class="col-md-12 mb-3">                            
                            <span>Is Active:</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
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