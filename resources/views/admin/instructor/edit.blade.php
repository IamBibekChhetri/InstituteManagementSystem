@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body"><a href="{{asset('instructor')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                    <!-- .form -->
                    <form action="{{route('instructor.update',$instructor->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <div class="row">
                        <legend>Instructor / Teacher Adding Form</legend> <!-- .form-group -->                        
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
                          <label class="col-form-label" for="tfDefault">Instructor Name:</label> 
                          <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Instructor Name" value="{{$instructor->name}}">
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Age:</label>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2" name="age" placeholder="Enter Instructor Age" value="{{$instructor->age}}">
                          </div>
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Instructor Address:</label> 
                          <input type="text" class="form-control" id="tfDefault" name="address" placeholder="Enter Address" value="{{$instructor->address}}">
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Phone:</label>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2" placeholder="Enter Phone" name="phone" value="{{$instructor->phone}}">
                          </div>
                        </div><!-- /.form-group -->

                                               
                         <!-- .form-group -->
                         <div class="col-md-4 mb-3">
                          <label for="tf3">Instructor Photo</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" name="photo"> 
                            <img src="../../public/image/{{ $instructor->photo }}" height="50px" width="50px">
                            <label class="custom-file-label" for="tf3">Photo</label>
                          </div>
                        </div><!-- /.form-group -->


                        <div class="col-md-4 mb-3">
                            <label for="tf5">Email</label>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="" name="email" value="{{$instructor->email}}">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="col-md-4 mb-3">
                          <label class="d-flex justify-content-between" for="lbl5"><span>Password</span> <a href="#lbl5" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a></label> <input type="password" class="form-control" id="lbl5" name="password">
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