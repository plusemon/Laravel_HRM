@extends('layouts.admin')
  @section('main')
{{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> --}}
{{-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}

<!-- Add Attendance Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add Attendance</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Attendance</li>
                    <li class="breadcrumb-item active" aria-current="page">Add Attendance</li>
                </ol>
            </div>

            <div class="row">
                <!--Add Attendance DataTable with Hover Section-->
                <div class="col-lg-12 text-center">
                    <form action="{{ url('admin/attendance') }}" method="POST">
                        @csrf
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        {{-- <a href="#"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addAttendance"id="#addAttendanceBoard"><i class="fas fa-user-edit">Add Attendance</i></button></a> --}}


                    <div class="form-group col-6 m-auto">
                        <h3>Pick an Attendance date</h3>
                        <input type="date" name="att_date" id="att_date" class="form-control" required>
                    </div>
            </div>
              <div class="card mb-4">

                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Department</th>
                        <th>User Type</th>
                        <th>Present</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <input type="hidden" name="user_id[]" value="{{ $user->id }}">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->department }}</td>
                            <td>{{ $user->type }}</td>
                            <td>
                                <div class="form-group">
                                    <select name="attendance[{{ $user->id }}]" id="present" class="form-control" required>
                                        <option value="Present">Present</option>
                                        <option value="Absent">Absent</option>
                                        <option value="Leave">Leave</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
              </div>
            <button class="btn btn-primary" type="submit">Save Todays Attendance</button>
        </form>
    </div>
</div>
  <!--Add Attendance Modal Center -->
  <div class="modal fade" id="addAttendance" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">

             <div class="modal-header">
                  <h5 class="modal-title" id="addAttendanceBoard">Add Attendance</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
              </div>

                <div class="modal-body">
                    <label class="mb-3 font-weight-bold">Add Attendance Date</label>
                    <input class="form-control  mb-3" type="date" placeholder="Update Attendance Date">
                </div>

              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="#"><button type="button" class="btn btn-warning">Add</button></a>

          </div>

        </div>
      </div>
  </div>
<!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>

    $("#att_date").flatpickr({
        maxDate: "today"
    });
</script>

@endsection
