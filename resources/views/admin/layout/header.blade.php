<header class="app-header app-header-dark">
  <!-- .top-bar -->
  <div class="top-bar">
    <!-- .top-bar-brand -->
    <div class="top-bar-brand">
      <!-- toggle aside menu -->
      <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
      <a href="{{asset('dashboard')}}"><span> &#127475;&#127477; Creative Tech</span></a>
    </div><!-- /.top-bar-brand -->
    <!-- .top-bar-list -->
    <div class="top-bar-list">
      <!-- .top-bar-item -->
      <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
        <!-- toggle menu -->
        <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
      </div><!-- /.top-bar-item -->
      <!-- .top-bar-item -->
      
      <!-- .top-bar-item -->
      <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
        
        <!-- .btn-account -->
        <div class="dropdown d-none d-md-flex">
          <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md">
            @if(auth()->user()->photo !== "")
                  @if (file_exists('public/image/user/'.auth()->user()->photo))
                  <img src="{{asset('public/image/user/'.auth()->user()->photo)}}" alt=""> 
                  @else
                  <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" alt="">
                  @endif
                  @else
                  <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" alt="">
                  @endif</span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"> {{auth()->user()->name}}</span> <span class="account-description">{{auth()->user()->user_role->role}}</span></span></button> <!-- .dropdown-menu -->
          <div class="dropdown-menu">
            <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
            <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
            <h6 class="dropdown-header d-none d-md-block d-lg-none"> {{auth()->user()->name}} </h6><a class="dropdown-item" href="{{asset('profile')}}"><span class="dropdown-icon oi oi-person"></span> Profile</a> 
            <a class="dropdown-item" href="#"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              <span class="dropdown-icon oi oi-account-logout"></span> Log Out
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </a>
          
          </div><!-- /.dropdown-menu -->
        </div><!-- /.btn-account -->
      </div><!-- /.top-bar-item -->
    </div><!-- /.top-bar-list -->
  </div><!-- /.top-bar -->
</header><!-- /.app-header -->
