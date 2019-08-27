<!DOCTYPE html>
<html>
<head>
    @include('front_end.layout.header')
</head>

<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
	<header class="main-header">
	<!-- Logo -->
    <a href="/" class="logo bg-white">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <b>IS - OPERATION</b>
      <!-- logo for regular state and mobile devices -->
    </a>
    <!-- navbar -->
		@include('front_end.layout.navbar')
	</header>   
    <div class="content-body">    
        <!-- Sidebar -->
		@include ('front_end.layout.sidebar')
        @yield('content')        
     </div>
     
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
</div>
</body>
</html>