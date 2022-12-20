@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form action="{{route('classroom.store')}}" method="POST">
                    @csrf
                      <!-- .fieldset -->
                      <div class="row page-section">
                        <legend>Class Room Manage</legend> <!-- .form-group -->
                         
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
                          <label class="control-label" for="select2-batch">Batch:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-batch" class="form-control" name="batch_id" data-toggle="select2" data-placeholder="Select a Batch" data-allow-clear="true">
                            @foreach ($batch as $batchs)
                              <option value="{{$batchs->id}}">{{$batchs->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                      


                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-instructor">Instructor:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-instructor" class="form-control" name="instructor_id" data-toggle="select2" data-placeholder="Select a Instructor" data-allow-clear="true">
                            @foreach ($instructor as $instructors)
                              <option value="{{$instructors->id}}">{{$instructors->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                       

                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-student">Student:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-student" class="form-control" name="student_id" data-toggle="select2" data-placeholder="Select a Student" data-allow-clear="true">
                            @foreach ($student as $students)
                              <option value="{{$students->id}}">{{$students->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                      


                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-className">Class Name:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-className" class="form-control" name="classname_id" data-toggle="select2" data-placeholder="Select a Class Name" data-allow-clear="true">
                            @foreach ($classname as $classnames)
                              <option value="{{$classnames->id}}">{{$classnames->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                       

                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Class Room</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="classroom" placeholder="Enter Class Room">
                        </div><!-- /.form-group -->
                        
                        
                        <div class="col-md-12 mb-3">                         
                            <span>Is Active:</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
                        </div><!-- /.form-group -->
                      </div><!-- /.row -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{asset('classroom')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
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