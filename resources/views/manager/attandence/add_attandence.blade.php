@extends('layouts.admin')
  @section('attandence')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

  <!-- Add Attandence Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Attandence</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">View Attandence</li>
              <li class="breadcrumb-item active" aria-current="page">Add Attandence</li>
            </ol>
          </div>

    <div class="row">
            <!--Add Attandence DataTable with Hover Section-->
            <div class="col-lg-12">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            	    <a href="#"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addAttandence"id="#addAttandenceBoard"><i class="fas fa-user-edit">Add Attandence</i></button></a>

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
                        <th>Absent</th>
                        <th>Leave</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>1</td>
                        <td>Customer Support</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td><input type="checkbox" data-on="Yes" data-off="No" checked data-toggle="toggle" data-onstyle="success"></td>
                        <td><input type="checkbox" data-on="Yes" data-off="No" checked data-toggle="toggle" data-onstyle="warning"></td>
                        <td><input type="checkbox" data-on="Yes" data-off="No" checked data-toggle="toggle" data-onstyle="danger"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
  <!--Add Attandence Modal Center -->
  <div class="modal fade" id="addAttandence" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">

             <div class="modal-header">
                  <h5 class="modal-title" id="addAttandenceBoard">Add Attandence</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
              </div>

                <div class="modal-body">
                    <label class="mb-3 font-weight-bold">Add Attandence Date</label>
                    <input class="form-control  mb-3" type="date" placeholder="Update Attandence Date">
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

