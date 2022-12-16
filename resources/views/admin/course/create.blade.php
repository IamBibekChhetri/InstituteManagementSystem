@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('course.store')}}" method="POST">
                    @csrf
                      <!-- .fieldset -->
                      <div class="row page-section">
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
                          
                          <label for="tf2">Cousrse Code</label>  <abbr title="Required">*</abbr>
                            <input type="text" class="form-control" id="tf2" placeholder="Enter Course code" name="code">
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Course Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Course Name" name="name">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf6">Course Deatails</label>
                          <abbr title="Required">*</abbr>
                          <textarea class="form-control" id="tf6" rows="2" placeholder="About Course..." name="details"></textarea>
                        </div><!-- /.form-group -->
                        
                           <!-- .form-group -->
                           <div class="col-md-6 mb-3">
                             <label for="tf2">Cousrse Duration</label>
                             <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control" placeholder="Enter Course Duration" id="tf2" name="duration">
                          </div>
                        </div><!-- /.form-group -->
                        
                          

                        <div class="col-md-12 mb-3">                            
                            <span>Is Active:</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
                        </div><!-- /.form-group -->
                      </div><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{asset('course')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  
                </div>
</div>


@endsection 