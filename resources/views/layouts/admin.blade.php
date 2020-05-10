<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <title>Admin Dashboard</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="HTML5,CSS3,JS,BOOTSTRAP 4.0">
        <meta name="author" content="Md Abdul Mannan Hridoy">

        <!-----Page Dashboard & Form Level Templetes CSS----->
        <link href="{{asset('/dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/dashboard/css/ruang-admin.min.css')}}" rel="stylesheet">
        <link href="{{asset('/dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
        <link href="{{asset('/dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

        <!-----PROFILE SHOW CSS----->
        <link href="{{asset('/css/profile/style.css')}}" rel="stylesheet">

    </head>
    <body id="page-top">

        @include('include.admin_sidebar')

        <main>
            @yield('admin')
        </main>

        <!-----Page Dashboard & Form Level Templetes----->
            <script src="{{asset('/dashboard/vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
            <script src="{{asset('/dashboard/js/ruang-admin.min.js')}}"></script>
            <script src="{{asset('/dashboard/vendor/chart.js/Chart.min.js')}}"></script>
            <script src="{{asset('/dashboard/js/demo/chart-area-demo.js')}}"></script>

        <!-- Search Box Work level plugins -->
            <!-- Page level plugins -->
            <script src="{{asset('/dashboard/vendor/datatables/jquery.dataTables.min.js')}}">
            </script>
            <script src="{{asset('/dashboard/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
            <!-----Page DataTables Custom(Search) Scripts----->
            <script>
            $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
            });
            </script>
        <!-- Search Box Work level plugins -->

        <!-- Department Modal Scripts -->
        <script>
                /*-----Department Modal Update Scripts-----*/
            $('#updateDepartment').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var dept_name = button.data('dept_name')
                var first_desgn = button.data('first_desgn')
                var second_desgn = button.data('second_desgn')
                var dept_id = button.data('dept_id')
                var modal = $(this)
                modal.find('.modal-title').text('Update Department Name')
                modal.find('.modal-body #dept_name').val(dept_name);
                modal.find('.modal-body #first_desgn').val(first_desgn);
                modal.find('.modal-body #second_desgn').val(second_desgn);
                modal.find('.modal-body #dept_id').val(dept_id);


            });
                /*-----Department Modal Delete Scripts-----*/
            $('#deleteDepartment').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var dept_id = button.data('dept_id')
                var modal = $(this)
                modal.find('.modal-title').text('Delete Department Name')
                modal.find('.modal-body #dept_id').val(dept_id);

            });
            </script>


            <!-- Country Modal Scripts -->
            <script>
                    /*-----Country Modal Update Scripts-----*/
            $('#updateCountry').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var country_id = button.data('country_id')
                var country_name = button.data('country_name')
                var created_at = button.data('created_at')
                var modal = $(this)
                modal.find('.modal-title').text('Update Country Name')
                modal.find('.modal-body #country_id').val(country_id);
                modal.find('.modal-body #country_name').val(country_name);
                modal.find('.modal-body #created_at').val(created_at);


            });
                /*-----Country Modal Delete Scripts-----*/
            $('#deleteCountry').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var country_id = button.data('country_id')
                var modal = $(this)
                modal.find('.modal-title').text('Delete Country Name')
                modal.find('.modal-body #country_id').val(country_id);

            });
        </script>

        <!-- Salary Modal Scripts -->
        <script>
                /*-----Salary Modal Update Scripts-----*/
            $('#updateSalary').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var salary_amount = button.data('salary_amount')
                var created_at = button.data('created_at')
                var salary_id = button.data('salary_id')
                var modal = $(this)
                modal.find('.modal-title').text('Update Salary Amount')
                modal.find('.modal-body #salary_amount').val(salary_amount);
                modal.find('.modal-body #created_at').val(created_at);
                modal.find('.modal-body #salary_id').val(salary_id);

            });
                /*-----Salary Modal Delete Scripts-----*/
            $('#deleteSalary').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var salary_id = button.data('salary_id')
                var modal = $(this)
                modal.find('.modal-title').text('Delete Salary Amount')
                modal.find('.modal-body #salary_id').val(salary_id);

            });
        </script>

        <!-- AwardCategories Modal Scripts -->
        <script>
                /*-----Update AwardCategories Modal Update Scripts-----*/
            $('#updateAwardCategories').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var award_category = button.data('award_category')
                var award_description = button.data('award_description')
                var award_category_id = button.data('award_category_id')
                var modal = $(this)
                modal.find('.modal-title').text('Update Department Name')
                modal.find('.modal-body #award_category').val(award_category);
                modal.find('.modal-body #award_description').val(award_description);
                modal.find('.modal-body #award_category_id').val(award_category_id);


            });
                /*-----Delete AwardCategories Modal Delete Scripts-----*/
            $('#deleteAwardCategories').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var award_category_id = button.data('award_category_id')
                var modal = $(this)
                modal.find('.modal-title').text('Delete Department Name')
                modal.find('.modal-body #award_category_id').val(award_category_id);

            });
        </script>

        <!-- Notice Board Modal Scripts -->
        <script>
                /*-----Update Notice Board Modal Update Scripts-----*/
            $('#updateNotice').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var notice_title = button.data('notice_title')
                var notice_description = button.data('notice_description')
                var notice_id = button.data('notice_id')
                var modal = $(this)
                modal.find('.modal-title').text('Update Notice')
                modal.find('.modal-body #notice_title').val(notice_title);
                modal.find('.modal-body #notice_description').val(notice_description);
                modal.find('.modal-body #notice_id').val(notice_id);


            });
                /*-----Delete Notice Board Modal Delete Scripts-----*/
            $('#deleteNotice').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var notice_id = button.data('notice_id')
                var modal = $(this)
                modal.find('.modal-title').text('Delete Notice')
                modal.find('.modal-body #notice_id').val(notice_id);

            });
        </script>


        <!-- SCRIPT SECTION BY EMON KHAN -->
            {{-->> INDIVISUAL --}}
                @yield('scripts')

            {{-->> TOASTR --}}
                @include('admin.partials.toastr')


    </body>
</html>
