@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('author.update',$author->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                      <!-- .Row -->
                      <div class="row page-section">
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
                        <div class="col-md-12 mb-3">
                          <label class="col-form-label" for="tfDefault">Author Name</label> 
                          <input type="text" class="form-control" id="tfDefault" name="name" value="{{$author->name}}">
                        </div><!-- /.form-group -->
  
                       
                      </div><!-- /.Row -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{url('author')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  
                </div>
</div>


@endsection 