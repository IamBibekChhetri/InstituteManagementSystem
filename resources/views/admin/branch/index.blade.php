@extends('admin.layout.master')
@section('content')

<a href="{{asset('branch/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a>
<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage Branch </div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> Batch </th>
                          <th> Student </th>
                          <th> Instructor </th>
                          <th> Branch Name </th>
                          <th> Address </th>
                          <th> Pan / Vat No: </th>
                          <th> Phone </th>
                          <th> Email </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach ($branch as $branchs)
                        <tr>
                          <td>{{$branchs->batch->name}}</td>
                          <td>{{$branchs->student->name}}</td>
                          <td>{{$branchs->instructor->name}}</td>
                          <td>{{$branchs->name}}</td>
                          <td>{{$branchs->address}}</td>
                          <td>{{$branchs->panVat}}</td>
                          <td>{{$branchs->phone}}</td>
                          <td>{{$branchs->email}}</td>
                          <td>{{$branchs->status}}</td>
                          <td class="centre" style="display:flex;">

                          @if($branchs['status']=='on')                              
                              <a href="{{ url('branch/offStatus',$branchs->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($branchs['status']=='off') 
                                  <a href="{{ url('branch/onStatus',$branchs->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                             &nbsp;
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#showBranchModel"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('branch.edit',$branchs->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('branch.destroy',$branchs->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        

                        <div class="modal fade" id="showBranchModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Displaying Branch</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              
                              <div class="modal-body">

                              <div class="form-group">
                                  <label>Batch:</label><br>
                                  {{$branchs->batch->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Student Name:</label><br>
                                  {{$branchs->student->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Instructor Name:</label><br>
                                 {{$branchs->instructor->name}}
                              </div>

                                
                                <hr>

                              <div class="form-group">
                                  <label>Branchs Name:</label><br>
                                  {{$branchs->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label> Address:</label><br>
                                  {{$branchs->address}}
                              </div>
                                <hr>

                              <div class="form-group">
                                  <label>Phone:</label><br>
                                  {{$branchs->phone}}
                              </div>
                                <hr>

                              <div class="form-group">
                                  <label>Email:</label><br>
                                  {{$branchs->email}}
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