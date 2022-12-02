@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height:90vh; min-height:400px;">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                    
                        <!-- .form-group -->
                        <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputUser" class="form-control" name="email" placeholder="Username" autofocus=""> <label for="inputUser">Username</label>
                        </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password"> <label for="inputPassword">Password</label>
                        </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <!-- <div class="col-md-3"> -->
                        <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
                       
                        </div><!-- /.form-group -->
                        </div><!-- /.col-md-group -->
                       
                       

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
