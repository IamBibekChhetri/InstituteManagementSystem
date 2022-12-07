@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body"><a href="{{asset('course')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                    <!-- .form -->
                    <form action="{{route('course.update',$course->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <div class="row">
                        <legend>Course Manage</legend> <!-- .form-group -->
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
                          <label for="tf2">Cousrse Code</label>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2" placeholder="Enter Course Code" name="code" value="{{$course->code}}">
                          </div>
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Course Name</label> 
                          <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Course Name" value="{{$course->name}}">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf6">Course Deatails</label>
                          <textarea class="form-control" id="tf6" rows="2" placeholder="Enter Course Details" name="details">{{$course->details}}</textarea>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        
                           <!-- .form-group -->
                           <div class="col-md-6 mb-3">
                          <label for="tf2">Cousrse Duration</label>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2" name="duration" value="{{$course->duration}}">
                          </div>
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