<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{ config('app.name') }} | @yield('subtitle', 'Dashboard')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="shortcut icon" href="{{{ asset('favicon.png') }}}">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('assets/bower_components/Ionicons/css/ionicons.min.css') }}">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/all.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs4/datatables.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs4/Buttons-1.5.4/css/buttons
.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs4/Scroller-1.5.0/css/scroller.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs4/ColReorder-1.5.0/css/colReorder.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs4/RowGroup-1.1.0/css/rowGroup.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs4/RowReorder-1.2.4/css/rowReorder.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs4/Select-1.2.6/css/select.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs4/FixedColumns-3.2.5/css/fixedColumns.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs4/FixedHeader-3.1.4/css/fixedHeader.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs4/Responsive-2.2.2/css/responsive.bootstrap4.min.css')}}">


<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.min.css') }}">


@yield('extra-css')
<!-- DataTables -->
{{--<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">--}}


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
