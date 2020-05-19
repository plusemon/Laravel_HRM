@extends('layouts.employee')
@section('employee')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Task Table</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="employee">Dashboard</a></li>
            <li class="breadcrumb-item">Task Table</li>
        </ol>
    </div>
</div>

        <div class="row">
            <!--Attandence DataTable with Hover Section-->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <h5>Request Leave Details</h5>
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Start Leave Date</th>
                        <th>Leave Types</th>
                        <th>Number Of Leave</th>
                        <th>Created On</th>
                        <th>Leave Status</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>1</td>
                        <td>Customer Support</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>New York</td>
                        <td>New York</td>
                        <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateTask"
                      id="#updateTaskStatus"><i class="fas fa-user-edit">Update</i></button>
                          <button type="button" class="btn btn-success" data-toggle="modal"><i class="fas fa-user">View</i></button>       
                      </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
<!--Update Leave Type Modal Center -->
 <div class="modal fade" id="updateTask" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateTaskStatus">Update Task</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
          
              <div class="modal-body">
                    <div class="form-group">
                          <label>Task Status</label>
                            <select class="form-control" name="blood_group">
                                <option value="">Select</option>
                                <option>Pending</option>
                                <option>Completed</option>
                            </select>
                    </div>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Update</button>
            </div>
          </form>
  </div>
  </div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


@endsection