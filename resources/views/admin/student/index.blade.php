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
                          <td><img src="{{asset('public/image/student/'.$students->photo)}}" alt="" height="50px"></td>
                          <td>{{$students->name}}</td>
                          <td>{{$students->phone}}</td>
                          <td>{{$students->status}}</td>
                          <td class="centre" style="display:flex;">
                          <a href="#"><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#changePassword{{$students->id}}"><i class="fa fa-lock"></i></button></a>
                          &nbsp;
                          
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
                        
<!-- ------------------------------------------------------- View Section ---------------------------------------  -->
                          <div class="modal fade" id="viewStudents{{$students->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel"> Student Information</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                
                              <div class="modal-body">
                                
                                <div class="form-group">
                                    <label> Student Photo:</label><br>
                                    <img src="{{asset('public/image/student/'.$students->photo)}}" alt="" height="50px">
                                </div>
                                  
                                  <hr>

                                  <div class="form-group">
                                    <label> Branch :</label><br>
                                    {{$students->branch->name}}
                                </div>
                                 
                                  <hr>

                                <div class="form-group">
                                    <label> Student Name:</label><br>
                                    {{$students->name}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Phone:</label><br>
                                    {{$students->phone}}
                                </div>
                                                                    
                                  <hr>

                                <div class="form-group">
                                    <label>Gender:</label><br>
                                    {{$students->gender}}
                                </div>
                                
                                  <hr>
                                
                                <div class="form-group">
                                    <label> Address: 0</label><br>
                                    {{$students->address}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label> Email: </label><br>
                                    {{$students->email}}
                                </div>

                                  <hr>

                                <div class="form-group">
                                    <label> Qualification: </label><br>
                                    {{$students->qualification}}
                                </div>

                            <h5 class="modal-title" id="exampleModalLabel"> Father Information </h5>
                                                             
                              <div class="form-group">
                                    <label> Parents Name: </label><br>
                                    {{$students->fatherName}} / {{$students->motherName}}
                                </div>

                                  <hr>
                                
                              <div class="form-group">
                                    <label> Parents Phone: </label><br>
                                    {{$students->fatherPhone}} / {{$students->motherPhone}}
                                </div>

                                  <hr>
                                
                              <div class="form-group">
                                    <label> Father Occupation: </label><br>
                                    {{$students->fatherOccupation}} / {{$students->motherOccupation}}
                                </div>

                                  <hr>
                                
                              <div class="form-group">
                                    <label> Father Office: </label><br>
                                    {{$students->fatherOffice}}
                                </div>

                                  
                              
                              </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                              </div>
                              </div>
                            </div>
                          </div>
 <!-- --------------------------------------- Change Password ---------------------------------------  -->
 <div class="modal fade" id="changePassword{{$students->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form role="form" action="{{route('student.changePassword', $students->id)}}" method = "Post">
        @csrf
        @method('PUT')
      <div class="modal-body">

        <div class="form-group">
          <span>Email</span>
          <abbr title="Required">*</abbr>
          <input type="email" class="form-control" id="fl1" placeholder="Enter Email address" required="" name="email">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="form-group">
          <label class="d-flex justify-content-between" for="lbl5"><span>Password</span> <a href="#lbl5" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a></label> <input type="password" class="form-control"  id="lbl5" name="password" placeholder="Enter Password">
        </div><!-- /.form-group -->

        
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
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