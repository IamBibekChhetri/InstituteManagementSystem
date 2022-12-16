@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('noticeboard.update',$noticeboard->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <div class="row page-section">
                        <legend>Noticeboard Adding Form</legend> <!-- .form-group -->
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
                          <label class="col-form-label" for="tfDefault">Notice Title:</label> 
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter Notice Title" name="title" value="{{$noticeboard->title}}">
                        </div><!-- /.form-group -->                       
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf6">Description</label>
                          <textarea class="form-control" id="tf6" rows="2" placeholder="About Notice..." name="description">{{$noticeboard->description}}</textarea>
                        </div><!-- /.form-group -->


                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf3">Attachement</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" name="attachement[]" multiple> <label class="custom-file-label" for="tf3">Choose file</label>
                            <img src="../../public/image/{{ $noticeboard->attachement }}" height="50px" width="50px">
                          </div>
                        </div><!-- /.form-group -->

                           <!-- .form-group -->
                           <div class="col-md-6 mb-3">
                          <label for="tf2">Priority</label>
                          <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2"  name="priority">
                          </div>
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Start On:</label> 
                          <input type="date" class="form-control" id="tfDefault" name="start" value="{{$noticeboard->start}}">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">End On:</label> 
                          <input type="date" class="form-control" id="tfDefault" name="end" value="{{$noticeboard->end}}">
                        </div><!-- /.form-group -->

                      </div><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{url('noticeboard')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  
                </div>
</div>


@endsection 