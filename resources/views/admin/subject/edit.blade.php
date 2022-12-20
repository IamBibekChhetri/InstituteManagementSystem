@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('subject.update',$subject->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <div class="row page-section">
                        <legend>Subject Manage</legend> <!-- .form-group -->
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
                          <select id="select2-batch" class="form-control" data-toggle="select2" data-placeholder="Select a Batch" data-allow-clear="true">
                            @foreach ($batch as $batchs)
                              <option value="{{$batchs->id}}">{{$batchs->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-course">Course:</label> 
                          <select id="select2-course" class="form-control" data-toggle="select2" data-placeholder="Select a Course" data-allow-clear="true">
                            @foreach ($course as $courses)
                              <option value="{{$courses->id}}">{{$courses->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Subject Name</label> 
                          <input type="text" class="form-control" id="tfDefault" name="name" value="{{$subject->name}}">
                        </div><!-- /.form-group -->

                        

                        
                      </div><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{url('subject')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  
                </div>
</div>


@endsection 