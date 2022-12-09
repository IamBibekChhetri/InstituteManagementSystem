@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body"><a href="{{url('branch')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                    <!-- .form -->
                    <form action="{{route('branch.update', $branch->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <div class="row">
                        <legend>Branch Manage</legend> <!-- .form-group -->
                                                
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        

                      
                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Branch Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Branch Name" value="{{$branch->name}}">
                        </div><!-- /.form-group -->
                        
                         <!-- .form-group -->
                         
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Address</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="address" value="{{$branch->address}}">
                        </div><!-- /.form-group -->

                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Pan / Vat no:</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="panVat" value="{{$branch->panVat}}">
                        </div><!-- /.form-group -->


                         <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Phone No:</label> <abbr title="Required">*</abbr>
                          <div class="custom-number"> 
                            <input type="number" class="form-control"  name="phone" value="{{$branch->phone}}" >
                          </div>
                        </div><!-- /.form-group -->


                        <div class="col-md-6 mb-3">
                            <label for="tf5">Email</label>  <abbr title="Required">*</abbr>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="" name="email" value="{{$branch->email}}">
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