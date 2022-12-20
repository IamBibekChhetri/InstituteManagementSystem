@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <!-- .fieldset -->
                      <div class="row page-section">
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
                          <select id="select2-batch" class="form-control" name="batch_id" data-toggle="select2" data-placeholder="Select a Batch" data-allow-clear="true">
                            @foreach ($batch as $batchs)
                              <option value="{{$batchs->id}}">{{$batchs->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                      


                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-course">Course:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-course" class="form-control" name="course_id" data-toggle="select2" data-placeholder="Select a Course" data-allow-clear="true">
                            @foreach ($course as $courses)
                              <option value="{{$courses->id}}">{{$courses->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                       

                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-subject">Subject:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-subject" class="form-control" name="subject_id" data-toggle="select2" data-placeholder="Select a Subject" data-allow-clear="true">
                            @foreach ($subject as $subjects)
                              <option value="{{$subjects->id}}">{{$subjects->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                      


                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-author">Author:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-author" class="form-control" name="author_id" data-toggle="select2" data-placeholder="Select a Author" data-allow-clear="true">
                            @foreach ($author as $authors)
                              <option value="{{$authors->id}}">{{$authors->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->
                       

                        <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Book Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Book Name">
                        </div><!-- /.form-group -->
                        
                         <!-- .form-group -->
                         
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Published Date</label> 
                          <abbr title="Required">*</abbr>
                          <input type="date" class="form-control" id="tfDefault" name="published">
                        </div><!-- /.form-group -->


                          <!-- .form-group -->
                        
                          <div class="col-md-12 mb-3">
                          <label for="tf6">Book Deatails</label>
                          <abbr title="Required">*</abbr>
                          <textarea class="form-control" id="tf6" rows="2" name="details" placeholder="Details Here..."></textarea>
                        </div><!-- /.form-group -->
                          
                        <div class="col-md-12 mb-3">                         
                            <span>Is Active:</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
                        </div><!-- /.form-group -->
                      </div><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{asset('book')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                 
                </div>
</div>


@endsection 