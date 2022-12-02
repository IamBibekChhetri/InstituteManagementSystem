@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Base style</legend> <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf1">Email address</label> <input type="email" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="e.g. johndoe@looper.com"> <small id="tf1Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf2">Number input</label>
                          <div class="custom-number">
                            <input type="number" class="form-control" id="tf2" min="0" max="10" step="1" value="0" placeholder="Amount (to the nearest dollar)">
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf3">File input</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" multiple> <label class="custom-file-label" for="tf3">Choose file</label>
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf4">Clearable</label>
                          <div class="has-clearable">
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <input type="text" class="form-control" id="tf4" placeholder="Type something..." value="Moonlight">
                          </div>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label" for="selDefault">Default select</label> <select class="custom-select" id="selDefault">
                            <option> Default select </option>
                          </select>
                        </div><!-- /.form-group -->
                        
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="select2-single">Single select boxes</label> 
                          <select id="select2-single" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-data='[ {"id": 0, "text": "Visa"}, {"id": 1, "text": "Discover Card"}, {"id": 2, "text": "American Express"}, {"id": 3, "text": "MasterCard"}, {"id": 4, "text": "American Express"} ]'  data-allow-clear="true">
                          </select>
                        </div><!-- /.form-group -->

                        <div class="col-md-8 mb-3">
                          <label for="name">Vehicle Type
                              <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter Vehicle Type Name" required>
                          <div class="invalid-feedback">
                            Valid vehicle type is required.
                          </div>
                        </div>

                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf5">Spinner</label>
                          <div class="has-spinner">
                            <div class="spinner-border spinner-border-sm text-muted show" role="status">
                              <span class="sr-only">Loading...</span>
                            </div><input type="text" class="form-control" id="tf5" placeholder="Type something..." value="Moon">
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Default input</label> <input type="text" class="form-control" placeholder="Default input" id="tfDefault">
                        </div><!-- /.form-group -->
                        <div class="form-group">                            
                            <span>Status</span> <!-- .switcher-control -->
                            <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>                            
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf6">Textarea</label>
                          <textarea class="form-control" id="tf6" rows="3"></textarea>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf5"></label>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1"> <label class="custom-control-label" for="customSwitch1">Status</label>
                          </div>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                          <div class="form-label-group">
                            <label for="tf5">Email</label>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="">
                          </div>
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-flex justify-content-between" for="lbl5"><span>Password</span> <a href="#lbl5" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a></label> <input type="password" class="form-control" value="label_with_action" id="lbl5">
                        </div><!-- /.form-group -->

                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label" for="selDefault">Course</label> <select class="custom-select" id="selDefault" name="course_id">
                            <option> Coruse 1</option>
                            <option> Coruse 2</option>
                            <option> Coruse 3</option>
                            <option> Coruse 4</option>
                          </select>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                          <label>Payment method</label>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup2" id="rd4" checked> <label class="custom-control-label" for="rd4">Credit card</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup2" id="rd5"> <label class="custom-control-label" for="rd5">Debit card</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup2" id="rd6"> <label class="custom-control-label" for="rd6">Paypal</label>
                          </div>
                        </div><!-- /.form-group -->


                      </fieldset><!-- /.fieldset -->
                      <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                      </div>
                    </form><!-- /.form -->
                  </div><!-- /.card-body -->
                  <!-- .card-body -->
                </div>
</div>


@endsection 