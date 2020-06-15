@extends('layouts.admin')
@section('main')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add User</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
            <li class="breadcrumb-item">Salary</li>
            <li class="breadcrumb-item active" aria-current="page">Payment Salary</li>
        </ol>
    </div>
</div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Add Payment Details Section -->
            <div class="card mb-4 ml-3">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Payment Salary</h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/payment') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>User ID</label>
                            <div class="fas fa-user"></div>
                            <select class="form-control" name="user_id" id="user_id">
                                @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Month</label>
                            <select class="form-control" name="month">
                                <option>Select Month</option>
                        		<option value="january">January</option>
                        		<option value="february">February</option>
                        		<option value="march">March</option>
                        		<option value="april">April</option>
                        		<option value="may">May</option>
                        		<option value="june">June</option>
                        		<option value="july">July</option>
                        		<option value="august">August</option>
                        		<option value="september">September</option>
                        		<option value="october">October</option>
                        		<option value="november">November</option>
                        		<option value="december">December</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option value="paid">Paid</option>
                                <option value="pending">Pending</option>
                                <option value="reject">Reject</option>
                            </select>
                        </div>



                        <div class="form-group">
                        	<button type="submit" class="btn btn-success">Payment</button>
                        </div>
                    </form>

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
                  	<h5>Payment Details</h5>
                    <thead class="thead-light">
                      <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Department</th>
                        <th>Month</th>
                        <th>Salery</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse($payments as $payment)
                        <tr>
                            <td>{{ $payment->user->id }}</td>
                            <td>{{ $payment->user->name }}</td>
                            <td>{{ $payment->user->department }}</td>
                            <td>{{ $payment->month }}</td>
                            <td>{{ $payment->salary }}</td>
                            <td>{{ $payment->status }}</td>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal">Update</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal">Delete</button>
                            </td>
                          </tr>
                        @empty
                          <tr>
                              <td colspan="6" class="text-center">
                                <h3>No payment found..</h3>
                              </td>
                          </tr>
                        @endforelse
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
