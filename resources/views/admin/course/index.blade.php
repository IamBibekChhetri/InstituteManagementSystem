@extends('admin.layout.master')
@section('content')


<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage Course  <a href="{{asset('course/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Course Code </th>
                          <th> Course Name </th>
                          <th> Duration </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach ($course as $courses)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$courses->code}}</td>
                          <td>{{$courses->name}}</td>                          
                          <td>{{$courses->duration}}</td>                          
                          <td>{{$courses->status}}</td>                          
                          <td class="float" style="display:flex;">
                            
                            @if($courses['status']=='on')                              
                              <a href="{{ url('course/offStatus',$courses->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($courses['status']=='off') 
                                  <a href="{{ url('course/onStatus',$courses->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                             &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#showCourseModel"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('course.edit',$courses->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('course.destroy',$courses->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to Delete?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        

                        <div class="modal fade" id="showCourseModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Displaying Course</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              
                              <div class="modal-body">

                              <div class="form-group">
                                  <label>Course Code:</label><br>
                                  {{$courses->code}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Course Name:</label><br>
                                  {{$courses->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Coursed Duration:</label><br>
                                 {{$courses->duration}}
                              </div>
                                
                                <hr>


                              <div class="form-group">
                                  <label>Total Course:</label><br>
                                  {{$courses->count()}}
                              </div>
                                
                              <div class="modal-footer">
                              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                            </form>
                            </div>
                            </div>
                          </div>
                        </div>


                        @endforeach
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.card-body -->
</div><!-- /.card -->
@endsection