@extends('admin.layout.master')
@section('content')
<a href="{{asset('enrollment/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a>
<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> View Enrollment </div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Course Code: </th>
                          <th> Course Name: </th>
                          <th> Student photo: </th>
                          <th> Student Name: </th>
                          <th> Student Phone: </th>
                          <th> Student Email: </th>
                          <th> Student Address: </th>
                          <th>Action:</th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach ($enrollment as $enrollments)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                          <td>{{$enrollments->course->code}}</td>
                          <td>{{$enrollments->course->name}}</td>
                          <td><img src="{{asset('public/image/'.$enrollments->student->photo)}}" alt="" height="50px"></td>
                          <td>{{$enrollments->student->name}}</td>
                          <td>{{$enrollments->student->phone}}</td>
                          <td>{{$enrollments->student->email}}</td>
                          <td>{{$enrollments->student->address}}</td>
                          <td class="float" style="display:flex;">
                           
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#showEnrollmentModel"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('enrollment.edit',$enrollments->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('enrollment.destroy',$enrollments->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to Delete?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        
                        <div class="modal fade" id="showEnrollmentModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Displaying enrollments</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              
                              <div class="modal-body">

                              <div class="form-group">
                                  <label>Course Code:</label><br>
                                  {{$enrollments->course->code}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Course Name:</label><br>
                                  {{$enrollments->course->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Student Name:</label><br>
                                 {{$enrollments->student->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Student Phone:</label><br>
                                  {{$enrollments->student->phone}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Student Email:</label><br>
                                  {{$enrollments->student->email}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Student Address:</label><br>
                                  {{$enrollments->student->address}}
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