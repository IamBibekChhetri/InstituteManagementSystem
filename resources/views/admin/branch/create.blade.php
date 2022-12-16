@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('branch.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <!-- .fieldset -->
                      <div class="row page-section">
                        <legend>Branch Manage</legend> <!-- .form-group -->
                        <div class="col-md-9 mb-3">                     
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

                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Branch Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Branch Name">
                        </div><!-- /.form-group -->
                        
                         <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Address</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="address" placeholder="Enter Branch Address">
                        </div><!-- /.form-group -->

                        
                         <!-- .form-group -->
                        
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Pan / Vat no:</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="panVat" placeholder="Enter Branch Pan or Vat No">
                        </div><!-- /.form-group -->


                         <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Phone No:</label> <abbr title="Required">*</abbr>
                          <div class="custom-number"> 
                            <input type="number" class="form-control"  name="phone" placeholder="Enter Branch Phone Number" >
                          </div>
                        </div><!-- /.form-group -->


                        <div class="col-md-6 mb-3">
                            <label for="tf5">Email</label>  <abbr title="Required">*</abbr>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="" name="email">
                        </div><!-- /.form-group -->

                        <div class="col-md-12 mb-3">                         
                            <span>Is Active:</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
                        </div><!-- /.form-group -->
                      </div><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{asset('branch')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  
                </div>
</div>


@endsection 