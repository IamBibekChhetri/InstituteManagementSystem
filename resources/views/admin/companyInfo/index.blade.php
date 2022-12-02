@extends('admin.layout.master')
@section('content')

<!-- .page-cover -->
<header class="page-cover">
              <div class="text-center">
                @foreach( $company as $companys)
               <img src="{{asset('public/image/'.$companys->photo)}}" alt=""><br>
                <p class="text-muted"><sub> Representative: {{$companys->rname}}</sub></p>
                <h2 class="h4 mt-2 mb-0"> {{$companys->cname}}</h2><hr>
                <p class="text-muted">Pan No: {{$companys->pan}}</p>
                <p class="text-muted">Address: {{$companys->address}}</p>
                <p class="text-muted">Contact In: {{$companys->phone}}</p>
                <p class="text-muted">Email Us: {{$companys->email}}</p>
                <a href="{{ route('companyInfo.edit', $companys->id) }}"><button class="btn btn-primary btn-lg" style="float:left;" >Edit</button></a>  
                @endforeach
              </div><!-- .cover-controls -->
</header><!-- /.page-cover -->
            <!-- Followers Modal -->
           
@endsection 