<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="/adminTemplateResources/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/adminTemplateResources/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/adminTemplateResources/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/adminTemplateResources/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="/adminTemplateResources/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/adminTemplateResources/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/adminTemplateResources/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

              @include('admin.layouts.profil')

              @include('admin.layouts.sidebar')

              @include('admin.layouts.footer-menu')
          </div>
        </div>

        @include('admin.layouts.nav')

        @yield('content')

        @include('admin.layouts.footer')
      </div>
    </div>

    <!-- jQuery -->
    <script src="/adminTemplateResources/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/adminTemplateResources/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/adminTemplateResources/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/adminTemplateResources/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/adminTemplateResources/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/adminTemplateResources/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/adminTemplateResources/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/adminTemplateResources/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/adminTemplateResources/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/adminTemplateResources/Flot/jquery.flot.js"></script>
    <script src="/adminTemplateResources/Flot/jquery.flot.pie.js"></script>
    <script src="/adminTemplateResources/Flot/jquery.flot.time.js"></script>
    <script src="/adminTemplateResources/Flot/jquery.flot.stack.js"></script>
    <script src="/adminTemplateResources/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/adminTemplateResources/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/adminTemplateResources/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/adminTemplateResources/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/adminTemplateResources/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/adminTemplateResources/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/adminTemplateResources/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/adminTemplateResources/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/adminTemplateResources/moment/min/moment.min.js"></script>
    <script src="/adminTemplateResources/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/js/custom.min.js"></script>

    @stack('bootstrap-wysiwyg')

  </body>
</html>
