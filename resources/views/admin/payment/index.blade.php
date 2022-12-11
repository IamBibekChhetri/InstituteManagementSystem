@extends('admin.layout.master')
@section('content')


<div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage Payment <a href="{{asset('payment/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Student  </th>
                          <th> Payed Amount </th>
                          <th> Payment Method </th>
                          <th> Transaction/Payment ID </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach( $payment as $payments)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$payments->student->name}}</td>
                          <td>{{$payments->payed}}</td>
                          <td>{{$payments->payment}}</td>
                          <td>{{$payments->transaction}}</td>
                          <td>{{$payments->status}}</td>
                          <td class="centre" style="display:flex;">
                          
                          @if($payments['status']=='on')                              
                              <a href="{{ url('payment/offStatus',$payments->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($payments['status']=='off') 
                                  <a href="{{ url('payment/onStatus',$payments->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                            &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewPayments{{$payments->id}}"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('payment.edit',$payments->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('payment.destroy',$payments->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        

                          <div class="modal fade" id="viewPayments{{$payments->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Displaying Payment</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                
                                <div class="modal-body">

                                <div class="form-group">
                                    <label>Student:</label><br>
                                    {{$payments->student->name}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Payment Amount:</label><br>
                                    {{$payments->payed}}
                                </div>
                                  
                                  <hr>

                                <div class="form-group">
                                    <label>Payment Method:</label><br>
                                    {{$payments->payment}}
                                </div>

                                  <hr>

                                <div class="form-group">
                                    <label>Transaction/Payment ID:</label><br>
                                    {{$payments->transaction}}
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