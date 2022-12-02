<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Institute Management System </title>
    <meta property="og:title" content="Starter Template">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="https://uselooper.com">
    <meta property="og:url" content="https://uselooper.com">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('public/assets/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('public/assets/favicon.png')}}">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    
    <link rel="stylesheet" href="{{asset('public/assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"><!-- END PLUGINS STYLES -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}"><!-- END PLUGINS STYLES -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/flatpickr/flatpickr.min.css')}}">
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{asset('public/assets/stylesheets/theme.min.css')}}" data-skin="default">
    <link rel="stylesheet" href="{{asset('public/assets/stylesheets/theme-dark.min.css')}}" data-skin="dark">
    <link rel="stylesheet" href="{{asset('public/assets/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/stylesheets/custom.css')}}">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add loading class to html immediately
      document.querySelector('html').classList.add('loading');
    </script><!-- END THEME STYLES -->
  </head>

  <body>
  @include('admin/layout/header')
  @include('admin/layout/aside')
  <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
            @yield('content')           
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- /.wrapper -->
        @include('admin/layout/footer')
      </main><!-- /.app-main -->
      @include('admin/layout/script')
  </body>

</html>