@extends('layouts.admin')
  @section('main')
{{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> --}}
{{-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}

<!-- Add attendance Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit attendance</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('admin/attendance') }}">View attendance</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit attendance</li>
                </ol>
            </div>

            <div class="row">
                <!--Add attendance DataTable with Hover Section-->
                <div class="col-lg-12 text-center">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <div class="form-group col-6 m-auto">
                      <h3>Edit attendance {{ '('.$att_date.')' }}</h3>
                  </div>
            </div>
              <div class="card mb-4">

                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>attendance</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse($attendances as $attendance)
                            <tr>
                            <td>{{ $attendance->user_id }}</td>
                            <td>{{ $attendance->user->name }}</td>
                            <td>{{ $attendance->attendance }}</td>
                            <td>
                              <form action="{{ url('admin/attendance/'.$attendance->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <select name="attendance" id="present" class="form-control" required>
                                        <option value="Present" @if($attendance->attendance='Present')seleted @endif>Present</option>
                                        <option value="Absent" @if($attendance->attendance='Absent')seleted @endif>Absent</option>
                                        <option value="Leave" @if($attendance->attendance='Leave')seleted @endif>Leave</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                               <button type="submit" class="btn btn-primary">Save</button>
                              </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h3>No attendance Found</h3>

                                </td>
                           </tr>
                        @endforelse

                    </tbody>
                </table>
                </div>
              </div>
        </div>
    </div>
  
<!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection

