<!-----Page Dashboard & Form Level Templetes----->
<script src="{{asset('/dashboard/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
{{--  <script src="{{asset('/dashboard/js/ruang-admin.min.js')}}"></script>  --}}
{{--  <script src="{{asset('/dashboard/vendor/chart.js/Chart.min.js')}}"></script>  --}}
{{--  <script src="{{asset('/dashboard/js/demo/chart-area-demo.js')}}"></script>  --}}

<!-----Sweet Alert Javascripts----->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>
<script src="{{asset('/sweetalert/sweetalert.all.js')}}"></script>
<script src="{{asset('/js/sweetalert.min.js')}}"></script>
<script src="{{asset('/sweetalert/toastr.min.js')}}"></script>

<!-- Search Box Work level plugins -->

<!-- Page level plugins -->
<script src="{{asset('/dashboard/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/dashboard/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-----Page DataTables Custom(Search) Scripts----->
<script>
    $(document).ready(function () {
    $('#dataTable').DataTable(); // ID From dataTable
    $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
</script>

@include('admin.partials.toastr')
