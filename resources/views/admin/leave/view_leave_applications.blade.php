@extends('layouts.admin')
  @section('main')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Leave Application Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item">Leave Manage</li>
              <li class="breadcrumb-item active" aria-current="page">View Leave Application</li>
            </ol>
          </div>
    <div class="row">
            <!--Leave Application DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <h5>Request Leave Details</h5>
                    <thead class="thead-light">
                        <tr>
                            <th>User</th>
                            <th>Types</th>
                            <th>Dates</th>
                            <th>Duration</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leaves as $leave)
                            <tr>
                                <td>{{ $leave->user_id }}</td>
                                <td>{{ $leave->types }}</td>
                                <td>{{ $leave->dates }}</td>
                                <td>{{ $leave->duration }}</td>
                                <td>{{ $leave->created_at }}</td>
                                <td>{{ $leave->status }}</td>
                                <td>@if($leave->status == 'Pending')
                                    <a href="{{ url('admin/leave/'.$leave->id.'/edit?status=active') }}" class="btn btn-sm btn-primary">Accept</a>
                                    <a href="{{ url('admin/leave/'.$leave->id.'/edit?status=reject') }}" class="btn btn-sm btn-danger">Reject</a>
                                    @elseif($leave->status == 'Rejected')
                                    <a href="{{ url('admin/leave/'.$leave->id.'/edit?status=pending') }}" class="btn btn-sm btn-primary">Undo</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

          <!--Update Leave Application Modal Center -->
          <form>
          	<div class="modal fade" id="updateLeaveApplication" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateLeaveApplicationBoard">Update Leave Application</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
          <div class="modal-body">
            <div class="form-group">
                      <label>Employee ID</label>
                      <input class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Name</label>
                      <input class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Date</label>
                      <input type="Date" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Reason</label>
                      <textarea rows="8" class="form-control">
                        </textarea>
                    </div>

                    <div class="form-group">
                      <label>Applied On</label>
                      <input type="Date" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Number Of Leave</label>
                      <input class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control">
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>Rejected</option>
                      </select>
                    </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-warning">Update</button>
    </div>
  </div>
  </div>
</div>
      </form>

@endsection

