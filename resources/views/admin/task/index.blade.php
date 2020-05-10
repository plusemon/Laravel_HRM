@extends('layouts.admin')
  @section('admin')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Task Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">Task</li>
            </ol>
          </div>
    <div class="row">

            <!--Task DataTable with Hover Section-->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="admin-task-add-task"><button type="button" class="btn btn-success" data-toggle="modal">Add Task</button></a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Subject</th>
                        <th>Duration</th>
                        <th>Status</th>
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
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateTask"
                    	id="#updateTaskBoard"><i class="fas fa-user-edit">Update</i></button>
                		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteTask"
                    	id="#deleteTaskBoard"><i class="fas fa-trash">Delete</i></button>
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
        <!---Container Fluid-->
      </div>

    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



          <!--Update Task Modal Center -->
          <form>
          	<div class="modal fade" id="updateTask" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateTaskBoard">Update Leave</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
          <div class="modal-body">
              <label class="mb-3 font-weight-bold">User ID</label>
              <input class="form-control  mb-3" type="text" placeholder="User ID">

              <label class="mb-3 font-weight-bold">Subject</label>
              <input class="form-control  mb-3" type="text" placeholder="Subject">

              <label class="mb-3 font-weight-bold">Duration</label>       
              <select class="form-control mb-3 font-weight-bold">
                      <option>1 Week</option>
                      <option>1 Month</option>
                      <option>3 Month</option>
                      <option>6 Month</option>
                      <option>1 Year</option>
                    </select>
              <label class="mb-3 font-weight-bold">Description</label>
              <textarea  rows="8" textarea class="form-control mb-3"></textarea>
              
              <label class="mb-3 font-weight-bold">Status</label>
              <select class="form-control mb-3 font-weight-bold" placeholder="Status">
                      <option>Pending</option>
                      <option>Cancelled</option>
                      <option>Completed</option>
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

