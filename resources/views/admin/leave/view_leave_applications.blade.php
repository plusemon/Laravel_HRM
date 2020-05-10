@extends('layouts.admin')
  @section('admin')
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
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="#"><button type="button" class="btn btn-success" data-toggle="modal">Add Leave Application</button></a> 
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Leave Type</th>
                        <th>Reason</th>
                        <th>Applied On</th>
                        <th>Number Of Leave</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Leave Types</th>
                        <th>Reason</th>
                        <th>Applied On</th>
                        <th>Number Of Leave</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>

                      <tr>
                        <td>1</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>1</td>
                        <td>1</td>
                        <td>Customer Support</td>
                        <td>Pending</td>
                        <td>Pending</td>
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateLeaveApplication"
                    	id="#updateLeaveApplicationBoard"><i class="fas fa-user-edit">Update</i></button>
                		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteLeaveApplication"
                    	id="#deleteLeaveApplicationBoard"><i class="fas fa-trash">Delete</i></button>
                    	</td>
                      </tr>
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

