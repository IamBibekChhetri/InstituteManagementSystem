@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body"><a href="{{asset('batch')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                    <!-- .form -->
                    <form action="{{route('batch.update',$batch->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <div class="row page-section">
                        <legend>Batch Manage</legend> <!-- .form-group -->
                        <div class="col-md-10 mb-3">                  
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
                          <label class="control-label" for="select2-single">Course:</label> 
                          <select id="select2-single" class="form-control" name="course_id" data-toggle="select2" data-placeholder="Select a Course" data-allow-clear="true">
                            @foreach ($course as $courses)
                              <option value="{{$courses->id}}">{{$courses->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-branch">branch:</label> 
                          <select id="select2-branch" class="form-control" name="branch_id" data-toggle="select2" data-placeholder="Select a Branch" data-allow-clear="true">
                            @foreach ($branch as $branchs)
                              <option value="{{$branchs->id}}">{{$branchs->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->


                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Batch Code</label>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2" name="code" value="{{$batch->code}}" placeholder="Enter Batch Code">
                          </div>
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Batch Name</label> 
                          <input type="text" class="form-control" id="tfDefault" name="name" value="{{$batch->name}}" placeholder="Enter Batch Name">
                        </div><!-- /.form-group -->
                        
                       
                      </div><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{url('batch')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  
                </div>
</div>


@endsection 