@extends('layouts.employee')
@section('employee')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Request Leave</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="employee">Dashboard</a></li>
            <li class="breadcrumb-item">Request Leave</li>
        </ol>
    </div>
</div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Add Payment Details Section -->
            <div class="card mb-4 ml-3">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Request Leave</h6>
                </div>
                <div class="card-body">

                        <div class="form-group">
                            <label>Leave Types</label>
                              <select class="form-control">
                                <option>Select Month</option>
                              </select>
                        </div>

                        <div class="form-group">
                            <label>Leave Start Date</label>
                            <div class="fas fa-calendar"></div>
                            <input type="Date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Leave End Date </label>
                            <div class="fas fa-calendar"></div>
                            <input type="Date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Number Of Leave </label>
                            <input type="Number" class="form-control">
                        </div>


                        <div class="form-group">
                          <button type="button" class="btn btn-success" data-toggle="modal">Send Request</button>
                        </div>
                    </div>
                </div>
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
                          <label>Pending</label>
                          <label>Accepted</label>
                          <label>Rejected</label>       
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