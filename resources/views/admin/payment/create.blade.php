@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('payment.store')}}" method="POST">
                    @csrf
                      <!-- .fieldset -->
                      <div class="row">
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
                          <abbr title="Required">*</abbr>
                          <select id="select2-student" class="form-control" name="student_id" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                            @foreach ($student as $students)
                              <option value="{{$students->id}}">{{$students->name}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                           <!-- .form-group -->
                           <div class="col-md-6 mb-3">
                          <label for="tf2">Payed Amount</label>
                          <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control" placeholder="Enter Payed Amount" id="tf2" name="payed">
                          </div>
                        </div><!-- /.form-group -->
                        
                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="selDefault">Payment Method:</label>
                          <abbr title="Required">*</abbr>
                           <select class="custom-select" id="selDefault" placeholder="Enter Payment Method" name="payment">
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
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" name="transaction" placeholder="Enter Transaction ID">
                        </div><!-- /.form-group -->  

                        
                        <div class="col-md-12 mb-3">                            
                            <span>Is Active:</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
                        </div><!-- /.form-group -->
                      </div><!-- /.fieldset -->
                      <div class="form-actions">
                      <div class="card-body"><a href="{{asset('payment')}}"><button class="btn btn-success "  style="float:right;">back</button></a> 
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                      </div>
                    </form><!-- /.form -->
                 
                </div>
</div>


@endsection 