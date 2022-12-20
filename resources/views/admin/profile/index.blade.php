@extends('admin.layout.master')
@section('content')

<!-- .page-cover -->
<header class="page-cover">
              <div class="text-center">
                <a href="{{route('profile.edit',auth()->user()->id)}}" class="user-avatar user-avatar-xl"><img src="{{asset('public/image/user/'.auth()->user()->photo)}}" alt=""></a>
                <h2 class="h4 mt-2 mb-0"> {{auth()->user()->name}}</h2><hr>
                
                <p class="text-muted"> {{auth()->user()->user_role->role}}</p>
                <p class="text-muted">{{auth()->user()->address}}</p>
                <p class="text-muted">{{auth()->user()->phone}}</p>
                <p class="text-muted">{{auth()->user()->email}}</p>
              </div><!-- .cover-controls -->

            </header><!-- /.page-cover -->

@endsection 