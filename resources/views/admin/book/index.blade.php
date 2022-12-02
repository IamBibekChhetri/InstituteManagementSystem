@extends('admin.layout.master')
@section('content')


<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage Book <a href="{{asset('book/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Batc </th>
                          <th> Course </th>
                          <th> Subject </th>
                          <th> Author </th>
                          <th> Book </th>
                          <th> Published On </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach ($book as $books)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$books->batch->name}}</td>
                          <td>{{$books->course->name}}</td>
                          <td>{{$books->subject->name}}</td>
                          <td>{{$books->author->name}}</td>
                          <td>{{$books->name}}</td>
                          <td>{{$books->published}}</td>
                          <td>{{$books->status}}</td>
                          <td class="centre" style="display:flex;">

                          @if($books['status']=='on')                              
                              <a href="{{ url('book/offStatus',$books->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($books['status']=='off') 
                                  <a href="{{ url('book/onStatus',$books->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                             &nbsp;
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#showBookModel"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('book.edit',$books->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('book.destroy',$books->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        

                        <div class="modal fade" id="showBookModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Displaying Books</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              
                              <div class="modal-body">

                              <div class="form-group">
                                  <label>Batch:</label><br>
                                  {{$books->batch->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Course:</label><br>
                                  {{$books->course->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Subject:</label><br>
                                 {{$books->subject->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Author Name:</label><br>
                                  {{$books->author->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Books Name:</label><br>
                                  {{$books->name}}
                              </div>
                                
                                <hr>

                              <div class="form-group">
                                  <label>Published In:</label><br>
                                  {{$books->published}}
                              </div>
                                <hr>

                              <div class="form-group">
                                  <label>Total Books:</label><br>
                                  {{$books->count()}}
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