@extends('admin.layout.master')
@section('content')


<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage Students <a href="{{asset('student/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Branch </th>
                          <th> Photo </th>
                          <th> Name </th>
                          <th> Phone </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach( $student as $students)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$students->branch->name}}</td>
                          <td><img src="{{asset('public/image/'.$students->photo)}}" alt="" height="50px"></td>
                          <td>{{$students->name}}</td>
                          <td>{{$students->phone}}</td>
                          <td>{{$students->status}}</td>
                          <td class="centre" style="display:flex;">
                          
                          @if($students['status']=='on')                              
                              <a href="{{ url('student/offStatus',$students->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($students['status']=='off') 
                                  <a href="{{ url('student/onStatus',$students->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                            &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewStudents{{$students->id}}"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('student.edit',$students->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('student.destroy',$students->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        

                          <div class="modal fade" id="viewStudents{{$students->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Displaying Student</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                
                                <div class="modal-body">


                                <div class="form-group">
                                    <label>Name:</label><br>
                                    {{$students->name}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Phone:</label><br>
                                    {{$students->phone}}
                                </div>
                                  
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Address:</label><br>
                                    {{$students->address}}
                                </div>
                                  
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Father Name:</label><br>
                                    {{$students->father}}
                                </div>
                                  
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Mother Name:</label><br>
                                    {{$students->mother}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Total Student:</label><br>
                                    {{$students->count()}}
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