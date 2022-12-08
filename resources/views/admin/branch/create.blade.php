@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body"><a href="{{asset('branch')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                    <!-- .form -->
                    <form action="{{route('branch.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <!-- .fieldset -->
                      <div class="form-row">
                        <legend>Branch Manage</legend> <!-- .form-group -->
                        <div class="col-md-9 mb-3">                     
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
                          <label class="control-label" for="select2-batch">Batch:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-batch" class="form-control" name="batch_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($batch as $batchs)
                              <option value="{{$batchs->id}}">{{$batchs->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                      
                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-student">Student:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-student" class="form-control" name="student_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($student as $students)
                              <option value="{{$students->id}}">{{$students->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-instructor">Instructor:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-instructor" class="form-control" name="instructor_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($instructor as $instructors)
                              <option value="{{$instructors->id}}">{{$instructors->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Branch Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Branch Name">
                        </div><!-- /.form-group -->
                        
                         <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Address</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="address" placeholder="Enter Branch Address">
                        </div><!-- /.form-group -->

                        
                         <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Pan / Vat no:</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="panVat" placeholder="Enter Branch Pan or Vat No">
                        </div><!-- /.form-group -->


                         <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Phone No:</label> <abbr title="Required">*</abbr>
                          <div class="custom-number"> 
                            <input type="number" class="form-control"  name="phone" placeholder="Enter Branch Phone Number" >
                          </div>
                        </div><!-- /.form-group -->


                        <div class="col-md-6 mb-3">
                            <label for="tf5">Email</label>  <abbr title="Required">*</abbr>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="" name="email">
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