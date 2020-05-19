@extends('layouts.admin')
  @section('attandence')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- Update Attandence Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Attandence</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Attandence</li>
              <li class="breadcrumb-item active" aria-current="page">Update Attandence</li>
            </ol>
          </div>
    <div class="row">

            <!--Update Attandence DataTable with Hover Section-->
            <div class="col-lg-12">
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
                        <th>Action</th>
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
                        <td>
                        <a href="{{url('/attandence')}}"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateAttandence"
                    	id="#updateAttandenceBoard"><i class="fas fa-user-edit">Update Attandence</i></a>
                        
                    	</button>
                    	</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
  
<!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection

