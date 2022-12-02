@extends('admin.layout.master')
@section('content')


<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage Subject <a href="{{asset('subject/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Batch </th>
                          <th> Course </th>
                          <th> Subject </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach ($subject as $subjects)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$subjects->batch->name}}</td>
                          <td>{{$subjects->course->name}}</td>
                          <td>{{$subjects->name}}</td>
                          <td>{{$subjects->status}}</td>
                          <td class="centre" style="display:flex;">
                          
                          @if($subjects['status']=='on')                              
                              <a href="{{ url('subject/offStatus',$subjects->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($subjects['status']=='off') 
                                  <a href="{{ url('subject/onStatus',$subjects->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                            &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#showSubjectModel"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('subject.edit',$subjects->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('subject.destroy',$subjects->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to Delete?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        

                        <div class="modal fade" id="showSubjectModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Displaying Subject</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                
                                <div class="modal-body">

                                <div class="form-group">
                                    <label>Batch:</label><br>
                                    {{$subjects->batch->name}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Course:</label><br>
                                    {{$subjects->course->name}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Subject:</label><br>
                                    {{$subjects->name}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Total Subject:</label><br>
                                    {{$subjects->count()}}
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