@extends('admin.layout.master')
@section('content')


<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage User <a href="{{asset('user/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Photo </th>
                          <th> Role </th>
                          <th> Name </th>
                          <th> Address </th>
                          <th> Phone </th>
                          <th> Email </th>
                          <th> Status</th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach ($user as $users)
                        <tr>
                          <td>{{$i++}}</td>
                          <td><img src="{{asset('public/image/user/'.$users->photo)}}" alt="" height="50px"></td>
                          <td>{{$users->user_role->role}}</td>
                          <td>{{$users->name}}</td>
                          <td>{{$users->address}}</td>
                          <td>{{$users->phone}}</td>
                          <td>{{$users->email}}</td>
                          <td>{{$users->status}}</td>
                          <td class="centre" style="display:flex;">
                          
                          @if($users['status']=='on')                              
                              <a href="{{ url('user/offStatus',$users->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($users['status']=='off') 
                                  <a href="{{ url('user/onStatus',$users->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                            &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#showUserModel"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('user.edit',$users->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('user.destroy',$users->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to Delete?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        

                        <div class="modal fade" id="showUserModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Displaying User</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                
                                <div class="modal-body">

                                <div class="form-group">
                                    <label>Name:</label><br>
                                    {{$users->name}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>User Role:</label><br>
                                    {{$users->user_role->role}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Address:</label><br>
                                    {{$users->address}}
                                </div>
                                  
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Phone:</label><br>
                                    {{$users->phone}}
                                </div>
                                  
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Email:</label><br>
                                    {{$users->email}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Total User:</label><br>
                                    {{$users->count()}}
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