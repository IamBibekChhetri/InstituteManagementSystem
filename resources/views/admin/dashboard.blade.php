@extends('admin.layout.master')
@section('content')


            <div class="section-block">
                  <!-- metric row -->
                <div class="metric-row">
                  <div class="col-lg-3">
                      <div class="panel panel-primary">
                      <!-- .metric -->
                      <a href="{{asset('course')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label"> Total Course </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fa fa-trophy fa-fw"></i></sub> <span class="value">
                            
                              {{$courses}}
                            
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                  </div>

                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('batch')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label">Total Batch </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fa fa-graduation-cap fa-fw"></i></sub> <span class="value">
                          
                            {{$batch}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('subject')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label">Total Subject </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fas fa-star"></i></sub> <span class="value">
                         
                            {{$subject}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('author')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label">Total Author </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fa fa-user fa-fw"></i></sub> <span class="value">
                          
                            {{$author}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('book')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label">Total Books </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fa fa-book fa-fw"></i> </span></sub> <span class="value">
                         
                            {{$book}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('fee')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label">Total Fees </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fas fa-dollar-sign"></i> </sub> <span class="value">
                         
                            {{$fee}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('payment')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label">Total Payment </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fas fa-dollar-sign"></i></sub> <span class="value">
                          
                            {{$payment}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('student')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label">Total Student </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fa fa-user fa-fw"></i></sub> <span class="value">
                        
                            {{$student}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('instructor')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label">Total Instructor </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fa fa-user fa-fw"></i></sub> <span class="value">
                          
                            {{$instructor}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                </div><!-- /metric row -->
            </div><!-- /.section-block -->


@endsection 

