@extends('admin.layout.master')
@section('content')


<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage Instructor <a href="{{asset('instructor/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
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
                          <th> Instructor Name </th>
                          <th> Instructor Phone no </th>
                          <th> Instructor Address </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach( $instructor as $instructors)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$instructors->branch->name}}</td>
                          <td><img src="{{asset('public/image/'.$instructors->photo)}}" alt="" height="50px"></td>
                          <td>{{$instructors->name}}</td>
                          <td>{{$instructors->phone}}</td>
                          <td>{{$instructors->address}}</td>
                          <td>{{$instructors->status}}</td>
                          <td class="centre"  style="display:flex;">
                          
                          
                          @if($instructors['status']=='on')                              
                              <a href="{{ url('instructor/offStatus',$instructors->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($instructors['status']=='off') 
                                  <a href="{{ url('instructor/onStatus',$instructors->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                            &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewInstructor{{$instructors->id}}"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('instructor.edit',$instructors->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('instructor.destroy',$instructors->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        

                        <div class="modal fade" id="viewInstructor{{$instructors->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Displaying Instructor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              
                              <div class="modal-body">                             

                              <div class="form-group">
                                  <label>Instructor Name:</label><br>
                                  {{$instructors->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Instructor Name:</label><br>
                                  {{$instructors->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Phone No:</label><br>
                                  {{$instructors->phone}}
                              </div>


                                <hr>

                              <div class="form-group">
                                  <label>Address:</label><br>
                                  {{$instructors->address}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Total Instructor:</label><br>
                                  {{$instructors->count()}}
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