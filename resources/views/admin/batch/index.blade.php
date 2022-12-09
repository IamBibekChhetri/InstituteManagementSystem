@extends('admin.layout.master')
@section('content')

<a href="{{asset('batch/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a> 
<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage Batch </div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Branch </th>
                          <th> Batch code </th>
                          <th> Batch Name </th>
                          <th> Course </th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach($batch as $batchs)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$batchs->branch->name}}</td>
                          <td>{{$batchs->name}}</td>
                          <td>{{$batchs->course->name}}</td>
                          <td>{{$batchs->status}}</td>
                          <td class="centre" style="display:flex;">
                          
                          @if($batchs['status']=='on')                              
                              <a href="{{ url('batch/offStatus',$batchs->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($batchs['status']=='off') 
                                  <a href="{{ url('batch/onStatus',$batchs->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                             &nbsp;
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#showBatchModel"><i class="fas fa-eye"></i></button> 
                            &nbsp;
                            <a href="{{ route('batch.edit',$batchs->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('batch.destroy',$batchs->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>

                        <div class="modal fade" id="showBatchModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                        
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                              
                                <h5 class="modal-title" id="exampleModalLabel">Displaying Batch</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              
                              <div class="modal-body">

                              <div class="form-group">
                                  <label>Batch</label><br>
                                  {{$batchs->code}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Batch Name</label><br>
                                  {{$batchs->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Course</label><br>
                                 {{$batchs->course->name}}
                              </div>
                                
                                <hr>


                              <div class="form-group">
                                  <label>Total Batch</label><br>
                                  {{$batchs->count()}}
                              </div>
                                
                              <hr>
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