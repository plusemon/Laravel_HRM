@extends('layouts.manager')
  @section('manager')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Attandence</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="manager">Dashboard</a></li>
              <li class="breadcrumb-item">View Attandence</li>
            </ol>
          </div>
    <div class="row">

            <!--Attandence DataTable with Hover Section-->
            <div class="col-lg-12">
              <div class="card mb-4">
                <a href="manager-add_attandence"><button type="button" class="btn btn-warning" data-toggle="modal">Add User Attandence</button></a>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Department</th>
                        <th>Total Present</th>
                        <th>Total Absent</th>
                        <th>Total Leave</th>
                        <th>Action</th>
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
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateAttandence"
                    	id="#updateAttandenceBoard"><i class="fas fa-user-edit">Update Attandence</i></button>
                    	</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!--Update Attandence Modal Center -->
	<div class="modal fade" id="updateAttandence" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-scrollable" role="document">
      		<div class="modal-content">

         		 <div class="modal-header">
              		<h5 class="modal-title" id="updateAttandenceBoard">Update Attandence</h5>
                  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    		<span aria-hidden="true">&times;</span>
                  		</button>
            	</div>

          			<div class="modal-body">
              			<label class="mb-3 font-weight-bold">Enter Update Attandence Date</label>
              			<input class="form-control  mb-3" type="date" placeholder="Update Attandence Date">
          			</div>

      				<div class="modal-footer">
          				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          				<a href="{{url('attandence-update')}}"><button type="button" class="btn btn-warning">Update</button></a>

    			</div>

  			</div>
  		</div>
	</div>
<!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection

