@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form action="{{route('faculty.store')}}" method="POST">
                    @csrf
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Author Manage</legend> <!-- .form-group -->
                        
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
                          <label class="control-label" for="select2-branch">branch:</label> 
                          <select id="select2-branch" class="form-control" name="branch_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($branch as $branchs)
                              <option value="{{$branchs->id}}">{{$branchs->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->


                        <!-- .form-group -->
                        <div class="col-md-12 mb-3">
                        <label for="faculty">Faculty Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="name" placeholder=" Enter Faculty Name">
                        </div><!-- /.form-group -->
  
                        <div class="col-md-6 mb-3">                            
                            <span>Is Active:</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
                        </div><!-- /.form-group -->
                      </fieldset><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{asset('faculty')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  </div><!-- /.card-body -->
                  <!-- .card-body -->
                </div>
</div>


@endsection 