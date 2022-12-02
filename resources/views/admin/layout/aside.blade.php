<aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">
      <!-- .aside-header -->
      <header class="aside-header d-block d-md-none">
        <!-- .btn-account -->
        <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="{{asset('public/assets/images/avatars/profile.jpg')}}" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
        <!-- .dropdown-aside -->
        <div id="dropdown-aside" class="dropdown-aside collapse">
          <!-- dropdown-items -->
          <div class="pb-3">
            <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
          </div><!-- /dropdown-items -->
        </div><!-- /.dropdown-aside -->
      </header><!-- /.aside-header -->
      <!-- .aside-menu -->
      <div class="aside-menu overflow-hidden">
        <!-- .stacked-menu -->
        <nav id="stacked-menu" class="stacked-menu">
          <!-- .menu -->
          <ul class="menu">
            <!-- ------------------------- Dashboard --------------------------------  -->
            <li class="menu-item">
              <a href="{{url('dashboard')}}" class="menu-link"><span class="menu-icon fas fa-home text-success"></span> <span class="menu-text">Dashboard</span></a>
            </li>
            
<!-- ------------------------------------ Comapany Info --------------------------------------------------         -->
            
            <li class="menu-item">
              <a href="{{url('companyInfo')}}" class="menu-link"><i class="fas fa-building text-info"></i>  <span class="menu-text">Company Information</span></a> <!-- child menu -->
              
            </li>
            
            
<!-- ------------------------------------ Enrollment --------------------------------------------------         -->
           
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fas fa-globe text-primary" ></i>  <span class="menu-text">Enrollment</span></a> <!-- child menu -->
              <ul class="menu">
                <li class="menu-item">
                  <a href="{{asset('enrollment/create')}}" class="menu-link">Add Enrollment</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('enrollment')}}" class="menu-link">View Enrollment</a>
                </li>                
              </ul>
            </li>

            
<!-- ------------------------------------ Course --------------------------------------------------         -->
            
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fa fa-trophy fa-fw text-warning" ></i>  <span class="menu-text">Course</span></a> <!-- child menu -->
              <ul class="menu">
                <li class="menu-item">
                  <a href="{{asset('course/create')}}" class="menu-link">Add Course</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('course')}}" class="menu-link">View Course</a>
                </li>                
              </ul>
            </li>

<!-- --------------------------------------- Batch ----------------------------------------------  -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fa fa-graduation-cap fa-fw "></i> <span class="menu-text">Batch</span></a> <!-- child menu -->
              <ul class="menu">
                <li class="menu-item">
                  <a href="{{asset('batch/create')}}" class="menu-link">Add Batch</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('batch')}}" class="menu-link">View Batch</a>
                </li>                
              </ul>
            </li>


<!-- ------------------------------------ Subject --------------------------------------------------         -->
            
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fas fa-star text-success"></i> <span class="menu-text">Subject</span></a> <!-- child menu -->
              <ul class="menu">
                <li class="menu-item">
                  <a href="{{asset('subject/create')}}" class="menu-link">Add Subject</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('subject')}}" class="menu-link">View Subject</a>
                </li>                
              </ul>
            </li>
          
<!-- ------------------------------------------- Author  -------------------------------------------  -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fa fa-user fa-fw text-info"></i><span class="menu-text">Author</span></a> <!-- child menu -->
              <ul class="menu">
                
                <li class="menu-item">
                  <a href="{{asset('author/create')}}" class="menu-link">Add Author</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('author')}}" class="menu-link">View Author</a>
                </li>
                
              </ul>
            </li>

<!-- ------------------------------------------- Books  -------------------------------------------  -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fa fa-book fa-fw text-primary"></i> <span class="menu-text">Books</span></a> <!-- child menu -->
              <ul class="menu">
                
                <li class="menu-item">
                  <a href="{{asset('book/create')}}" class="menu-link">Add Books</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('book')}}" class="menu-link">View Books</a>
                </li>
                
 
              </ul>
            </li>
<!-- --------------------------------- Instructor or Teachers of Institute ------------------------  -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fa fa-user fa-fw text-warning"></i></span> <span class="menu-text">Instructor</span></a> <!-- child menu -->
              <ul class="menu">
                <li class="menu-item">
                  <a href="{{asset('instructor/create')}}" class="menu-link">Add Instructor</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('instructor')}}" class="menu-link">View Instructor</a>
                </li>
                
              </ul>
            </li>

   <!-- ------------------------------------------ Students -----------------------------------  -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fa fa-user fa-fw text-success"></i></span> <span class="menu-text">Students</span></a> <!-- child menu -->
              <ul class="menu">
                <li class="menu-item">
                  <a href="{{asset('student/create')}}" class="menu-link">Add Students</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('student')}}" class="menu-link">View Students</a>
                </li>
                
              </ul>
            </li>         
<!-- ----------------------------------------------- Fees ---------------------------------------------  -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fas fa-dollar-sign text-primary"></i> <span class="menu-text">Fees</span></a> <!-- child menu -->
              <ul class="menu">
                <li class="menu-item">
                  <a href="{{asset('fee/create')}}" class="menu-link">Add Fees</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('fee')}}" class="menu-link">View Fees</a>
                </li>
                
              </ul>
            </li>

<!-- ------------------------------------------- Payments  -------------------------------------------  -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"> <i class="fas fa-dollar-sign text-warning"></i> <span class="menu-text">Payments</span></a> <!-- child menu -->
              <ul class="menu">
                
                <li class="menu-item">
                  <a href="{{asset('payment/create')}}" class="menu-link">Add Payments</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('payment')}}" class="menu-link">View Payments</a>
                </li>
                
              </ul>
            </li>


<!-- ------------------------------------------- Noticeboard -------------------------------------------  -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fas fa-check text-info"></i> <span class="menu-text">Noticeboard</span></a> <!-- child menu -->
              <ul class="menu">
                
                <li class="menu-item">
                  <a href="{{asset('noticeboard/create')}}" class="menu-link">Add Noticeboard</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('noticeboard')}}" class="menu-link">View Noticeboard</a>
                </li>
                
              </ul>
            </li>
            
<!-- ------------------------------------------- User ROle -------------------------------------------  -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><i class="fa fa-trophy fa-fw text-info"></i> <span class="menu-text">User Role</span></a> <!-- child menu -->
              <ul class="menu">
                
                <li class="menu-item">
                  <a href="{{asset('user_role/create')}}" class="menu-link">Add User Role</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('user_role')}}" class="menu-link">View User Role</a>
                </li>
                
              </ul>
            </li>
            <!-- ----------------------------------- User  --------------------------------------------  -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><span class="menu-icon oi oi-person text-success"></span> <span class="menu-text">User</span></a> <!-- child menu -->
              <ul class="menu">
              <li class="menu-item">
                  <a href="{{asset('user/create')}}" class="menu-link">Add User</a>
                </li>
                <li class="menu-item">
                  <a href="{{asset('user')}}" class="menu-link">View User</a>
                </li>
              </ul>
            </li>
         

            
            </ul><!-- /.menu -->
            <!-- .menu-item -->
        </nav><!-- /.stacked-menu -->
      </div><!-- /.aside-menu -->      
      <!-- Skin changer -->
      <footer class="aside-footer border-top p-2">
        <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
      </footer><!-- /Skin changer -->
    </div><!-- /.aside-content -->
  </aside><!-- /.app-aside -->
  <!-- .app-main -->