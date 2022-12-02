@extends('admin.layout.master')
@section('content')

<a href="{{asset('author/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a> 
<div class="page-section">
              <div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header">Manage Author </div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Author Name </th>
                          <th> Status </th>
                          <th> Action </th>
                          
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach ($author as $authors)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$authors->name}}</td>
                          <td>{{$authors->status}}</td>
                          <td class="centre" style="display:flex;">
                          
                          @if($authors['status']=='on')                              
                              <a href="{{ url('author/offStatus',$authors->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($authors['status']=='off') 
                                  <a href="{{ url('author/onStatus',$authors->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>
                            @endif
                             &nbsp;
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#showAuthorModel" ><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('author.edit',$authors->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('author.destroy',$authors->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>

                        <div class="modal fade" id="showAuthorModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Displaying Author</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              
                              <div class="modal-body">

                              <div class="form-group">
                                  <label>Author Name:</label><br>
                                  {{$authors->name}}
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