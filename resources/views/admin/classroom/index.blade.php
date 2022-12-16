@extends('admin.layout.master')
@section('content')


<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage Classroom <a href="{{asset('classroom/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Batch </th>
                          <th> Instructor </th>
                          <th> Student </th>
                          <th> Class Name </th>
                          <th> Class Room </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach ($classroom as $classrooms)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$classrooms->batch->name}}</td>
                          <td>{{$classrooms->instructor->name}}</td>
                          <td>{{$classrooms->student->name}}</td>
                          <td>{{$classrooms->classname->name}}</td>
                          <td>{{$classrooms->classroom}}</td>
                          <td>{{$classrooms->status}}</td>
                          <td class="centre" style="display:flex;">

                          @if($classrooms['status']=='on')                              
                              <a href="{{ url('classroom/offStatus',$classrooms->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($classrooms['status']=='off') 
                                  <a href="{{ url('classroom/onStatus',$classrooms->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                             &nbsp;
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewClassroom{{$classrooms->id}}"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('classroom.edit',$classrooms->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('classroom.destroy',$classrooms->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        

                        <div class="modal fade" id="viewClassroom{{$classrooms->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Displaying classrooms</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              
                              <div class="modal-body">

                              <div class="form-group">
                                  <label>Batch:</label><br>
                                  {{$classrooms->batch->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Course:</label><br>
                                  {{$classrooms->instructor->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Subject:</label><br>
                                 {{$classrooms->student->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Author Name:</label><br>
                                  {{$classrooms->classname->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>classrooms Name:</label><br>
                                  {{$classrooms->classroom}}
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