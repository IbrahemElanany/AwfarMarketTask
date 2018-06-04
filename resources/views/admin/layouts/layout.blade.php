<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    {!! Html::style('admin/plugins/font-awesome/css/font-awesome.min.css') !!}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {!! Html::style('admin/dist/css/adminlte.min.css') !!}
        <!-- iCheck -->
    {!! Html::style('admin/plugins/iCheck/flat/blue.css') !!}
        <!-- Morris chart -->
    {!! Html::style('admin/plugins/morris/morris.css') !!}
        <!-- jvectormap -->
    {!! Html::style('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
        <!-- Date Picker -->
    {!! Html::style('admin/plugins/datepicker/datepicker3.css') !!}
        <!-- Daterange picker -->
    {!! Html::style('admin/plugins/daterangepicker/daterangepicker-bs3.css') !!}
        <!-- bootstrap wysihtml5 - text editor -->
    {!! Html::style('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @yield('header')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">

            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{url('/logout')}}" class="nav-link">Logout</a>
            </li>

        </ul>


    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{url('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 pull-right"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Control Users</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{url('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Ibrahim</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    @include('admin.layouts.nav')

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        @yield('content')
    </div>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
{!! Html::script('admin/plugins/jquery/jquery.min.js') !!}
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{!! Html::style('admin/plugins/datatables/dataTables.bootstrap4.css') !!}
{!! Html::script('admin/plugins/datatables/jquery.dataTables.js') !!}
{!! Html::script('admin/plugins/datatables/dataTables.bootstrap4.js') !!}
{!! Html::script('admin/plugins/datatables/dataTables.buttons.min.js') !!}
{!! Html::script('vendor/datatables/buttons.server-side.js') !!}




<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
{!! Html::script('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
{!! Html::script('admin/plugins/morris/morris.min.js') !!}
<!-- Sparkline -->
{!! Html::script('admin/plugins/sparkline/jquery.sparkline.min.js') !!}
<!-- jvectormap -->
{!! Html::script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
{!! Html::script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
<!-- jQuery Knob Chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
{!! Html::script('admin/plugins/daterangepicker/daterangepicker.js') !!}
<!-- datepicker -->
{!! Html::script('admin/plugins/datepicker/bootstrap-datepicker.js') !!}
<!-- Bootstrap WYSIHTML5 -->
{!! Html::script('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
<!-- Slimscroll -->
{!! Html::script('admin/plugins/slimScroll/jquery.slimscroll.min.js') !!}
<!-- FastClick -->
{!! Html::script('admin/plugins/fastclick/fastclick.js') !!}
<!-- AdminLTE App -->
{!! Html::script('admin/dist/js/adminlte.js') !!}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!! Html::script('admin/dist/js/pages/dashboard.js') !!}
<!-- AdminLTE for demo purposes -->
{!! Html::script('admin/dist/js/demo.js') !!}

@stack('css')
@stack('js')



</body>
</html>
