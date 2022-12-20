@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('fee.store')}}" method="POST">
                    @csrf
                      <!-- .fieldset -->
                      <div class="row page-section">
                        <legend>Fee Adding Form</legend> <!-- .form-group -->
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
                          <label class="control-label" for="select2-course">Course:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-course" class="form-control" data-toggle="select2" name="course_id" data-placeholder="Select a Course" data-allow-clear="true">
                            @foreach ($course as $courses)
                              <option value="{{$courses->id}}">{{$courses->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Amount:</label>
                          <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2"  name="amount" placeholder="Enter Fee Amount">
                          </div>
                        </div><!-- /.form-group -->
                        
                        <div class="col-md-12 mb-3">
                        <div class="form-group">                            
                            <span>Is Active:</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
                        </div><!-- /.form-group -->
                      </div><!-- /.fieldset -->
                      </div>
                      <div class="form-actions">
                      <div class="card-body"><a href="{{asset('fee')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  
                </div>
</div>


@endsection 