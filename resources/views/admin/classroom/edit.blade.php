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
                    <form action="{{route('book.update', $book->id)}}" method="POST">
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
                          <label class="control-label" for="select2-className">Class:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-className" class="form-control" name="className_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($className as $classNames)
                              <option value="{{$classNames->id}}">{{$classNames->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                       

                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Class Room</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="classroom" value="{{$classroom->classroom}}" placeholder="Enter Class Room">
                        </div><!-- /.form-group -->
                        
                        
                      </div><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{url('classroom')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
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