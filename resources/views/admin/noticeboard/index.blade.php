@extends('admin.layout.master')
@section('content')


<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage Noticeboard <a href="{{asset('noticeboard/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Notice Title </th>
                          <th> Notice File </th>
                          <th> Priority </th>
                          <th> Starts On </th>
                          <th> Ends On </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach( $noticeboard as $noticeboards)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$noticeboards->title}}</td>
                          <td><img src="{{asset('public/image/'.$noticeboards->attachement)}}" alt="" height="50px"></td>
                          <td>{{$noticeboards->priority}}</td>
                          <td>{{$noticeboards->start}}</td>
                          <td>{{$noticeboards->end}}</td>
                          <td>{{$noticeboards->status}}</td>
                          <td class="centre" style="display:flex;">

                          
                          @if($noticeboards['status']=='on')                              
                              <a href="{{ url('noticeboard/offStatus',$noticeboards->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($noticeboards['status']=='off') 
                                  <a href="{{ url('noticeboard/onStatus',$noticeboards->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                            &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewNoticeboard{{$noticeboards->id}}"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('noticeboard.edit',$noticeboards->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('noticeboard.destroy',$noticeboards->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                          </tr>

                          <div class="modal fade" id="viewNoticeboard{{$noticeboards->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Displaying Noticeboard</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                
                                <div class="modal-body">

                                <div class="form-group">
                                    <label>Title:</label><br>
                                    {{$noticeboards->title}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Priority:</label><br>
                                    {{$noticeboards->priority}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Total Noticeboard:</label><br>
                                    {{$noticeboards->count()}}
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