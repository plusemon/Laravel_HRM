<!DOCTYPE html>
<html>
<head>
  <title>Manager Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="HTML5,CSS3,JS,BOOTSTRAP 4.0">
  <meta name="author" content="Md Abdul Mannan Hridoy">
  <link href="{{asset('/dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('/dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('/dashboard/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>
<body id="page-top">

  <main>
      @yield('manager') 
  </main>
  
	<script src="{{asset('/dashboard/vendor/jquery/jquery.min.js')}}"></script>
  	<script src="{{asset('/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  	<script src="{{asset('/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  	<script src="{{asset('/dashboard/js/ruang-admin.min.js')}}"></script>
  	<script src="{{asset('/dashboard/vendor/chart.js/Chart.min.js')}}"></script>
  	<script src="{{asset('/dashboard/js/demo/chart-area-demo.js')}}"></script>
</body>
</html>