<!DOCTYPE html>
<html>
  @include('templates.partials._head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('templates.partials._header')
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    
     
      @yield('content')   
 
  </div>
  <!-- /.content-wrapper -->
  @include('templates.partials._sidebar')  
  <footer class="main-footer">
    @include('templates.partials._footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    @include('templates.partials._rightside')
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

@include('templates.partials._script')
</body>
</html>
