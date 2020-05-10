<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="HTML5,CSS3,JS,BOOTSTRAP 4.0">
  <meta name="author" content="Md Abdul Mannan Hridoy">
  <link href="{{asset('/dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('/dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('/dashboard/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{asset('/dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/profile/style.css')}}" rel="stylesheet">
  <link href="{{asset('/css/myedit/style.css')}}" rel="stylesheet">
 

</head>
<body id="page-top">

    @include('include.employee_sidebar')
    <main>
      @yield('employee') 
    </main>
    <!-- Page Dashboard plugins -->
    <script src="{{asset('/dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/dashboard/js/ruang-admin.min.js')}}"></script>
    <script src="{{asset('/dashboard/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/dashboard/js/demo/chart-area-demo.js')}}"></script>
    <!-- Page DataTables level plugins -->
    <script src="{{asset('/dashboard/vendor/datatables/jquery.dataTables.min.js')}}">
    </script>
    <script src="{{asset('/dashboard/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>


    <!-- Page DataTables custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

<!-- Calender custom scripts -->


</body>
</html>