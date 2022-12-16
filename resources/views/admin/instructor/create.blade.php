@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('instructor.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <!-- .fieldset -->
                      <div class="form-row">
                        <legend>Instructor Manage</legend> <!-- .form-group -->
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
                          <label class="col-form-label" for="tfDefault">Instructor Name:</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Instructor Name">
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Age:</label>  <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2" name="age" placeholder="Enter Instructor Age">
                          </div>
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Instructor Address:</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="address" placeholder="Enter Instructor Address">
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Phone:</label>  <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2" name="phone" placeholder="Enter Instructor Phone">
                          </div>
                        </div><!-- /.form-group -->

                                               
                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label for="tf3">Instructor Photo</label>
                          <abbr title="Required">*</abbr>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" name="photo"> <label class="custom-file-label" for="tf3">Photo</label>
                          </div>
                        </div><!-- /.form-group -->


                        <div class="col-md-6 mb-3">
                           <span>Email</span>  <abbr title="Required">*</abbr>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" placeholder="Enter Email" required="" name="email">
                          
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="d-flex justify-content-between" for="lbl5"><span>Password</span> <a href="#lbl5" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a></label> <input type="password" class="form-control"  id="lbl5" name="password" placeholder="Enter Password">
                        </div><!-- /.form-group -->

                        <div class="col-md-12 mb-3">                            
                            <span>Is Active:</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
                        </div><!-- /.form-group -->
                      </div><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{asset('instructor')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  
                </div>
</div>


@endsection 