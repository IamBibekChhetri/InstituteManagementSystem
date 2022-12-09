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
                    <form action="{{route('batch.store')}}" method="POST">
                    @csrf
                      <!-- .fieldset -->
                      <div class="row">
                        <legend>Batch Manage</legend> <!-- .form-group -->
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
                        <div class="col-md-5 mb-3">
                          <label class="control-label" for="select2-single">Course:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-single" class="form-control" data-toggle="select2" name="course_id" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($course as $courses)
                              <option value="{{$courses->id}}">{{$courses->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-5 mb-3">
                          <label class="control-label" for="select2-branch">Branch:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-branch" class="form-control" data-toggle="select2" name="branch_id" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($branch as $branchs)
                              <option value="{{$branchs->id}}">{{$branchs->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-4 mb-3">
                          <label for="tf2">Batch Code</label>  <abbr title="Required">*</abbr>
                            <input type="text" class="form-control"  name="code" placeholder="Enter Batch Code">
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-5 mb-3">
                          <label class="col-form-label" for="tfDefault">Batch Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Batch Name">
                        </div><!-- /.form-group -->
                        
                        <div class="col-md-12 mb-3">                            
                            <span>Is Active:</span> 
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