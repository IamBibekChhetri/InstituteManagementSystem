@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('enrollment.update', $enrollment->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <div class="row">
                        <legend>Book Manage</legend> <!-- .form-group -->
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
                          <label class="control-label" for="select2-batch">Course Code:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-batch" class="form-control" name="course_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($course as $courses) 
                            <option value="{{$courses->id}}">{{$courses->code}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                      


                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-course">Course Name:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-course" class="form-control" name="course_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($course as $courses)
                            <option value="{{$courses->id}}">{{$courses->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                       
                        
                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-studentName">Student Name:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-studentName" class="form-control" name="student_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($student as $students)
                              <option value="{{$students->id}}">{{$students->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                      


                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-studentphoto">Student Photo:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-studentphoto" class="form-control" name="student_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($student as $students)
                              <option value="{{$students->id}}">{{$students->photo}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                       


                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-studentPhone">Student Phone:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-studentPhone" class="form-control" name="student_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($student as $students)
                              <option value="{{$students->id}}">{{$students->phone}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                       


                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-studentAddress">Student Address:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-studentAddress" class="form-control" name="student_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($student as $students)
                              <option value="{{$students->id}}">{{$students->address}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                       


                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-studentEmail">Student Email:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-studentEmail" class="form-control" name="student_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($student as $students)
                              <option value="{{$students->id}}">{{$students->email}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                        </div><!-- /.Row group -->
                        <div class="form-actions">
                        <div class="card-body"><a href="{{url('enrollment')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Update</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                 
                </div>
</div>


@endsection 