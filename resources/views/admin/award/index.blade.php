@extends('layouts.admin')
  @section('admin')
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
                  <a href="{{url('/award_categories')}}"><button type="button" class="btn btn-success" data-toggle="modal">Award Categories</button></a>
                  <a href="admin-award-add-awards"><button type="button" class="btn btn-success" data-toggle="modal">Give an Award</button></a>
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
                    	id="#deleteAwardBoard"><i class="fas fa-trash">Delete</i></button>
                      <a href="admin-award-view-awards-profile"><button type="button" class="btn btn-success"><li class="far fa-eye">View</li></button></a>
                    	</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!--Update Award Modal Center -->
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
                      <select class="form-control font-weight-bold">
                        <option>Select Award Categories</option>
                        <option>The Employee of the Month</option>
                        <option>Best Attendance Award</option>
                        <option>BEHAVIOUR AND VALUE AWARDS</option>
                        <option>Best Customer Centricity</option>
                        <option>Most Improved Performer</option>
                        <option>Best Team Player</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>User Name</label>
                      <select class="form-control font-weight-bold">
                        <option>Select User Name</option>
                      </select>
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
                      <label>Month</label>
                      <select class="form-control font-weight-bold">
                        <option>Select Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Year</label>
                      <input type="number" name="award_year" class="form-control font-weight-bold" required>
                    </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-warning">Update</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Delete Award Modal Center -->
      <div class="modal fade" id="deleteAward" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteAwardBoard">Delete Give an Award</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <form action="" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">
                      Are You Sure,You Want To Delete This Give an Award?
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-danger">Yes</button>
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

