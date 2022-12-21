@extends('admin.layout.master')
@section('content')

<!-- .page-cover -->
<header class="page-cover">
              <div class="text-center">
                @foreach( $company as $companys)
                <div class="user-avatar user-avatar-xl"><img src="{{asset('public/image/company/'.$companys->photo)}}" alt="" height="100px"></div><br>
                <p class="text-muted"><sub> Representative: {{$companys->rname}}</sub></p>
                <h2 class="h4 mt-2 mb-0"> {{$companys->cname}}</h2><hr>
                <p class="text-muted">Pan No: {{$companys->pan}}</p>
                <p class="text-muted">Address: {{$companys->address}}</p>
                <p class="text-muted">Contact In: {{$companys->phone}}</p>
                <p class="text-muted">Email Us: {{$companys->email}}</p>
                <div class="text-center"><a href="{{ route('companyInfo.edit', $companys->id) }}"><button class="btn btn-primary " >Edit</button></a> </div>
                @endforeach
              </div><!-- .cover-controls -->
</header><!-- /.page-cover -->
            <!-- Followers Modal -->
           
@endsection 