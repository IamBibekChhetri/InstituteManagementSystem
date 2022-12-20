@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('payment.update',$payment->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <div class="row page-section">
                      <div class="col-md-8 mb-3">
                        <legend>Payment Adding Form</legend> <!-- .form-group -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                      </div>
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-student">Student Name:</label> 
                          <select id="select2-student" class="form-control" name="student_id" data-toggle="select2" data-placeholder="Select a Students" data-allow-clear="true">
                            @foreach ($student as $students)
                              <option value="{{$students->id}}">{{$students->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                           <!-- .form-group -->
                           <div class="col-md-6 mb-3">
                          <label for="tf2">Payed Amount</label>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2" name="payed">
                          </div>
                        </div><!-- /.form-group -->
                        
                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="selDefault">Payment Method:</label> <select class="custom-select" id="selDefault" name="payment">
                            <option> Esewa</option>
                            <option>Khalti</option>
                            <option> Phone Pay</option>
                            <option>IME Pay</option>
                            <option>Prabhu Pay</option>
                            <option>QPay Nepal</option>
                          </select>
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Transaction / Payment ID:</label> 
                          <input type="text" class="form-control" id="tfDefault" name="transaction">
                        </div><!-- /.form-group -->  
                        
                        
                      </div><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{url('payment')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                  
                </div>
</div>


@endsection 