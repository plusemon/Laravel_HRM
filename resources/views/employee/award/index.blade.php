@extends('layouts.employee')
  @section('employee')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Award Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">Award</li>
            </ol>
          </div>
    <div class="row">
            <!--Award DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="admin-award-add-awards"><button type="button" class="btn btn-success" data-toggle="modal">Add Award</button></a> 
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Employee ID</th>
                        <th>Awardee Name</th>
                        <th>Award</th>
                        <th>Gift</th>
                        <th>For The Month</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Employee ID</th>
                        <th>Awardee Name</th>
                        <th>Award</th>
                        <th>Gift</th>
                        <th>For The Month</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>

                      <tr>
                        <td>1</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>1</td>
                        <td>Customer Support</td>
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateAward"
                    	id="#updateAwardBoard"><i class="fas fa-user-edit">Update</i></button>
                		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteAward"
                    	id="#deleteNoticeBoard"><i class="fas fa-trash">Delete</i></button>
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

          <!--Update Award Modal Center -->
          <form>
          	<div class="modal fade" id="updateAward" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateNoticeBoard">Update Award</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
          <div class="modal-body">
            <div class="form-group">
                      <label>Award Name</label>
                      <input class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Gift Item</label>
                      <input class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Cash Price</label>
                      <input class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Employee Name</label>
                      <select class="form-control">
                        <option>Default select</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Month</label>
                      <select class="form-control">
                        <option>Default select</option>
                        <option>Default select</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Year</label>
                      <select class="form-control">
                        <option>Default select</option>
                        <option>Default select</option>
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

