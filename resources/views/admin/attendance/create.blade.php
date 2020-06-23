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
                        @forelse ($users as $user)
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
                                    </select>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="5">
                                    <h4>No Active User Found!</h4>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
              </div>
              @empty(!$users)
                <button type="submit" class="btn btn-primary">Take Todays Attendance</button>
              @endempty
        </form>
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
