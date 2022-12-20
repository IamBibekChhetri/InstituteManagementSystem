@extends('admin.layout.master')
@section('content')

<a href="{{asset('classname/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a> 
<div class="page-section">
              <div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header">Manage Class </div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Branch Name </th>
                          <th> Class Name </th>
                          <th> Status </th>
                          <th> Action </th>
                          
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach ($classname as $classnames)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$classnames->branch->name}}</td>
                          <td>{{$classnames->name}}</td>
                          <td>{{$classnames->status}}</td>
                          <td class="centre" style="display:flex;">
                          
                          @if($classnames['status']=='on')                              
                              <a href="{{ url('classname/offStatus',$classnames->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($classnames['status']=='off') 
                                  <a href="{{ url('classname/onStatus',$classnames->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>
                            @endif
                             &nbsp;
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewClassname{{$classnames->id}}" ><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('classname.edit',$classnames->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('classname.destroy',$classnames->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>

                        <div class="modal fade" id="viewClassname{{$classnames->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Displaying classname</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              
                              <div class="modal-body">

                              <div class="form-group">
                                  <label>classname Name:</label><br>
                                  {{$classnames->name}}
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
                  </div><!-- /.card-Header -->
</div><!-- /.page section -->

@endsection