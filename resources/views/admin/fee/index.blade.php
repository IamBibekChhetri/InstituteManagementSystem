@extends('admin.layout.master')
@section('content')


<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header">Manage Fee<a href="{{asset('fee/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Course Name </th>
                          <th> Payed Amount </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach( $fee as $fees)
                        <tr>
                          <td>{{$i}}</td>
                          <td>{{$fees->course->name}}</td>
                          <td>{{$fees->amount}}</td>
                          <td>{{$fees->status}}</td>
                          <td class="centre" style="display:flex;">

                            @if($fees['status']=='on')                              
                              <a href="{{ url('fee/offStatus',$fees->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($fees['status']=='off') 
                                  <a href="{{ url('fee/onStatus',$fees->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                             &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewFee{{$fees->id}}"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('fee.edit',$fees->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('fee.destroy',$fees->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        <div class="modal fade" id="viewFee{{$fees->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Displaying Fees</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              
                              <div class="modal-body">

                              <div class="form-group">
                                  <label>Payed Amount:</label><br>
                                  {{$fees->amount}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Course Name:</label><br>
                                  {{$fees->course->name}}
                              </div>
                                
                              
                                
                              
                              <div class="modal-footer">
                              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
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